@extends('layouts.app')

@section('title', 'Train Travel')

@section('content')


<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">Train</h1>
        <p class="col-md-8 fs-4">Find yuor travel </p>
        <button class="btn btn-primary btn-lg" type="button">Find out more</button>
    </div>
</div>


<section class="latest_houses py-5">
    <div class="container">
        <h3>Houses</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @forelse ($trains as $train)
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="{{$train->image}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4>{{$train->azienda}}</h4>
                        <div class="price">
                            Price: ${{$train->price}}
                        </div>
                        <p>{{$train->stazione_di_partenza}}</p>
                        <p>{{$train->stazione_di_arrivo}}</p>
                        <p>{{$train->orario_di_partenza}}</p>
                        <p>{{$train->orario_di_arrivo}}</p>
                        <p>{{$train->codice_treno}}</p>
                    </div>
                </div>


            </div>
            @empty
            <div class="col">
                <p>No train travel yet! Come back later</p>
            </div>
            @endforelse

        </div>
        <div class="my-3">
            {{$trains->links('pagination::bootstrap-5')}}
        </div>

    </div>
</section>


@endsection