@extends('layouts.main')

{{-- @section('title', 'Home Simpatica') --}}

@section('content')
    <section id="viaggi" class="container p-5">
        @forelse ($viaggi as $viaggio)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$viaggio->city}}</h4>
                    <h6 class="card-subtitle">{{$viaggio->region}}</h5>
                    <div class="card-text">
                        <p>{{$viaggio->description}}</p>
                        <p>Data di partenza: {{$viaggio->date_departure}}</p>
                        <p>Data di ritorno: {{$viaggio->date_return}}</p>
                        {{-- usate <address> --}}
                        <pre>{{$viaggio->price}} Euro</pre>
                    </div>    
                </div>
            </div>
        @empty
            <h3>Nessun viaggio è disponibile</h3>
        @endforelse
    </section>
@endsection