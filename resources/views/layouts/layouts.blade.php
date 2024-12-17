<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj9YJWqnpyz0SlFWyYoYtQRMn_Nn3AQthOCGnBpjX0O_VVbMcnksmaIatlXNDfE_IQDtlg7AaeCEAUQAiymKywJ37Dia2fTCBsQujxBL99DO9VIoEaxKcsbQsbh-24wDFb8Debu06sgxt4/w390-h241-p-k-no-nu/CA.png">

        <title>Footbolla - PES Player Database Unofficial</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/table.js')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            .m-t {
                margin-top: 60px;
            }

            h5 {
                font-size: 10px;
            }

            .cad {
                background-color:#fff; 
            }
            

            body {
                background-color:#d5e8ed; }
            
            thead {
                background-color:rgb(206, 206, 206);
            }

            td, th {
                font-size: 10px;
            }

            p {
                font-size: 8px;
                margin-bottom: -8px;
            }

            .flag {
                height: 15px;
                width: auto;
                margin-right: 2px;
            }

            .player-data {
            background-color: #f8f9fa;
            padding: 10px;
                margin: -20px -20px 20px -20px;
            }
            .player-data h4 {
                background-color: #050e18;
                color: white;
                padding: 10px;
            }
            .player-data .label {
                font-weight: bold;
            }
            .player-data .value {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>

        @include('layouts.navbar')
        
        @yield('content')

        <footer class="bg-body-tertiary text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
             @auth
             <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="btn btn-primary">Logout</button>
             </form>
                @else
                <p>Made with <a class="text-decoration-none" href="/login">💗 </a>  by Footbolla</p>
             @endauth
              
              
            </div>
            <!-- Copyright -->
          </footer>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>