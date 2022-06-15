<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="css/animal_file.css">
    <title>小檔案</title>
</head>
<x-app-layout>
    <div class="container">
        <div class="row m-3">
            <div class="col-12 p-3 animal_file">
                <div class="row featurette">
                    <div class="col-md-5 animal_img">
                        <img class="w-100" src="{{$req->img}}" />
                    </div>
                    <div class="col-md-7 d-flex flex-column align-self-center">
                        <p>學名:{{$req->scientific_name}}</p>
                        <p>俗名:{{$req->name}}</p>
                        <p>分類:{{$req->phylum_}}>{{$req->class_}}>{{$req->order_}}>{{$req->family_}}>{{$req->genus_}}</p>
                        <p>食性:{{$req->feeding_habits}}</p>
                        <p>特徵:{{$req->feature}}</p>
                        <p>分布:{{$req->distribution}}</p>
                        <p>保育:{{$req->conservation_level}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="container  animalBlock">
        <div class="row">
            @foreach($animals as $animal)
        <div class="col-6 col-lg-3">
                <a href="#" class="m-3">
                    <div class="card">
                        <div class="imgBlock">
                            <img class="card-img-top w-100 hoverImg" src="{{$animal->img}}" />
                        </div>
                        <div class="p-0 card-body text-center">
                            <div class="p- d-flex justify-content-center align-items-center">
                                <h3 class="card-title">{{$animal->name}}</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <!-- <div class="col-6 col-lg-3">
                <a href="animal_file.html" class="m-3">
                    <div class="card">
                        <div class="imgBlock">
                            <img class="card-img-top w-100 hoverImg" src="img/黑熊.jpg" />
                        </div>
                        <div class="p-0 card-body text-center">
                            <div class="p- d-flex justify-content-center align-items-center">
                                <h3 class="card-title">嘿嘿</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="animal_file.html" class="m-3">
                    <div class="card">
                        <div class="imgBlock">
                            <img class="card-img-top w-100 hoverImg" src="img/黑熊.jpg" />
                        </div>
                        <div class="p-0 card-body text-center">
                            <div class="p- d-flex justify-content-center align-items-center">
                                <h3 class="card-title">巧克力</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="animal_file.html" class="m-3">
                    <div class="card">
                        <div class="imgBlock">
                            <img class="card-img-top w-100 hoverImg" src="img/黑熊.jpg" />
                        </div>
                        <div class="p-0 card-body text-center">
                            <div class="p- d-flex justify-content-center align-items-center">
                                <h3 class="card-title">一一</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="animal_file.html" class="m-3">
                    <div class="card">
                        <div class="imgBlock">
                            <img class="card-img-top w-100 hoverImg" src="img/黑熊.jpg" />
                        </div>
                        <div class="p-0 card-body text-center">
                            <div class="p- d-flex justify-content-center align-items-center">
                                <h3 class="card-title">源源</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a href="animal_file.html" class="m-3">
                    <div class="card">
                        <div class="imgBlock">
                            <img class="card-img-top w-100 hoverImg" src="img/黑熊.jpg" />
                        </div>
                        <div class="p-0 card-body text-center">
                            <div class="p- d-flex justify-content-center align-items-center">
                                <h3 class="card-title">仔仔</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</x-app-layout>