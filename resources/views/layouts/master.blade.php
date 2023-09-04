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
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="main_menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div id="main_menu" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="{{ url('/') }}">About Us</a>
            <a class="navbar-item" href="{{ url('/reviews') }}">Reviews</a>
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">Services</a>
              <div class="navbar-dropdown">
                <a class="navbar-item" href="{{ url('/services/ac') }}">A/C</a>
                <a class="navbar-item" href="{{ url('/services/appliances') }}">Appliance Repair</a>
              </div>
            </div>
          </div>
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a href="tel:+1 941-350-7767" class="button is-primary is-large is-rounded call-us">
                  <span class="icon">
                    <i class="fas fa-phone"></i>
                  </span>
                  <span>941-350-7767</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <section class="hero parallax-zebra">
      <div class="filter-green">
        <div class="hero-body">
          <div class="container">
            <p class="title">Husband and Wife Air Conditioning, Refrigeration, and Appliance Repair</p>
            <p class="subtitle">Since 2019</p>
          </div>
        </div>
      </div>
    </section>

    <section class="parallax-zebra">
      <div class="is-flex filter-blue">
        <div class="container">
          <div class="body-block-columns">
            <div class="columns is-desktop">
              <div class="column is-8-desktop is-9-fullhd">
                <div class="body-block">
                  @yield('body')
                </div>
              </div>
              <div class="column is-4-desktop is-3-fullhd">
                <div class="body-block sticky-sidebar">

                  <h1 class="title is-4">Send Us a Message</h1>
                  <hr />

                  <form id="contact_form">

                    @csrf
                    @method('POST')

                    <div class="field">
                      <label class="label">Name</label>
                      <div class="field has-addons">
                        <div class="control">
                          <a class="button is-static">
                            <span class="icon is-small is-left">
                              <i class="fas fa-user"></i>
                            </span>
                          </a>
                        </div>
                        <div class="control is-expanded">
                          <input name="name" class="input is-rounded" type="text" placeholder="John Doe">
                        </div>
                      </div>
                    </div>

                    <div class="field">
                      <label class="label">Email</label>
                      <div class="field has-addons">
                        <div class="control">
                          <a class="button is-static">
                            <span class="icon is-small is-left">
                              <i class="fas fa-envelope"></i>
                            </span>
                          </a>
                        </div>
                        <div class="control is-expanded">
                          <input name="email" class="input is-rounded" type="text" placeholder="johndoe@example.com">
                        </div>
                      </div>
                    </div>

                    <div class="field">
                      <label class="label">Phone</label>
                      <div class="field has-addons">
                        <div class="control">
                          <a class="button is-static">
                            <span class="icon is-small is-left">
                              <i class="fas fa-phone"></i>
                            </span>
                            <span>+1</span>
                          </a>
                        </div>
                        <div class="control is-expanded">
                          <input name="phone" class="input is-rounded" type="tel" placeholder="555-555-5555">
                        </div>
                      </div>
                    </div>

                    <div class="field">
                      <label class="label">Message</label>
                      <div class="control">
                        <textarea name="message" class="textarea is-rounded" placeholder="Hello, I'm inquiring about..."></textarea>
                      </div>
                    </div>

                    <div class="buttons">
                      <div class="container">
                        <button type="reset" class="button is-rounded is-pulled-left">
                          <span class="icon">
                            <i class="fas fa-undo"></i>
                          </span>
                          <span>Reset</span>
                        </button>
                        <button type="submit" class="button is-primary is-rounded is-pulled-right">
                          <span class="icon">
                            <i class="fas fa-envelope"></i>
                          </span>
                          <span>Send</span>
                        </button>
                      </div>
                    </div>

                  </form>

                  <div id="contact_form_success_message" class="is-hidden">
                    <p>Good news! We've received your message and will get back to you as soon as possible!</p>
                    <br />
                    <div class="buttons is-centered">
                      <button id="contact_form_success_button" class="button is-primary is-rounded">
                        <span class="icon">
                          <i class="fas fa-check"></i>
                        </span>
                        <span>Got it!</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="content has-text-centered">
        @php
          $start_year = "2023";
          $current_year = Carbon\Carbon::now()->format('Y');
        @endphp
        <p>© {{ $start_year == $current_year ? $start_year : $start_year . " - " . $current_year }} Mad Cooki, LLC. All rights reserved.</p>
      </div>
    </footer>

  </body>
</html>
