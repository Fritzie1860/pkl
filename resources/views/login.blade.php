@include('layout.app')
<body>
<div class="login_box" style="position:static;">
    <div class="margin_input">
        <img src="/images/invest.png" alt="">
        <form action="/login" method="post">
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
                <h1>Email</h1>
                <input class="box_login" type="text" name="email" placeholder="Email" required autocomplete="off">
            </div>
            <div class="text_log pass">
                <h1>Password</h1>
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
</body>
</html>
