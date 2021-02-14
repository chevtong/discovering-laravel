@extends('layouts.default')

@section('content')
    <h1>Add some more idea</h1>
    <div class="container">


        <form method="POST" action="/db">

            @csrf

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Food</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="food">
              

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Drink</label>
              <input type="text" class="form-control" id="exampleInputPassword1"  name="drink">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
       
    </div>

@endsection

