<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    @foreach ($settings as $setting)
    {{ $setting->title }}
    @endforeach
  </title>

  @foreach ($settings as $setting)
  <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '{{ $setting->pixel }}');
      fbq('track', 'PageView');
  </script>
  <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '{{ $setting->pixeltwo }}');
      fbq('track', 'PageView');
  </script>
  <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '{{ $setting->pixelthree }}');
      fbq('track', 'PageView');
  </script>
  <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '{{ $setting->pixelfour }}');
      fbq('track', 'PageView');
  </script>

  @endforeach

  @foreach ($settings as $setting )
    <link rel="shortcut icon" href="{{asset($setting->logo)}}">
    @endforeach

  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/xzoom.css" media="all" />
    <!-- Libraries Stylesheet -->
  <link href="{{ asset('/') }}website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


  <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/style.css">
</head>

<body>
  <div class="container shadow rounded">
    <div class="mobile">
      <div class="row align-items-center py-2">
        <div class="col-6">
          @foreach ($settings as $setting)
          <a href="{{ route('home') }}">
            <img src="{{asset($setting->logo)}}"  alt="" height="60" width="140">
          </a>
           
          @endforeach
        </div>
        <div class="col-2" >
          <i class="fa-solid fa-bars text-site-color fs-3 " id="menu"></i>
        </div>
        <div class="col-2" >
          {{-- <i class="fa-solid fa-globe text-site-color fs-3" id="search"></i> --}}
          <i class="fa-solid fa-magnifying-glass  fs-3" id="search"></i>
        </div>
        <div class="col-2">
          <a href="{{route('show-cart')}}" type="button" class="btn btn-danger shopping position-relative float-end">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-white text-danger border-danger">
              {{$totalCartProduct}}
            </span>
          </a>
        </div>
        <div class="col-md-5 search-mobile" >
          <div class="search-section pt-2" id="search-mobile">
            <form action="{{route('search')}}" method="get">
              @csrf
              <input type="search" name="search"  placeholder="কিছু খুঁজছেন? এখানে লিখুন"/>
              <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center  web">
      <div class="col-md-3 mail-logo d-sm-none d-md-block py-3">
        @foreach ($settings as $setting)
        <a href="{{ route('home') }}">
          <img src="{{asset($setting->logo)}}"  alt="" height="60" width="140">
        </a>
        @endforeach
        
      </div>
      <div class="col-md-5">
        <div class="search-section">
          <form action="{{route('search')}}" method="get">
                @csrf
              <input type="search" name="search"  placeholder="কিছু খুঁজছেন? এখানে লিখুন"/>
              <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        </div>
      </div>
      <div class="col-md-4">
        @foreach ($settings as $setting)
        <a href="tel:+88{{ $setting->mobile }}" class="btn btn-success hotline fw-bold">
          <i class="fa-solid fa-clock"></i>
          +88
          {{ $setting->mobile }}
        
        
        </a>
        @endforeach
        
        <a href="{{route('show-cart')}}" type="button" class="btn btn-danger shopping position-relative float-end">
          <i class="fa-solid fa-cart-shopping"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-white text-danger border-danger">
            {{$totalCartProduct}}
          </span>
        </a>
      </div>
    </div>
  </div>

 
  @yield('body')

  <footer class="footer py-4 shadow sticky-footer">
    <div class="container">
      <div class="row ">
        {{-- <div class="col">
            
        <a href="#" class="text-site-color fw-bold text-decoration-none">EG SHOP © 2015-2023</a> --}}
        <h5 class="text-center text-white">© 2023 Sobponno | Developed By<a href="https://bengal-it.com/" target="_blank" class=" text-white fw-bold text-decoration-none foot-company"> Bengal-IT</a></h5>
        <!--<div class="col-md-6">-->
        <!--  <a href="#" class="text-site-color fw-bold text-decoration-none  foot-client"> © 2023 Sobponno</a>-->
        <!--</div>-->
        <!--<div class="col-md-2"></div>-->
        <!--<div class="col-md-4 mx-auto">-->
        <!--  <a href="https://bengal-it.com/" target="_blank" class=" text-site-color fw-bold text-decoration-none foot-company">Developed By Bengal-IT</a>-->
        <!--</div>-->
        {{-- <a href="#" class="float-end text-site-color fw-bold text-decoration-none">ওয়েবসাইট তৈরি করেছে Bengal-IT</a>
        </div> --}}
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="{{ asset('/') }}website/assets/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> --}}

  {{-- <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script> --}}



  <script src="{{ asset('/') }}website/lib/easing/easing.min.js"></script>
  <script src="{{ asset('/') }}website/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{ asset('/') }}website/assets/js/xzoom.min.js"></script>
  <script src="{{ asset('/') }}website/assets/js/setup.js"></script>
  <!-- Template Javascript -->
  <script src="{{ asset('/') }}website/assets/js/main.js"></script>
  <!-- <script>
    $(document).ready(function(){
      $('#menu').click(function(){
        $('.category-list').toggleClass('.category-list-mobil');
      });
    });
  </script> -->
  <script>
    $(document).ready(function(){
      $('#menu').click(function(){
        document.getElementById('category-mobile').classList.toggle('category-list-mobil');
      })
    })
  </script>
  <script>
    $(document).ready(function(){
      $('#search').click(function(){
        // alert("ok")
        document.getElementById('search-mobile').classList.toggle('search-section-mobile');
      })
    })
  </script>
  <!-- <script>
    $(document).ready(function(){
      $('#search').click(function(){
        $('.search-mobile').toggleClass('.search-section-mobile');
      });
    });
  </script> -->
   @stack('script')

</body>

</html>