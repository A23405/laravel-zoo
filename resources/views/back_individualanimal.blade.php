<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/sidebars.css') }}">
</head>
@extends('layouts.back_sidebar')
@section('title','場區')
@section('content')
<div id="wrapper">
    <div class="container-fluid direction-column px-0">
        <nav class="navbar navbar-expand-lg bg-light p-3">
            <div class="container-fluid">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    新增個別動物
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row justify-content-center">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    新增個別動物
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
                                                <span class="input-group-text" id="inputGroup-sizing-sm">名字</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">物種</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <p>選擇性別</p>
                                                <div class="form-check mx-1">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        M
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        F
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <label for="">選擇日期：</label>
                                                <div class="input-group date" id='date1'>
                                                    <input type="date" class="form-control" />
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-around">
                                        <input type="submit" value="close" class="btn btn-secondary col-4" data-bs-dismiss="modal">
                                        <input type="submit" value="Add" class="btn btn-primary col-4">
                                    </div>
                                </form>
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
        <div class="row py-3">
            <div class="col-12 px-4">
                <table class="table table-primary table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>名字</th>
                            <th>物種</th>
                            <th>性別</th>
                            <th>生日</th>
                            <th>照片</th>
                            <th>刪除/修改</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A1001</td>
                            <td>亨利</td>
                            <td>大熊貓</td>
                            <td>M</td>
                            <td>2020-06-20</td>
                            <td>IMG</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#animalModal" data-bs-whatever="@mdo">修改</button>
                                <div class="modal fade" id="animalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content row justify-content-center">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    修改個別動物
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
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">名字</span>
                                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <span class="input-group-text" id="inputGroup-sizing-sm">物種</span>
                                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <p>選擇性別</p>
                                                                <div class="form-check mx-1">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        M
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        F
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <label for="">選擇日期：</label>
                                                                <div class="input-group date" id='date1'>
                                                                    <input type="date" class="form-control" />
                                                                    <span class="input-group-addon">
                                                                        <i class="glyphicon glyphicon-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-around">
                                                        <input type="submit" value="close" class="btn btn-secondary col-4" data-bs-dismiss="modal">
                                                        <input type="submit" value="Add" class="btn btn-primary col-4">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger">刪除</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/upload.js') }}"></script>
@endsection