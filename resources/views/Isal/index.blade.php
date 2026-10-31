@extends('layouts.app')
@section('title')
    الإيصــالات
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right">جميع الإيصالات</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">عرض</li>
                        <li class="breadcrumb-item active">جميع الإيصالات</li>
                        <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="card" id="card_warap">
            <div class="print">
                <div align="center">
                </div>
            </div>

            <div align="center">
                <br>
                <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <h6>نوع الإستعلام</h6>
                            <select name="pay_type" class="form-control form-control-sm">
                                <option value="1">--select -- </option>
                                @foreach ($Isal_Status as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <h6>رقم الإيصال أو الفاتورة</h6>
                            <input type="text" name="" value="02450001" class="form-control form-control-sm"
                                id="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <br>
                        <input type="button" class="form-control form-control-sm btn btn-sm btn-primary mt-2"
                            value="إستعلام">
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="dataTable"class="table  table-stripped table-hover dataTable">
                    <br>
                    <thead>
                        <tr>
                            <th width="1%">#</th>
                            <th width="11%">رقم الإيصال</th>
                            <th width="16%">مستلم من</th>
                            <th>التاريخ</th>
                            <th>الوقت</th>
                            <th>المبلغ</th>
                            <th>الحالة</th>
                            <th>الإعتماد</th>
                            <th>مراجعه</th>
                            <th width="3%">تعديل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $item)
                            <tr>
                                <td> <input type="checkbox" data-id="{{ $item->id }}" name="" id="">
                                </td>
                                <td>{{ $item->isal_serial }}</td>
                                <td>{{ $item->isal_customer_name }}</td>
                                <td>{{ $item->isal_date }}</td>
                                <td>{{ $item->isal_time }}</td>
                                <td><strong>
                                        @php

                                            echo number_format($item->isal_total, 2, '.', ',');
                                        @endphp

                                    </strong>
                                </td>
                                <td>
                                    @if ($item->isal_status == 1)
                                        <span class="badge badge-warning">
                                            قيد التنفيذ
                                        </span>
                                    @endif
                                    @if ($item->isal_status == 2)
                                        <span class="badge badge-info">
                                            مؤورشف
                                        </span>
                                    @endif
                                    @if ($item->isal_status == 3)
                                        <span class="badge badge-success">
                                            مكتمل
                                        </span>
                                    @endif
                                    @if ($item->isal_status == 4)
                                        <span class="badge badge-danger">
                                            تم إلغائه
                                        </span>
                                    @endif
                                    @if ($item->isal_status == 5)
                                        <span class="badge badge-danger">
                                            طلب إلغاء إيصال
                                        </span>
                                    @endif

                                </td>
                                <td>
                                    @if ($item->isal_approve == 1)
                                        <span class="badge badge-success">
                                            تم الإعتماد
                                        </span>
                                    @endif
                                    @if ($item->isal_approve == 0)
                                        <span class="badge badge-danger">
                                            لم يتم الإعتماد
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <button id="show_isal" data-id="{{ $item->id }}" class="btn btn-primary btn-sm"><i
                                            class="fa fa-edit"></i></button>
                                </td>
                                <td>

                                    <a href="{{ route('Isal.edit', $item->id) }}" class="btn btn-warning btn-sm"><i
                                            class="fa fa-edit"></i></button>

                                </td>


                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <div class="modal fade" id="modal-lg" style="display: none" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="text-center" style="font-family: cairo">تفاصيل الإيصـــــال</h3>

                        </div>
                        <div class="modal-body" id="show_isal_body" style="padding: 10px;">
                        </div>
                        <div class="modal-footer" style="padding: 0">
                            <input type="button" class="form-control form-control-sm btn btn-danger btn-sm"
                                data-dismiss="modal" value="إغلاق">
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="modal fade" id="modal-default" style="display: none" aria-hidden="true">
                <div class="modal-dialog modal-default">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-center" style="font-family: cairo">سبب إلغاء الإيصـــــال</h5>
                            <button type="button" style="margin-left: 0px;" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-sm text-center">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <div class="modal-body" id="cancel_isal_body" style="padding: 10px;">


                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
        </div>

        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- AdminLTE App -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script>
            $('body').on('click', '#show_isal', function(e) {
                e.preventDefault();
                var isal_id = $(this).html();
                var isal_id = $(this).data('id');

                $.ajax({
                    method: 'post',
                    // dataType: 'html',
                    url: "{{ route('Isal.all_show') }}",
                    data: {
                        _token: '{{ csrf_token() }}',
                        'isal_id': isal_id
                    },
                    success: function(data) {
                        // For Edit iNVOICE HAS creted
                        $('#modal-lg').modal({
                            show: true,
                            backdrop: 'static',
                        });
                        $('#show_isal_body').html(data);
                        // console.log(data);

                    },
                });

            });

            // Order To Cancel Isal
            $('body').on('click', '#cancel_isal', function(e) {
                e.preventDefault();
                var isal_id = $(this).html();
                var isal_id = $(this).data('id');

                $.ajax({
                    method: 'post',
                    // dataType: 'html',
                    url: "{{ route('Isal.Ajax.Cancel_Isal') }}",
                    data: {
                        _token: '{{ csrf_token() }}',
                        'isal_id': isal_id
                    },
                    success: function(data) {
                        // For Edit iNVOICE HAS creted
                        $('#modal-default').modal({
                            show: true,
                            backdrop: 'static',
                        });
                        $('#cancel_isal_body').html(data);
                        // console.log(data);

                    },
                });

            });
        </script>
    @endsection
