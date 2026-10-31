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
        <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                    Digital Strategist
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <h1 class="text-muted"><b>Nicole Pearson</b></h1>
                            <br>
                            <h4 class="text-muted">

                                <b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover

                            </h4>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small">
                                    <h5>
                                        <span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                        Address: Demo Street 123, {{ $data->comp_location }}
                                    </h5>
                                </li>
                                <br>
                                <li class="small">
                                    <h5>
                                        <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                        Phone #: {{ $data->comp_phone }}
                                    </h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-5 text-center">
                            <img src="{{ asset('img/user.jpg') }}" alt="user-avatar" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="#" class="btn btn-sm bg-teal">
                            مراسلة الشركة <i class="fas fa-comments"></i>
                        </a>
                        <a href="{{ route('Settings.edit',$data->id) }}" class="btn btn-sm btn-primary">
                            تعديل بيانات الشركة <i class="fas fa-edit"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
