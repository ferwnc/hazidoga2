@extends('layouts.master')
@section('title','Főoldal')
@section('content')
     @include('fooldal')
     <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="bg-success p-3 mt-5 rounded text-white">

                <h1>Adja meg az autó adatait!</h1>


                   <form method="POST">
                       @csrf
                    
                       <div class="mt-3 mb-3">
                           <label for="Rendszam">Autó rendszáma:</label>
                           <input type="text" value="{{ old('Rendszam') }}" name="Rendszam" class="form-control">   
                           
                           @error('Rendszam')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror

                       </div>

                       <div class="mt-3 mb-3">
                           <label for="Tipus">Autó típusa:</label>
                           <input type="text" value="{{ old('Tipus') }}" name="Tipus" class="form-control"> 
                           
                           @error('Tipus')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror

                       </div>

                       <div class="mt-3 mb-3">
                           <label for="Szin">Autó színe:</label>
                           <input type="text" value="{{ old('Szin') }}" name="Szin" class="form-control">  

                           @error('Szin')
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