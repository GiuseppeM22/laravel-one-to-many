@extends('layouts.admin')

@section('content')
<div class="container my-3">
    <h1>Nuovo Progetto</h1>
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
            <form action="{{ route('admin.portfolios.store')}}" method="post" class="needs-validation">
                @csrf
            
                <label for="name">name</label>
                <input class="form-control class="form-control @error('name') is-invalid @enderror"" type="text" name="name"">
                @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror  

                <label for="name">image</label>
                <input class="form-control class="form-control @error('image') is-invalid @enderror"" type="text" name="image"">
                @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">description</label>
                <input class="form-control class="form-control @error('description') is-invalid @enderror"" type="text" name="description"">
                @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="name">github link</label>
                <input class="form-control class="form-control @error('link') is-invalid @enderror"" type="text" name="link"">
                @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
             </form>
        </div>
    </div>

</div>
@endsection