<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />

<div class="jumbotron text-center">
    <h1 class="display-3">Thank You!</h1>
    <hr>
    <p class="lead"><strong>Booking Details</strong> </p>
        <p>Name: {{$name}}</p>
        <p>Phone: {{$phone}}</p>
        <p>Pickup Location: {{$olocation}}</p>
        <p>Pickup Time: {{$pickupTime}}</p>
        <p>Pickup Date: {{$pickupDate}}</p>
        <p>Status : <strong>Issued</strong></p>
    <hr>

    <p class="lead"><strong>Please check your email</strong> for further instructions.</p>
    <hr>
    <p>
        Having trouble? <a href="">Contact us</a>
    </p>
    <p class="lead">
        <a class="btn btn-primary btn-sm" href="https://bootstrapcreative.com/" role="button">Continue to homepage</a>
    </p>
</div>