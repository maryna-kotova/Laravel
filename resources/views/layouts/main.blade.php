<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/resources/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    @yield('css')
</head>
<body>
  <div class="all">
      <div class= "header-content">
        <div class="logo">
          <a href="/"></a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Menu</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/sale">% Акции</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/dogs" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Собаки
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/dogs/dogfeed">Корм</a>
                  <a class="dropdown-item" href="/dogs/dogplates">Миски</a>
                  <a class="dropdown-item" href="/dogs/dogbeds">Лежанки</a>  
                  <a class="dropdown-item" href="/dogs/dogammunition">Амуниция</a>              
                  <a class="dropdown-item" href="/dogs/dogtoys">Игрушки</a>              
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/cats" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Кошки
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/cats/catfeed">Корм</a>
                  <a class="dropdown-item" href="/cats/catplates">Миски</a>
                  <a class="dropdown-item" href="/cats/catbeds">Лежанки</a>                         
                  <a class="dropdown-item" href="/cats/cattoys">Игрушки</a>              
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/reviews">Отзывы</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/contacts">Контакты</a>
              </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>

      <div class="container">
          @yield('page-index')
          @yield('page-contacts')
          @yield('page-reviews')
          @yield('page-sales')
          @yield('page-dogs')
          @yield('page-cats')
      </div>

      <footer>Footer</footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>