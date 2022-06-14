<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="{{ asset('css/sidebars.css') }}">
    <title>小檔案</title>
</head>
@extends('layouts.back_sidebar')
@section('title','就醫紀錄')
@section('content')
<div id="wrapper">
    <div class="container-fluid direction-column px-0">
        <nav class="navbar navbar-expand-lg bg-light p-3">
            <div class="container-fluid">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    新增就醫紀錄
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row justify-content-center">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    新增就醫紀錄
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
                                            <span class="input-group-text" id="inputGroup-sizing-sm">就醫地點</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">就診原因</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">時間</span>
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
                    <input class="form-control me-2" type="search" placeholder="請使用ID搜尋" aria-label="Search" />
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
                            <th>就醫地點</th>
                            <th>就診原因</th>
                            <th>時間</th>
                            <th>刪除/修改</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A125</td>
                            <td>XX動物醫院</td>
                            <td>XXX</td>
                            <td>5/24</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mecicalModal" data-bs-whatever="@mdo">
                                    修改
                                </button>
                                <div class="modal fade" id="mecicalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content row justify-content-center">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    修改就醫紀錄
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
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">就醫地點</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">就診原因</span>
                                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">時間</span>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection