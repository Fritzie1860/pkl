
<html>
    <head>
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
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>

        @yield('content')
    </body>
</html>