<!doctype html>
<html lang="{{ config('app.locale') }}">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="./css/mycss/blog.css" type="text/css">
@section('href')
@show
<script type="text/javascript"  src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
</head>
<body>
<header>
    @section('header')
        @include('someviews.header')
    @show
</header>

<div>
    @section("top")
        @component("component.top")
        @endcomponent
    @show
</div>

<div>
    @section("middle")
    @show
</div>

<footer>
    @section("footer")
        @include('someviews.footer')
    @show
</footer>
</body>

</html>


