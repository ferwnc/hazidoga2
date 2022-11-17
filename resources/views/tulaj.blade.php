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
                        <label for="tul_nev">Tulajdonos neve:</label>
                        <input type="text" value="{{ old('tul_nev') }}" name="tul_nev" class="form-control">    
                    </div>

                    <div class="mt-3 mb-3">
                        <label for="tuljog_kezd">Tulajdonjog kezdete:</label>
                        <input type="date" value="{{ old('tuljog_kezd') }}" name="tuljog_kezd" class="form-control">    

                    </div>

                    <div class="mt-3 mb-3">
                        <label for="tuljog_vege">Tulajdonjog vége:</label>
                        <input type="date" value="{{ old('tuljog_vege') }}" name="tuljog_vege" class="form-control">  

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