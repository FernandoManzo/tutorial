<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
    <H2>hOLA2</H2>
    @include('nav')
    <h1>@lang('main.title')</h1>
    <div class="container">
        @yield('content')
    </div>

    @section('sidebar')
    <h3>Siderbar</h3>
    @show

</body>
</html>