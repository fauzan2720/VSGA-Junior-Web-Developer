<?php
    function reamur($celcius){
        $reamur = 4/5 * $celcius;
        echo "$reamur";
    }
    function fahrenheit($celcius){
        $fahrenheit = (9/5 * $celcius) + 32;
        echo "$fahrenheit";

    }
    function kelvin($celcius){
        $kelvin = $celcius + 273;
        echo "$kelvin";
    }
?>



<!doctype html>
<html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pertemuan 10</title>

        <!-- Memanggil bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <style>
            .box {
                position:fixed;
                left: 50%;
                top: 40%;
                transform: translate(-50%,-50%);
                border-radius: 8px;
                background: #fff;
                width: 800px;
                margin: 15px auto;
                padding: 20px 40px;
                display: block;
                border: 1px solid #ddd;
                box-shadow: 2px 2px 20px #ddd;
            }
        </style>
  </head>

  <body>
    <div class="box">
        <h2 class="text-center pb-3">Konverter Suhu (C)</h2>
        <form action="" method="post">
            <div class="row">
                <div class="col-8">
                    <input type="number" placeholder="Inputkan suhu (C)" autofocus class="form-control" name="celcius" id="celcius">
                </div>
                <div class="col">
                    <button type="submit" id="proses" name="proses" class="btn btn-primary" style="width: 100%">Proses</button>
                </div>
            </div>
        </form>
            
        <?php if(isset($_POST['proses'])) {
            $celcius = $_POST['celcius']; ?>
            <div class="mt-2" style="width: 100%;">
                <label for="fahrenhet">Fahrenhet (F)</label>
                <input class="form-control" value="<?php fahrenheit($celcius) ?>" readonly>
            </div>
            <div class="mt-2" style="width: 100%;">
                <label for="reumur">Reumur (R)</label>
                <input class="form-control" value="<?php reamur($celcius) ?>" readonly>
            </div>
            <div class="mt-2" style="width: 100%;">
                <label for="kelvin">Kelvin (K)</label>
                <input class="form-control mb-4" value="<?php kelvin($celcius) ?>" readonly>
            </div>
        <?php } ?>
    </div>
  </body>
</html>