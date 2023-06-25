<!DOCTYPE html>

<html>
<head>
  
    <title>OMDb</title>
    <style>
      .main {
    margin: 0 auto;
}
.movie{
    display: flex;
    flex-direction: row;
    gap: 2em;
    flex-wrap: wrap;
    justify-content: center;
}

.list-movie{
    display: flex;
    flex-direction: column;
    
}
.form-input{
    display: flex;
    gap: 2px;
    margin-right: auto;
    margin-left: 40px;
}
.search{
    
    padding: 0.5em 1em;
    width: 400px;
}

button{
    padding: 0.5em 1em;
}

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
<body class="main">
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
    
    <h1 style="margin-top: 5%" align="center" id="judul">Database movie dari OMDb API</h1>
    <div class="search-container">
        <form action="{{ route('search.post') }}" method="post">
            @csrf
           <div class="form-input">
                <input class="search" type="text" name="searchValue" id="search-input" placeholder="masukkan kata kunci film..."required>
                <button type="submit" id="search-button">Search</button>
           </div>
        </form>
    </div>

    <div class="result">
        <div class="movie">
            @forelse ( $data as $val )
            <div class="list-movie">
                <p class="title">{{$val->Title}}</p>
                <img src="{{$val->Poster}}" alt="Poster" width="200px" height="250px">
            </div>
               
            @empty
                <p>Data masih kosong</p>
            @endforelse
        </div>
       
        <div>

        </div>
    </div>
</body>
</html>
</html>