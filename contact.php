<?php
    include("php/contactForm.php");
?>

<!-- Include the header with php -->
<?php include("inc/header.php"); ?>

<!-- Text which states which page the user is on -->
<div class="contactContainer">
    <div class="currentPage"> 
        <ul>
            <li><a href="index.php"><strong>Home</strong></a> &nbsp; / </li>
            <li>&nbsp;Our Offices</li>
        </ul>
    </div>
</div>

<!-- "Our office" header which is only shown on small screens -->
<div class="ourOfficesSmallContainer">
    <div class="ourOfficesSmall"> 
        <h1>Our Offices</h1>
    </div>
</div>

<!-- Different type of "our office" header which is shown on larger screens -->
<div class="ourOfficesBigContainer">
    <div class="ourOfficesBig"> 
        <h1>Our Offices</h1>
    </div>
</div>

<!-- Section which shows the netmatters offices -->
<div class="officesMainContainer">
    <div class="officesSubContainer">

    <!-- Cambridge Office -->
    <div class="office">
        <div class="officeContent">
            <div class="officeImage">
                <img src="images/cambridge.jpg" alt="Image of the Cambridge office.">
            </div>
            <div class="office-info">
                <a href="#"><h2>Cambridge Office</h2></a>
                <ul>
                    <li>Unit 1.28,</li>
                    <li>St John's Innovation Centre,</li>
                    <li>Cowley Road, Milton,</li>
                    <li>Cambridge,</li>
                    <li>CB4 0WS</li>
                </ul>
                <a class="officePhone" href="tel:01223375772">
                    <h3>01223 37 57 72</h3>
                </a>
                <a class="btnMore" href="#">    
                    <p>View More</p>
                </a>
            </div>
        </div>
        <div class="map" id="mapCambridge">
        </div>
    </div>

    <!-- Wymondham Office -->
    <div class="office">
        <div class="officeContent">
            <div class="officeImage">
                <img src="images/wymondham.jpg" alt="Image of the Wymondham office.">
            </div>
            <div class="office-info">
                <a href="#"><h2>Wymondham Office</h2></a>
                <ul>
                    <li>Unit 15,</li>
                    <li>Penfold Drive,</li>
                    <li>Gateway 11 Business Park,</li>
                    <li>Wymondham, Norfolk,</li>
                    <li>NR18 0WZ</li>
                </ul>
                <a class="officePhone" href="tel:01603704020">
                    <h3>01603 70 40 20</h3>
                </a>
                <a class="btnMore" href="#">    
                    <p>View More</p>
                </a>
            </div>
        </div>
        <div class="map" id="mapWymondham">
        </div>
    </div>

    <!-- Great Yarmouth Office -->
    <div class="office">
        <div class="officeContent">
            <div class="officeImage">
                <img src="images/yarmouth-2.jpg" alt="Image of the Yarmouth office.">
            </div>
            <div class="office-info">
                <a href="#"><h2>Great Yarmouth Office</h2></a>
                <ul>
                    <li>Suite F23,</li>
                    <li>Beacon Innovation Centre,</li>
                    <li>Beacon Park, Gorleston,</li>
                    <li>Great Yarmouth, Norfolk,</li>
                    <li>NR31 7RA</li>
                </ul>
                <a class="officePhone" href="tel:01493603204">
                    <h3>01493 60 32 04</h3>
                </a>
                <a class="btnMore" href="#">    
                    <p>View More</p>
                </a>
            </div>
        </div>
        <div class="map" id="mapYarmouth">
        </div>
    </div>
    </div>
</div>

<div class="enquiry-section" id="enquiry-section">
    <div class="enquiry-container">
        <div class="enquiry-form">
            <form name="contactForm" action="contact.php" method="POST" onsubmit="return validate();">
                <!-- <div class="status-container">
                    <div class="message-status">Your enquiry was sent successfully!</div>
                </div> -->

                <div class="form-row">
                    <div class="form-section form-padding">
                        <label for="name">Your Name</label>
                        <input type="text" name="contactName" id="name" >
                    </div>

                    <div class="form-section">
                        <label for="email">Your Email</label>
                        <input type="email" name="contactEmail" id="email">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-section form-padding">
                        <label for="telephone">Your Telephone Number</label>
                        <input type="tel" name="contactTelephone" id="telephone" onkeypress="return isNumber(event)">
                    </div>

                    <div class="form-section">
                        <label for="subject">Subject</label>
                        <input type="text" name="contactSubject" id="subject">
                    </div>
                </div>

                <div class="form-section">
                    <label for="message">Message</label>
                    <textarea name="contactMessage" id="message"></textarea>
                </div>

                <div class="marketing-checkbox">
                    <input type="checkbox" class="market-checkbox" id="market-checkbox" name="marketCheckBox"> 
                    <label for="market-checkbox" class="checkbox-label">
                        <span class="checkbox-tick"></span>
                        Please tick this box if you wish to receive marketing information from us. 
                        Please see our <a class="checkbox-link" href="https://www.netmatters.co.uk/privacy-policy">Privacy Policy</a> 
                        for more information on how we use your data.
                    </label>
                    <div>
                        <button type="submit" class="submit">Send Enquiry</button>
                    </div> 
            </form>
        </div>
    </div>

    <!-- Additional contact information -->
    <div class="contact-info">
        <p>Email us on:</p>
        <a href="mailto:sales@netmatters.com"><h3>sales@netmatters.com</h3></a>
        <p>Business Hours:</p>
        <p>Monday - Friday 07:00 - 18:00</p>
        <a href="#"  onClick="return false;" class="supportChevron"><p>Out of Hours IT Support <i class="fas fa-chevron-down"></i></p></a>
    </div>
    </div>
</div>

<!-- Include the footer with php -->
<?php include("inc/footer.php");?>