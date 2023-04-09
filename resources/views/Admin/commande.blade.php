@extends('layouts.app')
@section('title', 'Commande')
@section('style-active-show', 'border-bottom')
@section('content')
<br>
<div class="container">
  <table class="table table-dark table-hover table-bordered text-center">
    <thead>
      <tr>
        <th>Numcom</th>
        <th>Created At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($c->unique('numcom') as $cs)
        <tr>
          <td>{{$cs->numcom}}</td>
          <td>{{$cs->created_at}}</td>
          <td><a class="btn btn-primary" href="">Details</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection