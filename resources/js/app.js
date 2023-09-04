import './bootstrap';
import '../scss/app.scss';

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

import $ from 'jquery';
window.$ = $;

$(document).ready(function() {
  $('.navbar-burger').click(function() {
    $('.navbar-burger').toggleClass('is-active');
    $('.navbar-menu').toggleClass('is-active');
  });
  $('#contact_form_success_button').click(function() {
  $('#contact_form_success_message').addClass('is-hidden');
    $('#contact_form').removeClass('is-hidden');
  });
});

function removeFormErrorMessages(form) {
  $(form).find('[name]').removeClass('is-danger');
  $(form).find('.help.is-danger').remove();
}

$('#contact_form').on('reset', function() {
  removeFormErrorMessages($(this));
});

$('#contact_form').on('submit', function() {
  event.preventDefault();

  var submitButton = $(this).find('[type=submit]');
  submitButton.addClass('is-loading');
  removeFormErrorMessages($(this));

  $.ajax({
    type: "POST",
    url: "/contact",
    data: $(this).serialize(),
    dataType: "json",
    encode: true,
  }).done(function(data) {

    var form = $('#contact_form');
    submitButton.removeClass('is-loading');

    if (data.is_success == true) {

      form.addClass('is-hidden');
      form[0].reset();
      $('#contact_form_success_message').removeClass('is-hidden');

    } else {

      Object.keys(data.errors).forEach(function(fieldName) {
        var field = form.find('[name=' + fieldName + ']');
        var topLevelFieldDiv = field.closest('.field:not(.has-addons)');
        field.addClass('is-danger');
        data.errors[fieldName].forEach(function(error, i) {
          topLevelFieldDiv.append('<span class="help is-danger">' + (data.errors[fieldName].length > 1 ? ((i + 1) + ') ') : '') + error + '</span>');
        });
      });
    }
  });
});
