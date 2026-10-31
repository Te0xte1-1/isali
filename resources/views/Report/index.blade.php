@extends('layouts.app')
@section('title')
    التقارير
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right" style="font-size: 18px !important">التقارير<i class="far fa-file"></i>
                    </h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">إضافة</li>
                        <li class="breadcrumb-item active">التقارير</li>
                        <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form action="{{ route('Report.store') }}" target="_blank" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3 ">
                            <div class="form-group">
                                <h6 class="text-center">حالة الإيصالات </h6>
                                <select id="isal_status" name="isal_status" class="form-control form-control-sm">
                                    <option value="0">-- اختيار --</option>
                                    @foreach ($data as $index => $item)
                                        <option>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-3 ">
                            <div class="form-group">
                                <h6 class="text-center">من شهر</h6>
                                <input type="date" name="from" id="from" value="@php echo date('Y-m-d') @endphp"
                                    class="form-control form-control-sm" />
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="form-group">
                                <h6 class="text-center"> الى شهر</h6>
                                <input type="date" name="to" id="to" value="@php echo date('Y-m-d') @endphp"
                                    class="form-control form-control-sm" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="input-group input-group-sm"style="margin-top:1.7rem!important">
                                    <input type="submit" class="form-control form-control-sm btn btn-success btn-sm"
                                        placeholder="Test" value="إنشاء التقرير">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
