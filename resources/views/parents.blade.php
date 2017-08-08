<!doctype html>
<html lang="{{ config('app.locale') }}">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="./css/mycss/blog.css" type="text/css">
@section('href')
@show
<script type="text/javascript"  src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
<head>
    <link href="https://i.loli.net/2017/08/08/59898040c1049.png" rel="shortcut icon">
    <meta name="author" content="501jjp" />
    <meta name="renderer" content="webkit">
    <meta name="description" content="Everything about 501jjp" />
    <meta name="keywords" content="jjp,501jjp,季俊鹏,季俊鹏的博客,501jjp的博客" />
    <meta charset="utf-8">
    <title>Laravel</title>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?49af6d7d56e6e6180e3d48cd6fdbbf56";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
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


