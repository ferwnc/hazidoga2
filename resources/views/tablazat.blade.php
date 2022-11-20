@extends('layouts.master')
@section('title','Főoldal')
@section('content')
     @include('fooldal')
     <div class="container">
        <div class="row">
            <div class="col-12">
               <div class="bg-success p-3 mt-5 rounded text-white">

                <h1>Adja meg a tulajdonos adatait!</h1>

                <table class="table table-light table-sm table-striped table-hover">
                    <tr>
                        <th>Rendszám</th>
                        <th>Típus</th>
                        <th>Szín</th>
                        <th>Részletek</th>
                    </tr>
                    @foreach ($tablazat as $item)
                        <td>{{ $item->Rendszam }}</td>
                        <td>{{ $item->Tipus }}</td>
                        <td>{{ $item->Szin }}</td>
                        
                        <td>
                            <button class="btn btn-primary btn-sm">Részletek</button>
                        </td>
                    </tr>  
                    @endforeach
                    
                </table>

               </div>
            </div>
        </div>
    </div>
@endsection