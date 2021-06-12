<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Home</title>
</head>
<body >
    @include('inc.navBar')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
               @yield('content') 
            </div>
            <div class ="col-md-4 col-lg-4">
              @yield('sidebar') 
            </div>
        </div>
    </div>
</body>
</html>