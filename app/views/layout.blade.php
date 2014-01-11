<html>
<head>
  <title>HomePage</title>
  <link rel="stylesheet" href="/assets/css/style.css" />
  <script src="/assets/js/jquery-1.10.2.min.js"></script>
</head>
<body>
  <div class="wrapper">
    <header>
      <nav>
        <ul>
          <li> {{ link_to('/', 'Home')}}</li>
          <li> {{ link_to('products', 'Products')}}</li>
          <li> {{ link_to('cart', 'Cart') }}</li>
          <li> {{ link_to('about', 'About')}}</li>
          <li> {{ link_to('contact', 'Contact Us')}}</li>
        </ul>
      </nav>
    </header>

    <div class='main_content'>
      @yield('main-content')
    </div>

    <footer>
      &copy; Rijalhouse 2013
    </footer>
  </div>

  <script type="text/javascript">
    @yield('custom-js')
  </script>
</body>
</html>