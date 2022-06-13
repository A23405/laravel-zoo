<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="{{ asset('css/sidebars.css') }}">
    <title>小檔案</title>
</head>
@extends('layouts.back_sidebar')
@section('content')
<div id="wrapper">
    <div class="row direction-column">
        <nav class="navbar navbar-expand-lg bg-light col-12 py-3">
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
                                    <div class="row flex-row mb-1" id="top">
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
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </nav>
        <div class="container-fluid mx-1 px-5 py-3">
            <div class="row justify-content-around">
                <div class="col-sm-12 col-lg-5 my-3">
                    <div class="row">
                        <div class="card py-3">
                            <div class="row">
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="imgBlock">
                                        <img class="w-100 hoverImg" src="yoyo.jpg" />
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body row">
                                        <div class="col-12">
                                            <h4 class="mb-2">亞洲動物區</h4>
                                            <span>
                                                <h4>簡介:</h4>
                                                123545687262222525116515616515656165133333333333333333333333333333
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-success mx-1">
                                        修改
                                    </button>
                                    <button type="button" class="btn btn-danger mx-1">
                                        刪除
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-5 my-3">
                    <div class="row">
                        <div class="card py-3">
                            <div class="row">
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="imgBlock">
                                        <img class="w-100 hoverImg" src="yoyo.jpg" />
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body row">
                                        <div class="col-12">
                                            <h4 class="mb-2">亞洲動物區</h4>
                                            <span>
                                                <h4>簡介:</h4>
                                                123545687262222525116515616515656165133333333333333333333333333333
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="button" class="btn btn-success mx-1">
                                        修改
                                    </button>
                                    <button type="button" class="btn btn-danger mx-1">
                                        刪除
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

@endsection