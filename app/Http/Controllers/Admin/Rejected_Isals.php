<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Isal;
use Illuminate\Http\Request;

class Rejected_Isals extends Controller
{
 
    public function index()
    {
        $data = Isal::where('isal_status', 4)->get();
        return view('isal.Rejected.index', compact('data'));
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
}
