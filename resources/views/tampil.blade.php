<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      nav {
    overflow: hidden;
    width: 100%;
    background: linear-gradient(to right, #ffffff, #c39a2a);
    position: fixed;
    top: 0;
    height: 60px;
    display: flex;
    justify-content: space-around;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
  }
  
  nav .logo {
    font-size: 1.rem;
    width: 30%;
    left: -35px;
    position: relative;
    top: -18px;
  }
  
  nav .logo img {
    padding-top: 20px;
    width: 60px;
  }
  
  nav li {
    display: inline;
  }
  
  nav a {
    text-decoration: none;
    color: #000000;
    font-family: Arial;
    padding: 0px 30px;
    transition: 0.15s;
    font-weight: bold;
  }
  
  nav a:hover {
    color: aliceblue;
  }
  
  #nav-button {
    display: none;
  }
  
  nav ul {
    margin-top: 20px;
  }
  
  .navbar-brand {
    display: flex;
    align-items: center;
  }
  
  .navbar-caption-wrap {
    margin-left: 10px;
  }
  
  .navbar-caption {
    font-size: 20px;
    font-weight: bold;
    color: rgb(0, 0, 0);
    text-decoration: none;
  }
  
  .navbar-caption:hover {
    text-decoration: underline;
  }
    </style>
</head>
  <body>

    <header>
        <nav>
          <div class="logo" >
            <img src="assets/background.png" style="width: 100px" alt="" />
          </div>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{route('search.post')}}">OMDB</a></li>
            <li><a href="{{route('database')}}">Database</a></li>
  
          </ul>
        </nav>
      </header>
    <h1 class="text-center mt-2 mb-5 mt-5 pt-5">Data Pegawai</h1>
    
    <div class="container">
      <a href="\tambahdestinasi" type="button" class="btn btn-primary">Tambah Pegawai</a>
      <div class="row">
  
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Address</th>
              <th scope="col">Age</th>
              <th scope="col">Phone</th>
              <th scope="col">Dibuat</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pegawai as $row)
            <tr>
              <th scope="row">{{$row->id}}</th>
              <td>{{$row->name}}</td>
              <td>{{$row->address}}</td>
              <td>{{$row->Age}}</td>
              <td>{{$row->Phone}}</td>
              <td>{{$row->created_at->diffForHumans()}}</td>
              <td> <button type="button" class="btn btn-success">Update</button>
                <button type="button" class="btn btn-danger">Hapus</button> 
                <form id="form-{{$row->id}}" action="{{}}" method="POST">
                  @csrf
                  @method('delete')
                </form></td>
             

            </tr>
            @endforeach
            
           
          </tbody>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>