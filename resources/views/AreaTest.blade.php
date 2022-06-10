<head>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<x-app-layout>
  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
  </x-slot>
  <!-- <div>
    <img src="../animal_img/黑熊.jpg" alt="animal_img">
  </div> -->
  <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">pid</th>
        <th scope="col">name</th>
        <th scope="col">introduction</th>
        <th scope="col">img</th>
        <th scope="col">物種數量</th>
        <th scope="col">場區動物隻數</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($areas as $area)
    <tr>
        <th scope="row">{{$area->pid}}</th>
        <td>{{$area->name}}</td>
        <td>{{$area->introduction}}</td>
        <td>{{$area->img}}</td>
        <td>{{$area->speciestotal}}種</td>
        <td>共{{$area->animaltotal}}隻</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</x-app-layout>