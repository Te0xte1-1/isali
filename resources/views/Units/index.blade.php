@extends('layouts.app')
@section('title')
    الوحدات
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-right" style="font-size: 18px !important">الوحدات الإدارية <i class="fas fa-lg fa-building"></i>
                    </h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left" style="direction: ltr !important">
                        <li class="breadcrumb-item active">إضافة</li>
                        <li class="breadcrumb-item active">الوحدات</li>
                        <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">الرئيسية</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        @if (Session::has('success'))
            <div class="alert alert-success alert-sm text-center">
                {{ Session::get('success') }}
            </div>
        @endif
        <form action="{{ route('Units.create.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="unit_name" id="unit_name" placeholder="اسم الوحدة الإدارية"
                            class="form-control form-control-sm">
                        @error('unit_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <input type="submit" class="form-control form-control-sm btn btn-primary btn-sm" value="حفظ البيانات">
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table id="dataTable"class="table  table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم الوحدة</th>
                        <th>تعديل </th>
                        <th>حذف </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $item)
                        <tr>
                            <td> <input type="checkbox" data-id="{{ $item->id }}" name=""
                                    id="{{ $item->id }}">
                            </td>
                            <td>{{ $item->unit_name }}</td>
                            <td><button id="edit_unit" data-id="{{ $item->id }}" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit"></i></button></td>
                            <td><button id="delete_unit" data-id="{{ $item->id }}" class="btn btn-danger btn-sm"><i
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
                        <h3 class="text-center" style="font-family: cairo">تعديل بيانات الوحدة</h3>

                    </div>
                    <div class="modal-body" id="show_unit_body" style="padding: 10px;">
                    </div>
                    <div class="modal-footer" style="padding: 0">
                        <input type="button" class="btn btn-danger btn-sm" data-dismiss="modal" value="إغلاق">
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        {{-- ////////////////////////modal///////////////////////////// --}}
    </div>

    </div>




    {{-- //////////////////////java script///////////////////////// --}}

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        $('body').on('click', '#edit_unit', function(e) {
            e.preventDefault();
            var unit_id = $(this).html();
            var unit_id = $(this).data('id');

            $.ajax({
                method: 'post',
                // dataType: 'html',
                url: "{{ route('Units.Ajax.Edit') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    'unit_id': unit_id
                },
                success: function(data) {
                    // For Edit iNVOICE HAS creted
                    $('#modal-xl').modal({
                        show: true,
                        backdrop: 'static',
                    });
                    $('#show_unit_body').html(data);
                    // console.log(data);

                },
            });

        });
        $('body').on('click', '#delete_unit', function(e) {
            e.preventDefault();
            var unit_id = $(this).html();
            var unit_id = $(this).data('id');

            $.ajax({
                method: 'post',
                // dataType: 'html',
                url: "{{ route('Units.Ajax.Delete') }}",
                data: {
                    _token: '{{ csrf_token() }}',
                    'unit_id': unit_id
                },
                success: function(data) {
                    // For Edit iNVOICE HAS creted
                    $('#modal-lg').modal({
                        show: true,
                        backdrop: 'static',
                    });
                    $('#show_unit_body').html(data);
                    // console.log(data);

                },
            });

        });
    </script>
@stop
