@extends('layouts.hello')
<style>
  form {
    width: 150px;
  }

  button {
    cursor: pointer;
  }
</style>
@section('title', 'index.blade.php')


@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/" method="post" autocomplete="off">
  @csrf
  <label for="name">氏名</label>
  <input type="text" name="name" value="{{old('name')}}" id="name">

  <label for="email">メールアドレス</label>
  <input type="text" name="email" value="{{old('email')}}" id="email">
  <button>送信する</button>
</form>
@endsection