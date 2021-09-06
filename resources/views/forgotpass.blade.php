
@extends('layout.app')
@section('title')
    <title>Invest Islands || Forgot Password</title>
    <style>
        body {
                background-size: cover;
                background-image: url("images/gradient.svg");
                left: 0px;
                top: -6px;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
        
        
    </style>
@endsection 
<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="login_box">
            <div class="margin_input">
                <!-- <div>
                    <img class="logo-name" src="/images/invest.png" alt="Logo Invest Islands">
                </div> -->
                <form class="m-t" role="form" action="url('web.whatsapp.com')">
                    <!-- <div class="form-group">
                        <p class="font_warna">Username</p>
                        <input type="email" class="form-control" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <p class="font_warna">Password</p>
                        <input type="password" class="form-control" placeholder="Password" required="">
                    </div> -->
                    <p class="font_warna">Silahkan hubungi administrator untuk memulihkan/mengganti password Anda.</p>
                    <button type="submit" class="btn btn-primary block full-width m-b">Contact Admin</button>
                    <a class="font_warna" href="/login"><small>Login</small></a>
                </form>
            </div>
        </div>    
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
