<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="css/area.css">
    <title>場區</title>
</head>
<x-app-layout>
    <div class="container animalBlock">
        <div class="row mt-3">
            @foreach($areas as $area)
            <div class="col-6 col-lg-3 my-1">
                <a href="#" class="m-3">
                    <div class="card my-3">
                        <div class="imgBlock">
                            <img class="card-img-top w-100 h-100 hoverImg" src="{{$area->img}}" />
                        </div>
                        <div class="p-0 card-body text-center">
                            <div class="p-3">
                                <h3 class="card-title">{{$area->name}}</h3>
                                <p class="card-text ellipsis" style="text-align: left;">簡介:<br>{{$area->introduction}}</p>
                                <div class="col-12 d-flex flex-row justify-content-start ">
                                    <p class="card-text me-3">物種數量:{{$area->speciestotal}}</p>
                                    <p class="card-text">動物總數:{{$area->animaltotal}}隻</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>