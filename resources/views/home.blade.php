@extends('layouts.app')


@section('content')
    <ul>
    @foreach ($trains as $item)
       <li>{{$item}}</li> 
    @endforeach
    </ul>
@endsection