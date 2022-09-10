<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ppdb</title>
  </head>
  <body>
    <div class="container">

        <br>
        <a  class="btn btn-primary" href="{{url ('register/create')}}">Tambah Data</a>
        <a  class="btn btn-success" href="{{url ('register')}}">Tampilkan Semua Data</a>

        <form action="/cari" method="post" class="d-flex mt-4">
            @csrf
            <input class="form-control me-2" name="cari" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col">No Registrasi</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Agama</th>
            <th scope="col">Asal SMP</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key=>$value)
          <tr>
            <td>{{ $value->id}}</td>
            <td>{{ $value->nama_lengkap}}</td>
            <td>{{ $value->jk}}</td>
            <td>{{ $value->alamat}}</td>
            <td>{{ $value->agama}}</td>
            <td>{{ $value->asal_smp}}</td>
            <td>{{ $value->jurusan}}</td>
            <td><a class="btn btn-info" href="{{url('register/'.$value->id.'/edit')}}">Update</a></td>
            <td>
                <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$value->id}}')"> Delete</div>


            </td>
            <td><a class="btn btn-info" href="{{url('cetak',$value->id)}}" target="_black">Cetak</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function fcthapus(id) {
        Swal.fire({
            title: 'Apakah Yakin Data Akan Dihapus?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{url('hapus/')}}" + "/" + id;
            }
        })
    }
</script>
</div>
  </body>
</html>
