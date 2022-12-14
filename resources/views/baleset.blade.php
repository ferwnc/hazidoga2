@extends('layouts.master')
@section('title','Főoldal')
@section('content')
     @include('fooldal')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-success p-3 mt-5 rounded text-white">

                <h1>Adja meg a baleset adatait!</h1>

                <form method="POST">
                    @csrf

                    <div class="mt-3 mb-3">
                        <label for="baleset_idopontja">Baleset időpontja:</label>
                        <input type="date" value="{{ old('baleset_idopontja') }}" name="baleset_idopontja" class="form-control">    
                                                                     
                        @error('baleset_idopontja')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                        @enderror 
 
                    </div>

                    <div class="mt-3 mb-3">
                        <label for="serules">Sérülés rövid leírása:</label>
                        <input type="text" value="{{ old('serules') }}" name="serules" class="form-control">    
                                                                     
                        @error('serules')
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