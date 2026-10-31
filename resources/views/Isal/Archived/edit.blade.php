@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="wrapper">
            <div align="center">
                <br>
                <h3>تعديل إيصال </h3>
            </div>
           
            <hr>
            <form action="{{ route('Edit_Motalaba') }}" method="get">
                <div class="row">
                    <div class="col-sm-6">
                        <div align="center">
                            <div class="form-group">
                                <h6>رقم الإيصال</h6>
                                <input type="text" placeholder="اكتب رقم الإيصال المراد تعديلها" name="number_motalaba"
                                    class="form-control form-control-sm" id="">
                            </div>
                        </div>
                    </div>

                    <div align="center">
                        <h6><i class="bi bi-search"></i></h6>
                        <input type="submit" value="search" class="form-control btn-success btn-sm">
                    </div>
                </div>
            </form>
            @if ($motalaba != "")
            @foreach ($motalaba as $item)
                <h6>نوع الإيصال</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <h6>تاريخ الإيصال</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <h6>نوع الإيصال</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <br><br>
                <h6>رقم الإيصال</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <h6>مالك العقار</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <h6>اسم النشاط</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <h6>الوحدة الإدارية</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <br><br>
                <h6>الرقم الوطني</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <h6>مساحة النشاط</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <h6>نوع النشاط</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <h6>رقم العقار</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <br><br>
                <h6>الرقم الوطني لصاحب النشاط</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
                <h6>رقم هاتف صاحب النشاط</h6>
                <input type="text" value="{{ $item->active_space }}" disabled="" name="" id="">
            @endforeach
            <h6>السنة المالية</h6>
            <input type="text" value="2023" disabled="" name="" id="">
            <div class="print">
                <br>
                <div align="left">
                    <a href="#" class="btn btn-primary btn-sm">طباعة مباشرة</a>
                    <a href="#" class="btn btn-dark btn-sm">طباعة pdf</a>
                    <a href="#" class="btn btn-success btn-sm">معاينة</a>
                    <a href="{{ route('Dashboard') }}" class="btn btn-danger btn-sm">رجوع</a>

                </div>
            </div>

            <div class="table-responsive">
                <br>
                <table id="dataTable"class="table ">
                    <thead>
                        <tr>
                            <th>العميل</th>
                            <th>البند</th>
                            <th>الرسم</th>
                            <th>الحالية</th>
                            <th>الجملة</th>
                            <th>اضافة بند</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>


                            <td><input type="text" class="form-control " disabled="" name=""
                                    id=""></td>
                            <td><select name="" class="form-control form-control-sm" id="">
                                    <option value="1">الملاريا</option>
                                    <option value="1">رسوم هندسية</option>
                                    <option value="1">الرخصة الصحية</option>
                                </select></td>
                            <td><input type="number" class="form-control form-control-sm" placeholder="00.00" name=""
                                    id=""></td>
                            <td><input type="number" class="form-control form-control-sm" placeholder="00.00" name=""
                                    id=""></td>
                            <td><input type="number" class="form-control form-control-sm" placeholder="00.00" name=""
                                    id=""></td>
                            <td><input type="button" class="btn btn-info btn-sm" value="+" name=""
                                    id="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @else
            <h5>@lang('يجب عليك كتابة رقم الإيصال التي تريد تعديلها')</h5>
            @endif
        </div>
    @stop
