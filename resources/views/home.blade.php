<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">

                <table class="table p-3">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
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
                                {{$train->orario_partenza}}
                            </span>
                        </td>
                        <td>
                            <span>
                                {{$train->orario_arrivo}}
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
                                
                            </span>
                        </td>
                        <td>
                            <span>
                                
                            </span>
                        </td>
                      </tr>
                    </tbody>
                 @endforeach
                </table>
            </div>
        </div>
    </div>


</body>

</html>