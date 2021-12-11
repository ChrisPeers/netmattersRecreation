<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1">
        <title>Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <script src="https://kit.fontawesome.com/c27877a5b9.js" crossorigin="anonymous"></script>
        <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous">
        </script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
        
    </head>
    <body class="home">
        <div class="website">
        <!-- <div id="header-wrap"> -->
            <div id="sticky-head">
                <!-- The header containing the logo, name and a few buttons -->
                <header>
                    <div id="head">
                        <img src="images/netmatters-logo.png" alt="Netmatters title and logo" id="net-logo">
                        <!-- Hidden call us button that appears on smaller screens only -->
                        <div class="hidden">
                            <a href="www.google.co.uk" class="fas fa-phone-alt fa-2x"></a>
                        </div>
                        <!-- The buttons and search bar grouped together -->
                        <div class="header-content">
                            <a href="#" id="btn-support"><i class="fas fa-mouse fa-2x"><span>Support</span></i></a>
                            <a href="contact.php" id="btn-contact"><i class="far fa-paper-plane fa-2x"><span>Contact</span></i></a>
                        </div>
                        <div id="search-bar">
                            <form id="header-form">
                                <label for="search-input"></label>
                                <input id="search-input" type="text" placeholder="Search...">
                                <button id="search-btn" class="fas fa-search fa-2x"></button>
                            </form>
                        </div>

                        <button id="head-button" class="main-button" type="submit">
                            <span class="hamburger-box active">
                                <span class="hb-top"></span>
                                <span class="hb-inner"></span>
                                <span class="hb-bottom"></span>
                            </span>
                            <span class="btn-span">Menu</span>
                        </button>
                    </div>
                    
                </header>

                <!-- The nav bar containing the different services -->
                <nav>
                    <div id="nav-container">
                        <ul id="nav-ul">
                            <!-- The web Design Button, when hovored, it should show another list. -->
                            <li class="nav-main-li web">
                                <a id="nav-a-web"><i class="fas fa-code fa-2x"></i><span class="nav-first-span">Web</span><span class="nav-sec-span">Design</span></a>
                                <div class="nav-hidden web-dropdown">
                                    <ul class="nav-hidden-cont">
                                        <li class="hidden-hyp">
                                            <a href="" id="first-li">Stylish Websites</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Ecommerce Stores </a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Branding</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Apps</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Web Hosting</a>
                                        </li>
                                        <li>
                                            <a href="">Pay Monthly Websites</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- The It Support Button, when hovored, it should show another list. -->
                            <li class="nav-main-li it">
                                <a id="nav-a-it"><i class="fas fa-desktop fa-2x"></i><span class="nav-first-span">It</span><span class="nav-sec-span">Support</span></a>
                                <div class="nav-hidden it-dropdown">
                                    <ul class="nav-hidden-cont">
                                        <li class="hidden-hyp">
                                            <a href="" id="second-li">Managed it</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Business IT </a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Office 365</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Consultancy</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Cloud Provider</a>
                                        </li>
                                        <li>
                                            <a href="">Data Backup</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- The Telecoms services Button, when hovored, it should show another list. -->
                            <li class="nav-main-li tele">
                                <a id="nav-a-tele"><i class="fas fa-phone-alt fa-2x"></i><span class="nav-first-span">Telecoms</span><span class="nav-sec-span">services</span></a>
                                <div class="nav-hidden tele-dropdown">
                                    <ul class="nav-hidden-cont">
                                        <li class="hidden-hyp">
                                            <a href="" id="third-li">Gigabit Voucher</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Hosted Voip</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Business Voip</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Business Broadband</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Leased Line</a>
                                        </li>
                                        <li>
                                            <a href="">3CX Systems</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- The Bespoke Software Button, when hovored, it should show another list. -->
                            <li class="nav-main-li bes">
                                <a id="nav-a-bes"><i class="fas fa-th fa-2x"></i><span class="nav-first-span">Bespoke</span><span class="nav-sec-span">Software</span></a>
                                <div class="nav-hidden bes-dropdown">
                                    <ul class="nav-hidden-cont">
                                        <li class="hidden-hyp">
                                            <a href="" id="fourth-li">Workflow Solutions</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Automation</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">System Integration</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Database Management</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Sharepoint</a>
                                        </li>
                                        <li>
                                            <a href="">ERP</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- The Digital Marketing Button, when hovored, it should show another list. -->
                            <li class="nav-main-li dig">
                                <a id="nav-a-dig"><i class="fas fa-signal fa-2x"></i><span class="nav-first-span">Digital</span><span class="nav-sec-span">Marketing</span></a>
                                <div class="nav-hidden dig-dropdown">
                                    <ul class="nav-hidden-cont">
                                        <li class="hidden-hyp">
                                            <a href="" id="fifth-li">Search (seo)</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Paid (ppc) </a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Conversion (cro)</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Email</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Social Media</a>
                                        </li>
                                        <li>
                                            <a href="">Content</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- The Cyber Security Button, when hovored, it should show another list. -->
                            <li class="nav-main-li cyb">
                                <a id="nav-a-cyb"><i class="fas fa-shield-alt fa-2x"></i><span class="nav-first-span">Cyber</span><span class="nav-sec-span">Security</span></a>
                                <div class="nav-hidden cyber-dropdown">
                                    <ul class="nav-hidden-cont">
                                        <li class="hidden-hyp">
                                            <a href="" id="sixth-li">Assessment</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Management</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Penetration Testing</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">Cyber Essentials</a>
                                        </li>
                                        <li class="hidden-hyp">
                                            <a href="">PCI/DSS</a>
                                        </li>
                                        <li>
                                            <a href="">Hacker Prevention</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
