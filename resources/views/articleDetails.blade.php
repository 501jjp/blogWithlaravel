@extends("parents")
@section('href')
    <link rel="stylesheet" href="./css/highlight/github-gist.css">
    <script src="./js/highlight/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    @endsection

@section('header')
    @parent

@endsection

@section('top')
    @parent
@endsection

@section('middle')
    @component("component.articleContent")
        @slot("center")
            {!! $test !!}
            @endslot
        @slot("sidebar")
            @endslot
    @endcomponent

@endsection

@section('footer')
    @parent

@endsection