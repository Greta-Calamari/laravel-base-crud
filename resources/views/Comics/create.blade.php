@extends('layouts.default')

@section('pageTitle','DC - New Comic')


@section('mainContent')

<div class="container">
    <h1>Inserisci Prodotto</h1>
    
    <form action="{{route('comics.store')}}" method="post">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="title" name="title" placeholder="Insert Title" value="{{old('title')}}">

          @error('title')
              <div class="alert alert-danger">{{$message}}</div>
                  
          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea name="description" class="form-control" id="description"></textarea>
        </div>

        

        <div class="mb-3 form-check">

          <label class="form-check-label" for="thumb">Thumb URL</label>
          <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" aria-describedby="thumb" name="thumb" placeholder="Insert Thumb" >
          @error('thumb')
          <div class="alert alert-danger">{{$message}}</div>
              
          @enderror

         
        </div>


        <div class="mb-3 form-check">

          <label class="form-check-label" for="price">Price</label>
          <input step=".01" type="number" class="form-control" id="price" aria-describedby="price" name="price" min="1" max="60">
         
        </div>

        <div class="mb-3 form-check">

            <label class="form-check-label" for="series">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" aria-describedby="series" name="series" placeholder="Insert series">
            @error('series')
               <div class="alert alert-danger">{{$message}}</div>
              
            @enderror
           
        </div>

        <div class="mb-3 form-check">

            <label class="form-check-label" for="sale_date">Sale date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" aria-describedby="sale_date" name="sale_date" placeholder="Insert sale date">
            @error('sale_date')
              <div class="alert alert-danger">{{$message}}</div>
           
            @enderror

           
        </div>

        <div class="mb-3 form-check">

            <label class="form-check-label" for="type">Select type</label>
            <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
              <option value="Comic Book">Comic Book</option>
              <option value="Graphic Novel">Graphic Novel</option>
              @error('type')
                <div class="alert alert-danger">{{$message}}</div>
           
              @enderror
              
          </select>
  
          </div>

        
        

        
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
</div>