@extends('layouts.app')
@section('title')
طلب إلغاء إيصال
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right">الإيصالات المطلوب إلغائها</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">عرض</li>
                        <li class="breadcrumb-item active">الإيصالات المطلوب إلغائها</li>
                        <li class="breadcrumb-item active">الإيصالات</li>
                                                    <li class="breadcrumb-item active"><a href="{{ route('Dashboard')}}">الرئيسية</a></li>

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
                                <option value="1">نقدي</option>
                                <option value="2">شيك</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <h6>رقم الإيصال أو الفاتورة</h6>
                            <input type="text" name="isal_serial" value=""
                                class="form-control form-control-sm" id="isal_serial">
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
                <table id="dataTable"class="table  table-stripped table-hover">
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
                            <th>إعتماد</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($data as $index=> $item)
                            <tr>
                                <td> <input type="checkbox" data-id="{{ $item->id }}" name="" id="">
                                </td>

                                <td>{{ $item->isal_serial }}</td>
                                <td>{{ $item->isal_customer_name }}</td>
                                <td>{{ $item->isal_date }}</td>
                                <td>{{ $item->isal_time }}</td>
                                <td><strong>  @php
                                            echo number_format($item->isal_total, 2, '.', ',');
                                        @endphp</strong></td>
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
                                            class="fa fa-tv"></i></button>
                                    <button id="cancel_isal" data-id="{{ $item->id }}" class="btn btn-danger btn-sm"><i
                                            class="far fa-times-circle"></i></button>

                                </td>
                                <td>
                                    @if ($item->isal_approve == 1)
                                        <span class="badge badge-success">
                                            معتمد
                                        </span>
                                    @else
                                        <button data-id="{{ $item->id }}" id="approve_isal"
                                            class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                                </td>
                        @endif

                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            {{-- show isal detailse --}}
            <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">عرض بيانات الإيصال</h4>
                            <button type="button" style="margin-left: 0px;" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" id="show_isal_body">
                            <p>One fine body…</p>
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
            {{-- Close Show Isal Detailse --}}


            {{-- Order To Cancel --}}
            <div class="modal fade" id="modal-default" style="display: none" aria-hidden="true">
                <div class="modal-dialog modal-default">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-center" style="font-family: cairo">سبب إلغاء الإيصـــــال</h5>
                            <button type="button" style="margin-left: 0px;" class="close" data-dismiss="modal" aria-label="Close">
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
            {{-- Close Order To Cancel --}}

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


        $('body').on('click', '#approve_isal', function(e) {
            e.preventDefault();
            var isal_id = $(this).html();
            var isal_id = $(this).data('id');

            $.ajax({
                method: 'post',
                // dataType: 'html',
                url: "{{ route('Isal.convert_proccess_to_approve') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    'isal_id': isal_id
                },
                success: function(data) {
                    // For Approve isal
                    alert('لقد تم إعتماد الإيصال بنجاح');
                    window.location = route('Isal.In_Proccess');
                },
            });

        });
    </script>
@endsection
