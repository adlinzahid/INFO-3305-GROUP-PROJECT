@extends('mainpage')

<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.html">
			<h2 class="text-white text-capitalize"></i>Gym<span class="text-color">Fit</span></h2>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
			aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-view-list"></span>
		</button>
		<div class="collapse text-center navbar-collapse" id="navbarsid">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">Pages.</a>

				</li>
				<li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">Blog.</a>
					<
				</li>
				<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
			</ul>
			<div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
				<a href="tel:+23-345-67890">
					<h3 class="text-color mb-0"><i class="ti-mobile mr-2"></i>FSC GYM IIUM</h3>
				</a>
			</div>
		</div>
	</div>
</nav>

<br>

<div class="main-wrapper ">

<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<span class="h6 d-inline-block mb-4 subhead text-uppercase">Female Gym IIUM</span>

			</div>
		</div>
	</div>
</section>

<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-box-2">
                    <br>
                    <h5 class="title-left">
                      User Feedback
                    </h5>
                  </div>
                  <div>

<form action="registeruser" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                  <input type="text" name="q1" class="form-control" id="matric_id" placeholder="How satisfied were you with the sessions?" required>
                                </div>
                              </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="q2" class="form-control" id="first_name" placeholder="What can we do to improve your overall experience?" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="q3" class="form-control" id="last_name" placeholder="Feel free to share any additional thoughts about the Gym." required>
                            </div>
                          </div>

                          </div>
                          <div class="col-md-12 text-center">
                            {{-- <button type="submit" class="button button-a button-big button-rouded">Save</button> --}}
                            <a type="submit" class="btn btn-primary" href="/register-user">Submit</a>
                          </div>
                        </div>
                      </form>
