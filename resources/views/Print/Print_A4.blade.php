@extends('layouts.header')
@section('title')
    طباعة إيصال
@endsection
<style>
    body {
        direction: rtl;
        border: 1px dotted #EEE;

    }

    th,
    td {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center !important;
    }

    th {
        font-size: 16px;
        font-weight: bold;
    }

    .get_total {
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: brown;
        font-weight: bold;
        font-size: 20px;
    }

    .right_table,
    .up_head {
        display: flex;
        justify-content: space-between
    }

    .invoice-col {
        margin-left: 10px !important;
        border: dashed 1px #000000;
    }

    #foot_hide {
        display: none;
    }

    @media print {
        #foot_hide {
            display: block;

        }

        #prin {
            display: none;
        }

        h6 {
            padding: 20px;
        }
    }
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <br>
            <h4 class="text-center">طباعة الإيصـــــال</h4>
            <div class="table-responsive">
                <div class="right_table">

                    <table>
                        <tr>
                            <td>التـــاريخ </td>
                        </tr>
                        <tr>
                            <td>زمن الإيصـــــال : 20-10:10 PM</td>
                        </tr>
                        <tr>
                            <td>رقم الوردية {{ 1 }}</td>
                        </tr>
                        <tr>
                            <td>اسم المستفيد من الخدمه
                                ({{$isal->isal_customer_name}} )
                            </td>
                        </tr>
                        <tr>
                            <td>رقم الهاتف : {{$isal->isal_customer_phone}}</td>
                        </tr>
                    </table>
                    <table id="dataTable"style="margin-top: -36px;margin-left:100px;font-weight:bold">
                        <tr>
                            <td>
                                ولاية الخرطوم
                                <br>
                                محلية كرري
                                <br>
                                وحده الأمير
                                <br>
                            </td>
                        </tr>
                    </table>
                    <img src="{{ asset('img/1.png') }}" width="100" height="100"
                        alt="">
                </div>

            </div>
            <hr>
            <div class="up_head text-center">

                <span>رقم الإيصـــــال : ({{$isal->isal_serial}})</span>
                <span style="margin-left:100px;">اسم مستخرج الإيصال : Administraion </span>
                <span>رقم الوردية : 125</span>
            </div>

            <hr><br><br>
            <table id="dataTable"dir="rtl" border="1"
                style="width: 98%;margin-bottom:35px;text-align:center; border:1px solid #ddd4d4 !important"cellcpacing="0"
                cellpadding="1">

                <head style="font-weight:bold;font-size:16px">
                    <tr>
                        <th colspan="5"style="background-color:#9d8d8dd9; font-weight:bold">تفاصيل
                            الإيصـــــال
                        </th>
                    </tr>
                    <tr>
                        <th>اسم الخدمه</th>
                        <th>سعر الخدمه</th>
                        <th>اجمالي سعر الخدمه</th>
                    </tr>
                </head>
                <tbody>


                    @foreach ($isal_detailse as $item)
                        <tr>
                            <td>{{ $item->service_id }}</td>
                            <td>{{ $item->service_price }}</td>
                            <td>{{ $item->service_price * 1 }}</td>
                        <tr>
                    @endforeach
                    <td colspan="5" style="background-color:#ddd;">إجمالي الإيصال ({{$isal->isal_total}}) جنية فقط لا غير</td>
                    </tr>
                </tbody>
            </table>

            <hr>
            <br>
            <div class="table-responsive">
                <table id="dataTable"dir="rtl" border="1"
                    style="width: 98%;margin:0 auto;float: right;text-align:center; border:1px solid #ddd4d4"cellcpacing="0"
                    cellpadding="1">
                    <tr>
                        <th colspan="5" style="background-color:#ddd;">التفاصيل المالية</th>
                    </tr>
                    <tr>
                        <th>طريقة السداد </th>
                        <th>المدفوع من الإيصـــــال</th>
                        <th> المتبقي من الإيصـــــال</th>
                        <th>اجمالي الخصم </th>
                        <th>اجمالي قيمة الإيصـــــال </th>
                    </tr>
                    <tr>
                        <td>
                            كاش
                        </td>
                        <td>{{$isal->isal_pay_type}}</td>
                        <td>00.00</td>
                        <td>00.00</td>
                        <td>{{$isal->isal_total}}</td>
                    </tr>

                </table>
            </div>


            <span class="text-center" style="position: fixed;bottom:50px;left:480px;" id="foot_hide">
                شكرا لزيارتكم الجميلة
            </span>
            <span style="position:fixed;bottom:50px;left:30px;" id="foot_hide">0114700220</span>
            <span style="position:fixed;bottom:50px;right:30px;" id="foot_hide">0114700220</span>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('js/Adminlte.min.js') }}"></script>

<script>
    $(document).ready(function() {
        window.print();

    });
</script>
