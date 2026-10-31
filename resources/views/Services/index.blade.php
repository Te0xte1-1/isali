@extends('layouts.app')
@section('title')
    الخدمات
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right" style="font-size: 18px !important">الخدمات<i class="far fa-credit-card"></i>
                    </h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">إضافة</li>
                        <li class="breadcrumb-item active">الخدمات</li>
                        <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <br>
        @if (Session::has('success'))
            <div class="alert alert-success alert-sm text-center">
                {{ Session::get('success') }}
            </div>
        @endif

        <form action="{{ route('Services.create.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" name="service_name" id="service_name" placeholder="اسم الخدمه"
                            class="form-control form-control-sm">
                        @error('service_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="number" name="service_price" id="service_price" placeholder="قيمة الخدمه"
                            class="form-control form-control-sm">
                        @error('service_price')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-5">
                    <input type="submit" class="form-control form-control-sm btn btn-primary btn-sm " value="حفظ البيانات">
                </div>
        </form>
    </div>
    <br>

    {{-- Table show --}}
    <div class="table-responsive">
        <table id="dataTable"class="table  table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>اسم الخدمه</th>
                    <th>رسم الخدمه</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                    <tr>
                        <td> <input type="checkbox" data-id="{{ $item->id }}" name="number_of_filed"
                                id="{{ $item->id }}"></td>
                        <td>{{ $item->service_name }}</td>
                        <td>
                            <strong>
                                @php
                                    echo number_format($item->service_price, 2, '.', ',');
                                @endphp
                            </strong>
                        </td>
                        <td><button id="edit_service" data-id="{{ $item->id }}" class="btn btn-warning btn-sm"><i
                                    class="fa fa-edit"></i></button></td>
                        <td><button id="delete_service" data-id="{{ $item->id }}" class="btn btn-danger btn-sm"><i
                                    class="fa fa-trash"></i></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    {{-- ////////////////////////modal///////////////////////////// --}}
    <div class="modal fade" id="modal-xl" style="display: none" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center" style="font-family: cairo">تعديل بيانات خدمة</h3>

                </div>
                <div class="modal-body" id="show_service_body" style="padding: 10px;">
                </div>
                <div class="modal-footer" style="padding: 0">
                    <input type="button" class="form-control form-control-sm btn btn-danger btn-sm" data-dismiss="modal"
                        value="إغلاق">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    {{-- ////////////////////////modal///////////////////////////// --}}
    </div>


    {{-- //////////////////////java script///////////////////////// --}}

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        $('body').on('click', '#edit_service', function(e) {
            e.preventDefault();
            var service_id = $(this).html();
            var service_id = $(this).data('id');

            $.ajax({
                method: 'post',
                // dataType: 'html',
                url: "{{ route('Service.Ajax.Edit') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    'service_id': service_id
                },
                success: function(data) {
                    // For Edit iNVOICE HAS creted
                    $('#modal-xl').modal({
                        show: true,
                        backdrop: 'static',
                    });
                    $('#show_service_body').html(data);
                    // console.log(data);

                },
            });

        });
        $('body').on('click', '#delete_service', function(e) {
            e.preventDefault();
            var service_id = $(this).html();
            var service_id = $(this).data('id');

            $.ajax({
                method: 'post',
                // dataType: 'html',
                url: "{{ route('Service.Ajax.Delete') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    'service_id': service_id
                },
                success: function(data) {
                    // For Edit iNVOICE HAS creted
                    $('#modal-lg').modal({
                        show: true,
                        backdrop: 'static',
                    });
                    $('#show_service_body').html(data);
                    // console.log(data);

                },
            });

        });
    </script>
@stop
