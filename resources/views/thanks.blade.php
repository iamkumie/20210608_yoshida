@extends('layouts.hello')
<style>
  th {
    background-color: black;
    color: white;
    padding: 5px 30px;
  }

  td {
    border: 1px solid black;
    padding: 5px 30px;
    text-align: center;
  }
</style>
@section('title', 'thanks.blade.php')


@section('content')
<p>お問い合わせありがとうございます。</p>
<a href="/">トップへ戻る</a>
@endsection