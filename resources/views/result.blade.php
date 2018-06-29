@extends('layouts/master')

@section('body')
<div class="container col-lg-12 text-center" style="padding-bottom: 180px;padding-top: 250px">
	<a href="{{ config('app.url') }}/{{ $shortned }}" style="color: white;font-size: 60px ; text-align: center;text-decoration: none"> {{config('app.url')}}/{{$shortned}} </a>
	<br><br>
	<a class="text-center btn btn-lg btn-info" href="welcome.blade.php">shorten another url</a>
</div>
@endsection