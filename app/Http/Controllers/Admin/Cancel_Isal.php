<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Isal;
use Illuminate\Http\Request;

class Cancel_Isal extends Controller
{

    public function index()
    {
        $data = Isal::where('isal_status', 1)->get();
        return view('Isal.Order_to_cancel.index', compact('data'));
    }

    public function convert_proccess_to_approve(Request $request)
    {
        $isal_serial = $request->isal_id;
        $isal = Isal::select('id', 'isal_status', 'isal_approve')->where('id', $isal_serial)->first();
        $isal->update([
            'isal_status' => 3,
            'isal_approve' => 1,
        ]);

            return "done";


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
