@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div align="center">
            <br>
            <h3> المستخدمين<i class="bi bi-clipboard2-fill"></i></h3>
            <hr>
        </div>

        <div align="right">
            <div class="form-group">

                <a href="{{ route('Users.create') }}" class="btn btn-primary btn-sm">إضافة <i class="bi bi-house-fill"></i></a>
                <a href="{{ route('Dashboard') }}" class="btn btn-primary btn-sm">الصفحة الرئيسية <i
                        class="bi bi-house-fill"></i></a>
                <a href="{{ route('Settings') }}" class="btn btn-warning btn-sm">للإعدادات <i class="bi bi-tools"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('Users.create.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <h6 class="text-right">الإسم بالكامل</h6>
                                <input type="text" class="form-control form-control-sm" name="full_name" id="full_name" placeholder=" اكتب الإسم بالكامل">
                            </div>
                            <div class="form-group">
                                <h6 class="text-right">اسم المستخدم</h6>
                                <input type="text" class="form-control form-control-sm" name="username" id="username" placeholder="اكتب اسم المستخدم ">
                            </div>
                            <div class="form-group">
                                <h6 class="text-right">البريد الإلكتروني</h6>
                                <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="البريد الإلكتروني">
                            </div>
                            <div class="form-group">
                                <h6 class="text-right"> كلمه السر</h6>
                                <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="كلمة السر">
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div align="center">
                            <h3>الصلاحيات</h3>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <h6 class="form-check-h6" for="exampleCheck1">Check me out</h6>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="إضافه البيانات" class="form-control form-control-sm btn btn-primary">
            </form>
        </div>

    </div>
@stop
