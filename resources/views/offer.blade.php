@extends('master')

@section('content')

<?php echo Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S'); ?>


@endsection