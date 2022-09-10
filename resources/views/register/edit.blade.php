<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>form Pendaftaran</title>
  </head>
  <body>
      <div class="container">
    <br>
    <form method="POST" action="{{ url('register/'.$model->id) }}">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="_method" value="PATCH">
            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_lengkap" value="{{ $model->nama_lengkap}}" >
        </div>
        <div class="mb-3">
            <input type="hidden" name="_method" value="PATCH">
            <select class="form-select form-control" id="exampleSelect1" required name="jk" value="{{ $model->jk}}">
                <option value="{{$model->jk}}">{{$model->jk}}</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        <div class="mb-3">
            <input type="hidden" name="_method" value="PATCH">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" value="{{ $model->alamat}}">
        </div>
        <div class="mb-3">
            <input type="hidden" name="_method" value="PATCH">
            <select class="form-select form-control" id="exampleSelect1" required name="agama" value="{{ $model->agama}}">
                <option value="{{$model->agama}}">{{$model->agama}}</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">kristen</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="hidden" name="_method" value="PATCH">
            <label for="exampleInputEmail1" class="form-label">Asal SMP</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="asal_smp" value="{{ $model->asal_smp}}">
        </div>
        <div class="mb-3">
            <input type="hidden" name="_method" value="PATCH">
            <label for="exampleInputEmail1" class="form-label">Jurusan</label>
            <select class="form-select form-control" id="exampleSelect1" required name="jurusan" value="{{ $model->jurusan}}">
                <option value="{{$model->jurusan}}">{{$model->jurusan}}</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
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
