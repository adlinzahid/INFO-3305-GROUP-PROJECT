@extends('master.layout')
@section('content')


<script>
    function showMessage() {
      alert("Thank You for leaving a feedback!");
    }
  </script>

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
                      User Feedback
                    </h1>
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
                            <a type="submit" onclick="showMessage()" class="btn btn-primary" href="/home">Submit</a>
                          </div>
                        </div>
                      </form>




