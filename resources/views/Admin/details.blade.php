@extends('layouts.app')
@section('title', 'Commande')
@section('style-active-show', 'border-bottom')
@section('content')
<br>

@foreach($comande as $c)
<div class="card mb-4">
    <div class="card-header">Total: {{$c->total_pro}}</div>
    <div class="card-body">
        <table class="table table-bordered mb-0">
            <thead>
                <tr>
                    <th>Numero commande </th>
                    <th>Details</th>
                    <th>name produit</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$c->numcom}}</td>
                    <td>{{$c->num_facture}}</td>
                    <td>{{$c->name_pro}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endforeach



            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>nom produit</th>
                                <th>prix</th>
                                <th>Email</th>
                                <th>Mode de paiment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comande as $c)
                            <tr>
                                <td>{{$c->name_pro}}</td>
                                <td>{{$c->prix_pro}}</td>
                                <td>{{$c->email_cl}}</td>
                                <td>{{$c->mode_paiment}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            


@endsection