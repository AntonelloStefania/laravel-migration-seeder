<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{date_default_timezone_set("Europe/Rome")}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

    <body class="d-flex align-items-center ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">

                    <table class="table p-3 text-center">
                        <thead>
                        <tr>
                            <th scope="col"><i class="fa-solid fa-train" style="color: #001c4d;"></i></th>
                            <th scope="col">Azienda</th>
                            <th scope="col">St.Partenza</th>
                            <th scope="col">St.Arrivo</th>
                            <th scope="col">Partenza</th>
                            <th scope="col">Arrivo</th>
                            <th scope="col">Treno</th>
                            <th scope="col">Carrozze</th>
                            <th scope="col">Ritardo</th>
                            <th scope="col">Stato</th>
                        </tr>
                        </thead>
                    @foreach($trains as $train)
                        @if($train->data_partenza === date('Y-m-d'))
                        <tbody>
                        <tr>
                            <th scope="row">{{$train->id}}</th>
                            <td>
                                <span>
                                    {{$train->azienda}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->stazione_di_partenza}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->stazione_di_arrivo}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{substr($train->orario_partenza, 0,5)}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{substr($train->orario_arrivo, 0,5)}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->codice_treno}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->numero_carrozze}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$train->in_orario ? '':'+5 min'}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    <i class="{{$train->cancellato ? 'fa-solid fa-circle-minus':'fa-solid fa-circle-check'}}" style="{{$train->cancellato ? ' color:#f00000': ' color:#03a300'}}"></i>
                                </span>
                            </td>
                        </tr>
                        </tbody>
                        @endif
                        
                        @endforeach
                    </table>
                </div>
                @if($train->data_partenza !== date('Y-m-d'))
                    <div class="bg-danger text-white text-center col-6 offset-3">
                        <h1>nessun altro treno disponibile</h1>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-6 offset-2 d-flex justify-content-center my-5">
                    <h1 class="text-white pe-3">Lista Passeggeri:</h1>
                    <ul class=" p-0">

                        @foreach($passengers as $passenger)
                        <li class="text-white d-flex bg-dark flex-column border text-center my-2 p-2">
                            <h6>Passeggero: <strong> {{$passenger->nome }}-{{$passenger->cognome}}</strong></h6>
                            <span>Email-<i class="fa-solid fa-at" style="color: #f7f7f7;"></i> : <strong>{{$passenger->email}}</strong></span>
                            <span><i class="fa-solid fa-mobile-screen-button" style="color: #f7f7f7;"></i> : {{$passenger->n_telefonico}}</span>
                            <span><i class="fa-solid fa-couch" style="color: #ffffff;"></i> : <strong>{{$passenger->posto_prenotato}}</strong></span>
                            <span>Codice biglietto : {{$passenger->codice_biglietto}}</span>
                            <span>Classe: {{$passenger->classe? 'prima classe':'seconda classe'}}</span>
                            <span>Tariffa: {{$passenger->tariffa_ridotta? 'biglietto a tariffa ridotta':'standard'}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>