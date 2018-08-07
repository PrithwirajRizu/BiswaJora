@extends('master1')


@section('change_as_you_wish')
<?php 
$allblogs=App\Blog::all();
?>

@foreach($allblogs as $key)
<article area shape="rect">

<header>
<h3><font color="black"><b> Blog No. {{ $key->id }}--> <u>{{ $key->title }}</u></b></font> </h3>
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

