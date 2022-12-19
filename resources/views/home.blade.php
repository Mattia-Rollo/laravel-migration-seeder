@extends('layouts.app')

@section('title')
Tanti Treni TuTti Belli Tranne Uno
@endsection
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Treno</th>
        <th scope="col">Azienda</th>
        <th scope="col">Stazione Partenza</th>
        <th scope="col">Stazione Arrivo</th>
        <th scope="col">Orario Partenza</th>
        <th scope="col">Orario Arrivo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $item)
        {{-- <li>{{$item->orario_partenza}}</li>  --}}
      <tr>
        <th scope="row">{{$item->codice_treno}}</th>
        <td>{{$item->azienda}}</td>
        <td>{{$item->stazione_partenza}}</td>
        <td>{{$item->stazione_arrivo}}</td>
        <td>{{$item->orario_partenza}}</td>
        <td>{{$item->orario_arrivo}}</td>
      </tr>
      
      
      
      
      @endforeach
    </tbody>
  </table>
      
      @endsection