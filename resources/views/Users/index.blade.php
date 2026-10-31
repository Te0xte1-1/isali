@extends('layouts.app')

@section('title')
    المستخدمين
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right" style="font-size: 18px !important">المستخدمين <i class="fa fa-users"></i>
                    </h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">إضافة</li>
                        <li class="breadcrumb-item active">المستخدمين</li>
                        <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div align="right">
            <div class="form-group">
                <a href="{{ route('Users.create') }}" class="btn btn-primary btn-sm">إضافة <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="table-responsive">
            <table id="dataTable"class="table  table-hover">
                <thead>
                    <tr>
                        <th>الإسم بالكامل</th>
                        <th>اسم المستخدم</th>
                        <th>الإيميل</th>
                        <th>كلمة السر</th>
                        <th>تعديل </th>
                        <th>حذف</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $item)
                        <tr>
                            <td>{{ $item->full_name }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>
                            <td><a href="{{ route('Users.edit', $item->id) }}" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit"></i></button></td>
                            <td><button data-id="{{ $item->id }}" class="btn btn-danger btn-sm"><i
                                        class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
