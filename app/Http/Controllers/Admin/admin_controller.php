<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class admin_controller extends Controller
{
 
    public function index()
    {
        $data = Admin::all();
        return view('Admin.index', compact('data'));
    }

   
    public function create()
    {
        return view('Admin.create');
    }

    
    public function store(Request $request)
    {
        dd($request->all());
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
   
            Admin::create([
               'unit_name' => $request->unit_name
            ]);
            return redirect()->back()->with(['success' => 'لقد تمت الإضافه بنجاح']);
         }
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
}
