<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">إيصال جديد</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">إيصالات اليوم</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">جميع الإيصالات</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">التقارير</a>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="right_sidebfar">
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <a href="{{ route('Dashboard') }}" class="main_title" style="color: #17a2b8;">
                            الصفحة الرئيسية
                            <i class="fa fa-home"></i>
                        </a>
                        <div class="user-panel mt-3 pb-1 mb-1 d-flex">
                            <div class="image">
                                <img src="{{ asset('img/user.jpg') }}" style="widht:70px"; height="70px"
                                    class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                                <a href="#" class="d-block">
                                    <strong>
                                        المشرف
                                    </strong>
                                </a>
                            </div>
                        </div>

                        {{-- close الضبط العام --}}
                        <li class="nav-item has-treeview {{ request()->is('Settings') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link" style="border-top:1px solid#ddd">
                                <i class="fa fa-tools"></i>
                                <b>
                                    <p>
                                        الإعدادات الرئيسية
                                        <i style="float: left" class="fas fa-angle-left right"></i>
                                    </p>
                                </b>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item"><a href="{{ route('Settings') }}" class="nav-link"> <i
                                            class="fa fa-cog"></i> إعدادات النظام </a></li>
                                <li class="nav-item"><a href="{{ route('Users') }}" class="nav-link"> <i
                                            class="fa fa-users"></i> المستخدمين </a></li>
                                <li class="nav-item"><a href="{{ route('Admins') }}" class="nav-link"> <i
                                            class="fa fa-users"></i> المشرفين </a></li>
                            </ul>
                        </li>
                        {{-- close الضبط العام --}}


                        {{--  الإيصــالات --}}
                        <li class="nav-item has-treeview {{ request()->is('Query') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link" style="border-top:1px solid#ddd">
                                <i class="nav-icon far fa-file-alt"></i>
                                {{-- far fa-file-alt --}}
                                <b>
                                    <p>
                                        الإيصالات
                                        <i style="float: left" class="fas fa-angle-left right"></i>
                                    </p>
                                </b>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="{{ route('Isal.create') }}" class="nav-link"> <i
                                            class="fa fa-store"></i> اصدار إيصال </a></li>
                                <li class="nav-item"><a href="{{ route('Query') }}" class="nav-link"> <i
                                            class="fa fa-search"></i> الإستعلامات</a></li>
                                <li class="nav-item"><a href="{{ route('Isal.Cancel') }}" class="nav-link"> <i
                                            class="far fa-times-circle"></i> طلبات إلغاء الإيصالات </a></li>
                            </ul>
                        </li>
                        {{--  الإيصــالات --}}

                        {{--  العمـــليات --}}
                        <li class="nav-item has-treeview {{ request()->is('Isal') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link" style="border-top:1px solid#ddd">
                                <i class="nav-icon fas fa-sync"></i>
                                <b>
                                    <p>
                                        العمليـــات
                                        <i style="float: left" class="fas fa-angle-left right"></i>
                                    </p>
                                </b>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="{{ route('Isal') }}" class="nav-link"> <i
                                            class="fa fa-file"></i> جميع الإيصالات </a></li>
                                <li class="nav-item"><a href="{{ route('Isal.Extracted') }}" class="nav-link"> <i
                                            class="fa fa-check"></i> الإيصالات المصدرة </a></li>
                                <li class="nav-item"><a href="{{ route('Isal.In_Proccess') }}" class="nav-link"> <i
                                            class="fa fa-sync"></i> الإيصالات قيد التنفيذ </a></li>
                                <li class="nav-item"><a href="{{ route('Isal.Archived') }}" class="nav-link"> <i
                                            class="icon fas fa-exclamation-triangle"></i> الإيصالات المؤورشفة </a></li>
                                <li class="nav-item"><a href="{{ route('Isal.Rejected') }}" class="nav-link"> <i
                                            class="far fa-times-circle"></i> الإيصالات
                                        الملفاة </a></li>

                            </ul>
                        </li>
                        {{--  العمــليات --}}


                        {{--  العمـــليات --}}
                        <li class="nav-item has-treeview {{ request()->is('Services') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link" style="border-top:1px solid#ddd">
                                <i class="nav-icon fas fa-flag"></i>
                                <b>
                                    <p>
                                        الخدمات والوحدات
                                        <i style="float: left" class="fas fa-angle-left right"></i>
                                    </p>
                                </b>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="{{ route('Services') }}" class="nav-link"> <i
                                            class="far fa-credit-card"></i> الخدمات </a></li>
                                <li class="nav-item"><a href="{{ route('Units') }}" class="nav-link"> <i
                                            class="fas fa-lg fa-building"></i> الوحدات </a></li>

                            </ul>
                        </li>
                        {{--  العمــليات --}}


                        {{-- التقارير --}}
                        <li class="nav-item has-treeview {{ request()->is('Reports') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link" style="border-top:1px solid#ddd">
                                <i class="nav-icon fas fa-calendar-alt"></i>
                                <b>
                                    <p>
                                        التقارير
                                        <i style="float: left" class="fas fa-angle-left right"></i>
                                    </p>
                                </b>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('Reports') }}" class="nav-link">
                                        <i class="far fa-file"></i>
                                        <p>التقارير</p>
                                    </a>
                                </li>



                            </ul>
                        </li>
                        {{-- close التقارير --}}
                        {{-- <li class="nav-item has-treeview "> --}}
                        <a href="{{ route('isal_67') }}" class="nav-link" style="border-top:1px solid#ddd">
                            <i class="nav-icon"></i>
                            <b>
                                <p>
                                    تقرير
                                    <i style="float: left" class="">67</i>
                                </p>
                            </b>
                        </a>
                        {{-- </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>

        </div>
        <nav class="mt-5">
            <ul>
                <li><a href=""class="nav-link">تسجيل خروج</a></li>
            </ul>
        </nav>
    </aside>
    <!-- main Sidebar content -->

    <div class="wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>

    </div>




    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('js/Adminlte.min.js') }}"></script>

    <!-- Bootstrap App -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- DataTable -->
    <script src="{{ asset('js/datatables.min.js') }}"></script>


    <script>
        $('#dataTable').DataTable({
            "responsive": true,
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    </script>
</body>

</html>
