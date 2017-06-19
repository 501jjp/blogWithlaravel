@extends("parents")
@section('href')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('top')
    @parent
@endsection

@section('middle')
    @include('someviews.middle',["pas"=>$pas,"type"=>$type])
@endsection

@section('footer')
    @parent

@endsection