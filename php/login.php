<!DOCTYPE html>
<html>


<head>

	<meta charset="utf-8">

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
		integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Css for Slider Start -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">

	<!-- Css -->
	<link rel="stylesheet" href="style.css">

	<!--------------------------------->
	<title>Web Teknoloji Projesi</title>

</head>

<body>
  <!-- Navbar Start-->
  <nav class="navbar navbar-expand-md fixed-top 
	bg-info navbar-white ">

		<div class="container">

			<a href="index.html" class="navbar-brand text-white">
				<i class="fas fa-grin-wink"></i>
				Alptuna
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto ">

					<li class="nav-item">
						<a href="index.html" class="nav-link active  text-white">
							Anasayfa
						</a>
					</li>

					<li class="nav-item">
						<a href="ozgecmis.html" class="nav-link active  text-white">
							Özgeçmiş
						</a>
					</li>

					<li class="nav-item">
						<a href="sehrim.html" class="nav-link active  text-white">
							Şehrim
						</a>
					</li>

					<li class="nav-item">
						<a href="mirasimiz.html" class="nav-link active  text-white">
							Mirasımız
						</a>
					</li>

					<li class="nav-item">
						<a href="iletisim.html" class="nav-link active  text-white">
							İletişim
						</a>
					</li>

					<li class="nav-item">
						<a href="php/login.php" class="nav-link active  text-white">
							<i class="fas fa-sign-in-alt"></i>
						</a>
					</li>
				</ul>
			</div>

		</div>
	</nav>
  <!-- Navbar End-->
  <!-- Main Start -->
  <main>
    <div class="container mt-5">
      <div class="row mb-5">
        <div class="col-md-2"></div>
        <div class="card my-3 col-md-8 d-flex justify-content-center bg-info">
          <div class="card-body text-center px-5">
            <h3 class="card-title text-white">LOGIN</h3>
          </div>
        </div>
        <div class="col-md-2"></div>
        <!-- Form Part Start -->
        <div class="col-md-12 d-flex justify-content-center">
          <form action="control.php" method="post">
            <table class="table mx-3">
              <tbody>
                <tr>
                  <td>Eposta</td>
                  <td><input class="px-1" type="email" name="email"></td>
                </tr>
                <tr>
                  <td>Parola</td>
                  <td><input class="px-1" type="password" name="password"></td>
                </tr>
              </tbody>
            </table>
            <!-- Button -->
            <div class="col-md-12 d-flex justify-content-center">
              <button type="submit" class="btn btn-lg btn-outline-info mb-5" value="Gönder">Gönder</button>
            </div>
          </form>
        </div>
        <!-- Form Part End -->
      </div>
    </div>
  </main>
  <!-- Main End -->
</body>

<!-- Footer -->
<footer class="py-5 bg-info text-white text-center">
		Web-Teknolojileri-Projesi ©  Alptuna Sevimli 2023
	</footer>

</html>
