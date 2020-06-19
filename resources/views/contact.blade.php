<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/contact-us.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>
<body>
<div class="contact-form">
    <p class="c-head">Get in Touch</p>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="txt-box">
                    <p class="txt-1">Send us a message today, we <br> will get back to you within the <br> day.</p>
                    <p class="txt-sub"><img class="icon" src="{{asset('images/carbon_phone-filled.svg')}}" alt="icon1">+234 70 1300 4126</p>
                    <p class="txt-sub"><img class="icon" src="{{asset('/images/entypo_location-pin.svg')}}" alt="icon1">House 14, Kudag Street, <br> Abuja, Nigeria.</p>
                </div>
            </div>
            <div class="col-sm-8">
                <form action="/Contact">
                    <input type="text" placeholder="Name" name="Name" id="Name">
                    <input type="email" placeholder="Email" name="Email" id="Email">
                    <textarea placeholder="Message" name="Message" id="Message"></textarea>
                    <input type="submit" value="Send Message">
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>
