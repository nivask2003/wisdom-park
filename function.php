<?php

function template_header(){
    echo <<< EOT
    <div id="header-wrap">

    <section id="main-header">
        <div class="container">
            <div class="row header-flex">

                <!-- Logo -->
                <div class="col-xs-8 col-md-3 logo-col">
                    <a class="logo-url" href="index.php">
                        <img src="images/logo.png" class="img-responsive" alt="Logo">
                    </a>
                </div>

                <!-- Mobile Toggle -->
                <div class="col-xs-4 text-right mobile-toggle">
                    <div id="menu-toggle">
                        <span id="icon">☰</span>
                    </div>
                </div>

                <!-- Menu -->
                <div class="col-xs-12 col-md-7">
                    <nav id="menu">
                        <ul class="main-menu">

                            <li><a href="index.php">Home</a></li>

                            <li><a href="about.php">About</a></li>

                            <li><a href="academics.php">Academics</a></li>

                            <li><a href="facilities.php">Facilities</a></li>

                            <li class="dropdown">
                                <a href="#" class="toggle-btn">
                                    Admission
                                    <span class="arrow">
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="admisssion-procedure.php">
                                            Admission Procedure
                                        </a>
                                    </li>

                                    <li>
                                        <a href="admisssion-form.php">
                                            Admission Form
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="gallery.php">Gallery</a></li>

                            <li><a href="career.php">Career</a></li>

                            <li><a href="contact.php">Contact Us</a></li>

                        </ul>
                    </nav>
                </div>

                <!-- Contact -->
                <div class="col-md-2 last desktop-call">
                    <div class="total">
                        <i class="fa fa-phone"></i>

                        <div class="text">
                            <h4>Call Anytime:</h4>

                            <p>
                                <a href="tel:+917639651222">
                                    +91 763 965 1222
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    </div>

    <script>

    

    /* MOBILE MENU */

    const toggleBtn = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");
    const icon = document.getElementById("icon");

    toggleBtn.addEventListener("click", function () {

        menu.classList.toggle("active");

        if (menu.classList.contains("active")) {

            icon.innerHTML = "✖";
            icon.style.color = "#fff";

        } else {

            icon.innerHTML = "☰";
            icon.style.color = "#000";

        }

    });


    /* MOBILE DROPDOWN */

    document.querySelectorAll(".toggle-btn").forEach(function (btn) {

        btn.addEventListener("click", function (e) {

            if (window.innerWidth <= 1024) {

                e.preventDefault();

                let parent = this.closest(".dropdown");

                /* CLOSE OTHER DROPDOWNS */

                document.querySelectorAll(".dropdown").forEach(function (item) {

                    if (item !== parent) {

                        item.classList.remove("active");

                    }

                });

                /* TOGGLE CURRENT */

                parent.classList.toggle("active");

            }

        });

    });


    </script>
    EOT;
}

function template_footer(){
    echo <<< EOT
        <section class="title" id="footer">
        <div class="container">
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-12">
                    <div class="col-md-3 fr">
                        <img src="images/logo.png" class="img-responsive">
                        <p class="footer-content">Wisdom Park International School is dedicated to academic excellence and
                            holistic development through modern learning, values, creativity, and student-centered
                            education.</p>

                    </div>
                    <div class="col-md-3">
                        <h4>Quick Links</h4>
                        <ul class="ser">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="academics.php">Academics</a></li>
                            <li><a href="facilities.php">Facilities</a></li>
                            <li><a href="admisssion-procedure.php">Admission</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>

                    </div>
                    <div class="col-md-3 det">
                        <h4>Working Hours</h4>
                        <p class="hh"><b>School Timing</b></p>
                        <p class="hh-desc">9:15 AM to 4:30 PM</p>
                        <p class="hh"><b>Office Timing</b></p>
                        <p class="hh-desc">10:00 AM – 4:00 PM</p>
                    </div>
                    <div class="col-md-3 loc">
                        <h4>Location</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.879392480462!2d78.6654145913937!3d12.72129024771156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad078cd3fb9cab%3A0xbd80354333de6ecd!2sWisdom%20Park%20International%20School!5e0!3m2!1sen!2sin!4v1778749344530!5m2!1sen!2sin"
                            width="300" height="200" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="contact-box">
                <div class="row">
                <div class="col-md-4">
                    <div class="row icon-box ">
                        <div class="col-md-3 contact-icon">
                            <i class="bi bi-geo-alt-fill icon"></i>
                        </div>
                        <div class="col-md-6">
                            <h3 class="contact-box-title">Address</h5>
                            <h5 class="contact-box-description">Chengilikuppam, NH 48, Ambur.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row icon-box ">
                        <div class="col-md-3 contact-icon">
                            <i class="bi bi-envelope-fill icon"></i>
                        </div>
                        <div class="col-md-6">
                            <h3 class="contact-box-title">Email</h3>
                            <h5 class="contact-box-description"><a href="mailto:office@wisdomparkschool.com">office@wisdomparkschool.com</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row icon-box ">
                        <div class="col-md-3 contact-icon">
                            <i class="bi bi-telephone-fill icon"></i>
                        </div>
                        <div class="col-md-6">
                            <h3 class="contact-box-title">Support us</h3>
                            <h5 class="contact-box-description">
                                <a href="tel:+917639651222">+91 7639651222</a><br>
                                <a href="tel:+919513332152">+91 9513332152</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="row copy">
                <p>Copyright &copy; 2026 Wisdom Park International School.</p>
            </div>
        </div>
    </section>

    <div class="fix">
        <ul>
            <li><a href="https://www.facebook.com/WisdomParkSchool/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/wisdomparkintlschool/" target="_blank"><i
                        class="fa fa-instagram"></i></a></li>
            <li><a href="https://wa.me/+917639651222/?text=Hi.Enquiry-for-Wisdom-park" target="_blank" id="wh"
                    title="Whatsapp Chat"><i class="fa fa-whatsapp"></i></a></li>
            <li><a href="https://www.youtube.com/@wisdomparkinternationalsch3974" target="_blank"><i
                        class="fa fa-youtube"></i></a></li>
        </ul>
    </div>
    EOT;
}
?>