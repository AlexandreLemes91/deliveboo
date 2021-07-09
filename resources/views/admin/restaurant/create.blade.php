@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-2">Crea il tuo ristorante</h1>
        <form action="{{route('admin.restaurant.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("POST")
            <div class="form-group">
                <label for="name">nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="address">indirizzo</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="phone_number">numero di telefono</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
            </div>

            <div class="form-group mx-2 d-flex flex-wrap">
                @foreach ($tipologies as $tipology)
                    <div class="w-33">
                        <input role="button" type="checkbox" value="{{$tipology->id}}" id="{{$tipology->id}}" name="tipologies[]">
                        <label role="button" for="{{$tipology->id}}">{{$tipology->name}}</label>
                    </div>
                @endforeach
            </div>

            <div class="form-group mx-2">
                <label for="image"></label>
                <input role="button" type="file" id="image" name="image">
            </div>
            
            <div class="form-group mx-2">
                <input role="button" type="submit" class="btn btn-primary">
            </div>

        </form>
    </div>
@endsection