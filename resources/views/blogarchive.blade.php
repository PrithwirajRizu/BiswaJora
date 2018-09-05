@extends('master1')


@section('change_as_you_wish')
<?php 
$allblogs=App\Blog::all();
?>

@foreach($allblogs as $key)
<?php

$prsn = Auth::user()->findOrFail($key->idx);
?>
<div class="row">
	
	<div class="col-sm-2"><img src="/uploads/avatars/{{ $prsn->avatar }}" hspace="20" style="width:180px; height:180px;  border-radius:50%;"></div>

	<div class="col-sm-6">

		<header>
			<h3><u><b>{{ $key->title }}</b></u> </h3>
		</header>

		<label>
			<input id="more" type="checkbox">Read more
			<div id="content">
				{{{ $key->content }}}
			</div>
		</label>
	</div>
</div>

<footer><b>
	{{$prsn->name}} Posted {{  $key->created_at->diffForHumans()}}
</b></footer>


	<form method="post" action="">
		
		@csrf
		<input type="hidden" name="postidx" value="{{ $key->id}}">
		<input type="hidden" name="username" value="{{Auth::user()->name}}">
		<button class="btn btn-success" type="submit">Upvote</button>

	</form>

		
		<h4><b>Upvotes : {{ $key-> upvote}}</b></h4>



<br>
<br><br>

@endforeach


@stop

