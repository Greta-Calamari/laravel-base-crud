@extends('layouts.default')

@section('pageTitle','DC - Comics')


@section('mainContent')
    <main>
        
            
            <div class="row">
                @foreach ($comics as $comic)
                <div class="col">
                    <img src="{{$comic->thumb}}" alt="">
                    <p>
                        {{$comic->id}}

                    </p>
                    <p>
                        {{$comic->title}}
                    </p>

                </div>
                    
                @endforeach

            </div>
        
    </main>
@endsection

