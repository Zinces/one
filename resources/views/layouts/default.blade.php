<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @include('shared._messages')
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function delSure() {
            var del = confirm('确定删除?')
            if (del){
                return true;
            }  else {
                return false;
            }
        }
    </script>
</body>
</html>