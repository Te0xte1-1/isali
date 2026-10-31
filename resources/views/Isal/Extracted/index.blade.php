@extends('layouts.app')
@section('title')
الإيصالات المكتملة
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right">جميع الإيصالات الصادرة</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">عرض</li>
                        <li class="breadcrumb-item active">جميع الإيصالات الصادرة</li>
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

                    <div class="col-sm-3">
                        <div class="form-group">
                            <h6>نوع الإستعلام</h6>
                            <select name="pay_type" class="form-control form-control-sm">
                                <option value="1">نقدي</option>
                                <option value="2">شيك</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <h6>رقم الإيصال أو الفاتورة</h6>
                            <input type="text" name="isal_serial" value=""
                                class="form-control form-control-sm" id="isal_serial">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <input type="button" class="form-control form-control-sm btn btn-sm btn-primary mt-2"
                            value="إستعلام">
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <br>
                            <input type="button" class="form-control form-control-sm btn btn-sm btn-success mt-2"
                                value="67 استخراج تقرير">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="dataTable"class="table  table-stripped table-hover">
                    <br>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>رقم الإيصال</th>
                            <th>مستلم من</th>
                            <th>تاريخ الإيصال</th>
                            <th>وقت الإيصال</th>
                            <th>المبلغ المتحصل</th>
                            <th>حاله الإيصال</th>
                            <th>حاله الإعتماد</th>
                            <th>مراجعه الإيصال</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index=> $item)
                            <tr>
                                <td> <input type="checkbox" data-id="{{ $item->id }}" name="" id=""></td>
                      
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
                                <td><a href="{{ route('Isal.Extracted.Print', $item->id) }}"
                                        class="btn btn-default btn-sm"><i class="fa fa-print"></i></a></td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Extra Large Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" id="show_isal_body">
                            <p>One fine body…</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">إغلاق</button>
                        </div>
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
            var bill_id = $(this).html();
            var bill_id = $(this).data('id');

            $.ajax({
                method: 'post',
                dataType: 'html',
                url: "{{ route('Isal.all_show') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    'bill_id': bill_id
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
    </script>
@endsection
