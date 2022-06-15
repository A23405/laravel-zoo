<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="{{ asset('css/sidebars.css') }}">
    <title>小檔案</title>
</head>
@extends('layouts.back_sidebar')
@section('title','場區')
@section('content')
<div id="wrapper">
    <div class="container-fluid direction-column px-0">
        <nav class="navbar navbar-expand-lg bg-light p-3">
            <div class="container-fluid">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    新增場區
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row justify-content-center">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    新增場區
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body row justify-content-center">
                                <form class="col-12 d-flex flex-column" id="popDiv">
                                    <div class="row flex-row mb-2" id="top">
                                        <div class="col-12 d-flex justify-content-center" id="left">
                                            <div class="row direction-column justify-content-center">
                                                <div class="col-12 px-1" id="picture">
                                                    <!--預覽區塊-->
                                                    <img class="img-thumbnail" id="demo" />
                                                </div>
                                                <div class="col-12 d-flex justify-content-center px-1 my-2">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <i class="fa fa-cloud-upload"></i> 上傳檔案
                                                    </label>
                                                    <input id="file-upload" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12" id="right">
                                            <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">ID</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">場區名稱</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                            </div>
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea>
                                                <label for="floatingTextarea">場區介紹</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around">
                                        <input value="close" class="btn btn-secondary col-4" data-bs-dismiss="modal">
                                        <input type="submit" value="Add" class="btn btn-primary col-4">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid mx-1 px-5 py-3">
            <div class="row justify-content-around">
                @foreach($areas as $area)
                <div class="col-sm-12 col-lg-5 my-3">
                    <div class="row">
                        <div class="card mb-3" style="max-width: 550px;background-color:#E6E6F2;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{$area->img}}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title">場區: {{$area->name}}</h4>
                                        <p class="card-title">場區ID: <b>{{$area->pid}}</b></p>
                                        <p class="card-text">介紹: {{$area->introduction}}</p>
                                    </div>
                                    <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#areaModal" data-bs-whatever="@mdo">
                                        修改
                                    </button>
                                    <div class="modal fade" id="areaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content row justify-content-center">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        修改場區
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body row justify-content-center">
                                                    <form class="col-12 d-flex flex-column" id="popDiv">
                                                        <div class="row flex-row mb-2" id="top">
                                                            <div class="col-12 d-flex justify-content-center" id="left">
                                                                <div class="row direction-column justify-content-center">
                                                                    <div class="col-12 px-1" id="picture">
                                                                        <!--預覽區塊-->
                                                                        <img class="img-thumbnail" id="demo" />
                                                                    </div>
                                                                    <div class="col-12 d-flex justify-content-center px-1 my-2">
                                                                        <label for="file-upload" class="custom-file-upload">
                                                                            <i class="fa fa-cloud-upload"></i> 上傳檔案
                                                                        </label>
                                                                        <input id="file-upload" type="file" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12" id="right">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">ID</span>
                                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                                </div>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">場區名稱</span>
                                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                                </div>
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea>
                                                                    <label for="floatingTextarea">場區介紹</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-around">
                                                            <input value="close" class="btn btn-secondary col-4" data-bs-dismiss="modal">
                                                            <input type="submit" value="Add" class="btn btn-primary col-4">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger mx-1">
                                        刪除
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-sm-12 col-lg-5 my-3">
                    <div class="row">
                        <div class="card mb-3" style="max-width: 550px;background-color:#E6E6F2;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title">場區名稱:</h4>
                                        <p class="card-title">場區ID:</p>
                                        <p class="card-text">介紹:This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#areaModal" data-bs-whatever="@mdo">
                                        修改
                                    </button>
                                    <div class="modal fade" id="areaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content row justify-content-center">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        修改場區
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body row justify-content-center">
                                                    <form class="col-12 d-flex flex-column" id="popDiv">
                                                        <div class="row flex-row mb-2" id="top">
                                                            <div class="col-12 d-flex justify-content-center" id="left">
                                                                <div class="row direction-column justify-content-center">
                                                                    <div class="col-12 px-1" id="picture">
                                                                        
                                                                        <img class="img-thumbnail" id="demo" />
                                                                    </div>
                                                                    <div class="col-12 d-flex justify-content-center px-1 my-2">
                                                                        <label for="file-upload" class="custom-file-upload">
                                                                            <i class="fa fa-cloud-upload"></i> 上傳檔案
                                                                        </label>
                                                                        <input id="file-upload" type="file" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12" id="right">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">ID</span>
                                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                                </div>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">場區名稱</span>
                                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                                </div>
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea>
                                                                    <label for="floatingTextarea">場區介紹</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-around">
                                                            <input value="close" class="btn btn-secondary col-4" data-bs-dismiss="modal">
                                                            <input type="submit" value="Add" class="btn btn-primary col-4">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger mx-1">
                                        刪除
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection