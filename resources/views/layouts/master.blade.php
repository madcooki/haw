<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@2/css/all.min.css">
  </head>
  <body style="background-attachment: fixed; background-image: url({{ Vite::asset('resources/images/zebra.png') }})">

    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">
          <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="{{ url('/') }}">
            Home
          </a>

          <a class="navbar-item" href="{{ url('/rants') }}">
            Rants
          </a>

          <a class="navbar-item" href="{{ url('/reviews') }}">
            Reviews
          </a>

          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              Services
            </a>
            <div class="navbar-dropdown">
              <a class="navbar-item" href="{{ url('/services/ac') }}">
                A/C
              </a>
              <a class="navbar-item" href="{{ url('/services/appliances') }}">
                Appliances
              </a>
              <a class="navbar-item" href="{{ url('/services/shifting-gears') }}">
                Shifting Gears
              </a>
              <a class="navbar-item" href="{{ url('/services/artz-amazing') }}">
                Artz Amazing!
              </a>
              <a class="navbar-item" href="{{ url('/services/housesitting') }}">
                Housesitting
              </a>
              <a class="navbar-item" href="{{ url('/services/healthy-home') }}">
                Healthy Home
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                + More
              </a>
            </div>
          </div>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-primary">
                <strong>Sign up</strong>
              </a>
              <a class="button is-light">
                Log in
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <section class="section first-section">
      <div class="container">
        <div class="columns">
          <div class="column is-9">
            <div class="body-block">
              @yield('body')
            </div>
          </div>
          <div class="column is-3">
            <div class="body-block sidebar">
              @yield('sidebar')
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
          <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
          is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
        </p>
      </div>
    </footer>

    <!--<img src="{{ Vite::asset('resources/images/zebra.png') }}" alt="" />-->
  </body>
</html>
