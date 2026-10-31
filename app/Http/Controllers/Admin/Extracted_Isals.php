<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Isal;
use App\Models\Isal_detailse;
use Illuminate\Http\Request;

class Extracted_Isals extends Controller
{

    public function index()
    {
        $data = Isal::where('isal_status', 3)->get();
        return view('Isal.Extracted.index', compact('data'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    public function print(Request $request)
    {
        $serial = $request->id;
        $isal = Isal::select('isal_serial', 'isal_customer_name', 'isal_customer_national', 'isal_customer_phone', 'isal_total', 'isal_note_comment')->where('id', $serial)->first();
        $isal_detailse = Isal_detailse::select('isal_id', 'service_id', 'service_price')->where('isal_id', $serial)->get();
        return view('Print.Print_A6', compact('isal', 'isal_detailse'));
    }
}
