import './bootstrap';
import '../scss/app.scss';

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

import $ from 'jquery';
window.$ = $;

$(document).ready(function() {
  $(".navbar-burger").click(function() {
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
  });
});
