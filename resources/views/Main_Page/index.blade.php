@extends('layouts.app')
@section('title')
الشاشة الرئيسية
@endsection
@section('content')
    {{-- <div class="wrapper"> --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right">الصفحة الرئيسية</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">الإحصائيات</li>
                        <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $total_isal }}</h3>

                            <p>جميع الإيصــالات</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-copy"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            الذهاب الى الصفحة <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-sm-12">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $complete }}<sup style="font-size: 20px"></sup></h3>

                            <p>المكتمله</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            الذهاب الى الصفحة <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-sm-12">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $in_proccess }}</h3>

                            <p>قيد التنفيذ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            الذهاب الى الصفحة <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-sm-12">
                    <!-- small card -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $canceled }}</h3>

                            <p>تم إلغائها</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-times-circle"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            الذهاب الى الصفحة <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <br>

          
        </div><!-- /.container-fluid -->
    </section>
@endsection
