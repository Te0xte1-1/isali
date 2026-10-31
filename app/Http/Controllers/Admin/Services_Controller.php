<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Services_Controller extends Controller
{
   public function index()
   {
      $data = Services::all();
      return view('Services.index', compact('data'));

   }

   public function create()
   {

      return 'create';

   }
   public function store(Request $request)
   {

      $rules = [
         'service_name' => 'required',
         'service_price' => 'required|numeric',
      ];

      $message = [
         'service_name.required' => 'يجب عليك ملئ هذا الحقل',
         'service_price.required' => 'يجب عليك ملئ هذا الحقل',
         'service_price.numeric' => 'هذا الحقل يجب أن يكون رقم'

      ];

      $validator = Validator::make($request->all(), $rules, $message);

      if ($validator->fails()) {

         return redirect()->back()->withErrors($validator)->withInput($request->all());

      } else {

         Services::create([
            'service_name' => $request->service_name,
            'service_price' => $request->service_price
         ]);
         return redirect()->back()->with(['success' => 'لقد تمت الإضافه بنجاح']);
      }

   }
   public function edit(Request $request)
   {
      $data = Services::where('id', $request->service_id)->first();
      return view('services.ajax.edit', compact('data'));

   }
   public function update(Request $request)
   {
      $service_id = $request->id;
      $service = Services::find($service_id);
      $service->update($request->all());
      return redirect()->route('Services');

   }
   public function delete($id)
   {


   }
   public function get_service_price(Request $request)
   {


      if ($request->ajax()) {

         $service_id = $request->id;
         $data = Services::select('service_price')->find($service_id);
         // return view('Salse.load_salse.load_product_price', compact('data'));
         return $data;
      }
   }
}
