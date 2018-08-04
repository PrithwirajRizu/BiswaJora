@extends('master1')


@section('change_as_you_wish')
<?php 
$allblogs=App\Blog::all();
?>

@foreach($allblogs as $key)
<article>

<header>
<h3> {{ $key->title }} </h3>
</header>


<div  class="dv">

		{{ $key->content}}
</div>

</article>
<footer>
	Uploaded {{  $key->created_at->diffForHumans()}}
</footer>


@endforeach


@stop

