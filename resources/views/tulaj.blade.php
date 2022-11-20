@extends('layouts.master')
@section('title','Főoldal')
@section('content')
     @include('fooldal')
     <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="bg-success p-3 mt-5 rounded text-white">

                <h1>Adja meg a tulajdonos adatait!</h1>

                <form method="POST">
                    @csrf

                    <div class="mt-3 mb-3">
                        <label for="Nev">Tulajdonos neve:</label>
                        <input type="text" value="{{ old('Nev') }}" name="Nev" class="form-control">   
                                              
                        @error('Nev')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                        @enderror 
 
                    </div>

                    <div class="mt-3 mb-3">
                        <label for="Tuljog_kezd">Tulajdonjog kezdete:</label>
                        <input type="date" value="{{ old('Tuljog_kezd') }}" name="Tuljog_kezd" class="form-control">    
                      
                        @error('Tuljog_kezd')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                        @enderror 

                    </div>

                    <div class="mt-3 mb-3">
                        <label for="Tuljog_veg">Tulajdonjog vége:</label>
                        <input type="date" value="{{ old('Tuljog_veg') }}" name="Tuljog_veg" class="form-control">  
                      
                        @error('Tuljog_veg')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                        @enderror 

                    </div>
                    
                    <div class="mt-3 mb-3">
                        <button type="submit" class="btn btn-light">Adatok rögzítése</button>
                    </div>

                </form>

               </div>
            </div>
        </div>
    </div>
@endsection