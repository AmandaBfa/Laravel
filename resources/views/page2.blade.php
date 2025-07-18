@extends('layouts.main_layout')
@section('content')
<h1>Welcome View e Blade!</h1>
<hr>
<h3>Page 2</h3>
<h3>The value is: {{ $value }}</h3> <!-- essas {{}} é como se fosse o echo -->
@endsection