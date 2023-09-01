<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Husband and Wife Air Conditioning, Refrigeration, and Appliance Repair</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5/css/all.min.css">
  </head>
  <body class="has-navbar-fixed-top">

    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
      <div class="container">

        <div class="navbar-brand">
          <a class="navbar-item" href="{{ url('/') }}">
            <img src="{{ Vite::asset('resources/images/logo_small.jpg') }}" />
            <!--<img src="https://bulma.io/images/bulma-logo.png" />-->
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
              About Us
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
                  Appliance Repair
                </a>
              </div>
            </div>
          </div>
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-primary is-large call-us">
                  <span class="icon">
                    <i class="fas fa-phone"></i>
                  </span>
                  <span>
                    941-350-7767
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </nav>

    <section class="hero parallax-zebra">
      <div class="hero-body filter green">
        <div class="container">
          <p class="title">
            Husband and Wife Air Conditioning, Refrigeration, and Appliance Repair ™
          </p>
          <p class="subtitle">
            Since 2019
          </p>
        </div>
      </div>
    </section>

    <section class="parallax-zebra">
      <div class="filter blue">
        <div class="container">
          <div class="columns is-desktop body-columns">
            <div class="column is-8-desktop is-9-fullhd">
              <div class="body-block">
                @yield('body')
              </div>
            </div>
            <div class="column is-4-desktop is-3-fullhd">
              <div class="body-block sticky-sidebar">

                <h1 class="title is-4">
                  Send Us a Message
                </h1>
                <hr />

                <div class="field">
                  <label class="label">Name</label>
                  <div class="control has-icons-left">
                    <input class="input" type="text" placeholder="John Doe">
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Email</label>
                  <div class="control has-icons-left">
                    <input class="input" type="email" placeholder="johndoe@example.com">
                    <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Phone</label>
                  <div class="control has-icons-left">
                    <input class="input" type="tel" placeholder="555-555-5555">
                    <span class="icon is-small is-left">
                      <i class="fas fa-phone"></i>
                    </span>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Message</label>
                  <div class="control">
                    <textarea class="textarea" placeholder="Hello, I'm inquiring about ..."></textarea>
                  </div>
                </div>

                <div class="field is-grouped is-grouped-right">
                  <div class="control">
                    <button class="button is-primary">
                      <span class="icon">
                        <i class="fas fa-envelope"></i>
                      </span>
                      <span>
                        Send
                      </span>
                    </button>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="hero is-large parallax-repairman">
      <div class="hero-body">
      </div>
    </section>

    <section class="hero is-large parallax-forest">
      <div class="hero-body">
      </div>
    </section>

    <section class="hero is-large parallax-repairman">
      <div class="hero-body">
      </div>
    </section>

    <footer class="footer">
      <div class="content has-text-centered">
        @php
          $start_year = "2023";
          $current_year = date('Y');
        @endphp
        <p>© {{ $start_year == $current_year ? $start_year : $start_year . " - " . $current_year }} Mad Cooki, LLC. All rights reserved.</p>
      </div>
    </footer>

  </body>
</html>
