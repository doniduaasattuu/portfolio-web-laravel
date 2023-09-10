<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700;900&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/svg+xml" href="storage/img/exclude.svg" />
  <!-- GOOGLE FONT -->

  <!-- BOOTSTRAP DEPENDENCY -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <!-- BOOTSTRAP DEPENDENCY -->
  <title>IKIAE</title>
</head>

<style>
  #see_more {
    margin-top: 3px;
  }

  #see_more:hover {
    cursor: pointer;
  }
</style>

<body>
  <!-- NAVBAR START -->
  <nav class="sticky-top navbar navbar-expand-lg py-2 px-3 text-danger" style="background-color: #f2f2f0">
    <div class="container">
      <a style="font-family: 'Raleway', sans-serif; letter-spacing: 0.3rem" class="navbar-brand text-dark fw-semibold fs-4" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-exclude text-success" viewBox="0 0 16 16">
          <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm12 2H5a1 1 0 0 0-1 1v7h7a1 1 0 0 0 1-1V4z" />
        </svg>
        IKIAE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="ms-auto navbar-nav">
          <li class="nav-item">
            <a class="me-5 nav-link active" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="me-5 nav-link active" href="#product">Product</a>
          </li>

          <li class="nav-item">
            <a class="me-5 nav-link active" href="#about">About</a>
          </li>

          <li class="nav-item">
            <a class="me-5 nav-link active" href="#contact">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">Cart <span id="notif" class="badge bg-danger"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- NAVBAR END -->

  <!-- HERO -->
  <div style="background-color: #f2f2f0" class="container-fluid py-md-5 py-0">
    <div class="mx-auto row px-0 container py-5 d-md-flex flex-wrap-reverse">
      <div class="col-lg my-auto py-5">
        <p class="h1 md-h4 mb-4 fw-semibold">
          We design and build better chairs, for a better life.
        </p>
        <p class="mb-4 text-secondary">
          In a small shop in the heart of Cikarang, we spend our days
          relentlessly perfecting the chair. The result is a perfect blend of
          beauty and comfort, that will have a lasting impact on your health.
        </p>
        <a href="#" class="btn px-4 btn-success rounded-pill me-1">Buy now</a>
        <a href="#" class="btn px-4 btn-outline-primary rounded-pill">Explore</a>
      </div>
      <div class="col-lg-7 my-auto py-5">
        <img class="img-fluid w-100 my-auto" src="/storage/img/background-transparent.png" alt="" />
      </div>
    </div>
  </div>
  <!-- HERO -->

  <!-- INFO START -->
  <div class="container-fluid bg-body-tertiary pt-5">
    <div class="container mx-auto pt-5">
      <h2 class="fw-semibold mb-5">What makes our chairs special</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">
        <div class="col">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="32" height="32" class="text-success mb-3">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
          </svg>

          <p class="h3 features-title mb-3 fw-semibold">
            Science meets design
          </p>

          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus
            similique adipisci praesentium.
          </p>
        </div>

        <div class="col">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="32" height="32" class="text-success mb-3">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>

          <p class="h3 features-title mb-3 fw-semibold">Maximal comfort</p>

          <p>
            Reprehenderit optio placeat quasi excepturi architecto, explicabo
            facilis perspiciatis error maxime magnam.
          </p>
        </div>

        <div class="col">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="32" height="32" class="text-success mb-3">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          </svg>

          <p class="h3 features-title mb-3 fw-semibold">
            Ethical and sustainable
          </p>

          <p>
            Deleniti recusandae quidem nesciunt, eos dolorum iure, quaerat
            omnis est laudantium voluptatem voluptas!
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- INFO END -->

  <!-- CAROUSEL -->
  <div class="album bg-body-tertiary pt-5 pb-5 container-fluid">
    <div id="product" class="container py-5">
      <div class="mb-3 d-flex justify-content-between align-center">
        <h2 class="fw-semibold">Our bestselling chair</h2>
        <div id="see_more">
          <span>See more</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">
        <!-- CARD START 1 -->
        <div class="col">
          <div class="card shadow-sm">
            <img class="rounded-top img-fluid" src="/storage/img/chair-1.jpg" alt="" />
            <div class="card-body">
              <h4 class="fw-semibold">The Laid Back</h4>
              <div class="my-4 card-text">
                <ul class="list-group">
                  <li style="list-style-type: none" class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span>Leisure and relaxing.</span>
                  </li>

                  <li style="list-style-type: none" class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Comfortable for 4h.</span>
                  </li>

                  <li style="list-style-type: none" class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Vegan leather.</span>
                  </li>

                  <li style="list-style-type: none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <span>Weight 12 Kg.</span>
                  </li>
                </ul>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="add_to_cart btn btn-sm btn-outline-secondary">
                    <svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill me-1" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                    </svg>
                    Add to cart
                  </button>
                </div>
                <small class="text-body-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
                    <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  </svg>
                  IDR 400K
                </small>
              </div>
            </div>
          </div>
        </div>
        <!-- CARD END 1 -->

        <!-- CARD START 2 -->
        <div class="col">
          <div class="card shadow-sm">
            <img class="rounded-top img-fluid" src="/storage/img/chair-2.jpg" alt="" />
            <div class="card-body">
              <h4 class="fw-semibold">The Worker Bee</h4>
              <div class="my-4 card-text">
                <ul class="list-group">
                  <li style="list-style-type: none" class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span>Work.</span>
                  </li>

                  <li style="list-style-type: none" class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Comfortable for 8h.</span>
                  </li>

                  <li style="list-style-type: none" class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Vegan leather.</span>
                  </li>

                  <li style="list-style-type: none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <span>Weight 18 Kg.</span>
                  </li>
                </ul>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="add_to_cart btn btn-sm btn-outline-secondary">
                    <svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill me-1" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                    </svg>
                    Add to cart
                  </button>
                </div>
                <small class="text-body-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
                    <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  </svg>
                  IDR 850K
                </small>
              </div>
            </div>
          </div>
        </div>
        <!-- CARD END 2 -->

        <!-- CARD START 3 -->
        <div class="col">
          <div class="card shadow-sm">
            <img class="rounded-top img-fluid" src="/storage/img/chair-3.jpg" alt="" />
            <div class="card-body">
              <h4 class="fw-semibold">The Chair 4/2</h4>
              <div class="my-4 card-text">
                <ul class="list-group">
                  <li style="list-style-type: none" class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span>Leisure and relaxing.</span>
                  </li>

                  <li style="list-style-type: none" class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Comfortable all day!.</span>
                  </li>

                  <li style="list-style-type: none" class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Organic cotton.</span>
                  </li>

                  <li style="list-style-type: none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24" class="text-secondary me-2">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <span>Weight 56 Kg.</span>
                  </li>
                </ul>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="add_to_cart btn btn-sm btn-outline-secondary">
                    <svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill me-1" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                    </svg>
                    Add to cart
                  </button>
                </div>
                <small class="text-body-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
                    <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  </svg>
                  IDR 1.6M
                </small>
              </div>
            </div>
          </div>
        </div>
        <!-- CARD END 3 -->
      </div>
    </div>
  </div>
  <!-- CAROUSEL END -->

  <!-- ABOUT START -->
  <div id="about" class="container-fluid py-5 bg-secondary text-white">
    <div style="max-width: 768px" class="container mx-auto pt-5">
      <h2 class="mb-3 fw-bold">About</h2>

      <p class="mb-5">
        One brand, many companies, and many, many people – that’s us in a
        nutshell. Spread all over the world, we have a passion for home
        furnishing and an inspiring shared vision: to create a better everyday
        life for the many people. This, together with our straightforward
        business idea, shared values, and a culture based on the spirit of
        togetherness, guides us in everything we do.
      </p>

      <h1 class="fw-bold mb-2">460 IKIAE stores in 62 markets</h1>
      <p class="mb-5">Updated: June 2023</p>
      <img class="img img-fluid w-100 pb-5" src="/storage/img/stores.png" alt="" />
    </div>
  </div>
  <!-- ABOUT END -->

  <!-- CONTACT START -->
  <div style="max-width: 768px" id="contact" class="container-fluid pt-5">
    <div class="container mw-md pt-5 mx-auto">
      <h2 class="fw-bold mb-5 text-center">Contact</h2>
      <form class="pb-5" method="post" action="message_handler.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" name="exampleInputEmail1" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>

        <div class="mb-3">
          <label for="exampleInputFullname" class="form-label">Fullname</label>
          <input type="text" class="form-control" id="exampleInputFullname" name="exampleInputFullname" />
        </div>

        <div class="mb-3">
          <label for="exampleInputPhoneNumber" class="form-label">Phone Number</label>
          <input type="number" class="form-control" name="exampleInputPhoneNumber" id="exampleInputPhoneNumber" aria-describedby="emailHelp" />
        </div>

        <div class="mb-3">
          <label for="exampleInputAddress" class="form-label">Address</label>
          <textarea type="text" class="form-control" name="exampleInputAddress" id="exampleInputAddress" aria-describedby="emailHelp"></textarea>
        </div>

        <div class="mb-3">
          <label for="exampleInputMessage" class="form-label">Message</label>
          <textarea name="exampleInputMessage" id="exampleInputMessage" cols="20" rows="5" style="min-height: 100px; max-height: 200px" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success text-center">
          Send
        </button>
      </form>
    </div>
  </div>
  <!-- CONTACT END -->

  <!-- FOOTER START -->
  <div class="container pt-5">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top flex-column flex-md-row">
      <div class="col d-flex align-items-center mb-2 mb-md-0">
        <a href="/" class="me-2 text-body-secondary text-decoration-none lh-1">
        </a>
        <span class="text-body-secondary text-center">&copy;2023 | <a style="text-decoration: none; color: var(--primary)" href="https://www.donidarmawan.com">Doni Darmawan</a></span>
      </div>

      <ul class="nav col fs-5 justify-content-end list-unstyled d-flex">
        <li class="ms-3">
          <a href="#"></a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter text-secondary" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
          </svg>
        </li>
        <li class="ms-3">
          <a href="#"></a>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram text-secondary" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg>
        </li>
        <li class="ms-3">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook text-secondary" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
          </a>
        </li>
      </ul>
    </footer>
  </div>
  <!-- FOOTER END -->

  <!-- BOOSTRAP DEPENDENCY -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- BOOSTRAP DEPENDENCY -->

  <script>
    // SHADOW FOR NAVBAR
    window.document.body.onscroll = () => {
      if (window.document.documentElement.scrollTop == 0) {
        document.getElementsByTagName("nav")[0].classList.remove("shadow");
      } else {
        document.getElementsByTagName("nav")[0].classList.add("shadow");
      }
    };

    // NOTIF FUNCTION
    let notif = document.getElementById("notif");
    let add_to_cart = document.getElementsByClassName("add_to_cart");
    console.info(add_to_cart.length);

    for (let i = 0; i < add_to_cart.length; i++) {
      add_to_cart[i].onclick = () => {
        notif.textContent = Number(notif.textContent) + 1;
      };
    }
  </script>
</body>

</html>