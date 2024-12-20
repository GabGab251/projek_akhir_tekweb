<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">

  <title>Surabaya Online Library</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap"
    rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-icons.css" rel="stylesheet">
  <link href="css/owl.carousel.min.css" rel="stylesheet">
  <link href="css/owl.theme.default.min.css" rel="stylesheet">
  <link href="css/tooplate-gotto-job.css" rel="stylesheet">
</head>

<body id="top">

  <body id="top">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
          <img src="images/logo.png" class="img-fluid logo-image">
          <div class="d-flex flex-column">
            <strong class="logo-text">Surabaya</strong>
            <small class="logo-slogan">Online Library</small>
          </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav align-items-center ms-lg-5">
            <li class="nav-item">
              <a class="nav-link active" href="homeuser_page.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="peminjaman.php">Your Borrowing</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="location.php">Location</a>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarProfile">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-4 me-2"></i> <!-- User Icon -->
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li>
                  <a class="dropdown-item" href="profile.html">
                    <i class="bi bi-person me-2"></i>Profile
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="logout.html">
                    <i class="bi bi-box-arrow-right me-2"></i>Log Out
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>

      <header class="site-header">
        <div class="section-overlay"></div>

        <div class="container">
          <div class="row">

            <div class="col-lg-12 col-12 text-center">
              <h1 class="text-white">Our Location</h1>

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="homepage.html">Home</a></li>

                  <li class="breadcrumb-item active" aria-current="page">Location</li>
                </ol>
              </nav>
            </div>

          </div>
        </div>
      </header>


      <section class="contact-section section-padding">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-lg-6 col-12 mb-lg-5 mb-3">
              <iframe class="google-map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23218.268526841697!2d112.73218135686254!3d-7.2667767698807335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f963d6b15f05%3A0x4aa167ad55b09e7a!2sPerpustakaan%20Umum%20Kota%20Surabaya!5e0!3m2!1sen!2sid!4v1733418189363!5m2!1sen!2sid"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-5 col-12 mb-3 mx-auto">
              <div class="contact-info-wrap">
                <div class="contact-info d-flex align-items-center mb-3">
                  <i class="custom-icon bi-building"></i>

                  <p class="mb-0">
                    <span class="contact-info-small-title">Offline Location</span>
                    Jl. Gubernur Suryo No.15, Embong Kaliasin, Kec. Genteng, Surabaya, Jawa Timur 60271
                  </p>
                </div>

                <div class="contact-info d-flex align-items-center">
                  <i class="custom-icon bi-telephone"></i>

                  <p class="mb-0">
                    <span class="contact-info-small-title">Phone</span>

                    <a href="tel: 812-4120-5412" class="site-footer-link">
                      (+62) 812-4120-5412
                    </a>
                  </p>
                </div>

                <div class="contact-info d-flex align-items-center">
                  <i class="custom-icon bi-envelope"></i>

                  <p class="mb-0">
                    <span class="contact-info-small-title">Email</span>

                    <a href="mailto:info@splonline.ac.id" class="site-footer-link">
                      info@splonline.ac.id
                    </a>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-8 col-12 mx-auto">
              <form class="custom-form contact-form" action="#" method="post" role="form">
                <h2 class="text-center mb-4">Send your book recommendations here!</h2>

                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <label for="book-title">Book's Title</label>

                    <input type="text" name="book-title" id="book-title" class="form-control"
                      placeholder="Dari Penjara ke Penjara" required>
                  </div>

                  <div class="col-lg-6 col-md-6 col-12">
                    <label for="book-author">Book's Author</label>

                    <input type="text" name="book-author" id="book-author" class="form-control" placeholder="Tan Malaka"
                      required>
                  </div>

                  <div class="col-lg-4 col-md-4 col-6 mx-auto">
                    <button type="submit" class="form-control">Send Recommendation</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="d-flex align-items-center mb-4">
              <img src="images/logo.png" class="img-fluid logo-image">

              <div class="d-flex flex-column">
                <strong class="logo-text">Surabaya</strong>
                <small class="logo-slogan">Online Library</small>
              </div>
            </div>

            <p class="mb-2">
              <i class="custom-icon bi-globe me-1"></i>

              <a href="#" class="site-footer-link">
                www.splonline.ac.id
              </a>
            </p>

            <p class="mb-2">
              <i class="custom-icon bi-telephone me-1"></i>

              <a href="tel: 812-4120-5412" class="site-footer-link">
                (+62) 812-4120-5412
              </a>
            </p>

            <p>
              <i class="custom-icon bi-envelope me-1"></i>

              <a href="mailto:info@splonline.ac.id" class="site-footer-link">
                info@splonline.ac.id
              </a>
            </p>

          </div>

        </div>
      </div>

      <div class="site-footer-bottom">
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-12 d-flex align-items-center">
              <p class="copyright-text">Copyright © Surabaya Public Library 2024</p>
            </div>

            <a class="back-top-icon bi-arrow-up smoothscroll d-flex justify-content-center align-items-center"
              href="#top"></a>

          </div>
        </div>
      </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

  </body>

</html>