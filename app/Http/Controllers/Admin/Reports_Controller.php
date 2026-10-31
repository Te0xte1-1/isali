<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Motalaba;
use App\Models\Isal_Status;
use Illuminate\Http\Request;

class Reports_Controller extends Controller
{
public function index(){

    $data = Isal_Status::all();
    return view('Report.index',compact('data'));
    
}
public function full_result_research(){

    $data = Isal_Status::all();
    return view('Report.full');
    
}

public function month(){
    
    return view('report.Month_Report_All_Motalabat');

}
public function store(Request $request){
    
    return view('report.Today_Report_All_Motalabat');

}

}
