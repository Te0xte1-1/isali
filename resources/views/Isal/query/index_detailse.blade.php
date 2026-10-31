<table id="dataTable"dir="rtl" border="1"
    style="width: 98%;margin-bottom:30px;float: right;text-align:center; border:1px solie #000"cellcpacing="0"
    cellpadding="1">
    <thead>
        <tr>
            <th colspan="5"style="background-color:#ddd;">تفاصيل الخــــــــــــدمات</th>
        </tr>

        <tr>
            <th>اسم الخدمه</th>
            <th>سعر الخدمه</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($isal_detailse as $item)
            <tr>
                <td>{{ $item->service_name }}</td>
                <td>{{ $item->service_price }}</td>
        @endforeach
    </tbody>
    <tr>
        <th colspan="5" class="get_total" style="background-color:#ddd;">إجمالي
            الإيصـــــــــال
            ({{$isal->isal_total}})</th>
    </tr>
</table>
