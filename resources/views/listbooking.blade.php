
@extends('master.layout')
@section('content')

    <!-- Section About start -->
    <div class="main-wrapper ">
        <section class="page-title bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="index.html"
                                    class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">|</span></li>
                            <li class="list-inline-item"><a href="#"
                                    class="text-color text-uppercase text-sm letter-spacing">Our booking system</a></li>
                        </ul>
                        <h1 class="text-lg text-white mt-2">Online Booking System</h1>
                    </div>
                </div>
            </div>
        </section>

<body>

  <main id="main">

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
                        <h5 class="title-left">
                          List of Booking
                        </h5>
                      </div>

                        <table class="table table-striped table-dark">
                            <thead>
                              <tr>


                                <th scope="col">Matric ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Gym Room</th>
                                <th scope="col">Dates</th>
                                <th scope="col">Email</th>
                              </tr>
                            </thead>
                            <tbody>

                                @foreach ($Booking as $booking_item)


                                <tr>
                                  <td>{{$booking_item->matric_id}}</td>
                                  <td>{{$booking_item->first_name}}</td>
                                  <td>{{$booking_item->last_name}}</td>
                                  <td>{{$booking_item->gym_room}}</td>
                                  <td>{{$booking_item->date}}</td>
                                  <td>{{$booking_item->email}}</td>


                                </tr>

                                @endforeach
                              <!--
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>fat@gmail.com</td>
                                <td>0140224384</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>Bird</td>
                                <td>twitt@yahoo.com</td>
                                <td>0127359243</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Ibrahim</td>
                                <td>Saad</td>
                                <td>saad@yahoo.com</td>
                                <td>0127359243</td>
                              </tr>
                            -->
                            </tbody>
                          </table>

                      </div>
                    </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- End Contact Section -->

    @endsection
