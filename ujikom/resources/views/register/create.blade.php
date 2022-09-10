<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form-Pendaftaran</title>
  </head>
  <body>
      <div class="container">
    <br>
    <form method="POST" action="{{ url('register')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_lengkap" placeholder="Masukan Nama Lengkap">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select class="form-select form-control" name="jk" id="exampleSelect1" required>
                <option value="hidden">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea name="alamat" id="" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Agama</label>
           <select name="agama" class="form-select" value="{{$model->agama}}" aria-label="Default select example">
                        <option  disbaled>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Atheis">Atheis</option>
                    </select>
                </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Asal SMP</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="asal_smp" placeholder="Masukan Asal SMP">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
            <select class="form-select form-control" name="jurusan" id="exampleSelect1" required>
                <option value="hidden">Pilih Jurusan</option>
                <option value="Laki-Laki">Rekayasa Perangkat Lunak</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Teknik Komputer Dan Jaringan Dasar">Teknik Komputer Dan Jaringan Dasar</option>
                <option value="Tataboga">Tataboga</option>
                <option value="Perhotelan">Perhotelan</option>
                <option value="Perkantoran">Perkantoran</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</div>
  </body>
</html>
