@extends('Main')

@section('mainpage')

<div class="About-Section">
    <h1>About me</h1>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
    <br>
    <h2>{{ $name }}</h2>
    <br>
    <h3>{{ $Jobs }}</h3>
    <br>
    <p>{{ $desc }}</p>

    <p>hello</p>
</div>

@endsection