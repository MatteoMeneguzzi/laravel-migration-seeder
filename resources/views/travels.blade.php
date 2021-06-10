@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Travels</h2>

        @foreach ($travels as $travel) 

        <article>
            <h3>{{ $travel->title }}</h3>
            <div>Weeks: {{ $travel->weeks }}</div>
            <div>Address: {{ $travel->address }}</div>
            <div>City {{ $travel->city }}</div>
            <div>State: {{ $travel->state }}</div>
            <div>Space: {{ $travel->square_meters }}</div>
            <div>Rooms: {{ $travel->rooms }}</div>
            <div>{{ $travel->description }}</div>
            <div>Rating: <strong>{{ $travel->rating }}</strong></div>
            <h4>Price: {{number_format($travel->price, 2)}}€</h4>
            @if (! $loop->last)
                <hr>
            @endif
        </article>
            
        @endforeach

        <section>
            {{ $travels->links()}}
        </section>
    </div>
@endsection
