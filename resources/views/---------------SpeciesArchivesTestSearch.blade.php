<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>首頁</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <form method="get" action="/speciesarchives_search">
        <select name="area">
            <option value="">請選擇場區</option>
            <option value="亞洲動物區">亞洲動物區</option>
            <option value="澳洲動物區">澳洲動物區</option>
            <option value="雨林動物區">雨林動物區</option>
            <option value="沙漠動物區">沙漠動物區</option>
            <option value="非洲動物區">非洲動物區</option>
        </select>
        <select name="conservation_level">
            <option value="">保育等級</option>
            <option value="EX">滅絕（Extinct, EX）</option>
            <option value="EW">野外滅絕（Extinct In the Wild, EW）</option>
            <option value="CR">極危（Critically Endangered, CR）</option>
            <option value="EN">瀕危（Endangered, EN）</option>
            <option value="VU">易危（Vulnerable, VU）</option>
            <option value="NT">接近受威脅（Near Threatened, NT）</option>
            <option value="LC">暫無危機（Least Concern, LC）</option>
            <option value="DD">資料不足（Data Deficient, DD）</option>
            <option value="NE">未評估（Not Evaluated, NE）</option>
        </select>
        <input type="submit" value="送出">
    </form>

    <div class="main_content">
        <div class="row">
            @foreach ($speciesarchives as $species)
            <div class="animalbox col-3">
                <div class="animalbox_top">
                    <img src="../animal_img/黑熊.jpg" alt="animal_img">
                </div>
                <div class="animalbox_down">
                    <div class="species">
                        <span><b>{{$species->species_}}</b></span>
                    </div>
                    <div class="id">
                        <span>編號：<b>{{$species->id}}</b></span>
                    </div>
                    <div class="nickname">
                        <span>學名：<b>{{$species->scientific_name}}</b></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    </div>
</body>

</html>