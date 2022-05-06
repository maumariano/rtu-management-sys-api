<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay Pitogo</title>
    <link rel="logo" href="imgs/seal.ico" type="image/x-icon">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/services.js') }}"></script>
  </head>

  <body>
    <nav class="nav">
        <ul class="nav__list">
          <li class="nav__listlogo">
            <a href="{{ route('welcome') }}"><img src="{{ asset('assets/images/pitogo.png') }}" alt="logo"></a>
          </li>
          <a href="{{ route('welcome') }}"><li class="nav__listitem">Home</li></a>
          <li class="nav__listitem">The Barangay
            <ul class="nav__listitemdrop">
              <a href="{{ route('thebarangay') }}"><li>The Barangay</li></a>
              <a href="{{ route('brgy_officials') }}"><li>Barangay & SK Officials</li></a>
              <a href="{{ route('mission_vision') }}"><li>Vision & Mission</li></a>
              <a href="{{ route('hotline') }}"><li>Hotlines</li></a>
            </ul>
          </li>
          <li class="nav__listitem">Services
            <ul class="nav__listitemdrop">
              <a href="{{ route('brgy_clearance') }}"><li>Barangay Clearance</li></a>
              <a href="{{ route('brgy_cert') }}"><li>Barangay Certificate</li></a>
              <a href="{{ route('indigency') }}"><li>Certificate of Indigency</li></a>
              <a href="{{ route('permit') }}"><li>Permit for Telecommunication</li></a>
              <a href="{{ route('spc') }}"><li>Solo Parent Certification</li></a>
            </ul>
          </li>
          <a href="http://localhost:3000"><li class="nav__listitem">Sign In</li></a>
        </ul>
    </nav>

    @yield('content')
    
  </body>
  
</html>