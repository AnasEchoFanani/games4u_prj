@extends('layouts.app')
@section('title', 'Create Game')
@section('style-active-add', 'border-bottom')
@section('content')
<div class="container" style="color: white;">
@foreach($c->unique('numcom') as $cs)
                    <tr>
                        <td>{{$cs->numcom}}</td>
                        <td>{{$cs->created_at}}</td>
                        
                        <td><a class="btn btn-primary" href=" " >Details</a></td>
                    </tr>
                @endforeach
                
</div>

@endsection