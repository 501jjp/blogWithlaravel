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
    <form method="post" action={{route('login')}}>
        {{ csrf_field() }}
        <label>姓名</label>
        <input type="text" name="name">
        <label>邮箱</label>
        <input type="text" name="email">
        <label>密码</label>
        <input type="password" name="password">
        <input type="submit" value="提交">
    </form>
@endsection

@section('footer')
    @parent

@endsection