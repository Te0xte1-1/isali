<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>
<style>
    body {
        background: #edeff6 !important;
        color: :#ddd;
        font-family: cairo;
    }

    .square {
        width: 430px;
        height: 380px;
        background: #ffffff;
        border: 1px solid #ddd;
        border-radius: 3px;
        box-shadow: 0 1px 1px 0 #ddd;
        margin: 75px auto;
        padding: 20px 40px 20px 40px;
        text-align: center
    }

    #done {
        background: #0078d4;
        color: #ffffff;
        font-size: 14px;
        font-weight: bold;
        width: 80px;
    }

    .header {
        background-color: #FFF;
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        box-shadow: 0 1px 10px 0 #d1dbeb;
        z-index: 10;

    }

    .center {
        width: fit-content;
        position: absolute;
        top: 70px !important;
        left: 620px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 28px;
        color: #ffffff;
    }

    label {
        text-align: left !important;
        font-family: cairo;
        color: #0009;
    }

    .square h6 {
        color: #0009;
        font-size: 28px;
        text-align: left;
    }

    .alert {
        position: absolute;
        top: 60px !important;
        left: 670px;
        font-family: cairo;
        font-size: 38px;
    }
</style>

<body>
    <div class="header">
        <a href="#" style="margin-left: 20px">
            <img src="{{ asset('img/dash.jpg') }}" style="border-radius: 50%;margin:5px 0;" width="50" height="50"
                alt="" srcset="">
            IP-MAGIX
        </a>
        <a href="{{ route('login') }}" style="margin-right:10px" class="btn btn-default btn-sm"> login</a>
    </div>
    <div class="container-fluid">
        <div class="square">
            @if (Session::has('success'))
                <div class="alert alert-success alert-sm text-center">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form method="POST" id="form_data" action="{{ route('sign_up_store') }}">
                @csrf
                <h6>Sign Up</h6>
                <hr>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" placeholder="Enter User" required class="form-control form-control-sm"
                    name="user" id="user" autocomplete="User" autofocus>
                    @error('user')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="text" placeholder="Enter E-Mail" required class="form-control form-control-sm"
                    name="email" id="email" autocomplete="email">
                    @error('email')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="text" placeholder="Enter Password" required class="form-control form-control-sm"
                    name="password" id="Password">
                    @error('password')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="text" placeholder="Confirm Password" required class="form-control form-control-sm"
                    name="confirm_password" id="">
                    @error('confirm_password')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div align="left">
                    <input type="checkbox" name="" id="">
                    <label for="" style="margin:7px 0 25px 2px"> I agree to the terms of service.</h6>
                </div>
                <div class="log" style="display: flex; justify-content:space-between">
                    <button type="submit" id="done" class="btn btn-primary btn-sm">login</button>
                    <a href="">Forget Your Password ...?</a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>
