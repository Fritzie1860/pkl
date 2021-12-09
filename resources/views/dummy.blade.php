<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Invest Islands | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style0.css" rel="stylesheet">
    

</head>

<body style="background-image: url('images/gradient.png');  ">
    <center>
        <div class="middle-box loginscreen" >
        <div style="height:150px; margin-top: 25px;">

        </div>    
        <div class="login_box">
                <div>
                    <img src="/images/invest.png" alt="" style="height: 100px; width:170px;">
                </div>

                <form action="/login" method="post" >
                    @csrf

                    @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Something it's wrong:
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                    @endif

                    <div class="text_log email">
                        <h5>Email</h5>
                        <input class="box_login" type="text" name="email" placeholder="Email" required autocomplete="off">
                    </div>
                    <div class="text_log pass">
                        <h5>Password</h5>
                        <input type="Password" name="password" placeholder="Password" required>
                    </div>

                    <div class="text-log apa">
                        <input type="checkbox" name="cek">
                        <label for="cek">Remember Me</label>
                        <a href="#" style="float: right; margin-right: 25px; color: #141414; text-decoration: none;">Forget Password?</a>
                    </div>

                    <div class="button_login">
                        <input type="submit" name="submit" value="Sign In" style="margin-bottom: 80px;">
                    </div>

                </form>
            </div>
        </div>
    </center>
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>