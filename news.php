<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Normalise.css">
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="CSS/base.css">
    <script src="https://kit.fontawesome.com/cc1e8c8726.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet"> 
    <title>Netmatters | Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
</head>
<body>

    <?php 
    ini_set('display_errors', '1');
    error_reporting(E_ALL);

    require 'php/header.php';

    if(isset($_GET['title'])) {

        $url = filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING);

        include 'php/news-db.php';

        try {
            $sql = "SELECT * FROM news WHERE title=?";
            $results = $pdo->prepare($sql);
            $results->bindParam(1, $url);
            $results->execute();
            $news = $results->fetch(PDO::FETCH_ASSOC);
        
        
        } catch (Exception $e) {
            throw $e;
        }
    }

    ?>

        <!-- Cookie pop-up -->
        <dialog class="cookie-pop-up">
            <form class="cookies">
                <h3>Cookies Policy</h3>
                <p>Our website uses cookies. 
                    This helps us provide you with a good experience on our website. 
                    To see what cookies we use and what they do, 
                    and to opt-in on non-essential cookies click "change settings". 
                    For a detailed explanation, click on <a href="#">"Privacy Policy"</a>
                    otherwise click "Accept Cookies" to enter. </p>
                <button class="settings">Change Settings</button>
                <button class="accept">Accept Cookies</button>
            </form>
        </dialog>

        <div class="cookie-settings">
            <div class="cookie-settings-container">
                <div class="preferences">
                    <h3>Cookies Preferences</h3>
                    <p> Netmatters uses cookies on their website. 
                        Cookies are small text files that are stored on 
                        your computer or other device by websites that you visit. 
                        This page explains the cookies we use and what we use them for, 
                        and lets you turn them on or off. (Some cookies are necessary in 
                        order for our website to work properly.) We also explain below which 
                        other companies use cookies on our website and what they use them for, 
                        and lets you turn those other companies' cookies on or off.
                    </p>
                    <p> Our website uses cookies in order to make the website easier to use, 
                        to support the provision of information and functionality to you, 
                        as well as to provide us with information about how the website is 
                        used so that we can make sure it is as up to date, 
                        relevant and error free as we can. We also use cookies to try to 
                        ensure that our online adverts reflect the interests of web users. 
                        Further information about the types of cookies that are used on our 
                        website is set out box below.
                    </p>
                    <p> As well as the options provided below, 
                        you can choose to restrict or block cookies through your 
                        browser settings at any time. For more information about 
                        how to do this, and about cookies in general, 
                        you can visit <a href="#">www.cookiepedia.co.uk</a> and <a href="#">www.youronlinechoices.eu.</a> 
                        However, please be aware that restricting or blocking cookies set 
                        on our website may impact the functionality or performance of 
                        the website, or prevent you from using certain services provided 
                        through the website
                    </p>
                    <p> Please note that third parties 
                        (including, for example, advertising networks and providers of 
                        external services like website analysis services) 
                        may also use cookies, over which we have no control, 
                        although we may receive services from these third parties 
                        (including, for example, for targeted advertising purposes and 
                        website analytics). These cookies are likely to be performance 
                        cookies or targeting cookies (as described below).
                    </p>
                </div>

                <div class="functional">
                    <h2>Functional Cookies</h2>
                    <p> Functional cookies allow our website to remember choices you make, 
                        such as your user name, log in details or language preferences, 
                        and any customisations you make to pages on our website during 
                        your visit.
                    </p>
                    <p><strong>Examples of how we use these cookies include:</strong></p>
                    <ul>
                        <li>Live chat</li>
                    </ul>
                    <div class="en-dis-btns">
                        <span class="disable selected">Disable</span>
                        <span class="enable">Enable</span>
                    </div>

                </div>

                <div class="analytics">
                    <h2>Performance & Analytics</h2>
                    <p>These cookies help us understand how people use our website. 
                        They collect information such as which pages on our website 
                        visitors go to most often, which features they use, 
                        and which websites people have visited before they visit ours. 
                        We use this information to improve our website and provide a 
                        better user experience.
                    </p>
                    <p><strong>Examples of how we use these cookies include:</strong></p>
                    <ul>
                        <li>Monitoring and providing statistics on how our website is used.</li>
                        <li>Helping us improve our website by measuring any errors that occur.</li>
                        <li>Testing the website's design and operability</li>
                    </ul>
                    <div class="en-dis-btns">
                        <span class="disable selected">Disable</span>
                        <span class="enable">Enable</span>
                    </div>

                </div>

                <div class="detailed">
                    <p> Different web browsers may use different methods for managing cookies. 
                        Please follow the instructions below, from the web browser manufacturers 
                        directly, to configure your browser settings*.
                    </p>
                    <ul>
                        <li><a>Microsoft Internet Explorer (IE)</a></li>
                        <li><a>Google Chrome</a></li>
                        <li><a>Safari</a></li>
                        <li><a>Firefox</a></li>
                    </ul>
                    <span class="show-detailed">Show detailed preferences</span>
                    <table class="detailed-table" style="display: none;">
                        <col class="col-1">
                        <col class="col-2">
                        <col class="col-3">
                        <tr>
                            <th>Company</th>
                            <th>Domain</th>
                            <th></th>
                        </tr>

                        <tr>
                            <td>Lead Forensics</td>
                            <td>https://web.archive.org/web/20220408074701/https://www.leadforensics.com/</td>
                            <td> 
                                <span class="disable selected">Disable</span>
                                <span class="enable">Enable</span>
                            </td>
                        </tr>

                        <tr>
                            <td>3CX</td>
                            <td>https://web.archive.org/web/20220408074701/https://netmatters.co.uk/</td>
                            <td> 
                                <span class="disable selected">Disable</span>
                                <span class="enable">Enable</span>
                            </td>
                        </tr>

                        <tr>
                            <td> Hotjar Ltd </td>
                            <td>hotjar.com</td>
                            <td> 
                                <span class="disable selected">Disable</span>
                                <span class="enable">Enable</span>
                            </td>
                        </tr>

                        <tr>
                            <td> LinkedIn Corporation </td>
                            <td>licdn.com</td>
                            <td> 
                                <span class="disable selected">Disable</span>
                                <span class="enable">Enable</span>
                            </td>
                        </tr>

                        <tr>
                            <td> Facebook Inc. </td>
                            <td>facebook.com, facebook.net</td>
                            <td> 
                                <span class="disable selected">Disable</span>
                                <span class="enable">Enable</span>
                            </td>
                        </tr>

                        <tr>
                            <td> Google Inc. </td>
                            <td> google.com, googletagmanager.com, google-analytics.com</td>
                            <td> 
                                <span class="disable selected">Disable</span>
                                <span class="enable">Enable</span>
                            </td>
                        </tr>

                    </table>
                </div>

                <div class="can-cont-btns">
                    <span class="cancel">Cancel</span>
                    <span class="continue">Continue to website</span>
                </div>
            </div>
        </div>

    <div class="news-links-background-fix">
        <div class="news-page-links">
            <a href="index.php">Home</a>
            <p> / </p>
            <a href="#"> <?php echo $news['type']; ?> </a>
            <p> / </p>
            <p><?php echo str_replace("-", " ", $news['title']); ?></p>

        </div>
    </div>

    <div class="main-news">
        <div class="news-header">
            <div class="news-title" <?php if($news['type'] === 'Careers') {?>
                style="background-color: #4183d7 "
                <?php } elseif($news['type'] === 'News') {?> 
                    style="background-color: #926fb1 "
                <?php } ?>><h2><?php echo str_replace("-", " ", $news['title']); ?></h2>
            </div>
            <div class="news-page-poster-type">
                <div class="news-page-poster">
                    <img src=' <?php echo $news['user_img']; ?> ' alt='article author' class='poster-img' style="margin-top: 4px">
                    <p class='poster'>Posted by  <?php echo $news['user']; ?></p>
                    <p class='date'><?php echo date('j F Y', strToTime($news['date_posted'])); ?> </p>
                </div>
                <span class="news-type" <?php if($news['type'] === 'Careers') {?>
                    style="background-color: #4183d7 "
                <?php } elseif($news['type'] === 'News') {?> 
                    style="background-color: #926fb1 "
                <?php } ?>><a href="#"><?php echo $news['type']; ?></a></span>
            </div>
        </div>

        <div class="news-page-img">
            <img src=" <?php echo $news['img']; ?> " alt=' <?php echo str_replace("-", " ", $news['title']); ?> ' class='main-news-img'>
        </div>

        <div class="news-article">
            <article>
                <?php echo $news['description']; ?>
            </article>
        </div>
    </div>
    <?php include 'php/insert.php'; ?>

    <?php require 'php/footer.php' ?>

    </div>
    </div> <!-- these end the divs in the header --> 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="slick-1.8.1/slick/slick.min.js"></script>
    <script src="Js/main.js"></script>
 
</body>
</html>