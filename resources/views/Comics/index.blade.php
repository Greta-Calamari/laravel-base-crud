@extends('layouts.default')

@section('pageTitle','DC - Comics')


@section('mainContent')
    <main>
        
            
            <div class="row">
                @foreach ($comics as $comic)
                <div class="col">
                    <img src="{{$comic->thumb}}" alt="">
                    <p>{{$comic->title}}</p>
                    <p>{{$comic->description}}</p>
                    <p>{{$comic->price}}</p>
                    <p>{{$comic->series}}</p>
                    <p>{{$comic->sale_date}}</p>
                    <p>{{$comic->type}}</p>
                    <a href="{{route('comics.show',$comic->id)}}" class="btn btn-success">Visualizza</a>
                    <a href="{{route('comics.edit',$comic->id)}}" class="btn btn-warning">Modifica</a>
                    <form action="{{route('comics.destroy',$comic->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Cancella</button>
                      
                    </form>





                    
                        

                    

                </div>
                    
                @endforeach

            </div>
        
    </main>
@endsection

