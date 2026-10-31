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
        height: 300px;
        background: #ffffff;
        border: 1px solid #ddd;
        border-radius: 3px;
        box-shadow: 0 1px 1px 0 #ddd;
        margin: 95px auto;
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
    }label{
        font-size: 18px;
        font-weight: 500;

        font-family: cairo;
    }
</style>

<body>
 
    <div class="container-fluid">
        <div class="square">
            <form method="POST" id="form_data" action="{{ route('login_store') }}">
                @csrf
                <h6>Insert OTP Number </h6>
                <hr>
                <label for="test">Lorem ipsum dolor sit amet, consectetur <br>Test Code For Your Health Without Injering </h6>
                <hr>


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="number" placeholder="Enter Code" required class="form-control form-control-sm"
                        name="otp_number" id="">
                </div>

              <br>
                <div class="log" style="display: flex; justify-content:space-between">
                    <a href="{{ route('login') }}">Did Not Get Code ...?</a>
                    <button type="submit"  class="btn btn-dark btn-sm">Submit</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>
