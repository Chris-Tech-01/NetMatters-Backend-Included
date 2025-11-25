<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="ROBOTS" content="NOINDEX,NOFOLLOW">
        
        <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- These speed up the loading time for fonts by setting up the server connection in advance. -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- These speed up the loading time for fonts by setting up the server connection in advance. -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital@0;1&family=Poppins&display=swap" rel="stylesheet"> <!-- Link to my fonts. -->

        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/b711cced4c.js" crossorigin="anonymous"></script> <!-- Links my icons from FontAwesome -->

        <title>
            Contact Us | Netmatters
        </title>
    </head>

    <body>
        <div id="cookie-overlay">
            <div class="cookie-app">
                <div class="cookie-content">
                    <div class="cookie-header">
                        <h3 class="cookie-title">Cookies Policy</h3>
                    </div>
                    <div class="cookie-body">
                        <p>
                            Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on 
                            "<a href="#">Privacy Policy</a>"
                            otherwise click "Accept Cookies" to enter.
                        </p>
                    </div>
                    <div class="cookie-footer">
                        <div class="cookie-btn-box cookie-btn-box-change-settings">
                            <a href="#" class="cookie-btn change-settings">Change Settings</a>
                        </div>
                        <div class="cookie-btn-box cookie-btn-box-accept-cookies">
                            <a href="#" class="cookie-btn accept-cookies" id="accept-cookies-id">Accept Cookies</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/sidebar.php'; ?>
        <div class="sidebar-animation-wrapper">
            <div class="darken-overlay"></div>
            <?php include 'includes/header.php'; ?>
            <div class="contact-body container">
                <div class="contact-body-top">
                    <h1>Our Offices</h1>
                </div>
                <div class="office-adresses">
                    <div class="cambridge-office">
                        <div class="content-container">
                            <h2>
                                <a>Cambridge Office</a>
                            </h2>
                            <p>
                                Unit 1.31,
                                <br>
                                St John's Innovation Centre,
                                <br>
                                Cowley Road, Milton,
                                <br>
                                Cambridge,
                                <br>
                                CB4 0WS
                            </p>
                            <div class="tele-number">
                                01223 37 57 72
                            </div>
                            <a class="contact-btn-web">
                                View More
                            </a>
                        </div>
                    </div>
                    <div class="wymondham-office">
                        <div class="content-container">
                            <h2>
                                <a>Wymondham Office</a>
                            </h2>
                            <p>
                               Unit 15,
                               <br>
                                Penfold Drive,
                                <br>
                                Gateway 11 Business Park,
                                <br>
                                Wymondham, Norfolk,
                                <br>
                                NR18 0WZ      
                            </p>
                            <div class="tele-number">
                                01603 70 40 20
                            </div>
                            <a class="contact-btn-web">
                                View More
                            </a>
                        </div>
                    </div>
                    <div class="great-yarmouth-office">
                        <div class="content-container">
                            <h2>
                                <a>Great Yarmouth Office</a>
                            </h2>
                            <p>
                                Suite F23,
                                <br>
                                Beacon Innovation Centre,
                                <br>
                                Beacon Park, Gorleston,
                                <br>
                                Great Yarmouth, Norfolk,
                                <br>
                                NR31 7RA
                            </p>
                            <div class="tele-number">
                                01493 60 32 04
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-us">
                    <p>
                        <strong>Email us on:</strong>
                    </p>
                    <p>
                        <a href="#">sales@netmatters.com</a>
                    </p>
                    <p>
                        <strong>Speak to sales on:</strong>
                    </p>
                    <p>
                        <a href="#">01603 515007</a>
                    </p>
                    <p>
                        <strong>Business hours:</strong>
                    </p>
                    <p>
                        <strong>Monday - Friday 07:00 - 18:00</strong>
                    </p>
                </div>
                <div class="out-of-hours">
                    <a>
                        <p>Out of Hours IT Support</p>
                    </a>
                    <div class="contact-hidden-text">
                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critial tasks.</p>
                        <p>
                            <strong>Monday - Friday 18:00 - 22:00</strong>
                            <strong>Saturday 08:00 - 16:00</strong>
                            <br>
                            <strong>Sunday 10:00-18:00</strong>
                        </p>
                        <p>
                            To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of your call
                        </p>
                    </div>
                </div>
                <form action="contact.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Your Telephone Number</label>
                        <input type="tel" id="telephone" name="telephone">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message"></textarea>
                    </div>
                </form>
            </div>                     
            <?php include 'includes/footer.php'; ?>             
        </div>
        <script type="module" src="JS/main.js"></script>
    </body>
</html>
