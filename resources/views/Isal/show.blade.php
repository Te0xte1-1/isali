@extends('layouts.app')
@section('title')
عرض الإيصال
@endsection
@section('content')
    <style>
        .container {
            border: none;
            padding: 0 !important;
            margin-top: 6px;
            margin-bottom: 6px;
        }

        .wrapper {

            padding: 0 !important;
        }

        th {
            color: #007bff;

            font-size: 14px;
        }

        h3 {
            font-size: 17px;

        }

        h6 {

            font-size: 14px;
        }
    </style>

    <div class="wrapper">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h6>بيانات الإيصال</h6>
            </div>
            <div class="card-body">
                <div class="top-header">
                    <div class="row">
                        <div class="col-sm-4">
                            <div align="right">
                                <img src="{{ asset('img/1234.jpg') }}" width="100px" height="100px" alt=""
                                    srcset="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div align="center">

                                <h6>بسم الله الرحمن الرحيم</h6>
                                <h6>ولاية الخرطوم</h6>
                                <h6>جهاز تطوير وتحصيل الموارد الموحد</h6>
                                <h6>محلية جبل أولياء</h6>
                                <h6>وحدة الشمالية</h6>
                                <h6>2023/5/7</h6>
                                <h3>مراجعة إيصال رقم ( 1 ) </h3>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div align="left">
                                <img src="{{ asset('img/images.jpg') }}" width="100px" height="100px" alt=""
                                    srcset="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header">

                    <div class="row">
                        <div class="col-sm-6">
                            <div align="right">
                                <strong>التاريخ : /
                                    2023-10-4
                                </strong>
                                <h3>إجمالي الإيصال
                                    :
                                    <a href="#">58,000</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div align="left">
                                <a href="#" class="btn btn-info btn-sm">طباعة مباشرة <i class="bi bi-printer"></i></a>
                                <a href="#" class="btn btn-secondary btn-sm">طباعة pdf <i
                                        class="bi bi-file-earmark-zip-fill"></i></a>
                                <a href="{{ route('Dashboard') }}" class="btn btn-danger btn-sm">رجوع <i
                                        class="bi bi-shop"></i></a>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div align="center">
                        <h6>العميل</h6>
                        <input type="text" disabled name="" id="">
                        <h6>رقم الإيصال</h6>
                        <input type="text" disabled="" name="" id="">
                        <h6>نوع الإيصال</h6>
                        <input type="text" disabled="" name="" id="">
                        <h6>تاريخ الإيصال</h6>
                        <input type="text" disabled="" name="" id="">
                    </div>
                </div>

                <hr>
                <table id="dataTable"class="table ">
                    <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>البند</th>
                            <th>المبلغ المراد</th>
                            <th>المبلغ المسدد</th>
                            <th>الإجمالي</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>

                    </tbody>

                </table>

                <hr>

                <br>
                <h6>نأمل في استجابتكم وتعاونكم معنا لتقديم خدمات أفضل</h6>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <h6> المحاسب :
                            <a href="">......................</a>
                        </h6>
                        <h6>المتحصل :
                            <a href="">......................</a>
                        </h6>
                        <br>
                        <h6> المستلم :
                            <a href="">......................</a>
                        </h6>
                        <br>
                        <h6>للإستفسار الرجاء الإتصال على :
                            <a href>3115</a>
                        </h6>
                    </div>
                    <div class="col-sm-6">
                        <h6>مدير القسم :
                            <a href="">......................</a>
                        </h6>

                        <h6>ع/ مدير جهاز تنمية وتحصيل الموارد الموحد محلية :
                            <a href="">......................</a>
                        </h6>
                        <br>
                        <h6>تاريخ الإستلام :
                            <a href="">......................</a>
                        </h6>
                    </div>
                </div>
                <hr>
                <h6>
                    جهاز تطوير وتحصيل الموارد الموحد ولاية الخرطوم
                </h6>

            </div>
        </div>
    </div>
@endsection
