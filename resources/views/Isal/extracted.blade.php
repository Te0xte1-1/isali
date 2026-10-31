@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="wrapper">
    
            <div align="center">
                <h4>الإيصالات التي تم استخراجها</h4>
                <i class="bi bi-clipboard-check-fill"></i>
                <div align="left">
                    <a href="{{ route('Dashboard') }}" class="btn btn-primary btn-sm">رجوع</a>
                    <a href="index" class="btn btn-danger btn-sm">إنهاء البرنامج</a>
                </div>
            </div>
            <hr>
<div id="dataTable_wrapper" class="dataTables_wrapper no-footer">
                <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length"
                            aria-controls="dataTable" class="">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries</h6></div>
                <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class=""
                            placeholder="" aria-controls="dataTable"></h6></div>
                <div align="right">

                    <table id="dataTable"border="1" class="table  table-striped table-hover dataTable no-footer"
                        id="DataTable" aria-describedby="dataTable_info">
                        <thead>
                            <tr>
                                <th>الرقم</th>
                                <th>الوحدة الإدارية</th>
                                <th>اسم المنطقة</th>
                                <th></th>
                                <th>Block Number</th>
                                <th>نوع النشاط</th>
                                <th>اسم النشاط</th>
                                <th>طباعه الإيصال</th>
                                <th>معاينة الإيصال</th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr class="odd">
                                <td><a href="{{ route('Motalaba_show') }}">1</a></td>
                                <td>محلية شرق النيل</td>
                                <td>شرق النيل</td>
                                <td>86</td>
                                <td>86-AB</td>
                                <td>8</td>
                                <td>محل عطور</td>
                                <td>تم استخراج الإيصال</td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-printer-fill"></i></a></td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-eye-fill"></i></a></td>
                            </tr>
                            <tr class="even">
                                <td><a href="{{ route('Motalaba_show') }}">2</a></td>
                                <td>محلية شرق النيل</td>
                                <td>شرق النيل</td>
                                <td>86</td>
                                <td>86-AB</td>
                                <td>8</td>
                                <td>محل عطور</td>

                                <td>تم استخراج الإيصال</td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-printer-fill"></i></a></td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-eye-fill"></i></a></td>


                            </tr>
                            <tr class="odd">
                                <td><a href="{{ route('Motalaba_show') }}">3</a></td>
                                <td>محلية شرق النيل</td>
                                <td>شرق النيل</td>
                                <td>86</td>
                                <td>86-AB</td>
                                <td>8</td>
                                <td>محل عطور</td>

                                <td>تم استخراج الإيصال</td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-printer-fill"></i></a></td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-eye-fill"></i></a></td>

                            </tr>
                            <tr class="even">
                                <td><a href="{{ route('Motalaba_show') }}">4</a></td>
                                <td>محلية شرق النيل</td>
                                <td>شرق النيل</td>
                                <td>86</td>
                                <td>86-AB</td>
                                <td>8</td>
                                <td>محل عطور</td>

                                <td>تم استخراج الإيصال</td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-printer-fill"></i></a></td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-eye-fill"></i></a></td>

                            </tr>
                            <tr class="odd">
                                <td><a href="{{ route('Motalaba_show') }}">5</a></td>
                                <td>محلية شرق النيل</td>
                                <td>شرق النيل</td>
                                <td>86</td>
                                <td>86-AB</td>
                                <td>8</td>
                                <td>محل عطور</td>

                                <td>تم استخراج الإيصال</td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-printer-fill"></i></a></td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-eye-fill"></i></a></td>

                            </tr>
                            <tr class="even">
                                <td><a href="{{ route('Motalaba_show') }}">6</a></td>
                                <td>محلية شرق النيل</td>
                                <td>شرق النيل</td>
                                <td>86</td>
                                <td>86-AB</td>
                                <td>8</td>
                                <td>محل عطور</td>

                                <td>تم استخراج الإيصال</td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-printer-fill"></i></a></td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-eye-fill"></i></a></td>

                            </tr>
                            <tr class="odd">
                                <td><a href="{{ route('Motalaba_show') }}">7</a></td>
                                <td>محلية شرق النيل</td>
                                <td>شرق النيل</td>
                                <td>86</td>
                                <td>86-AB</td>
                                <td>77</td>
                                <td>محل عطور</td>

                                <td>تم استخراج الإيصال</td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-printer-fill"></i></a></td>
                                <td><a href="{{ route('Motalaba_show') }}"><i class="bi bi-eye-fill"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 7 of 7
                        entries</div>
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><a
                            class="paginate_button previous disabled" aria-controls="dataTable" aria-disabled="true"
                            aria-role="link" data-dt-idx="previous" tabindex="-1"
                            id="dataTable_previous">Previous</a><span><a class="paginate_button current"
                                aria-controls="dataTable" aria-role="link" aria-current="page" data-dt-idx="0"
                                tabindex="0">1</a></span><a class="paginate_button next disabled"
                            aria-controls="dataTable" aria-disabled="true" aria-role="link" data-dt-idx="next"
                            tabindex="-1" id="dataTable_next">Next</a></div>
                </div>
            </div>
        </div>
    @endsection
