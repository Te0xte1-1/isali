@extends('layouts.app')
@section('title')
    الإستعلامات
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right" style="font-size: 18px !important">الإستعلامات <i class="fa fa-serach"></i>
                    </h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">إضافة</li>
                        <li class="breadcrumb-item active">الإستعلامات</li>
                        <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div align="center">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <h6>نوع الإستعلام</h6>
                        <select name="query_isal_status" value="إيصال" class="form-control form-control-sm"
                            id="query_isal_status">
                            <option value="">--حاله الإيصال</option>
                            @foreach ($Isal_Status as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <h6>رقم الإيصال أو الفاتورة</h6>
                        <input type="text" name="query_isal_serial" placeholder="3545454435"
                            class="form-control form-control-sm" id="query_isal_serial">
                    </div>
                </div>
            </div>
            <button class="btn btn-sm btn-success m-2" id="complete_query">
                طلب الإستعلام
            </button>

            <div class="table-responsive">
                <table id="dataTable"class="table ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>رقم الإيصال</th>
                            <th>إجمالي سعر الإيصال</th>
                            <th>إسم المستفيد</th>
                            <th>الملاحظات</th>
                            <th>حاله الإيصال</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody id="tboody">

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
        </div>
    </div>
@stop
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('body').on('click', '#complete_query', function(e) {
            var query_isal_status = $('#query_isal_status').val();
            var query_isal_serial = $('#query_isal_serial').val();

            $.ajax({
                method: 'post',
                url: "{{ route('Query.Store') }}",
                data_type: 'html',
                data: {

                    _token: '{{ csrf_token() }}',
                    query_isal_status: query_isal_status,
                    query_isal_serial: query_isal_serial,

                },
                success: function(data) {
                    $('#tboody').html(data);

                },
            });
            // alert(id);
        });

        $('body').on('click', '#show_query_detailse', function(e) {

            var id = $(this).data('id');
            $.ajax({
                method: 'post',
                url: "{{ route('Query.detailse') }}",
                data_type: 'html',
                data: {

                    _token: '{{ csrf_token() }}',
                    id: id,
                },
                success: function(data) {
                    $('#modal-lg').modal('show');
                    $('#show_isal_body').html(data);

                },
            });

        });

    });
</script>
