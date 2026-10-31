<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Settings_Controller extends Controller
{
   public function index()
   {

      $data = Settings::first();
      return view('Settings.index', compact('data'));

   }
   public function create()
   {

      $data = Settings::all();
      return view('Settings.index', compact('data'));

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

         Settings::create([
            //    'unit_name' => $request->unit_name
         ]);
         return redirect()->back()->with(['success' => 'لقد تمت الإضافه بنجاح']);
      }

   }
   public function edit($id)
   {
      $data = Settings::find($id);
      return view('Settings.edit', compact('data'));

   }
   public function update(Request $request)
   {

      $id = $request->id;
      $data = Settings::find($id);
      $data->update($request->all());
      return redirect()->route('Settings');
   }
   public function delete($id)
   {


   }
}
