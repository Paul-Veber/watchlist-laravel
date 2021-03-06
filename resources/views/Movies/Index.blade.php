@extends('Layouts.App')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('movies.create') }}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>description</th>
            <th>release year</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
        @foreach ($movies as $movie)
            <tr>
                <td>{{$movie['id']}}</td>
                <td>{{$movie['name']}}</td>
                <td>{{$movie['description']}}</td>
                <td>{{$movie['release_year']}}</td>
                <td>{{$movie['created_at']}}</td>
                <td>
                    <form action="{{ route('movies.destroy', ['movie' => $movie['id']]) }}" method="POST">

                        <a href="{{ route("movies.show", ['movie' => $movie['id']]) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('movies.edit', ['movie' => $movie['id']]) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $movies->links() !!}

@endsection