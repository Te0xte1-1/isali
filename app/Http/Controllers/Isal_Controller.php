<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Isal;
use App\Models\Isal_detailse;
use App\Models\Isal_Status;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Isal_Controller extends Controller
{
    public function index()
    {

        $data = Isal::all();
        $Isal_Status = Isal_Status::all();
        return view('isal.index', compact('data', 'Isal_Status'));


    }
    public function query()
    {
        // للإستعلام عن ايصال  
        $data = Isal::all();
        $Isal_Status = Isal_Status::all();
        return view('isal.query', compact('data', 'Isal_Status'));

    }
    public function query_store(Request $request)
    {
        $query_isal_status = $request->query_isal_status;
        $query_isal_serial = $request->query_isal_serial;
        $isal = Isal::select('id', 'isal_serial', 'isal_customer_name', 'isal_total', 'isal_note_comment')->where(['isal_serial' => $query_isal_serial, 'isal_status' => $query_isal_status])->first();
        if (!empty($isal)) {

            return view('Isal.query.index', compact('isal'));
        } else {
            return view('Isal.query.error');
        }


    }
    public function query_detailse(Request $request)
    {
        $isal_detailse = Isal_detailse::select('isal_id', 'service_id', 'service_price')->where('isal_id', $request->id)->get();
        foreach ($isal_detailse as $key => $value) {
            $value->service_name = Services::where('id', $value->service_id)->value('service_name');
        }
        $isal = Isal::select('isal_total')->where(['id' => $request->id])->first();
        return view('Isal.query.index_detailse', compact('isal_detailse', 'isal'));

    }
    public function all_show(Request $request)
    {
        // جلب بيانات ايصال معين في صفحه جميع الإيصالات
        $serial = $request->isal_id;
        $isal = Isal::select('isal_serial', 'isal_customer_name', 'isal_customer_national', 'isal_customer_phone', 'isal_total', 'isal_note_comment')->where('id', $serial)->first();
        $isal_detailse = Isal_detailse::select('isal_id', 'service_id', 'service_price')->where('isal_id', $serial)->get();
        foreach ($isal_detailse as $key => $value) {
            $value->service_name = Services::where('id', $value->service_id)->value('service_name');
        }
        return view('isal.ajax.all_show', compact('isal', 'isal_detailse'));
    }
    public function create()
    {

        $data = Services::all();
        return view('isal.create', compact('data'));

    }

    public function store(Request $request)
    {

        // Get the current month
        $currentMonth = now()->format('m');
        $currentYear = now()->format('Y');
        $trcurrentMonth = trim($currentMonth, "0");
        $trcurrentYear = trim($currentYear, "2");

        // Get the latest identifier for the current month
        $latestIdentifier = Isal::select('id')->count();

        // If there's no identifier for the current month, start from 1
        if ($latestIdentifier == 0) {
            $latestIdentifier = 1;
            $latestIdentifier;
        } else {
            // Increment the value of the latest identifier for the current month
            $latestIdentifier = $latestIdentifier + 1;
        }
        $serial = $trcurrentYear . $trcurrentMonth . '000' . $latestIdentifier;
        $date = date('Y-m-d');
        $time = now();
        $isal = Isal::create([
            "isal_serial" => $serial,
            "isal_customer_name" => $request->cust_name,
            "isal_customer_national" => $request->cust_national_id,
            "isal_customer_phone" => $request->cust_phone,
            "isal_pay_type" => $request->pay_type,
            "isal_total" => $request->last_to,
            "isal_status" => 1,
            "isal_approve" => 0,
            "isal_date" => $date,
            "isal_time" => $time,
            "currentMonth" => $currentMonth,
            "currentYear" => $currentYear,
            "created_by" => auth()->user()->id,
            "isal_note_comment" => $request->note,
            "isal_print_comment" => 2,
        ]);

        foreach ($request->service as $index => $cats) {

            $isal->services()->attach(
                $cats,
                [
                    'isal_id' => $isal->id,
                    'service_id' => $request->service[$index],
                    'service_price' => $request->price[$index],

                ]
            );
        }

        $isal_detailse = Isal_detailse::where('isal_id', $isal->id)->get();
        foreach ($isal_detailse as $key => $value) {
            $value->service_name = Services::where('id', $value->service_id)->value('service_name');
        }

        return view('Print.Isal.Create_Print_A4', compact('isal', 'isal_detailse'));

    }
    public function edit($id)
    {

        return view('isal.edit');
    }
    public function update($id)
    {

        return view('isal.update');
    }
    public function delete($id)
    {

        return view('isal.delete');
    }
    public function Print_show_isall_all(Request $request)
    {
        // $A6 = $request->A6;
        // $A4 = $request->A4;
        // $serial = $request->serial;

        // if ($request->font_size == 'A6') {

        //     $isal = Isal::select('isal_serial', 'isal_customer_name', 'isal_customer_national', 'isal_customer_phone', 'isal_total', 'isal_note_comment')->where('id', $serial)->first();
        //     $isal_detailse = Isal_detailse::select('isal_id', 'service_id', 'service_price')->where('isal_id', $serial)->get();
        //     return view('Print.Print_A6', compact('isal', 'isal_detailse'));
        // } else {
        //     $isal = Isal::select('isal_serial', 'isal_customer_name', 'isal_customer_national', 'isal_customer_phone', 'isal_total', 'isal_note_comment')->where('id', $serial)->first();
        //     $isal_detailse = Isal_detailse::select('isal_id', 'service_id', 'service_price')->where('isal_id', $serial)->get();

        // }
        return view('Print.Print_A4');


    }
  
    

    ///////////////////////////////Cancel Isal //////////////////////////////////
    public function Cancel_Isal(Request $request)
    {

        $isal_id = $request->isal_id;
        return view('isal.ajax.cancel_isal', compact('isal_id'));

    }
    public function Cancel_Isal_Store(Request $request)
    {
        $rules = [
            'serial_code' => 'required',
            'byan' => 'required',
        ];
        $message = [
            'required' => 'يجب عليك ملئ هذا الحقل'

        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all());

        } else {

            $isal = Isal::select('id', 'isal_status')->where('id', $request->serial)->first();
            $isal->update([
                'isal_status' => 5
            ]);
           
            return redirect()->back()->with(['success' => 'لقد تمت الإضافه بنجاح']);
        }


    }
    ///////////////////////////////Cancel Isal //////////////////////////////////


}