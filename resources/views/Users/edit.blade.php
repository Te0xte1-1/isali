@extends('layouts.app')
@section('title')
    المستخدمين/ تعديل
@endsection
@section('content')
    <div class="container-fluid">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="text-right">تعديل المستخدمين</h5>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                            <li class="breadcrumb-item active">تعديل</li>
                            <li class="breadcrumb-item active"><a href="{{ route('Users') }}">المستخدمين</a> </li>
                            <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a>
                            </li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <form action="{{ route('Users.update', $data->id) }}" method="POST">
            <div class="row">
                @csrf
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <h6 class="text-right">الإسم بالكامل</h6>
                                <input type="text" class="form-control form-control-sm" value="{{$data->username}}" required name="full_name"
                                    id="full_name" placeholder=" اكتب الإسم بالكامل">
                            </div>
                            <div class="form-group">
                                <h6 class="text-right">اسم المستخدم</h6>
                                <input type="text" class="form-control form-control-sm" value="{{$data->username}}" required name="username"
                                    id="username" placeholder="اكتب اسم المستخدم ">
                            </div>
                            <div class="form-group">
                                <h6 class="text-right">البريد الإلكتروني</h6>
                                <input type="email" class="form-control form-control-sm" value="{{$data->username}}" required name="email"
                                    id="email" placeholder="البريد الإلكتروني">
                            </div>
                            <div class="form-group">
                                <h6 class="text-right"> كلمه السر</h6>
                                <input type="password" class="form-control form-control-sm" value="{{$data->username}}" required name="password"
                                    id="password" placeholder="كلمة السر">
                            </div>

                            <div align="right">
                                <h4>الصلاحيات</h4>
                            </div>

                            @php
                                $models = ['المشرفين', 'الأقسام', 'الإيصالات', 'الوحدات', 'الخدمات', 'التقارير'];
                            @endphp
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    @foreach ($models as $index => $model)
                                        <li class="nav-item">
                                            <a href="#{{ $model }}"
                                                class="nav-link {{ $index == 0 ? 'active' : '' }}"
                                                data-toggle="tab">{{ $model }}</a>
                                        </li>
                                    @endforeach

                                </ul>

                                <div class="tab-content" id="custom-tabs-four-tabContent" role="tabpanel"
                                    style="display: block;
                                float: right;
                                margin: 21px;">
                                    @foreach ($models as $index => $model)
                                        <div class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="{{ $model }}">
                                            <label style="margin: 0 10px;">
                                                <input type="checkbox" style="margin: 0 5px;" name="permissions[]"
                                                    value="create_{{ $model }}" id="">إضافة</label>
                                            <label>
                                                <input type="checkbox" style="margin: 0 5px;" name="permissions[]"
                                                    value="reate_{{ $model }}" id="">عرض</label>
                                            <label>
                                                <input type="checkbox" style="margin: 0 5px;" name="permissions[]"
                                                    value="update_{{ $model }}" id="">تعديل</label>
                                            <label>
                                                <input type="checkbox" style="margin: 0 5px;" name="permissions[]"
                                                    value="delete_{{ $model }}" id="">حذف</label>
                                        </div>
                                    @endforeach
                                </div>
                                <input type="submit" value="إضافه البيانات" style="line-height:18px;font-weight:600"
                                    class="form-control form-control-sm btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>

    </div>
@stop
