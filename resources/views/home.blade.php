<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Blade Template</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
              </li>
          </div>
        </div>
      </nav>
    <div class="container-fluid">
        <h1>Selamat datang {{$name}}</h1>
        <h2>Role anda adalah {{$role}}</h2>

        {{-- @if ($role == 'admin')
            <p>selamat anda memiliki semua hak akses disini!</p>
            <a href="#">Ke halaman admin</a>
        @elseif($role == 'staff')
            <a href="#">ke halaman staff</a>
            @else
            <a href="#">ke halaman login</a>
        @endif --}}

        @switch($role)
            @case($role == 'admin')
              <a href="#">Ke halaman admin</a>
              @break
              @case($role == 'staff')
              <a href="#">Ke halaman staff</a>
              @break
              @default
              <a href="#">Ke halaman login</a>       
        @endswitch

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>no</th>
              <th>nama buah</th>
            </tr>
          </thead>
          @foreach ($buah as $data)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data}}</td>
          </tr>
          @endforeach
        </table>
                        
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>