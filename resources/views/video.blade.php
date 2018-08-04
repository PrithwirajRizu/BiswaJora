@extends('master')


@section('change_as_you_wish')
<?php 
$allvideos=App\Video::all();
?>

@foreach($allvideos as $key)



<h3> {{ $key->title }} </h3>



<div >
<?php


$vidID=substr($key->link, 32);

$vid='<iframe align="middle" width="700" height="300" src="https://www.youtube.com/embed/'.$vidID.'" allowfullscreen />
</iframe>';

	echo $vid;

?>
</div>

<footer>
	Uploaded {{  $key->created_at->diffForHumans()}}
</footer>


@endforeach


@stop

