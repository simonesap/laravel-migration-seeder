@extends('layout.layout')

@section('content')

    <h2 class="text-center m-4 text-primary">Trains</h2>

    <div class="row row-cols-3 g-3">
        @forelse ($trains as $train)


        <div>
            <div class="col card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><span class="text-danger">Stazione di partenza: </span>{{$train->departure_station}}</h5>
                    <h5 class="card-title"><span class="text-danger">Stazione di arrivo: </span>{{$train->arrival_station}}</h5>
                    <h5 class="card-title"><span class="text-danger">Orario di partenza: </span>{{$train->departure_time}}</h5>
                    <h5 class="card-title"><span class="text-danger">Orario di arrivo: </span>{{$train->arrival_time}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><span class="text-danger">Prezzo ticket: </span>{{$train->price}}</h6>
                    <p class="card-text"><span class="text-danger">Codice univoco: </span>{{$train->train_Code}}</p>
                </div>
            </div>
        </div>
        @empty
            <h2>Non ci sono ancora treni in programmazione</h2>
        @endforelse
    </div>

@endsection
