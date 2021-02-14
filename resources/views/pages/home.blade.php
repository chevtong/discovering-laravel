@extends('layouts.default')

@section('content')

    <h1 class="title">Want some breakfast ideas for the week?</h1>

    <div class="wrapper">



        <div class="content">

            <div class="list">
                @foreach ($breakfasts as $breakfast)



                    <div class="db-item">
                        <p>Food: 
                            <span class="db-info">{{ ucfirst($breakfast->food) }}</span> 
                        </p>
                        <p>Drink: 
                            <span class="db-info">{{ ucfirst($breakfast->drink) }}</span> 
                        </p>
                        <a href="/db/{{ $breakfast->id }}" class="btn">See Mores</a>
                    </div>


                @endforeach
            </div>


        </div>

        <div class="background"></div>
    </div>
    <a href="/db/create" class="btn create-btn">ADD A NEW BREAKFAST</a>

@endsection
