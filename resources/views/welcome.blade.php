<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    @vite(['resources/js/app.js'])
  </head>
  <body style="background-image: url({{ Vite::asset('resources/images/zebra.png') }})">

    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
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
          <a class="navbar-item">
            Home
          </a>

          <a class="navbar-item">
            Documentation
          </a>

          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              More
            </a>

            <div class="navbar-dropdown">
              <a class="navbar-item">
                About
              </a>
              <a class="navbar-item">
                Jobs
              </a>
              <a class="navbar-item">
                Contact
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                Report an issue
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

    <section class="section">

      <div class="container">
        <div class="content">
          <h1 class="title">Hello World!</h1>
        </div>
        <p class="subtitle">
          Lorem Ipsum
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, est vel ultricies condimentum, enim nisl scelerisque mauris, sodales ornare tortor tortor ac nunc. Pellentesque dictum ipsum egestas dolor tincidunt, vel molestie arcu iaculis. Donec ac mollis quam. Proin feugiat arcu eros, quis auctor turpis facilisis eget. Praesent scelerisque sem vel enim sodales, non ultricies metus convallis. Donec luctus tellus nec finibus tristique. Curabitur scelerisque ut mauris vel hendrerit. Proin eleifend varius venenatis. Proin velit magna, commodo vitae ante ac, dictum interdum nunc. Nam tempor neque vitae elit dictum auctor. Integer quis pharetra ex. In quam purus, rutrum euismod pharetra a, suscipit nec enim. 
        </p>
      </div>
    </section>

    <!--<img src="{{ Vite::asset('resources/images/zebra.png') }}" alt="" />-->
  </body>
</html>
