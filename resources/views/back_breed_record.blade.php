<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="{{ asset('css/sidebars.css') }}">
</head>
@extends('layouts.back_sidebar')
@section('title','繁殖紀錄')
@section('content')
<div id="wrapper">
    <div class="container-fluid direction-column px-0">
        <nav class="navbar navbar-expand-lg bg-light p-3">
            <div class="container-fluid">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    新增繁殖紀錄
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row justify-content-center">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    新增繁殖紀錄
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
                                            <span class="input-group-text" id="inputGroup-sizing-sm">物種</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <p>選擇性別</p>
                                            <div class="form-check mx-1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    公
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    母
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <p>是否結扎</p>
                                            <div class="form-check form-check-inline mx-1">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">是</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">否</label>
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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </nav>
        <div class="row py-3 px-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                        全部
                    </button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                        male
                    </button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                        female
                    </button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="row">
                        <table class="table table-primary table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>物種</th>
                                    <th>SEX</th>
                                    <th>結扎</th>
                                    <th>共幾隻</th>
                                    <th>修改/刪除</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A021</td>
                                    <td>猩猩</td>
                                    <td>公</td>
                                    <td>否</td>
                                    <td>無</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#breedallModal" data-bs-whatever="@mdo">
                                            修改
                                        </button>
                                        <div class="modal fade" id="breedallModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content row justify-content-center">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            修改繁殖紀錄
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
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">物種</span>
                                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                                </div>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <p>選擇性別</p>
                                                                    <div class="form-check mx-1">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                            公
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                            母
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <p>是否結扎</p>
                                                                    <div class="form-check form-check-inline mx-1">
                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                        <label class="form-check-label" for="inlineRadio1">是</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                        <label class="form-check-label" for="inlineRadio2">否</label>
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
                                        <button type="button" class="btn btn-danger">
                                            刪除
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <div class="row">
                        <table class="table table-primary table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>物種</th>
                                    <th>SEX</th>
                                    <th>結扎</th>
                                    <th>共幾隻</th>
                                    <th>修改/刪除</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A021</td>
                                    <td>猩猩</td>
                                    <td>公</td>
                                    <td>否</td>
                                    <td>無</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#breedmaleModal" data-bs-whatever="@mdo">
                                            修改
                                        </button>
                                        <div class="modal fade" id="breedmaleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content row justify-content-center">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            修改雄性繁殖紀錄
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
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">物種</span>
                                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                                </div>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <p>選擇性別</p>
                                                                    <div class="form-check mx-1">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                            公
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                            母
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <p>是否結扎</p>
                                                                    <div class="form-check form-check-inline mx-1">
                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                        <label class="form-check-label" for="inlineRadio1">是</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                        <label class="form-check-label" for="inlineRadio2">否</label>
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
                                        <button type="button" class="btn btn-danger">
                                            刪除
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <div class="row">
                        <table class="table table-primary table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>物種</th>
                                    <th>SEX</th>
                                    <th>結扎</th>
                                    <th>共幾隻</th>
                                    <th>修改/刪除</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A021</td>
                                    <td>猩猩</td>
                                    <td>公</td>
                                    <td>否</td>
                                    <td>無</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#breedfemaleModal" data-bs-whatever="@mdo">
                                            修改
                                        </button>
                                        <div class="modal fade" id="breedfemaleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content row justify-content-center">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            修改雌性繁殖紀錄
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
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">物種</span>
                                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                                                </div>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <p>選擇性別</p>
                                                                    <div class="form-check mx-1">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                            公
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                            母
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <p>是否結扎</p>
                                                                    <div class="form-check form-check-inline mx-1">
                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                        <label class="form-check-label" for="inlineRadio1">是</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                        <label class="form-check-label" for="inlineRadio2">否</label>
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
    </div>
</div>
@endsection