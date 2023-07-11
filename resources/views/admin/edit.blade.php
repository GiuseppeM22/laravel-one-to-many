@extends('layouts.admin')

@section('content')
<div class="container my-3">
    <h1>Modificare Progetto n°{{$portfolio->id}}</h1>
    <div class="row g-4 py-4">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col">
            <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="post">
                @csrf
                @method ('PUT')
            
                <label for="name">name</label>
                <input class="form-control" type="text" name="name" value="{{$portfolio->name}}">

                <label for="name">image</label>
                <input class="form-control" type="text" name="image" value="{{$portfolio->image}}">

                <label for="name">description</label>
                <input class="form-control" type="text" name="description" value="{{$portfolio->description}}">

                <label for="name">github link</label>
                <input class="form-control" type="text" name="link" value="{{$portfolio->link}}">

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
             </form>
        </div>
    </div>

</div>
@endsection