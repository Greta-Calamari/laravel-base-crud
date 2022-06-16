@extends('layouts.default')

@section('pageTitle','DC - New Comic')


@section('mainContent')

<div class="container">
    <h1>Inserisci Prodotto</h1>
    
    <form action="{{route('comics.store', $comic->id)}}" method="post">
      @csrf
      @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="{{$comic->title}}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">{{$comic->description}}</label>
          <textarea name="description" class="form-control" id="description"></textarea>
        </div>

        

        <div class="mb-3 form-check">

          <label class="form-check-label" for="thumb">Thumb URL</label>
          <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name="thumb" value="{{$comic->thumb}}" >
         
        </div>


        <div class="mb-3 form-check">

          <label class="form-check-label" for="price">Price</label>
          <input type="number" class="form-control" id="price" aria-describedby="price" name="price" min="1" max="60"  value="{{$comic->price}}">
         
        </div>

        <div class="mb-3 form-check">

            <label class="form-check-label" for="series">Series</label>
            <input type="text" class="form-control" id="series" aria-describedby="series" name="series" value="{{$comic->series}}">
           
        </div>

        <div class="mb-3 form-check">

            <label class="form-check-label" for="sale_date">Sale date</label>
            <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date" value="{{$comic->sale_date}}">
           
        </div>

        <div class="mb-3 form-check">

            <label class="form-check-label" for="type">Select type</label>
            <select name="type" id="type">

              <option value="Comic Book" {{$comic->thumb == 'Comic Book' ? 'selected' : ''}} >Comic Book</option>

              <option value="Graphic Novel" {{$comic->thumb == 'Graphic Novel' ? 'selected' : ''}}>Graphic Novel</option>
              
          </select>
  
          </div>

        
        

        
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
</div>