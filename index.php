<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-pizza-slice pe-1 text-warning"></i>Pizza<br><small class="text-warning">Delicious</small></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item p-3">
            <a class="nav-link active text-warning" href="javascript:void(0)">Home</a>
          </li>
          <li class="nav-item p-3">
            <a class="nav-link" href="javascript:void(0)">Menu</a>
          </li>
          <li class="nav-item p-3">
            <a class="nav-link" href="javascript:void(0)">Services</a>
          </li>
          <li class="nav-item p-3">
            <a class="nav-link" href="javascript:void(0)">Blog</a>
          </li>
          <li class="nav-item p-3">
            <a class="nav-link" href="javascript:void(0)">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- -----End nav------- -->
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner" style="background-image:url('images/bg_1.jpg');">
      <div class="carousel-item active ">
        <div class="overlay"></div>
        <div class="container">
          <div class="row pt-5 pb-5 d-flex">
            <div class="col-md-6 m-0 text-end align-self-center slider-text ftco-animate">
              <span class="text-warning">Delicious</span>
              <h1 class="mb-4 text-light">Italian Cuizine</h1>
              <p class="mb-4 mb-md-5 text-light">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-warning p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn text-light btn-outline-warning p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
              <img src="images/bg_1.png" alt="Los Angeles" class="img-fluid" style="width:100%">
            </div>

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="overlay"></div>
        <div class="container">
          <div class="row pt-5 pb-5 d-flex zoom-in">
            <div class="col-md-6 ftco-animate">
              <img src="images/bg_2.png" alt="Los Angeles" class="img-fluid" style="width:100%">
            </div>
            <div class="col-md-6 m-0 text-start align-self-center slider-text ftco-animate">
              <span class="text-warning">Crunchy</span>
              <h1 class="mb-4 text-light">Italian Cuizine</h1>
              <p class="mb-4 mb-md-5 text-light">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-warning  p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn text-light btn-outline-warning p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>


          </div>
        </div>

      </div>
    </div>
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <!-- ----End of Carousel---  -->
  <section>
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-8 bg-black pt-5 pb-2 text-light">
          <div class="row">
            <div class="col-md-3 offset-md-2 d-flex">
              <div><i class="fa-solid fa-phone me-2 text-warning"></i></div>
              <div>
                <h6>000 (123) 456 7890</h6>
                <p>A small river named Duden flows</p>
              </div>
            </div>
            <div class="col-md-3 d-flex">
              <div><i class="fa-solid fa-location-crosshairs me-2 text-warning"></i></div>
              <div>
                <h6>198 West 21th Street</h6>
                <p>Suite 721 New York NY 10016</p>
              </div>
            </div>
            <div class="col-md-3 d-flex">
              <div>
                <i class="fa-regular fa-clock  me-2 text-warning"></i>
              </div>
              <div>
                <h6>Open Monday-Friday</h6>
                <p>8:00am - 9:00pm</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 bg-warning ps-5 d-md-flex align-items-center">
          <div class="p-5">
            <i class="fa-brands fa-twitter  me-2 text-light pe-3" style="font-size:24px;"></i>
            <i class="fa-brands fa-facebook-f  me-2 text-light pe-3 " style="font-size:24px;"></i>
            <i class="fa-brands fa-instagram me-2 text-light pe-3" style="font-size:24px;"></i>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-about d-md-flex">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 p-0 obj-fit-cover" style="background-image: url(images/about.jpg); height:auto">
          <!-- <img src="images/about.jpg" class="object-cover w-100 "> -->
        </div>
        <div class="col-md-6 col-sm-12 ftco-animate  bg-dark text-white p-5">
          <div class=" m-3 ">
            <h1 class="mb-3">Welcome to <span class="text-warning"><i class="fa-solid fa-pizza-slice"></i> Pizza</span> A Restaurant</h1>
          </div>
          <div class="m-3 mb-0">
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section style="background-image:url(images/food.png);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 text-center mt-5">
          <h2 class="mb-3">Our Services</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>

        <div class="mt-5"> 
        <div class="row text-center">
            <div class="col-md-4 slide-out-right mb-5">
              <div class=" p-5 pt-3">
                <i class="fa-solid fa-pot-food" style="font-size:60px;"></i>
              </div>
              <div class="mb-5">
                <h3>Healthy Foods</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
             </div>
            <div class="col-md-4">
              <div class="p-5 pt-3">
                <i class="fa-solid fa-pizza-slice" style="font-size:60px;"></i>
              </div>
              <div class="mb-5">
                <h3>Fastest Delivery</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class= "p-5 pt-3"  >
                <i
                data-toggle="animation" 
                data-animation-reset="true" 
                data-animation="slide-right"
                class="fa-solid fa-pizza-slice"
                 style="font-size:60px;"></i>
              </div>
              <div class="mb-5">
                <h3>Original Recipes</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section  style="background-image:url(images/bg_4.jpg);" class="text-light" >
        <div class="py-5">
            <h2 class="text-center">Contact US</h2>
        </div>
        <div>
            <form method="post" action="info.php" class="w-50 m-auto">
                <div class="form-group mb-4">
                    <label class="mb-2">Username :</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group  mb-4">
                    <label class="mb-2">Email :</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <label class="mb-2">Mobile :</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="form-group mb-4">
                    <label class="mb-2">Comments :</label>
                    <textarea class="form-control p-2" name="message"></textarea>
                </div>
                <input type="submit" class="btn btn-success mb-5" value="Submit" name="submit">
            </form>
        </div>
    </section>
    <footer>
        <p class="bg-warning text-center p-4"><a class="text-dark text-decoration-none" href="mailto:bhardwajjaanvi94@gmail.com">bhardwajjaanvi94@gmail.com</p>
    </footer>
</body>

</html>