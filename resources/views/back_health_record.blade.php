<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="{{ asset('css/sidebars.css') }}">
</head>
@extends('layouts.back_sidebar')
@section('title','健康紀錄')
@section('content')
<div id="wrapper">
    <div class="container-fluid direction-column px-0">
        <nav class="navbar navbar-expand-lg bg-light p-3">
            <div class="container-fluid">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    新增個別紀錄
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row justify-content-center">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    新增個別紀錄
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body row justify-content-center">
                                <form class="col-12 d-flex flex-column" id="popDiv">
                                    <div class="row" id=" bottom">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">ID</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">體長/M</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">體重</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">發情期</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">備註</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
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
                            <th>體長/M</th>
                            <th>體重</th>
                            <th>發情期</th>
                            <th>備註</th>
                            <th>檢測時間</th>
                            <th>刪除/修改</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($health_record as $record)
                        <tr>
                            <td>{{$record->aid}}</td>
                            <td>{{$record->body_length}}</td>
                            <td>{{$record->weight}}</td>
                            <td>{{$record->estrus}}</td>
                            <td>{{$record->other}}</td>
                            <td>{{$record->created_at}}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#healthModal" data-bs-whatever="@mdo">
                                    修改
                                </button>
                                <div class="modal fade" id="healthModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content row justify-content-center">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    修改個別紀錄
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body row justify-content-center">
                                                <form class="col-12 d-flex flex-column" id="popDiv">
                                                    <div class="row" id=" bottom">
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">ID</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">體長/M</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">體重</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">發情期</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">備註</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
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
                                <button type="button" class="btn btn-danger">
                                    刪除
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        <!-- <tr>
                            <td>A125</td>
                            <td>2.5M</td>
                            <td>55公斤</td>
                            <td>5/24</td>
                            <td>無</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#healthModal" data-bs-whatever="@mdo">
                                    修改
                                </button>
                                <div class="modal fade" id="healthModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content row justify-content-center">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    修改個別紀錄
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body row justify-content-center">
                                                <form class="col-12 d-flex flex-column" id="popDiv">
                                                    <div class="row" id=" bottom">
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">ID</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">體長/M</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">體重</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">發情期</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">備註</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
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
                                <button type="button" class="btn btn-danger">
                                    刪除
                                </button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection