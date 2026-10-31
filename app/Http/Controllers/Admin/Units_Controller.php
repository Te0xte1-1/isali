<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class Units_Controller extends Controller
{
   public function index()
   {
      $data = Units::all();
      return view('Units.index', compact('data'));
   }
   public function create()
   {

      return 'create';

   }
   public function store(Request $request)
   {

      $rules = [
         'unit_name' => 'required',
      ];

      $message = [
         'unit_name.required' => 'يجب عليك ملئ هذا الحقل'

      ];

      $validator = Validator::make($request->all(), $rules, $message);

      if ($validator->fails()) {

         return redirect()->back()->withErrors($validator)->withInput($request->all());

      } else {

         Units::create([
            'unit_name' => $request->unit_name
         ]);
         return redirect()->back()->with(['success' => 'لقد تمت الإضافه بنجاح']);
      }
   }
   public function edit(Request $request)
   {
      $data = Units::where('id', $request->unit_id)->first();
      return view('Units.ajax.edit', compact('data'));

   }
   public function update(Request $request)
   {
      $unit_id = $request->id;
      $data = Units::find($unit_id);
      $data->update($request->all());
      return redirect()->route('Units');
   }
   public function delete($id)
   {


   }
}
