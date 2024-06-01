<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Now</title>
    <link rel="stylesheet" href="./static/css/bootstrap.min.css">
    <link rel="stylesheet" href="./static/css/style.css">
    <style>
        body {
            min-height: 200vh;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-black fixed-top navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Movies Now</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Signin</a>
        </li>
    </ul>
    </div>
  </div>
</nav>

<section id="Home">
<div class="container-fluid min-vh-100">
  <div class="row text-light h-100 min-vh-100">
    <div class="col-12 col-md-6 d-flex justify-content-center flex-column bg-inf">
      <div>
        <h1 class="display-1 my-auto d-block">Now Showing</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit magnam ullam sunt accusantium voluptas architecto?
        </p>
      </div>
    </div>
    <div class="col-12 col-md-6 p-3 my-auto">
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://theblahcksheep.com/wp-content/uploads/2023/12/animal-film-has-achieved-significant-rs-600-crore-landmark-1-1024x576.jpg" class="d-block img-thumbnail w-100" alt="...">
            <div class="d-flex align-items-center justify-content-center w-100 position-absolute top-50">
      
                <a href="./trailers.php?trailer-url=https://www.youtube.com/embed/8FkLRUJj-o0?si=BU_2Z9eROGLndOum" class="view-trailer-btn btn btn-primary text-light btn-outline-dark">View Trailer</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.thedirect.com/media/article_full/avengers-5-characters-shang-chi_1.jpg" class="d-block w-100 img-thumbnail" alt="...">
            <div class="d-flex align-items-center justify-content-center w-100 position-absolute top-50">
      
                <a href="./trailers.php?trailer-url=https://www.youtube.com/embed/-OkmgrtTmNc?si=U7EA7fzeGvi8Deku" class="view-trailer-btn btn btn-primary text-light btn-outline-dark">View Trailer</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://st1.bollywoodlife.com/wp-content/uploads/2024/03/FotoJet-29.jpg" class="d-block w-100 img-thumbnail" alt="...">
            <div class="d-flex align-items-center justify-content-center w-100 position-absolute top-50">
      
                <a href="./trailers.php?trailer-url=https://www.youtube.com/embed/Yxe-mIVIwM4?si=HJbormKAF_pMAUMP" class="view-trailer-btn btn btn-primary text-light btn-outline-dark">View Trailer</a>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</div>
</section>

<section>
  <div class="container p-3">
    <h1 class="text-primary">Book your show now</h1>
  </div>
</section>
</body>
<script src="./static/js/bootstrap.min.js"></script>
</html>
