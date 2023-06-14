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

        <section class="section services">
            <div class="container">
                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <style>
                    body {
                        font-family: Arial, Helvetica, sans-serif;
                    }

                    * {
                        box-sizing: border-box;
                    }

                    .input-container {
                        display: -ms-flexbox;
                        /* IE10 */
                        display: flex;
                        width: 100%;
                        margin-bottom: 15px;
                    }

                    .icon {
                        padding: 10px;
                        background: red;
                        color: white;
                        min-width: 50px;
                        text-align: center;
                    }

                    .input-field {
                        width: 100%;
                        padding: 10px;
                        outline: none;
                    }

                    .input-field:focus {
                        border: 2px black;
                    }

                    /* Set a style for the submit button */
                    button.btn {
                        background-color: red;
                        color: white;
                        padding: 15px 20px;
                        border: none;
                        cursor: pointer;
                        width: 100%;
                        opacity: 0.9;
                    }

                    button.btn:hover {
                        opacity: 1;
                    }
                </style>
                </head>

                <body>

                    <form action="/addbooking" method="post" role="form" enctype="multipart/form-data" style="max-width:500px;margin:auto">
                        @csrf
                        <h2>Booking Form</h2>

                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" class="form-control" placeholder="matric_id" name="matric_id">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" class="form-control" placeholder="first_name" name="first_name" required>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" class="form-control" placeholder="last_name" name="last_name" required>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="text" class="form-control" placeholder="gym_room" name="gym_room" required>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" type="date" class="form-control" placeholder="date" name="date" required>
                        </div>


                        <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input class="input-field" type="email" class="form-control" placeholder="email" name="email" required>
                        </div>


                        <button type="submit" class="btn">Submit</button>
                    </form>

                </body>
        </section>

@endsection
