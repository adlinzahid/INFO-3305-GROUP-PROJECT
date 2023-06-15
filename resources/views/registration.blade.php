
@extends('master.layout')
@section('content')


  <script>
    function showMessage() {
      alert("Congratulations! You have successfully registered!");
    }
  </script>
</head>
<body>


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
                    <h1 class="title-left">
                      Register As User
                    </h1>
                  </div>
                  <div>

<form action="registeruser" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                  <input type="text" name="matric_id" class="form-control" id="matric_id" placeholder="Matric ID" required>
                                </div>
                              </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Phone No" required>
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            {{-- <button type="submit" class="button button-a button-big button-rouded">Save</button> --}}
                            <a type="submit" onclick="showMessage()" class="btn btn-primary" href="/home">Register</a>
                          </div>
                        </div>
                      </form>




























