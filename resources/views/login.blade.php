@extends('layout.header')

@section('content') 

    <img src="" alt="">
    <div class="gradient">
        <div class="login_box">
            <form action="#" method="post">
               
                    <label style="font-size: 12px; text-align: left; margin-left: 6%; font-weight: bolder;">Username</label><br>
                    <input class="box_login" type="text" name="uname" placeholder="Username" required autocomplete="off">
                <div class="box_login">
                    <label style="font-size: 12px; text-align: left; margin-left: 6%; font-weight: bolder;">Password</label><br>
                    <div class="login"><input type="Password" name="password" placeholder="Password" required></div>
                </div>

                <div class="button_login">
                    <input type="submit" name="submit" value="Login" style="margin-bottom: 80px;">
                </div>
            </form>
        </div>
    </div>
@endsection