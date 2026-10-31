@extends('layouts.app')
@section('title')
    الإعدادات
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right" style="font-size: 18px !important">إعدادات النظام <i class="fa fa-file"></i>
                    </h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">إضافة</li>
                        <li class="breadcrumb-item active">الإعدادات</li>
                        <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">

        <form action="{{ route('Settings.update', ['id' => $data->id]) }}" method="POST">
            <div class="row">
                @csrf
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <h6 class="text-right">الإسم الشركة</h6>
                                <input type="text" class="form-control form-control-sm" value="{{ $data->comp_name }}"
                                    required name="comp_name" id="comp_name" placeholder=" اكتب اسم الشركه">
                            </div>
                            <div class="form-group">
                                <h6 class="text-right">موقع الشركة</h6>
                                <input type="text" class="form-control form-control-sm"
                                    value="{{ $data->comp_location }}" required name="comp_location" id="comp_location"
                                    placeholder="اكتب موقع الشركة ">
                            </div>
                            <div class="form-group">
                                <h6 class="text-right">البريد الإلكتروني للشركة</h6>
                                <input type="email" class="form-control form-control-sm" value="{{ $data->comp_email }}"
                                    required name="comp_email" id="comp_email" placeholder="البريد الإلكتروني">
                            </div>
                            <div class="form-group">
                                <h6 class="text-right"> رقم الهاتف للشركة</h6>
                                <input type="text" class="form-control form-control-sm" value="{{ $data->comp_phone }}"
                                    required name="comp_phone" id="comp_phone" placeholder="اكتب رقم هاتف الشركة">
                            </div>
                            <div class="form-group">
                                <h6 class="text-right">لوجو الشركة</h6>
                                <input type="file" name="comp_pic" id="comp_pic" value="{{ $data->comp_pic }}"
                                    class="form-control form-control-sm">
                            </div>
                            <hr>
                            <input type="submit" value="تحديث البيانات" style="line-height:18px;font-weight:600"
                                class="form-control form-control-sm btn btn-primary">
                        </div>
                    </div>

                </div>
        </form>
    </div>
    </div>
@endsection
