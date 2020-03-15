<?php

error_reporting(0);

require_once 'app/config.php';
require_once 'app/class.new_visit.php';
require_once 'app/class.get_date.php';

try {
    NewVisit::check();
} catch (Exception $e) {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yevhenii Kovalenko | PHP developer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,shrink-to-fit=no">
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src *; style-src 'self' http://* 'unsafe-inline'; script-src 'self' http://* 'unsafe-inline' 'unsafe-eval'" /> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Check out the portfolio of Yevhenii Kovalenko, PHP developer.">
    <meta name="author" content="yeko.me">
    <meta name="keywords" content="portfolio,about.me,about,cv,person,webpage,website,freelance,developer,developers,mobile,web,native,php,html,javascript,js,laravel,vue">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="yeko.me">
    <meta property="og:url" content="https://yeko.me">
    <meta property="twitter:title" content="Yevhenii Kovalenko | PHP developer">
    <meta property="og:title" content="Yevhenii Kovalenko | PHP developer">
    <meta property="twitter:description" content="Check out the portfolio of Yevhenii Kovalenko, PHP developer.">
    <meta property="og:description" content="Check out the portfolio of Yevhenii Kovalenko, PHP developer.">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">

    <style>
        .preloader {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #fff;
            z-index: 500;
            width: 100%;
            height: 100%;
        }
    </style>

    <script src="js/jquery.js"></script>
    <script>
        $(window).on('beforeunload', function (e) {
            $('.preloader').fadeIn('fast');
        });
        $(window).on('load', function () {
            setTimeout(function () {
                $('.preloader').fadeOut('fast');
            }, 500);
        });
    </script>

    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/stars.css" rel="stylesheet">

    <script>
        var htjid = <?php echo HOTJAR_ID ?: 0 ?>;
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: htjid, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>
<body>
<div class="preloader"></div>
<div id="portfolio" class="portfolio-wrapper">
    <section data-section-name="Hello" class="section portfolio-section section-header full-height">
        <div class="section-header-stars">
            <div class="small"></div>
            <div class="medium"></div>
            <div class="big"></div>
        </div>
        <div class="section-wrapper header">
            <div class="header-name-wrapper h1 header-name">
                <h1>Hi there!</h1>
                <span class="header-name-icon"><span>👋</span></span>
            </div>
            <div class="section-markdown header-about">
                <p>My name is Yevhenii. I am a PHP developer</p>
            </div>
            <div class="social-wrapper ">
                <a class="social-link" target="_blank" href="//instagram.com/yekovalenko">
                    <i class="social-icon fab fa-instagram"></i>
                </a>
                <a class="social-link" target="_blank" href="//linkedin.com/in/yekovalenko">
                    <i class="social-icon fab fa-linkedin-in"></i>
                </a>
                <a class="social-link" target="_blank" href="//github.com/yekovalenko">
                    <i class="social-icon fab fa-github"></i>
                </a>
                <a class="social-link" target="_blank" href="//facebook.com/yekovalenko">
                    <i class="social-icon fab fa-facebook-f"></i>
                </a>
            </div>
            <div style="text-align:center" class="btn-wrapper">
                <a class="btn" href="mailto:yekovalenko1@gmail.com" target="_blank">
                    <i class="far fa-hand-peace"></i>
                    Contact me
                </a>
            </div>
        </div>
    </section>
    <section data-section-name="About" class="section portfolio-section section-about full-height  ">
        <div class="section-wrapper">
            <div><h2 class="section-heading section-heading-center">About me</h2></div>
            <div class="section-about-box">
                <div class="about-image"><img alt="yeko.me" src="images/me.jpg"></div>
                <div class="about-body vertical-centered">
                    <div class="section-markdown about-content">
                        <p>
                            Hello,
                            <br>
                            My name is Yevhenii. I am a PHP developer from Poland with 4+ years of experience.
                            <br>
                            I am a graduate of the University of Information Technology and Management in Rzeszów, where
                            I studied Computer Science.
                            <br>
                            <br>
                            My following stack of technologies:
                            PHP/Laravel, Smarty/Blade, MySQL, HTML5, SCSS, JavaScript, jQuery, *nix family OS, also have
                            base knowledge of DevOps tools.
                            <br>
                            I also have some basic knowledge of VueJS, which I started working with in order to
                            understand the reactive JavaScript frameworks.
                            <br>
                            <br>
                            I worked with a lot of 3rd party service integrations included payment gateways (Stripe,
                            PayPal, BitPay, Authorize.NET), cloud/VPS (Digital Ocean, AWS, Vultr, Linode), DNS
                            (PowerDNS, Digital Ocean DNS, Route 53), domains (GoDaddy, Enom, Route 53) etc.
                            <br>
                            For my local development environment I use Vagrant/Homestead along with Git and PHPStorm.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-section-name="Skills" class="section portfolio-section section-skills full-height">
        <div class="section-wrapper">
            <div>
                <h2 class="section-heading section-heading-center skills-heading">Skills</h2>
                <div class="section-markdown section-subheading skills-subheading">
                    <div class="markdown">
                        <p>Below is a quick overview of my main technical skill</p>
                    </div>
                </div>
            </div>
            <div class="row-flex-wrapped row-flex-wrapped-four">
                <div class="skill">
                    <h4 class="skill-name">PHP</h4>
                    <h6 class="skill-duration">4+ years of experience 💪</h6>
                    <ul class="ant-rate ant-rate-disabled" style="color:#1688feff;" tabindex="-1" role="radiogroup">
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="false" aria-posinset="5" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="skill">
                    <h4 class="skill-name">MySQL</h4>
                    <h6 class="skill-duration">4+ years of experience 💪</h6>
                    <ul class="ant-rate ant-rate-disabled" style="color:#1688feff;" tabindex="-1" role="radiogroup">
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="false" aria-posinset="5" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="skill">
                    <h4 class="skill-name">Laravel</h4>
                    <h6 class="skill-duration">2+ years of experience 👌</h6>
                    <ul class="ant-rate ant-rate-disabled" style="color:#1688feff;" tabindex="-1" role="radiogroup">
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="false" aria-posinset="5" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="skill">
                    <h4 class="skill-name">HTML5</h4>
                    <h6 class="skill-duration">4+ years of experience 💪</h6>
                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="skill">
                    <h4 class="skill-name">JavaScript</h4>
                    <h6 class="skill-duration">3+ years of experience 👍</h6>
                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="skill">
                    <h4 class="skill-name">REST API</h4>
                    <h6 class="skill-duration">1+ years of experience ⚡</h6>
                    <ul class="ant-rate ant-rate-disabled"
                        tabindex="-1" role="radiogroup">
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="skill">
                    <h4 class="skill-name">Vue.js</h4>
                    <h6 class="skill-duration">Still learning 📘</h6>
                    <ul class="ant-rate ant-rate-disabled" role="radiogroup">
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="skill">
                    <h4 class="skill-name">GIT</h4>
                    <h6 class="skill-duration">Still using 🗂️</h6>
                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-full">
                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="false" aria-posinset="4" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                        <li class="ant-rate-star ant-rate-star-zero">
                            <div role="radio" aria-checked="false" aria-posinset="5" aria-setsize="5" tabindex="0">
                                <div class="ant-rate-star-first"><i class="fas fa-circle"></i></div>
                                <div class="ant-rate-star-second"><i class="fas fa-circle"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section data-section-name="Experiences" class="section portfolio-section section-experiences section-interstitial">
        <div class="section-wrapper">
            <div>
                <h2 class="section-heading section-heading-center experiences-heading">Experiences</h2>
                <div class="section-markdown section-subheading experiences-subheading">
                    <p>I have worked in several tech companies as a developer and currently working at <a target="_blank" href="https://hostbillapp.com">HostBill</a></p>
                </div>
            </div>
            <div class="row-flex-wrapped row-flex-wrapped-one">
                <div class="experience hostbill">
                    <div class="experience-company-logo"></div>
                    <div class="experience-content">
                        <h4 class="experience-role">PHP Developer</h4>
                        <h6 class="experience-company-name">
                            <a target="_blank" href="https://hostbillapp.com">HostBill</a>
                            <small>Rzeszów, Poland</small>
                        </h6>
                        <p class="experience-duration">
                            <span>Apr, 2018 <b>-</b> Current • <?php echo GetDate::diff('2018-04-01', 'now') ?></span>
                        </p>
                        <div class="section-markdown experience-description">
                            <p>
                                Development of existing PHP application / framework. <br>
                                Building new API integration. <br>
                                Work on the concept of the application. <br>
                                Object-oriented design and programming. <br>
                                Implementation of user interface and business logic. <br>
                                Creating technical documentation. <br>
                                Technical support. <br>
                            </p>
                            <ul class="experience-description-list">
                                <li>PHP 7+, Smarty</li>
                                <li>MySQL, Eloquent</li>
                                <li>HTML 5, CSS3, SCSS, Grunt, Bootstrap 4+, Semantic UI</li>
                                <li>JavaScript, TypeScript, jQuery, npm</li>
                                <li>REST API, AD / LDAP</li>
                                <li>Vagrant, BitBucket / GitHub, Postman</li>
                                <li>Jira, Slack</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="experience technetium">
                    <div class="experience-company-logo"></div>
                    <div class="experience-content">
                        <h4 class="experience-role">PHP Developer</h4>
                        <h6 class="experience-company-name">
                            <a target="_blank" href="https://technetium.pl">Technetium</a>
                            <small>Rzeszów, Poland</small>
                        </h6>
                        <p class="experience-duration">
                            <span>Jan, 2018 <b>-</b> Apr 2018 • <?php echo GetDate::diff('2018-01-01', '2018-04-01') ?></span>
                        </p>
                        <div class="section-markdown experience-description">
                            <p>
                                Development of existing PHP framework.<br>
                                Work on the concept the framework.<br>
                                Object-oriented design and programming.<br>
                                Implementation of user interface and business logic.<br>
                                Technical support.<br>
                            </p>
                            <ul class="experience-description-list">
                                <li>PHP 7+, Laravel, Blade</li>
                                <li>MySQL, Eloquent</li>
                                <li>HTML 5, CSS3, Bootstrap</li>
                                <li>JavaScript, jQuery, npm</li>
                                <li>Gitlab, Postman</li>
                                <li>Jira, Slack</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="experience ivopol">
                    <div class="experience-company-logo"></div>
                    <div class="experience-content">
                        <h4 class="experience-role">Full-stack Developer</h4>
                        <h6 class="experience-company-name">
                            <a target="_blank" href="https://rentacardirect.pl">IVOPOL</a>
                            <small>Rzeszów, Poland</small>
                        </h6>
                        <p class="experience-duration">
                            <span>Oct, 2017 <b>-</b> Jan 2018 • <?php echo GetDate::diff('2017-10-01', '2018-01-12') ?></span>
                        </p>
                        <div class="section-markdown experience-description">
                            <p>
                                Development of existing PHP application.<br>
                                Work on the concept of the application.<br>
                                Object-oriented design and programming.<br>
                                Implementation of user interface and business logic.<br>
                            </p>
                            <ul class="experience-description-list">
                                <li>PHP 7+, Smarty</li>
                                <li>MySQL, Postgre</li>
                                <li>HTML 5, CSS3</li>
                                <li>JavaScript, jQuery, npm</li>
                                <li>GitHub</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio-section section-footer section-interstitial">
        <footer class="section-wrapper">
            <h6 class="copyright">@yekovalenko</h6>
            <div class=" footer-social">
                <div class="social-wrapper">
                    <a class="social-link" target="_blank" href="//github.com/yekovalenko">
                        <i class="social-icon fab fa-github"></i>
                    </a>
                    <a class="social-link" target="_blank" href="//facebook.com/yekovalenko">
                        <i class="social-icon fab fa-facebook-f"></i>
                    </a>
                    <a class="social-link" target="_blank" href="//instagram.com/yekovalenko">
                        <i class="social-icon fab fa-instagram"></i>
                    </a>
                    <a class="social-link" target="_blank" href="//linkedin.com/in/yekovalenko">
                        <i class="social-icon fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </footer>
    </section>
</div>
</body>
</html>
