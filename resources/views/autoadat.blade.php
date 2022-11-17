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
                           <label for="rendszam">Autó rendszáma:</label>
                           <input type="text" value="{{ old('rendszam') }}" name="rendszam" class="form-control">    
                       </div>

                       <div class="mt-3 mb-3">
                           <label for="tipus">Autó típusa:</label>
                           <input type="text" value="{{ old('tipus') }}" name="tipus" class="form-control">    

                       </div>

                       <div class="mt-3 mb-3">
                           <label for="szin">Autó színe:</label>
                           <input type="text" value="{{ old('szin') }}" name="szin" class="form-control">  

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