<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ment Detector</title>
    <!--bootstrap cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.css">


    <script type="text/javascript" src="js/script.js" defer></script>


</head>

<body>
    <!--position for "scroll to top" button
    <a id="top"></a>-->
    <!--position for "scroll to top" button-->
    <div class="hero">
        <h2><span>M</span>ent<span>D</span>etector</h2>
        <div class="hero1">

            <div class="intro">
                <h1>Tired Of Meeting Psychos Or Afraid Of Going On A Date With One? </h1>
                <p>MentDetector keeps you safe from the <span>wierdos!</span> and the awesome part, it happens
                    discreetly...noone will
                    ever
                    know.</p>
                <div></div>
                <div class="form-container">
                    <!--subscribe form that sends email to database-->
                    <form action="info.php" method="POST">
                        <input type="email" name="email" id="email" placeholder="Email here">
                        <input type="submit" value="Get Early Access"><br>
                        <!--php prompt code-->
                        <?php if (isset($email_error)) {
                            echo $email_error;
                        }
                        ?>
                        <!--php prompt code-->
                    </form>
                    <!--subscribe form that sends email to database-->
                </div>
            </div>
            <div class="heromockup"><img class="img-fluid" src="img/heromockup.png"></div>
        </div>

    </div>






    <!--scroll to top button
    <a href="#top">
        <div class="totop">
            <div class="totop-inner">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                        d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z" />
                </svg>
            </div>
        </div>
    </a>-->
    <!--scroll to top button-->
    <!--jquery, popper.js, bootstrap.js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--jquery, popper.js, bootstrap.js-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.min.js"></script>
    <!--scroll reveal animation-->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</body>

</html>