<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<style>
    @media print {
        @page {
            size: 105mm 148mm;
        }

        td {
            font-size: 9px !important;
            text-align: center !important;
            font-weight: bold;

        }

        th {
            text-align: center !important;
        }

        table {
            margin-bottom: 20px auto !important;
        }

        .right_table {
            border: 1px solid #777 !important;
            font-size: 11px;
            width: 98%;
            margin-bottom: 10px;
            margin-left: 5px;

        }

        .right_table tr {

            float: right !important;
        }

    }
</style>

<body style="padding-top:1px;font-family:tahoma ;text-align:center;">

    <div class="right_table">
        <table id="dataTable"style="margin-left: 35%;">
            <tr>
                <td>
                    شركة
                    <br>
                    [ IP-Magix ]
                    <br>
                    للحلول التقنية
                    المتكاملة
                    <br>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>التـــاريخ {{ $isal->isal_date }}</td>
            </tr>
            <tr>
                <td>رقم الإيصـــــال {{ $isal->isal_serial }}</td>
            </tr>
            <tr>
                <td>رقم الوردية {{ 1 }}</td>
            </tr>
            <tr>
                <td>اسم البائع : {{ $isal->isal_customer_name }} </td>
            </tr>
            <tr>
                <td>رقم حساب العميل {{ $isal->isal_customer_national }}</td>
            </tr>
        </table>
    </div>

    <table id="dataTable"dir="rtl" border="1"
        style="width: 98%;margin-bottom:30px;float: right;text-align:center; border:1px solie #000"cellcpacing="0"
        cellpadding="1">
        <tr>
            <td colspan="5"style="background-color:#ddd;">تفاصيل الخــــــــــــدمات</td>
        </tr>
        <tr>
            <td>اسم الخدمه</td>
            <td>سعر الخدمه</td>
        </tr>

        @foreach ($isal_detailse as $item)
            <tr>
                <td>{{ $item->service_name }}</td>
                <td>{{ $item->service_price }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5" class="get_total" style="background-color:#ddd;">إجمالي الإيصـــــــــال
                ({{ $isal->isal_total }})</td>
        </tr>

    </table>
    <table id="dataTable"dir="rtl" border="1"
        style="width: 98%;margin:0 auto;float: right;text-align:center; border:1px solie #000"cellcpacing="0"
        cellpadding="1">
        <tr>
            <td colspan="5" style="background-color:#ddd;">التفاصيل المالية</td>
        </tr>
        <tr>
            <td>طريقة السداد </td>
            <td>المدفوع من الإيصـــــال</td>
            <td> المتبقي من الإيصـــــال</td>
            <td>اجمالي الخصم </td>
            <td>اجمالي قيمة الإيصـــــال </td>
        </tr>
        <tr>
            <td> {{ $isal->isal_pay_type }} </td>
            <td>{{ $isal->isal_total }}</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>{{ $isal->isal_total }}</td>
        </tr>

    </table>


</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>

<script>
    $(document).ready(function() {
        // var pr = window.print();
        // if (pr) {
        //     window.location = "(route('Pro'))";
        // } else {
        //     window.location = "http://market.local/isal";

        // }

    });
</script>
