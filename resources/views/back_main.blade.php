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
<div class="px-2" id="wrapper">
    <div class="row direction-colum px-3">
        <nav class="navbar navbar-expand-lg bg-light col-12 p-3">
            <div class="container-fluid">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    新增物種
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content row justify-content-center">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    新增物種
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body row justify-content-center">
                                <form class="col-12 d-flex flex-column" id="popDiv">
                                    <div class="row flex-row" id="top">
                                        <div class="col-6 d-flex justify-content-center" id="left">
                                            <div class="row direction-column justify-content-center">
                                                <div class="col-12 px-1" id="picture">
                                                    <!--預覽區塊-->
                                                    <img class="img-thumbnail" id="demo" />
                                                </div>
                                                <div class="col-12 d-flex justify-content-center px-1">
                                                    <label for="file-upload" class="custom-file-upload">
                                                        <i class="fa fa-cloud-upload"></i> 上傳檔案
                                                    </label>
                                                    <input id="file-upload" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6" id="right">
                                            <select class="form-select my-3" aria-label="Default select example">
                                                <option selected>門</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>綱</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>目</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>科</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>屬</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option>保育等級</option>
                                                <option>滅絕（Extinct, EX）</option>
                                                <option>
                                                    野外滅絕（Extinct In the Wild, EW）
                                                </option>
                                                <option>
                                                    極危（Critically Endangered, CR）
                                                </option>
                                                <option>瀕危（Endangered, EN）</option>
                                                <option>易危（Vulnerable, VU）</option>
                                                <option>
                                                    接近受威脅（Near Threatened, NT）
                                                </option>
                                                <option>暫無危機（Least Concern, LC）</option>
                                                <option>資料不足（Data Deficient, DD）</option>
                                                <option>未評估（Not Evaluated, NE）</option>
                                            </select>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>所在場區</option>
                                                <option value="1">亞洲動物區</option>
                                                <option value="2">非洲動物區</option>
                                                <option value="3">奧洲動物區</option>
                                                <option value="4">非洲洲動物區</option>
                                                <option value="5">雨林動物區</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row" id=" bottom">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">物種</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">體型</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">學名</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">食性</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">分布</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">特徵</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
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
                    <input class="form-control me-2" type="search" placeholder="請使用物種查詢" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </nav>
        <div class="container-fluid ms-2 px-5 py-3">
            <div class="row justify-content-around">
                <div class="col-sm-12 col-lg-5">
                    <div class="row">
                        <div class="card mt-3">
                            <div class="row g-0">
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="imgBlock">
                                        <img class="w-100 hoverImg" src="yoyo.jpg" />
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6" id="left">
                                                    <p>門:脊索動物們</p>
                                                    <p>綱:測試剛</p>
                                                    <p>目:靈長目</p>
                                                    <p>科:測試科</p>
                                                    <p>屬:測試數</p>
                                                    <p>保育等級:測試數</p>
                                                </div>
                                                <div class="col-6" id="right">
                                                    <p>物種:測試</p>
                                                    <p>體型:測試</p>
                                                    <p>學名:測試</p>
                                                    <p>食性:測試</p>
                                                    <p>分布:測試測試測試測試測試</p>
                                                    <p>所在場區:測試測試測試測試</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p>
                                                特徵:測試測試測試測試:測試測試測試測試:測試測試測試測試
                                            </p>
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
                <div class="col-sm-12 col-lg-5">
                    <div class="row">
                        <div class="card mt-3">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <div class="imgBlock">
                                        <img class="w-100 hoverImg" src="yoyo.jpg" />
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6" id="left">
                                                    <p>門:脊索動物們</p>
                                                    <p>綱:測試剛</p>
                                                    <p>目:靈長目</p>
                                                    <p>科:測試科</p>
                                                    <p>屬:測試數</p>
                                                    <p>保育等級:測試數</p>
                                                </div>
                                                <div class="col-6" id="right">
                                                    <p>物種:測試</p>
                                                    <p>體型:測試</p>
                                                    <p>學名:測試</p>
                                                    <p>食性:測試</p>
                                                    <p>分布:測試測試測試測試測試</p>
                                                    <p>所在場區:測試測試測試測試</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p>
                                                特徵:測試測試測試測試:測試測試測試測試:測試測試測試測試
                                            </p>
                                        </div>
                                    </div>
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