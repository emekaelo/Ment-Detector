<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ment Detector</title>
    <!--bootstrap cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.css">
    <script type="text/javascript" src="js/script.js" defer></script>
</head>

<body>
    <!--position for "scroll to top" button-->
    <a id="top"></a>
    <!--position for "scroll to top" button-->
    <div class="hero">
        <a href="#"><img class="img-fluid logo" src="img/MDlogo.png" alt="Ment Detector logo"></a>
        <div class="hero1">

            <div class="intro">
                <h1>Tired Of Meeting Psychos Or Afraid Of Going On A Date With One? </h1>
                <p>MentDetector keeps you safe from the <span>wierdos!</span> and the awesome part, it happens
                    discreetly...noone will
                    ever
                    know.&#x1f609</p>
                <div></div>
                <h2>Launching Soon! &#x1f680</h2>
                <!--countdown timer-->
                <div class="countdown">
                    <p><span class="cdtimer">

                        </span>Days</p>
                    <p><span class="cdtimer">

                        </span>Hours</p>
                    <p><span class="cdtimer">

                        </span>Minutes</p>
                    <p><span class="cdtimer">

                        </span>Seconds</p>
                </div>
                <!--countdown timer-->

                <!--subscribe form that sends email to database-->
                <div class="form-container">
                    <form action="info.php" method="POST">
                        <input type="email" name="email" id="email" placeholder="Email here">
                        <input type="submit" value="Notify Me"><br>
                        <!--php prompt code-->
                        <?php if (isset($email_error)) {
                            echo $email_error;
                        }
                        ?>
                        <!--php prompt code-->
                    </form>
                </div>
                <!--subscribe form that sends email to database-->

            </div>
            <div class="heromockup">
                <img class="img-fluid" src="/img/heromockup3.png">
            </div>
        </div>

    </div>
    <div class="service">
        <div><svg width="48" height="60" viewBox="0 0 48 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M23.5211 31.3364C23.5744 30.9 23.6277 30.4636 23.6277 30C23.6277 29.5364 23.5744 29.1 23.5211 28.6636L26.4009 26.4273C26.6676 26.2364 26.7209 25.8545 26.5609 25.5545L23.8144 20.8364C23.6544 20.5364 23.2811 20.4273 22.9878 20.5364L19.5746 21.9C18.8546 21.3545 18.0813 20.9182 17.2547 20.5636L16.7214 16.9364C16.7214 16.6091 16.428 16.3636 16.0814 16.3636H10.615C10.452 16.3605 10.2932 16.4162 10.1664 16.521C10.0396 16.6257 9.95297 16.7728 9.92166 16.9364L9.38835 20.5364C8.56172 20.8636 7.78842 21.3545 7.06845 21.8727L3.65527 20.5091C3.33528 20.3727 2.98863 20.5091 2.82864 20.8091L0.0820904 25.5273C-0.0779026 25.8545 0.00209372 26.2091 0.268749 26.4273L3.14862 28.6636C3.09529 29.1 3.06863 29.5636 3.06863 30C3.06863 30.4636 3.12196 30.9 3.17529 31.3364L0.268749 33.6C0.00209372 33.7909 -0.0512371 34.1727 0.108756 34.4727L2.8553 39.1909C3.0153 39.4909 3.38861 39.6 3.68193 39.4909L7.09512 38.1273C7.81509 38.6727 8.58839 39.1091 9.41502 39.4636L9.94833 43.0636C9.97499 43.3909 10.2683 43.6364 10.615 43.6364H16.1081C16.4547 43.6364 16.748 43.3909 16.7747 43.0636L17.308 39.4636C18.1346 39.1364 18.9079 38.6455 19.6279 38.1273L23.0411 39.4909C23.3611 39.6273 23.7077 39.4909 23.8677 39.1909L26.6143 34.4727C26.7743 34.1727 26.7209 33.8182 26.4543 33.6L23.5211 31.3364ZM13.3348 34.7727C10.695 34.7727 8.53505 32.6455 8.53505 30C8.53505 27.3545 10.695 25.2273 13.3348 25.2273C15.9747 25.2273 18.1346 27.3545 18.1346 30C18.1346 32.6455 16.0014 34.7727 13.3348 34.7727ZM42.6669 0.0272727L16.0014 0C13.0682 0 10.6683 2.45455 10.6683 5.45455V13.6364H16.0014V10.9091H42.6669V49.0909H16.0014V46.3636H10.6683V54.5455C10.6683 57.5455 13.0682 60 16.0014 60H42.6669C45.6001 60 48 57.5455 48 54.5455V5.45455C48 2.45455 45.6001 0.0272727 42.6669 0.0272727Z"
                    fill="#6C63FF" />
            </svg>
            <h4>Easy To Set Up</h4>
            <hr>
            <p>Smooth and hassle free set up process to get you up and running with the awesome app features. It will be
                as if you had always been there.</p>
        </div>
        <div><svg width="85" height="60" viewBox="0 0 85 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M25.8804 30.1118C34.4857 30.1118 40.9774 23.6378 40.9774 15.0559C40.9774 6.47405 34.4857 0 25.8804 0C17.2752 0 10.7835 6.47405 10.7835 15.0559C10.7835 23.6378 17.2752 30.1118 25.8804 30.1118ZM30.1939 34.1898H21.567C9.67497 34.1898 0 43.8385 0 55.6983V60H51.7609V55.6983C51.7609 43.8385 42.0859 34.1898 30.1939 34.1898ZM78.9095 13.9375L60.3618 32.4003L54.7889 26.8426L48.6897 32.9252L60.3618 44.5569L85 20.0287L78.9095 13.9375Z"
                    fill="#6C63FF" />
            </svg>
            <h4>Easy To Use</h4>
            <hr>
            <p>No extra special knowledge is needed, just at the tap of a button, all psychos will be revealed and
                recorded. Simple
                right?
            </p>
        </div>
        <div><svg width="51" height="60" viewBox="0 0 51 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M50.2293 11.5177C50.0024 11.2587 49.7246 11.0492 49.4131 10.9024C49.1016 10.7557 48.7631 10.6748 48.4189 10.6649C43.0718 10.5251 36.3058 4.80675 31.8324 2.56276C29.0692 1.18095 27.2449 0.269841 25.8749 0.02983C25.5967 -0.0107096 25.3141 -0.0099244 25.0361 0.0321602C23.6661 0.272171 21.8418 1.18328 19.0809 2.56509C14.6075 4.80675 7.8415 10.5251 2.49439 10.6649C2.14997 10.6753 1.81135 10.7564 1.49955 10.9031C1.18774 11.0498 0.909388 11.259 0.681737 11.5177C0.20987 12.0517 -0.0335894 12.7495 0.00373705 13.4611C1.15237 36.8168 9.52834 51.2711 24.2253 59.6714C24.6074 59.8882 25.0315 60 25.4532 60C25.8749 60 26.2989 59.8882 26.6834 59.6714C41.3803 51.2711 49.754 36.8168 50.9049 13.4611C50.9444 12.7496 50.7016 12.0513 50.2293 11.5177ZM38.5425 20.7034L26.1405 39.0072C25.6955 39.6643 24.9965 40.1 24.3045 40.1C23.6102 40.1 22.839 39.7202 22.3521 39.2332L13.6103 30.4879C13.3249 30.2014 13.1647 29.8135 13.1647 29.4091C13.1647 29.0046 13.3249 28.6167 13.6103 28.3302L15.7701 26.1654C16.0572 25.8811 16.4449 25.7216 16.8489 25.7216C17.2529 25.7216 17.6405 25.8811 17.9276 26.1654L23.6126 31.8511L33.489 17.271C33.7175 16.9374 34.0687 16.7077 34.466 16.6322C34.8632 16.5567 35.2742 16.6414 35.6092 16.8679L38.1371 18.5829C38.4711 18.8111 38.7012 19.1622 38.7772 19.5595C38.8531 19.9569 38.7688 20.3681 38.5425 20.7034Z"
                    fill="#6C63FF" />
            </svg>
            <h4>Keeps You Safe</h4>
            <hr>
            <p>Be one step ahead of the psychos and take action. They'll never know you had it all figured out. In a
                world of the unknown, this appication can be the difference between life and death.</p>
        </div>
    </div>

    <h2 class="screens">What people are saying</h2>
    <div class="talks">
        <img class="img-fluid" src="/img/tweetshotm.jpg" alt="tweet screenshot">
        <img class="img-fluid" src="/img/tweetshotx.jpg" alt="tweet screenshot">
    </div>
    <div class="steps">
        <h2>How It Works</h2>
    </div>
    <div class="step1">

        <img class="img-fluid mock-left" src="img/step1mockup.png">

        <div>
            <div class="stepdetail">
                <h3>Get The App, Sign Up/ Sign In</h3><br>
                <p>Download the app, complete your registeration and comfirm your email address.<br> Sign In afteward,
                    follow the guides and setup the application to suit your enviroments and be specific as possible, as
                    to what type of situation you would be involved in and the type of notification you’ll like the app
                    to give you after analysis.</p>
            </div>
            <img class="img-fluid" src="img/fillust1.png" alt="ready lady illustration">
        </div>
    </div>
    <div class="step2">
        <div>
            <div class="stepdetail">
                <h3>Set Up Your Application</h3><br>
                <p>Set up your profile, preferences, emercy contacts, prefered key words/phrases, notification type, two
                    step verification, et. These are the things that’ll help the app better analyse the situation you
                    are in and also better know how to notify and help you get out of it.</p>
            </div>
            <img class="img-fluid" src="img/fillust2.png" alt="setup lady illustration">
        </div>
        <img class="img-fluid mock-right" src="img/step2mockup.png">
    </div>
    <div class="step3">
        <img class="img-fluid mock-left" src="img/step3mockup.png">
        <div>
            <div class="stepdetail">
                <h3>Activate Your Application</h3><br>
                <p>Activating your application allows it to listen in on your conversation and start it’s analysis. You
                    can do this immediately after setting up the application, when you are already at the place or
                    speaking with the person wou want analysed.</p>
            </div>
            <img class="img-fluid" src="img/fillust3.png" alt="chilling guy illustration">
        </div>
    </div>
    <div class="step4">
        <div>
            <div class="stepdetail">
                <h3>Check Your Results</h3><br>
                <p>You can check the result of the analysis on the result page or in your registered email address. In
                    critical cases, the results would be texted to the registered phone number and in extremely
                    dangerous cases, you emergency contacts would be notified too.</p>
            </div>
            <img class="img-fluid" src="img/illust3.png" alt="result guy illustration">
        </div>
        <img class="img-fluid mock-right" src="img/step4mockup.png">
    </div>
    <div class="step5">
        <img class="img-fluid mock-left" src="img/step5mockup.png">
        <div>
            <div class="stepdetail">
                <h3>Check Past Records</h3><br>
                <p>MentDetector doesn’t just check and forget, it also keeps track of past records just in case you need
                    it for future reference. The application has a database where it stores this data and you can access
                    it anytime you want.</p>
            </div>
            <img class="img-fluid" src="img/fillust5.png" alt="past record review group illustration">
        </div>
    </div>
    <div class="step6">
        <div>
            <div class="stepdetail">
                <h3>The Manual</h3><br>
                <p>Just in case you forget what is what, the application also has a manual page that’ll help you setup
                    you page and also help you as you navigate through it everyday. This manual page has all necessary
                    information you’ll need to make this application work well.</p>
            </div>
            <img class="img-fluid" src="img/illust4.png" alt="guy at desk illustration">
        </div>
        <img class="img-fluid mock-right" src="img/step6mockup.png">
    </div>

    <h2 class="screens">Check the screens out</h2>


    <!--slick slider with lightbox feature-->
    <div class="row" id="default-demo">
        <div class="col-xs-4"><a href="img/MentDetector Moblie Page 1.png" data-caption="" target="_blank"
                class="thumbnail"><img src="img/MentDetector Moblie Page 1.png" alt="" class="img-thumbnail"></a></div>
        <div class="col-xs-4"><a href="img/MentDetector Moblie Page 2.png" data-caption="" target="_blank"
                class="thumbnail"><img src="img/MentDetector Moblie Page 2.png" alt="" class="img-thumbnail"></a></div>
        <div class="col-xs-4"><a href="img/MentDetector Moblie Page 3.png" data-caption="" target="_blank"
                class="thumbnail"><img src="img/MentDetector Moblie Page 3.png" alt="" class="img-thumbnail"></a></div>
        <div class="col-xs-4"><a href="img/MentDetector Moblie Page 4.png" data-caption="" target="_blank"
                class="thumbnail"><img src="img/MentDetector Moblie Page 4.png" alt="" class="img-thumbnail"></a></div>
        <div class="col-xs-4"><a href="img/MentDetector Moblie Page 5.png" data-caption="" target="_blank"
                class="thumbnail"><img src="img/MentDetector Moblie Page 5.png" alt="" class="img-thumbnail"></a></div>
        <div class="col-xs-4"><a href="img/MentDetector Moblie Page 6.png" data-caption="" target="_blank"
                class="thumbnail"><img src="img/MentDetector Moblie Page 6.png" alt="" class="img-thumbnail"></a></div>
    </div>
    <!--slick slider with lightbox feature-->
    <p class="closing">MentDetector will sniff out people who may hurt you before they do.<br> Now, you’re
        <span>one</span> <span>step</span> <span>ahead!</span> </p>
    <footer>
        <p class="conv">Get amazing <span>tips</span> and <span>insights</span> on the app to have a
            <span>headstart</span> and
            be on the go
            when it <span>launches!</span></p>
        <!--subscribe form that sends email to database-->
        <div class="form-container lastform">
            <form action="info.php" method="POST">
                <input type="email" name="email" id="email" placeholder="Email here">
                <input type="submit" value="Notify Me"><br>
                <!--php prompt code-->
                <?php if (isset($email_error)) {
            echo $email_error;
        }
        ?>
                <!--php prompt code-->
            </form>
        </div>
        <!--subscribe form that sends email to database-->

        <span class="end">&#169 Copyright 2020. All rights reserved</span>
    </footer>


    <!--scroll to top button-->
    <a href="#top">
        <div class="totop">
            <div class="totop-inner">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                        d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z" />
                </svg>
            </div>
        </div>
    </a>
    <!--scroll to top button-->
    <!--jquery, popper.js, bootstrap.js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <!--jquery, popper.js, bootstrap.js-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.min.js"></script>
    <!--scroll reveal animation-->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f1082aba45e787d128b9235/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>