@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">I Miei Progetti</h1>
    <a class="btn btn-primary m-5" href="{{route('admin.portfolios.create')}}">Nuovo Progetto</a>
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex flex-wrap big_container">
            @foreach ($portfolio as $item)
            <div class="card carde me-3 mb-4">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="container">
                        <h5>{{$item->name}}</h5>
                        <img src="{{$item->image}}" alt="">
                        <p>{{$item->description}}</p>
                        <span>{{$item->link}}</span><br>
                        <a class="btn btn-primary" href="{{route("admin.portfolios.show", $item->id)}}">Dettagli</a>
                    </div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection