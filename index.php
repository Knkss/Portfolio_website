<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script type="text/javascript">
    function countChars(obj){
    var maxLength = 500;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 0){
        document.getElementById("charNum").innerHTML = '<span style="color: red;">You have exceeded the limit of '+maxLength+' characters</span>';
    }else{
        document.getElementById("charNum").innerHTML = charRemain+' characters remaining';
    }
}

  </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

<?php
 require("nav.php");
?>

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <h1>Kshitij Naik</h1>
    <h2>I'm a Software Developer from Goa</h2>
    <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Me Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <span>About Me</span>
        <h2>About Me</h2>
        <p>I have a passion for coding and am constantly seeking new challenges to expand my knowledge and skills. I am a quick learner and enjoy exploring new technologies and programming languages.</p>
      </div>

      <div class="row">
        <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
        <div class="col-lg-8 d-flex flex-column align-items-stretch">
          <div class="content ps-lg-4 d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Kshitij Naik</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Profession:</strong> <span>Software Engineer</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91 9284913814</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>Curti, Ponda- Goa </span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>BE in Information Technology</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>kshitijnaik56@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>

            <div class="skills-content ps-lg-4">
              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Me Section -->

    <!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <span>My Resume</span>
          <h2>My Resume</h2>
          <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Kshitij Naik</h4>
              <p><em>As an undergraduate in Information Technology, I have
                a passion for coding and am constantly seeking new
                challenges to expand my knowledge and skills. I am a
                quick learner and enjoy exploring new technologies
              and programming languages.</em></p>
              <p>
                <ul>
                  <li>Ponda- Goa</li>
                  <li>+91 9999999999</li>
                  <li>abc@gmail.com</li>
                </ul>
              </p>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>BE in Information Technology</h4>
              <h5>2020-24</h5>
              <p><em>Goa College of Engineering, Ponda</em></p>
              <!-- <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p> -->
            </div>
            <div class="resume-item">
              <h4>Std XII</h4>
              <h5>Completed in 2019</h5>
              <p><em>Goa Board</em></p>
              <p></p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Intern at Naik Solutions</h4>
              <h5>August 2023 - October 2023</h5>
              <p><em>Fatorda, Margao- Goa </em></p>
              <p>
                <ul>
                  <li>Developed and hosted portpolio website </li>
                  <li>Developed full-fledged apps using Flutter</li>
                  <li>Worked on over 5+ live projects</li>

                </ul>
              </p>
            </div>
           <!--  <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
              </p>
            </div> -->
          </div>
        </div>

      </div>
    </section><!-- End My Resume Section -->

    <!-- ======= My Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>My Skills</span>
          <h2>My Skills</h2>
          <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
        </div>

        <div class="row">
          <div class="col-md-12 col-lg-3 align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Coding Languages</a></h4>
              <p class="description">
              
              <br>
                C
                <br>
                <br>
                C++
                <br>
                <br>
                Java
                <br>
                <br>
                Python


              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3  align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Web Development</a></h4>
              <p class="description">

                HTML, CSS
                <br>
                <br>
                Javascript/ Jquery
                <br>
                <br>
                PHP
                <br>
                <br>
                MySQL
                <br>
                <br>
                ASP.net
                <br>
                <br>
                WordPress
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3  align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Projects</a></h4>
              <p class="description">
                
                Student Management System (using PHP, SQL)
                <br>
                <br>
                Pastry Website (using JS, PHP, SQL)
                <br>
                <br>
                Elective Selection System (ASP.net)
                <br>
                <br>
                Employee Management System (Java GUI,JDBC)
                
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3  align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Other Skills</a></h4>
              <p class="description">
                <br>
                Google Firebase
                <br>
                <br>
                Embedded Systems
                <br>
                <br>
                Cloud Computing
                <br>
                <br>
                Computer Graphics
                <br>

              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Services Section -->

    <!-- ======= Testimonials Section ======= -->


    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>My Portfolio</span>
          <h2>My Portfolio</h2>
          <p></p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Pastry Website</li>
          <li data-filter=".filter-card">Student Management System</li>
          <li data-filter=".filter-web">ASP.net</li>
        </ul>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Pastry Website 1</h4>
              <p>Pastry Website</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>ASP.net 3</h4>
              <p>ASP.net</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Pastry Website 2</h4>
              <p>Pastry Website</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Student Management System 2</h4>
              <p>Student Management System</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>ASP.net 2</h4>
              <p>ASP.net</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Pastry Website 3</h4>
              <p>Pastry Website</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Student Management System 1</h4>
              <p>Student Management System</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Student Management System 3</h4>
              <p>Student Management System</p>
              <a href="assets/img/portfolio/s" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>ASP.net 3</h4>
              <p>ASP.net</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Portfolio Section -->

    <!-- ======= Pricing Section ======= -->

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact Me</span>
          <h2>Contact Me</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">

                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>

                    <a href="https://www.linkedin.com/in/kshitij-naik-6657b3293/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Me</h3>
                  <p><a href="mailto:kshitijnaik56@gmail.com">kshitijnaik56@gmail.com</a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Me</h3>
                  <p><a href="tel:+919284913814">+91-9284913814</a></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form  class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" onkeyup="countChars(this);" rows="6" placeholder="Message" required></textarea><p id="charNum">500 characters remaining</p>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center">

                <input type="button" name="send" id="send" value="Send Message">
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Me Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Kshitij Naik</h3>
      <p></p>
      <div class="social-links">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>        
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Kshitij</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
    $("#send").click(function(){

     var name = $("#name").val();
     var email = $("#email").val();
     var subject = $("#subject").val();
     var message = $("#message").val();

     var data_string = 'name='+name+'&email='+email+'&subject='+subject+'&message='+message; 

     let regex = /^[a-z0-9-.]+@[a-z]+\.[a-z]{2,3}$/;
     const specialCharacters = new RegExp("[\\W_]");


     

if (name=="") {

alert("Name is empty");
}
else if(email==""){

alert("Email is empty");

}
else if(subject==""){

alert("Subject is empty");

}
else if(message==""){

alert("Message is empty");

}


//length
else if(name.length <3 || name.length >20){
  alert("Name should be between 3 and 20 characters");
}

else if(!(regex.test(email))){
  alert("Invalid email entered");
}
else if(subject.length >=200){
  alert("Subject length should be less than 200");
}
else if(message.length >=500){
  alert("Message length should be less than 500");
}

//special characters


 else if(subject.match(specialCharacters)) {
    
    alert("Subject should not contain special characters like @, !,#,$,* etc.");
    
  }

else if(message.match(specialCharacters)) {
    
    alert("Message should not contain special characters like @, !,#,$,* etc.");
    
  }   

else{
       $.ajax({  
      type: 'POST',  
      url: 'submit.php', 
      data: data_string,
      dataType: 'json',
      success: function(response) {
       if (response==1) {
        alert("Succesfully inserted");
       }
       else if (response==0) {
        alert("Backend data not properly send");
       }
      
       else
       {
        alert("Failed to insert");
       }
     }
    });
}
});

 </script>


</body>

</html>