<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="css/test.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css" />
    <title>首頁</title>
</head>
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="container-fluid searchBlock px-lg-5 py-3 mb-3">
        <div class="row align-items-center justify-content-center ">
            <div class="col-12 col-lg-2 text-lg-right">
                <i class="fas fa-search"></i>
                搜尋
            </div>
            <form method="get" action="/search">
                <div class="col-6 col-lg-2">
                    <input list="area" name="area" placeholder="請選擇場區" class="my-1 w-100" />
                    <datalist id="area">
                        <option value="亞洲動物區">亞洲動物區</option>
                        <option value="澳洲動物區">澳洲動物區</option>
                        <option value="雨林動物區">雨林動物區</option>
                        <option value="沙漠動物區">沙漠動物區</option>
                        <option value="非洲動物區">非洲動物區</option>
                    </datalist>
                </div>
                <div class="col-6 col-lg-2">
                    <input list="order_" name="order_" placeholder="查詢目類：食肉目" class="my-1 w-100" />
                    <datalist id="order_">
                        <option value="食肉目"></option>
                        <option value="靈長目"></option>
                        <option value="長鼻目"></option>
                        <option value="雙門齒目"></option>
                        <option value="奇蹄目"></option>
                    </datalist>
                </div>
                <div class="col-6 col-lg-2">
                    <input list="conservation_level" name="conservation_level" placeholder="保育等級" class="my-1 w-100" />
                    <datalist id="conservation_level">
                        <option value="EX">滅絕（Extinct, EX）</option>
                        <option value="EW">野外滅絕（Extinct In the Wild, EW）</option>
                        <option value="CR">極危（Critically Endangered, CR）</option>
                        <option value="EN">瀕危（Endangered, EN）</option>
                        <option value="VU">易危（Vulnerable, VU）</option>
                        <option value="NT">接近受威脅（Near Threatened, NT）</option>
                        <option value="LC">暫無危機（Least Concern, LC）</option>
                        <option value="DD">資料不足（Data Deficient, DD）</option>
                        <option value="NE">未評估（Not Evaluated, NE）</option>
                    </datalist>
                </div>
                <div class="col-6 col-lg-2">
                    <input type="submit" value="搜尋" class="btn btn-warning w-100">
                </div>
            </form>
        </div>
    </div>
    <div class="container  animalBlock mt-3">
        <div class="row">
            @foreach ($speciesarchives as $species)
            <div class="col-6 col-lg-3 my-1">
                <a href="{{route('animal_file',['id'=>$species->id])}}" class="m-3">
                    <div class="card">
                        <div class="imgBlock">
                            <img class="card-img-top w-100 hoverImg" src={{$species->img}} />
                        </div>
                        <div class="p-0 card-body text-center">
                            <div class="p-3">
                                <h3 class="card-title">{{$species->species_}}</h3>
                                <p>{{$species->area}}</p>
                                <p>數量:{{$species->total}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <!-- <div class="col-6 col-lg-3 my-1">
                <a href="{{ asset('animal_file') }}" class="m-3">
                    <div class="card">
                        <div class="imgBlock">
                            <img class="card-img-top w-100 hoverImg" src="img/黑熊.jpg" />
                        </div>
                        <div class="p-0 card-body text-center">
                            <div class="p-3">
                                <h3 class="card-title">黑熊</h3>
                                <p>亞洲動物區</p>
                                <p>數量:8</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>  -->
        </div>
    </div>
</x-app-layout>