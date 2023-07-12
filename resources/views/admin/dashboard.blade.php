@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <h1 class="text-center">I Miei Progetti</h1>
    <a class="btn btn-primary mb-3" href="{{route('admin.portfolios.create')}}">Nuovo Progetto</a>
    <div class="row justify-content-center">
        <div class="col-12 d-flex flex-wrap big_container">
            @foreach ($portfolio as $item)
            <div class="card carde me-3 mb-4">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="container d-flex flex-column justify-content-between">
                        <div>
                            <h5>{{$item->name}}</h5>
                            @if($item->image)
                                <img src="{{$item->image}}" alt="">
                            @else
                                <img src="https://rightclickit.com.au/wp-content/uploads/2018/09/Image-Coming-Soon-ECC.png" alt="">
                            @endif
                        </div>
                        <div>
                            <p>{{$item->description}}</p>
                            <p>categoria:{{ $item->types_id }}</p>
                            <a class="text-decoration-none " href="{{$item->link}}">Vai al Progetto su github</a>
                        </div>
                        <div>
                            <a class="btn btn-primary d-block" href="{{route("admin.portfolios.show", $item->id)}}">Dettagli</a>
                        </div>
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
