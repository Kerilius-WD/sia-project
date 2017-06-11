<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <title>Login</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Front-end design -->
    <style>
      html, body{
        background-image: url("../img/qpbp-bckground-web-blur.jpg");
        background-image: no-repeat;
        background-size: 100% 1080px;
      }

      .container{
          width: 500px;
          height: 400px;
          text-align: center;
          background-color: rgba(52, 73, 94, 0.7);
          border-radius: 4px;
          margin: 0 auto;
          margin-top: 150px;
      }

      .continer img{
        width: 120px;
        height: 120px;
        font-size: 18px;
        margin-bottom: 20px;

      }
      input{
        width: 45px;
        height: 300px;
        font-size: 18px;
        margin-bottom: 20px;
        background-color: #fff;
        padding-left: 30px;
      }

      form-input{
        content:"";
        position: absolute;
        font-family: sans-serif;
        font-size: 30px;
      }
    </style>
  </head>
  <body>
    <div class="container">
    <form>
      <div class="form-input">
        <input type="text" name="username">
      </div>
      <div class="form-input">
        <input type="password" name="password">
      </div>
    </form>
  </div>
</body>
</html>
