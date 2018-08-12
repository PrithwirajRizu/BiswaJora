@extends('master1')


@section('change_as_you_wish')
<?php 
$allblogs=App\Blog::all();
?>

@foreach($allblogs as $key)
<article >

	<header>
		<h3><u><b>{{ $key->title }}</b></u> </h3>
	</header>

	<label>
  <input id="more" type="checkbox">Read more
  <div id="content">
  		{{ $key->content}}
  </div>
</label>

	
	
		




	</article>
	<footer><b>
		created {{  $key->created_at->diffForHumans()}}
	</footer><b>


	@endforeach


	@stop

