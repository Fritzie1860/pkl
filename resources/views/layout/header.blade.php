<html>
    <head>
        <style>
            body {
    position: absolute;
    width: 1920px;
    height: 1086px;
    background-image: url("images/gradient.svg");
    left: 0px;
    top: -6px;
    background-repeat: no-repeat;
    background-attachment: fixed;
    /* background: #FFFFFF; */
    
}
        </style>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <h1>
            header
        </h1>

        @yield('content')
    </body>
</html>