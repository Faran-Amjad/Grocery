<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">
    <link rel="shortcut icon" href="{{asset('public/assets/images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('public/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    @include('assets')
</head>
<body>
    <div id="app">

        
        <div id="sidebar" class='active'>
            @include('admin.nav')
        </div>
            @include('admin.topbar')
            @yield('content')
            
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2020 &copy; Voler</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    
    </div>
    <script src="{{asset('public/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('public/assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('public/assets/js/app.js')}}"></script>
    
    <script src="{{asset('public/assets/js/main.js')}}"></script>
</body>
</html>