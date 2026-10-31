@extends('layouts.app')
@section('title')
    استخراج إيصال جديد
@endsection
@section('content')
    <style>
        h5 {
            font-size: 16px !important;
        }

        .text-right {

            font-size: 14px !important;
        }

        #text-right {
            margin-bottom: 10px;
            margin-top: 5px;
            margin-right: 5px;
        }
    </style>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right" style="font-size: 18px !important">استخراج إيصال جديد <i class="fa fa-file"></i>
                    </h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">جديد</li>
                        <li class="breadcrumb-item active">الإيصالات</li>
                        <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="center_border">
                    <div class="card" style="box-shadow:0 1px 10px 0 #707173">
                        <div class="card-body" id="card_isald" style="    padding: 8px 15px;">
                            <h5 class="text-center" id="nat">جمهورية السودان</h5>
                            <h5 class="text-center" id="mins">وزارة المالية والتخطيط الإقتصادي</h5>

                            <div class="Recipt_and_logos" style="display: flex;justify-content: space-between;">
                                <h5 id="date">@php echo date('Y-M-d'); @endphp</h5>
                                <h5 id="state">ولاية الخرطوم</h5>
                                <h1 id="tit" style="display:none">إنشاء إيصال جديد</h1>
                                <h5 id="exp">نموذج مالي ايرادات E-15</h5>
                            </div>
                            <h6 class="text-right" id="uni">الموقع العمارات - محلية الخرطوم - ولاية الخرطوم</h6>
                            @if (Session::has('success'))
                                <div class="alert alert-success alert-sm text-center">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form action="{{ route('Isal.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 class="text-right" id="text-right">وصل من</h5>
                                        <input type="text" name="cust_name" value="{{$data->isal_customer_name}}" id="cust_name" required
                                            class="form-control form-control-sm" placeholder="اكتب اسم المستفيد من الإيصال">
                                        <input type="hidden" id="last_to" name="last_to">
                                    </div>
                                    <div class="col-sm-3">
                                        <h5 class="text-right" value="{{$data->isal_customer_phone}}" id="text-right">رقم الهاتف </h5>
                                        <input type="text" name="cust_phone" id="cust_phone" required
                                            class="form-control form-control-sm" placeholder="اكتب رقم الهاتف 249XXXXXXXX">


                                    </div>
                                    <div class="col-sm-3">
                                        <h5 class="text-right" id="text-right">الإثبات</h5>
                                        <input type="text" name="cust_national_id" value="{{$data->isal_customer_national}}" required id="cust_national_id"
                                            class="form-control form-control-sm" placeholder="اكتب رقم الإثبات">
                                    </div>
                                    <div class="col-sm-3">
                                        <h5 class="text-right" id="text-right">
                                            طريقة الدفع :
                                        </h5>
                                        <select name="pay_type" id="pay_type" required
                                            class="form-control form-control-sm">
                                            <option value="0">-- إخيار --</option>
                                            <option value="1">نقدي</option>
                                            <option value="2">شيك</option>
                                        </select>


                                    </div>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table class="table " id="isal_add_service_table">
                                        <tr>
                                            {{-- <th width="20%">قرش</th> --}}
                                            <th colspan="2">الخــــــــــــدمات</th>
                                            <th width="20%">السعر</th>
                                            <th width="20%"></th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <select class="form-control form-control-sm" id="select_service"
                                                    name="" style="background-color: #ddd">
                                                    <option value="0">-- اختر الخدمه -- </option>

                                                    @foreach ($data_detailse as $index => $item)
                                                        <option value="{{ $item->service_id }}"
                                                            data-name="{{ $item->service_name }}">
                                                            {{ $item->service_name }} السعر- ({{ $item->service_price }})
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </td>

                                            <td><input type="text" class="form-control form-control-sm" disabled
                                                    name="" id="service_price" value="0"
                                                    style="text-align: center">
                                                <input type="hidden" class="form-control form-control-sm" name=""
                                                    id="service_price_h">
                                            </td>
                                            <td><button class="btn btn-primary btn-sm" id="add_service">إضافة</button>
                                            </td>

                                        </tr>
                                        @foreach ($data_detailse as $index => $item)
                                            <tr>
                                                <td colspan="2"><input type="text" value="{{ $item->service_id }}"
                                                        class="form-control"></td>
                                                <td><input type="text" value="{{ $item->service_price }}"
                                                        class="form-control"></td>
                                                <td><input type="button" value="-" class="btn btn-danger btn-sm"></td>
                                            </tr>
                                        @endforeach
                                        <tbody id="n">

                                        </tbody>
                                        <tfoot>

                                            <tr>
                                                <td colspan="2">
                                                    <h4 style="font-size: 20px;font-weight: bold;font-family:cairo;">إجمالي
                                                        المبلغ</h4>
                                                </td>
                                                <td colspan="1"><input type="text" value="{{$data->isal_total}}" disabled
                                                        class="form-control form-control-sm" name="total_money"
                                                        id="total_money"
                                                        style="text-align: center;font-size: 20px;
                                                    font-weight: bold;">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <input type="text" placeholder="اكتب تعليقك على الإيصال هنا"
                                                        class="form-control form-control-sm" value="لا يوجد تعليق"
                                                        name="note" value="{{$data->isal_note_comment}}" id="note">
                                                </td>
                                                <td>
                                                    <input type="checkbox" class="btn btn-primary btn-sm"
                                                        id="print_comment" name="print_comment">
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <input type="submit" class="form-control form-control-sm btn btn-primary" id="complete"
                                    value="إكمال العملية" style="line-height: 10px;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-3">
                <div class="left_border">
                    <div class="card" style="box-shadow:0 1px 10px 0 #707173">
                        <div class="card-header" id="show_last_isal">
                            <h5>أحدث الإيصالات المصدرة</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <a href="#">ahmed hashim</a>

                                    <br>
                                    <span class="show_date"></span>
                                    <span class="show_money">30,000</span>
                                </li>
                                <hr>
                                <li><a href="#">ahmed hashim</a>
                                    <br>
                                    <span class="show_date"> @php
                                        echo now();
                                    @endphp </span>
                                    <span class="show_money">30,000</span>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>


    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {


            $('body').on('change', '#select_service', function(e) {
                var id = $(this).val();
                if ($(this).val() == "0") {
                    $('#service_price').val("0");
                    $('#service_price_h').val("0");
                } else {

                    $.ajax({
                        method: 'post',
                        url: "{{ route('get_service_price') }}",
                        data_type: 'html',
                        data: {

                            _token: '{{ csrf_token() }}',
                            id: id
                        },
                        success: function(data) {
                            var number = data.service_price;

                            var formattedNumber = number.toLocaleString('en-US', {
                                style: 'currency',
                                currency: 'USD'
                            });

                            $('#service_price').val(formattedNumber);

                        },
                    });
                }
                // alert(id);
            });
            $('#add_bnood').click(function() {
                $('#modal-xl').modal('show');
            });
            $('body').on('click', '#remove_row', function(e) {
                e.preventDefault();
                $(this).closest('tr').remove();
                calc();
            });
            $('body').on('click', '#add_service', function(e) {
                e.preventDefault();

                var selected_service_id = $('#select_service').val();
                var selected_service_name = $('#select_service option:selected').data('name');
                let selected_service_price = $('#service_price').val();

                let number = parseInt(selected_service_price);

                let formattedNumber = number.toLocaleString('en-US', {
                    style: 'currency',
                    currency: 'USD'
                });


                if (selected_service_id == 0) {

                    alert('عفواً,اختر الخدمة أولاً');
                } else if (selected_service_id == null) {
                    alert('عفواً,اختر الخدمة أولاً');

                } else {


                    var html =
                        `<tr>
                    <td>1</t>
                    <td>
                        <input type="hidden" name="service[]" id="service"  class="form-control pro-${selected_service_id }" value="${selected_service_id}"/>
                        <input type="hidden" name="price[]" id="service-price"value="${selected_service_price}"/>
                        <input type="hidden" name="total_for_database" id="total_for_database"/>

                        <input type="text" id="service-name" value="${selected_service_name}" disabled class="form-control form-control-sm" name=""></td>
                    <td id="prices" data-subtotal="${selected_service_price}">${formattedNumber}</td>
                    <td><input type="button" class="btn btn-danger btn-sm" value="-" name="" id="remove_row"></td>
                    </tr>`;

                    $('#n').append(html);
                    $('#select_service').val("0");
                    $('#service_price').val("0");
                    $('#cust_name').val("");
                    $('#cust_phone').val("");
                    $('#cust_national_id').val("");
                    $('#pay_type').val("");
                    calc();

                }
            });

            function calc() {
                var price = 0;
                $('#n #prices').each(function() {
                    price += parseInt($(this).data('subtotal'));
                });
                let total_by_format = price.toLocaleString('en-US', {
                    style: 'currency',
                    currency: 'USD'
                });

                $('#total_for_database').val(price);
                $('#total_money').val(total_by_format);
            }
            $('body').on('mouseenter', '#complete', function(e) {
                var total = $('#total_for_database').val();
                $('#last_to').val(total);
            });
            $('body').on('click', '#complete', function(e) {
                var cust_name = $('#cust_name').val();
                var cust_phone = $('#cust_phone').val();
                var cust_national_id = $('#cust_national_id').val();
                var pay_type = $('#pay_type').val();
                if (cust_name == '' || cust_phone == '' || cust_national_id == '' || pay_type == '0') {
                    alert('يجب عليك ملئ جميع الحقول');
                    return false;
                } else if ($('#last_to').val() == '00.00') {
                    alert('يجب عليك اضافه بعض البنود');
                    return false;
                }
            });
        });
    </script>
@stop
