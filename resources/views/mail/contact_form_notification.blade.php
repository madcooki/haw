<span>A new contact form submission has been received and recorded to the database:</span>
<br />
<br />
<span><strong>Name:</strong> {{ $name }}</span>

@if(!is_null($email))
  <br />
  <span><strong>Email:</strong> <a href="mailto:{{ $email }}?subject={{ $subject }}&body=Hello {{ strtok($name, " ") }},%0A%0A%0A">{{ $email }}</a></span>
@endif

@if(!is_null($phone))
  <br />
  <span><strong>Phone:</strong> <a href="tel:{{ $phone }}">{{ $phone }}</a></span>
@endif

<br />
<br />
<br />
<pre>{{ $message_field }}</pre>
