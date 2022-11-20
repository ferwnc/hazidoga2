@extends("layouts.master")

@section("title","Teremlista")

@section("content")
    @include("menu")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-dark p-3 rounded text-white mt-3">
                    <h1>Terem lista </h1>
                    <table class="table table-light table-sm table-striped table-hover">
                        <tr>
                            <th>#</th>
                            <th>Rendszám</th>
                            <th>Típus</th>
                            <th>Szín</th>
                        </tr>
                        @foreach ($lista as $item)
                        <tr id="sor_{{ $item->adat_id }}">
                            <td>{{ $item->adat_id }}</td>
                            <td>{{ $item->Rendszam }}</td>
                            <td>{{ $item->Tipus }} cm</td>
                            <td>{{ $item->Szin }} cm</td>
                            
                            <td>
                                <button class="btn btn-primary btn-sm">M</button>
                            </td>
                           <!-- <td>
                                <button class="btn btn-danger btn-sm" onclick="teremTorles({{ $item->t_id }});">törlés</button>
                            </td>-->
                        </tr>  
                        @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>

</script>

@endsection