@extends('master.layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
    <div class="main-wrapper ">
        <section class="page-title bg-2">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="index.html" class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a></li>
                    <li class="list-inline-item"><span class="text-white">|</span></li>
                    <li class="list-inline-item"><a href="#" class="text-color text-uppercase text-sm letter-spacing">Profile</a></li>
                  </ul>
                   <h1 class="text-lg text-white mt-2">What We do</h1>
              </div>
            </div>
          </div>
        </section>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
    <h1>2118228</h1>
    <p class="title">Nooralya</p>
    <p class="title">Zuraimi</p>
    <p>nqasrinazuraimi@gmail.com</p>

</div>

</body>
</html>
@endsection
