@extends('parents')
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
    <div>
        @component('component.articleform',["tips"=>$tips])
        @endcomponent
    </div>
    <form method="post" action="dealfiles">
        {{ csrf_field() }}
        <label>标题</label>
        <input type="text" name="title">
        <label>内容</label>
        <label>种类</label>
        <input type="text" name="type">
        <textarea name="article"></textarea>
        <input type="submit">

    </form>
@endsection

@section('footer')
    @parent

@endsection