@extends('layouts.app')
@section('title', 'Create Genre')
@section('style-active-genre', 'border-bottom')
@section('content')
    <div class="container">
        <h1>Create Genre</h1>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Genre</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($genre as $g)
                        <tr>
                            <td>{{$g->genre}}</td>
                            <td>
                                <form action="{{ route('destroyGenre', $g->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 mt-4">
                <form action="{{ route('storeGenre') }}" method="POST" class="border p-4 rounded shadow-sm">
                    @csrf
                    <div class="mb-3">
                        <label for="genre" class="form-label text-white">Add Genre</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="genre" name="genre" required>
                            <button class="btn btn-primary" type="submit">Add</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
