@extends('layouts/master')

@section('body')
<div class="container col-lg-12" style="padding-bottom: 180px;padding-top: 180px">
	<h1 class="text-center " style="color: white;font-size: 130px ">The BEST url shotner in the universe !</h1>
	<form method="post">
    	<input class="center-block input-lg form-group" type="text" value="{{old('url')}}" name="url" placeholder="Enter your URL"> {!! csrf_field() !!}
    	{!!$errors->first('url','<p style="color: white;text-align: center;">:message</p>')!!}<br>
    	<input class="center-block btn btn-lg btn-info" type="submit" value="Shorten URL">
	</form>
</div>
@endsection