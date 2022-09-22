<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #side{
            height: 80vh;
            background-color: gray;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a -->
            <img src="../public/img/logo.png" alt="" width="30px">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
      
    <nav class="navbar navbar-expand-lg bg-light">

    </nav>
    
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-2 d-none d-sm-block">
                    <aside class="bg-light" id="side">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                    </aside>
                </div>
         
   
            <div class="col-lg-10 col-sm-12">
               
            diandae voluptatibus molestias voluptates aut vel sint soluta ea aspernatur! Tenetur ex, inventore excepturi fugiat mollitia voluptas.
            <div class="row">
                  <?php  for ($a=0 ; $a<10; $a++):?>
                    <div class=" col md-4">

                      <div class='card'style='width: 18rem;'>
                        <img src='../public/img/logo.png' class='card-img-top' alt='...'>
                        <div class='card-body'>
                          <h5 class='card-title'>Card title</h5>
                          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <div class='row'>
                          <a href='#' class='btn btn-primary col-md-6'>Go somewhere</a>
                          <a href='#' class='btn btn-warning col-md-6'>Ver detalles</a>
                          <a href='#' class='btn btn-danger col-md-12'>Eliminar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                        <?php endfor;?>
                      </div>
            </div>



        </div>
        
        

      <!--       <div class="col-lg-10 col-sm-12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum magnam, veritatis illo adipisci possimus nisi quisquam qui, praesentium perferendis ipsa culpa doloremque deleniti in ut repellendus necessitatibus dolores blanditiis aperiam?
            </div> -->
            

     
    <!--   <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-none d-sm-block">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul> -->
<!--     <h1>
              
        qweqweq
    </h1> -->
</body>
</html>