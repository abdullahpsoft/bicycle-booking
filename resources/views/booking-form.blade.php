<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="booking-bg"></div>
                    <form action="/user/book-a-ride" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-header">
                            <h2>Book Your Bike</h2>
                        </div>
                        <div class="form-group">
                            <input id="uname" name="uname" class="form-control" type="text" placeholder="Enter your Name">
                            <span class="form-label">Name</span>
                        </div>
                        <div class="form-group">
                            <input id="phone" name="phone" class="form-control" type="tel" placeholder="Enter your Phone number">
                            <span class="form-label">Phone</span>
                        </div>
                        <div class="form-group">
                            <input id="olocation" name="olocation" class="form-control" type="tel" placeholder="Enter an origin location">
                            <span class="form-label">Pickup Location</span>
                        </div>
                        <div class="form-group">
                            <input id="dlocation" name="dlocation" class="form-control" type="tel" placeholder="Enter a destination location">
                            <span class="form-label">Destination Location</span>
                        </div>
                        <div class="form-group">
                            <select id="passenger" name="passenger" class="form-control" required>
                                <option value="" label="&nbsp;" selected hidden></option>
                                <option>1</option>
                                <option>2</option>

                            </select>
                            <span class="select-arrow"></span>
                            <span class="form-label">Passenger Numbers</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="pickupDate" name="pickupDate" class="form-control" type="date" required>
                                    <span class="form-label">Pickup Date</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="pickupTime" name="pickupTime" class="form-control" type="time" required>
                                    <span class="form-label">Pickup Time</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button type="submit" class="submit-btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script>
    $('.form-control').each(function () {
        floatedLabel($(this));
    });

    $('.form-control').on('input', function () {
        floatedLabel($(this));
    });

    function floatedLabel(input) {
        var $field = input.closest('.form-group');
        if (input.val()) {
            $field.addClass('input-not-empty');
        } else {
            $field.removeClass('input-not-empty');
        }
    }
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>