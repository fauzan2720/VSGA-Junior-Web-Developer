<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas Minggu ke 6</title>

    <!-- memanggil css -->
    <link rel="stylesheet" href="style.css">

    <!-- memanggil css bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="container mt-3">
    <h1>Form Pendaftaran | Junior WEB Developer</h1>
    <hr>
    <form class="form-horizontal" action="#" method="post">
        <div class="form-group">
            <label for="Nama">Nama</label>
                <input type="text" class="form-control" name="Nama" placeholder="Masukkan nama..">
        </div>
        <div class="form-group mt-3">
            <label for="Alamat">Alamat</label>
                <textarea rows="3" class="form-control" name="Alamat" placeholder="Masukan alamat lengkap.."></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="Tempat">Tempat lahir</label>
                <input type="text" class="form-control" name="Tempat" placeholder="Masukan tempat lahir..">
        </div>
        <div class="form-group mt-3">
            <label>Jenis kelamin</label>
            <br>
            <input type="radio" id="lk" name="JK" value="Laki-laki"> 
            <label for="lk">Laki-laki</label>
            <input type="radio" id="pr" name="JK" value="Perempuan" style="margin-left : 20px"> 
            <label for="pr">Perempuan</label>
        </div>
        <div class="form-group mt-3">
            <label for="Usia">Usia</label>
                <input type="text" class="form-control" name="Usia" placeholder="Masukan usia..">
        </div>
        <br>
        <div class="form-group">
            <div>
                <input type="submit" class="btn btn-primary" value="Kirim" name="kirim" style="width: 100%;">
            </div>
        </div>
    </form>

    <div style="margin-bottom: 30px;">
        <hr>
        <h1>Output :</h1>
        <hr>
        <p>Nama : <?=$_POST['Nama'] ?> </p>
        <p>Alamat : <?=$_POST['Alamat'] ?> </p>
        <p>Tempat : <?=$_POST['Tempat'] ?> </p>
        <p>Jenis Kelamin : <?=$_POST['JK'] ?> </p>
        <p>Usia : <?=$_POST['Usia'] ?> </p>
    </div>
</div>

</body>
</html>