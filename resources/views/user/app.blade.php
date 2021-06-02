<!DOCTYPE html>
<html lang="en">

    <head>
        
        @include('user.layouts.head')

    </head>
    <body>
       


        @include('user.layouts.header')

            @section('main-content')

            @show



        @include('user.layouts.footer')


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('user/js/scripts.js')}}"></script>

    </body>
</html>
