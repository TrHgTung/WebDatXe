<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World - Hidden Page</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="icon" href="{{asset('images/logo_original.jpg')}}">
<link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    body {
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .link-no-under{
        text-decoration: none;
      }
  </style>
</head>
<body style="background-image: url('{{asset('images/clefable.jpg')}}');">
  <div class="mt-3 ms-3">
    <a href="{{URL::to('/')}}" class="link-no-under"> < Quay lại</a>
  </div>
  <div class="px-3 text-light text-center">
      <h1>Hello World</h1>
      <p class="lead">Tuyệt quá! Bạn đã tìm thấy trang này rồi</p>
      <p class="lead">
        <a href="https://trhgtung.github.io/PP/" class="btn btn-lg btn-light fw-bold border-white bg-white">Nhấn vào đây để tìm sự bất ngờ</a>  
      </p>
  </div>
</body>
</html>
    