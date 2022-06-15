@extends('layouts.default')

@section('pageTitle','La Molisana - Comics')


@section('mainContent')
<main>
    <div class="container">
        
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col">
                <p>
                    {{$comic->id}}

                </p>
                <p>
                    {{$comic->title}}
                </p>

            </div>
                
            @endforeach

        </div>
    </div>
</main>

