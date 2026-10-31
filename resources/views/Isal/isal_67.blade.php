@extends('layouts.app')
@section('title')
    الإيصــالات
@endsection
<style>
    .info-box {
        box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgb(0 0 0) !important;
        border-radius: .25rem;
        background-color: #fff;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 1rem;
        min-height: 80px;
        padding: .5rem;
        position: relative;
        width: 100%;
    }
</style>
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right">الإيصالات 67</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">عرض</li>
                        <li class="breadcrumb-item active">جميع الإيصالات 67</li>
                        <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="card" id="card_warap">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><strong> جميع ايصالات 67 </strong></span>
                            <span class="info-box-number">1,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><strong> ايصالات اليوم 67 </strong></span>
                            <span class="info-box-number">410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><strong> لم تتم 67 </strong></span>
                            <span class="info-box-number">13,648</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>

        </div>
        <div class="card" id="card_warap">
            <div align="center">
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <h6>من تاريخ</h6>
                            <input type="date" name="to" class="form-control form-control-sm" id="to">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <h6>الى تاريخ</h6>
                            <input type="date" name="from" class="form-control form-control-sm" id="from">
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

                    </tbody>

                </table>
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
