<!DOCTYPE html>
<!-- <html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"> -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- custom style -->
        <!-- <link href="<?php echo e(asset('css/Style.css')); ?>" rel="stylesheet"> -->

        <!-- font awesome  -->
        <link href="<?php echo e(asset('css/all.css')); ?>" rel="stylesheet">
        <script src="<?php echo e(asset('js/all.js')); ?>" charset="utf-8"></script>

        <!-- bootstrap css -->
        <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">

        <!-- bootstrap js -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <title> Local Information Centre </title>


    </head>

    <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="">
          logo
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Centered nav only <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown08">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <header style="height: 100vh; min-height: 500px; background-image:url(<?php echo e(asset('img/homepagebg.jpg')); ?>) ;background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 py-3 px-3 text-center" style="background-color:white; opacity:0.6; font-weight: bold;">
              <h1 class="font-weight-bold">Yangon Information Centre</h1>
              <p class="lead">A place that will allow you to explore Yangon</p>
            </div>
          </div>
        </div>
      </header>

      <div class="" id="Booking">
        <div class="album py-5 bg-light">
            <div class="container">
              <h3 class="font-weight-light text-center" >Book Restaurants Or Hotels Near You</h3>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news1.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Car crush in Yangon </h5>
                      <p class="card-text">This is a sample news article of recent car crush in yangon. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news2.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"> Celebrating Chinese New Year </h5>
                      <p class="card-text"> Areas where the new yangon city development project will be located and other information. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news3.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"> Yangon New City Plan </h5>
                      <p class="card-text"> This is a sample news article of Chinese new year festival in China town, Yangon. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
      </div>

      <div class="bg-secondary" id='news'>
        <div class="album py-5" style="background-color:#5FD1E8">
            <div class="container">
              <h3 class="font-weight-light text-center" >Latest News in Yangon</h3>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news1.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Car crush in Yangon </h5>
                      <p class="card-text">This is a sample news article of recent car crush in yangon. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news2.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"> Celebrating Chinese New Year </h5>
                      <p class="card-text"> Areas where the new yangon city development project will be located and other information. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news3.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"> Yangon New City Plan </h5>
                      <p class="card-text"> This is a sample news article of Chinese new year festival in China town, Yangon. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
      </div>

      <div class="bg-secondary" id='trendings'>
        <div class="album py-5 bg-light">
            <div class="container">
              <h3 class="font-weight-light text-center" >Trending things to do in Yangon</h3>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news1.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Car crush in Yangon </h5>
                      <p class="card-text">This is a sample news article of recent car crush in yangon. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news2.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"> Celebrating Chinese New Year </h5>
                      <p class="card-text"> Areas where the new yangon city development project will be located and other information. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news3.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"> Yangon New City Plan </h5>
                      <p class="card-text"> This is a sample news article of Chinese new year festival in China town, Yangon. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
      </div>

      <div class="bg-secondary" id='History'>
        <div class="album py-5" style="background-color:#5FD1E8">
            <div class="container">
              <h3 class="font-weight-light text-center">Notable History</h3>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news1.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Car crush in Yangon </h5>
                      <p class="card-text">This is a sample news article of recent car crush in yangon. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news2.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"> Celebrating Chinese New Year </h5>
                      <p class="card-text"> Areas where the new yangon city development project will be located and other information. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('img/news3.jpg')); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"> Yangon New City Plan </h5>
                      <p class="card-text"> This is a sample news article of Chinese new year festival in China town, Yangon. This content is a little bit longer.</p>
                      <p class="card-text text-right"><small class="text-muted"> 3 mins ago</small></p>
                      <p class="card-text"> <a href="" style="color:grey"> see more </a> </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
      </div>

          <footer id="sticky-footer" class="py-3 bg-dark text-white-50">
            <div class="container text-left">
              <small> <a href="" style="color:white"> Yangon Information Centre </a> is a project created and maintained by
                <a href="" style="color:white"> UIT Third year Section-C Group-5 </a></small>
            </div>

             <div class="container text-left">
               <div class="logo" style="letter-spacing:10px">
                 <i class="fab fa-facebook-square"></i>
                 <i class="fab fa-facebook-messenger"></i>
                 <i class="fab fa-linkedin"></i>
                 <i class="fab fa-twitter-square"></i>
                 <i class="fab fa-line"></i>
               </div>
               <small>Copyright &copy; <a href="#" style="color:white">Yangon Information Centre 2019</a></small>
             </div>
           </footer>
    </body>

</html>
<?php /**PATH /home/htet_paing_htun/UniProject/LocalInformationCentre/resources/views/welcome.blade.php ENDPATH**/ ?>