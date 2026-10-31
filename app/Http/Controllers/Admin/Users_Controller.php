<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Users_Controller extends Controller
{
    public function index()
    {

        $data = User::all();
        return view('Users.index', compact('data'));
    }
    public function store(Request $request)
    {
        $rules = [
            'full_name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];

        $message = [
            'required' => 'يجب عليك ملئ هذا الحقل'

        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all());

        } else {

            $user = User::create([
                'full_name' => $request->full_name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            $user->attachRole('admin');
            $user->attachPermissions($request->permissions);
            session()->flash('success', 'تمت الإضافة بنجاح');
            return redirect()->route('Users');
            // dd($request->all());

        }
    }
    public function create()
    {


        return view('Users.create');
    }
    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        return redirect()->route('Users');

    }
    public function update(Request $request)
   {

      $id = $request->id;
      $data = User::find($id);
      $data->update($request->all());
      return redirect()->route('Users');
   }
    public function delete($id)
    {


    }
}
