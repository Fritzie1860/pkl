<html>
    <head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="side_bg"  >
            <img src="{{asset('images/invest_sidebar.png')}}" >   
            @include('layout.header')
            <div class="sub_menu">
                <img src="{{asset('images/home_fill.png')}}" > 
                <a href="#">
                    Dashboard
                </a>
            </div>

            <div class="sub_menu">
                <img src="{{asset('images/folder_fill.png')}}"> 
                <a href="#">
                    Projects
                </a>
            </div>

            <div class="sub_menu"> 
                <img src="{{asset('images/users_fill.png')}}">
                <a href="#">
                    Users
                </a>
            </div>
        </div>
        
    </body>
</html>