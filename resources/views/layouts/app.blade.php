<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>@yield('title-block')</title>
      <link rel="stylesheet" href="./css/app.css">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   </head>
   <body>
        @include('inc.header')
        
        <div class='container'>
            <div class='row'>
                @if(Request::is('/'))
                    @include('inc.hero')
                @endif
                <div class='col-8'>
                    @yield('content')
                </div>
            
                <div class='col-4'>
                    @include('inc.aside')
                </div>
            </div>
        </div>
        @include('inc.footer')
   </body>
</html>
