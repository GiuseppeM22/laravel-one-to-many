@extends('layouts.admin')

@section('content')
<div class="d-flex mt-4 mb-4">
    <a class="btn btn-primary me-3" href="{{route('admin.dashboard')}}">Torna ai progetti</a>
    <a class="btn btn-primary me-3" href="{{route('admin.portfolios.edit', $portfolio->id)}}">Modifica</a>
    <form action="{{route("admin.portfolios.destroy", $portfolio)}}" method="POST">
        @csrf
        @method('DELETE')
        <button id="remove" class="btn btn-primary me-3" >Rimuovi</button>
    </form>
</div>
<div class="card carde me-3 mb-4">
    <div class="card-header">Progetto n° {{$portfolio->id}}</div>
        <div class="container">
            <h2>{{$portfolio->name}}</h2>
            <img src="{{$portfolio->image}}" alt="">
            <p>{{$portfolio->description}}</p>
            <span>{{$portfolio->link}}</span>
        </div>
    </div>
</div>
<script>
    let btn_remove = document.getElementById('remove')
  
    btn_remove.addEventListener('click', function(){
      let conferma = confirm('Sicuro di voler cancellare?')
      if(conferma == true){
        document.getElementById('remove').submit()
      }else{
        event.preventDefault();
      }
      })
</script>

@endsection