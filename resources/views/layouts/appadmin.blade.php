<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="backend/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="backend/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
<link href="{{asset('backend/assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{asset('backend/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    {{-- sidebar here --}}
    @include('include.sidebar')
    <div class="main-panel">

      <!-- Navbar -->
      @include('include.navbar')
      <!-- End Navbar -->
      {{-- start content --}}
      @yield('content')

      {{-- end content --}}


        {{-- footer starts --}}

      @include('include.footer')

        {{-- footer ends --}}
        
        </div>
      </div>
      <div class="fixed-plugin">
        {{--filter here--}}
            @include('include.filter')
        {{--filter end--}}
      </div>
      <!--   Core JS Files   -->
        {{-- scripts --}}
            @include('include.scripts')
        {{-- /scripts --}}
{{-- dashboard script --}}
    @yield('script');

    <script>
        ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error=>{
        console.error(error)
        });
    </script>
<script>
  $(document).on("click", "#delete", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    bootbox.confirm("Do you really want to delete this ?", function(confirmed){
      if(confirmed){
        window.location.href = link;
      };
    });
  });
</script>

<script>
    $(document).on("click", "#delete1", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      bootbox.confirm("You will not be able to reverse this action, Do you still want to continue?", function(confirmed){
        if(confirmed){
          window.location.href = link;
        };
      });
    });
  </script>

</body>

</html>