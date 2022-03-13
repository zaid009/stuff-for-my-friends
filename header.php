
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="index.php">
						<img src="images/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Bids<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="Product.php">Product</a>
									
									
								</div>
							</li>
							
							<?php
							if(isset($_SESSION['check']))
								{

								
								?>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Account <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								
								<div class="dropdown-menu">
									<a class="dropdown-item" href="logout.php">Logout</a>
									<a class="dropdown-item" href="user-profile.php">Profile</a>
									<a class="dropdown-item" href="Product-upload.php">Upload</a>
								</div>
							</li>
							<?php  }
							else{

							
							?>
						</ul>

						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="login.php">Login</a>
							</li>
							
						</ul>
						<?php
							}
						?>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

