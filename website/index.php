<!DOCTYPE html>
<html>
<title>Houssem's portfolio</title>
<meta charset="UTF-8">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.redelements {
    color: blue;
    font-size: 20px;
    font-weight: bold;
}
    svg#clouds {
    position: fixed;
    bottom: -160px;
    left: -230px;
    z-index: -10;
    width: 1920px;
}
      .elementor-shortcode {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="houssem.jpg" style="width:80%;" class="w3-round"><br><br>
    <h4><b>houssem-eddin JALLOULI</b></h4>
    
  </div>
  <div class="w3-bar-block">
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel w3-large" style="display: none;">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
  <!-- Header -->
  <header >
    <a href="#"><img src="houssem.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    
  </header>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

 <!-- Images of Me -->
 <div class="w3-row-padding w3-padding-16" id="about" style="width:80%; padding-top: 8px; padding-bottom: 8px; max-height: 250px; overflow: hidden;">
    <div class="w3-col m3">
      <img src="p1.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="p2.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m3">
      <img src="p3.jpg" alt="Me" style="width:100%">
    </div>
  </div>

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
  <h4><strong>About Me</strong></h4>
  <p style="font-size: large;">
    My name is <strong>Houssem-eddin Jallouli</strong>, and I am currently pursuing a degree in Computer Science Engineering at ESPRIT. I am deeply passionate about software development and emerging technologies, and I am actively honing my skills in various programming languages and frameworks to tackle future tech challenges.
    <br>
    I have a keen interest in optimizing and repairing technology, particularly computers. In my spare time, I enjoy taking on diverse repair projects and assisting family and friends with their tech issues. Whether troubleshooting a problem or enhancing everyday tools, I find great satisfaction in solving challenges and improving functionality.
    </p>
    <p>
      <button class="w3-button w3-dark-grey w3-padding-large w3-margin-top w3-margin-bottom" >
        <i class="fa fa-download w3-margin-right"></i><a href="cv.pdf"
          target="_blank"
          rel="noopener noreferrer">Download Resume</a>
      </button>
    </p>
    <h4>My Skills</h4>
    <!-- Progress bars / Skills -->
     <div div class="w3-row-padding w3-padding-16">
     <div class="w3-col m4">
     <p>Front-End</p>
    <div class="elementor-shortcode w3-grey">
        <img alt="Angular" src="angular.png" height="50" width="auto" class="skill-icon">
        <img alt="HTML5" src="https://raulwebdev.com/wp-content/uploads/2024/03/HTML5.svg" height="50" width="auto" class="skill-icon">
        <img alt="CSS3" src="https://raulwebdev.com/wp-content/uploads/2024/03/CSS3.svg" height="50" width="auto" class="skill-icon">
        <img alt="JavaScript" src="https://raulwebdev.com/wp-content/uploads/2024/03/JavaScript.svg" height="50" width="auto" class="skill-icon">
        <img alt="TypeScript" src="https://raulwebdev.com/wp-content/uploads/2024/03/TypeScript.svg" height="50" width="auto" class="skill-icon">
        <img alt="Bootstrap" src="https://raulwebdev.com/wp-content/uploads/2024/03/Bootstrap.svg" height="50" width="auto" class="skill-icon">
    </div>
      </div>
      <div class="w3-col m4">
      <p>Back-End</p>
    
    <div class="elementor-shortcode w3-grey">
    <img alt="dotnet" src="dotnet.png" height="50" width="auto" class="skill-icon">
    <img alt="MySQL" src="https://raulwebdev.com/wp-content/uploads/2024/03/MySQL.svg" height="50" width="auto" class="skill-icon">
    <img alt="MongoDB" src="https://raulwebdev.com/wp-content/uploads/2024/03/MongoDB.svg" height="50" width="auto" class="skill-icon">
    <img alt="Spring Boot" src="https://raulwebdev.com/wp-content/uploads/2024/03/Spring20Boot.svg" height="50" width="auto" class="skill-icon">
</div>
    </div>
    <div class="w3-col m4">
    <p>Tools</p>
    <div class="elementor-shortcode w3-grey">
        <img alt="Git" src="https://raulwebdev.com/wp-content/uploads/2024/03/Git.svg" height="50" width="auto" class="skill-icon">
        <img alt="GitHub" src="https://raulwebdev.com/wp-content/uploads/2024/03/GitHub.svg" height="50" width="auto" class="skill-icon">
        <img alt="docker" src="docker.png" height="50" width="auto" class="skill-icon">
        <img alt="Heroku" src="https://raulwebdev.com/wp-content/uploads/2024/03/Heroku.svg" height="50" width="auto" class="skill-icon">
        <img alt="Postman" src="https://raulwebdev.com/wp-content/uploads/2024/03/Postman.svg" height="50" width="auto" class="skill-icon">
        <img alt="jenkins" src="jenkins.png" height="50" width="auto" class="skill-icon">
        </div>
    </div>
     </div>

  </div>

  <div class="w3-container" id="portfolio">
    <h1><b>My Portfolio</b></h1>
    
    </div>
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="proj1.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>RFID-Activated Door Opener Using ESP32</b></p>
        <p class="redelements"> #esp32 #RFID</p>
        <p>RFID-based door opener. When an authorized tag is detected, the ESP32 activates the door lock, offering a secure and efficient access control solution.</p>
        <button class= "w3-button w3-blue"><a href="https://github.com/houssem-eddinjallouli/esp32-RFID" target="_blank">Github repo</a></button>
    </div>
      
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="proj2.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>PWA for Check and Credit Management</b></p>
        <p class="redelements"> #Angular #SpringBoot #MySQL</p>
        <p>This app helps manage checks by providing reminders for deposit dates. Additionally, it includes a tool for credit management to track client purchases and payments, ensuring streamlined financial tracking.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="P31.PNG" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Quiz module</b></p>
        <p class="redelements"> #Angular #SpringBoot #H2Database</p>
        <p>Quiz Managment: My task a school project for managing quizzes using the OpenQuizzDB API to import quizzes and calculate scores upon completion.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="proj4.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Event manager</b></p>
        <p class="redelements"> #Angular #DotNet8 #SqlServer</p>
        <p>A simple platform for tracking events (simple CRUD operations).</p>
        <button class= "w3-button w3-blue"><a href="https://github.com/houssem-eddinjallouli/TraceServer" target="_blank">Github repo</a></button>
        <button class= "w3-button w3-green"><a href="http://www.houssem-eddin.store:4200" target="_blank">Live Demo</a></button>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="league.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>League of Legends app</b></p>
        <p class="redelements"> #AndroidStudio</p>
        <p>A school workshop during the mobile development class.</p>
        <button class= "w3-button w3-blue"><a href="https://github.com/houssem-eddinjallouli/League-of-Legends-Android-Studio" target="_blank">Github repo</a></button>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="mobileproject.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Accounts managment</b></p>
        <p class="redelements"> #AndroidStudio "RoomDatabase</p>
        <p>For a school project my task is to create the application template and to do the user's managment as singn in and signup and some profile updates.</p>
        <button class= "w3-button w3-blue"><a href="https://github.com/5SAE7-Projects/Projet_Android_5SAE/tree/user_managment" target="_blank">Github repo</a></button>
    </div>
    </div>
  </div>
  
  <!-- Contact Section -->

    <hr class="w3-opacity">
   
<hr>
<div id="contact">

  <div align="center">
    <div
      class="elementor-element elementor-element-db55dec e-flex e-con-boxed e-con e-child"
      data-id="db55dec"
      data-element_type="container"
    >
      <div class="e-con-inner">
        <div
          class="elementor-element elementor-element-99821b3 elementor-widget elementor-widget-heading"
          data-id="99821b3"
          data-element_type="widget"
          data-widget_type="heading.default"
        >
          <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">
              Contact Me
            </h2>
          </div>
        </div>
      </div>
    </div>
    
    <a
      class="elementor-element elementor-element-fd3a467 e-con-full e-flex e-con e-child animated slideInUp"
      data-id="fd3a467"
      data-element_type="container"
      data-settings='{"animation":"slideInUp","animation_delay":100}'
      href="mailto:houssem-eddin.jallouli@esprit.tn"
      target="_blank"
    >
      <div
        class="elementor-element elementor-element-f6e3c92 e-con-full e-flex e-con e-child"
        data-id="f6e3c92"
        data-element_type="container"
        data-settings='{"background_background":"classic"}'
      >
        <div
          class="elementor-element elementor-element-2dec1ef e-con-full e-flex e-con e-child"
          data-id="2dec1ef"
          data-element_type="container"
        >
          <div
            class="elementor-element elementor-element-263ddff elementor-view-default elementor-widget elementor-widget-icon"
            data-id="263ddff"
            data-element_type="widget"
            data-widget_type="icon.default"
          >
            <div class="elementor-widget-container">
              <div class="elementor-icon-wrapper">
                <div class="elementor-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 48 48"
                    width="48px"
                    height="48px"
                  >
                    <path
                      fill="#4caf50"
                      d="M45,16.2l-5,2.75l-5,4.75L35,40h7c1.657,0,3-1.343,3-3V16.2z"
                    ></path>
                    <path
                      fill="#1e88e5"
                      d="M3,16.2l3.614,1.71L13,23.7V40H6c-1.657,0-3-1.343-3-3V16.2z"
                    ></path>
                    <polygon
                      fill="#e53935"
                      points="35,11.2 24,19.45 13,11.2 12,17 13,23.7 24,31.95 35,23.7 36,17"
                    ></polygon>
                    <path
                      fill="#c62828"
                      d="M3,12.298V16.2l10,7.5V11.2L9.876,8.859C9.132,8.301,8.228,8,7.298,8h0C4.924,8,3,9.924,3,12.298z"
                    ></path>
                    <path
                      fill="#fbc02d"
                      d="M45,12.298V16.2l-10,7.5V11.2l3.124-2.341C38.868,8.301,39.772,8,40.702,8h0 C43.076,8,45,9.924,45,12.298z"
                    ></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="elementor-element elementor-element-db2cae8 e-con-full e-flex e-con e-child"
          data-id="db2cae8"
          data-element_type="container"
          data-settings='{"background_background":"classic"}'
        >
          <div
            class="elementor-element elementor-element-d643f6e elementor-widget elementor-widget-heading"
            data-id="d643f6e"
            data-element_type="widget"
            data-widget_type="heading.default"
          >
            <div class="elementor-widget-container">
              <h2 class="elementor-heading-title elementor-size-default">
                Email
              </h2>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-0b41f6b elementor-widget elementor-widget-heading"
            data-id="0b41f6b"
            data-element_type="widget"
            data-widget_type="heading.default"
          >
            <div class="elementor-widget-container">
              
            </div>
          </div>
        </div>
      </div>
    </a>
    <a
      class="elementor-element elementor-element-781e594 e-con-full e-flex e-con e-child animated slideInUp"
      data-id="781e594"
      data-element_type="container"
      data-settings='{"animation":"slideInUp","animation_delay":200}'
      href="https://www.linkedin.com/in/houssem-edin-jallouli-aa7a33176/"
      target="_blank"
    >
      <div
        class="elementor-element elementor-element-e944c41 e-con-full e-flex e-con e-child"
        data-id="e944c41"
        data-element_type="container"
        data-settings='{"background_background":"classic"}'
      >
        <div
          class="elementor-element elementor-element-6c2f808 e-con-full e-flex e-con e-child"
          data-id="6c2f808"
          data-element_type="container"
          data-settings='{"background_background":"classic"}'
        >
          <div
            class="elementor-element elementor-element-7de7a22 elementor-view-default elementor-widget elementor-widget-icon"
            data-id="7de7a22"
            data-element_type="widget"
            data-widget_type="icon.default"
          >
            <div class="elementor-widget-container">
              <div class="elementor-icon-wrapper">
                <div class="elementor-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 48 48"
                    width="48px"
                    height="48px"
                  >
                    <path
                      fill="#0078d4"
                      d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5 V37z"
                    ></path>
                    <path
                      d="M30,37V26.901c0-1.689-0.819-2.698-2.192-2.698c-0.815,0-1.414,0.459-1.779,1.364 c-0.017,0.064-0.041,0.325-0.031,1.114L26,37h-7V18h7v1.061C27.022,18.356,28.275,18,29.738,18c4.547,0,7.261,3.093,7.261,8.274 L37,37H30z M11,37V18h3.457C12.454,18,11,16.528,11,14.499C11,12.472,12.478,11,14.514,11c2.012,0,3.445,1.431,3.486,3.479 C18,16.523,16.521,18,14.485,18H18v19H11z"
                      opacity=".05"
                    ></path>
                    <path
                      d="M30.5,36.5v-9.599c0-1.973-1.031-3.198-2.692-3.198c-1.295,0-1.935,0.912-2.243,1.677 c-0.082,0.199-0.071,0.989-0.067,1.326L25.5,36.5h-6v-18h6v1.638c0.795-0.823,2.075-1.638,4.238-1.638 c4.233,0,6.761,2.906,6.761,7.774L36.5,36.5H30.5z M11.5,36.5v-18h6v18H11.5z M14.457,17.5c-1.713,0-2.957-1.262-2.957-3.001 c0-1.738,1.268-2.999,3.014-2.999c1.724,0,2.951,1.229,2.986,2.989c0,1.749-1.268,3.011-3.015,3.011H14.457z"
                      opacity=".07"
                    ></path>
                    <path
                      fill="#fff"
                      d="M12,19h5v17h-5V19z M14.485,17h-0.028C12.965,17,12,15.888,12,14.499C12,13.08,12.995,12,14.514,12 c1.521,0,2.458,1.08,2.486,2.499C17,15.887,16.035,17,14.485,17z M36,36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698 c-1.501,0-2.313,1.012-2.707,1.99C24.957,25.543,25,26.511,25,27v9h-5V19h5v2.616C25.721,20.5,26.85,19,29.738,19 c3.578,0,6.261,2.25,6.261,7.274L36,36L36,36z"
                    ></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="elementor-element elementor-element-85a7d82 e-con-full e-flex e-con e-child"
          data-id="85a7d82"
          data-element_type="container"
          data-settings='{"background_background":"classic"}'
        >
          <div
            class="elementor-element elementor-element-83b77af elementor-widget elementor-widget-heading"
            data-id="83b77af"
            data-element_type="widget"
            data-widget_type="heading.default"
          >
            <div class="elementor-widget-container">
              <h2 class="elementor-heading-title elementor-size-default">
                LinkedIn
              </h2>
            </div>
          </div>
         
        </div>
      </div>
    </a>
    <a
      class="elementor-element elementor-element-a8303af e-con-full e-flex e-con e-child animated slideInUp"
      data-id="a8303af"
      data-element_type="container"
      data-settings='{"animation":"slideInUp","animation_delay":300}'
      href="https://github.com/houssem-eddinjallouli"
      target="_blank"
    >
      <div
        class="elementor-element elementor-element-3c82f51 e-con-full e-flex e-con e-child"
        data-id="3c82f51"
        data-element_type="container"
        data-settings='{"background_background":"classic"}'
      >
        <div
          class="elementor-element elementor-element-1d44b5d e-con-full e-flex e-con e-child"
          data-id="1d44b5d"
          data-element_type="container"
        >
          <div
            class="elementor-element elementor-element-de6ecf2 elementor-view-default elementor-widget elementor-widget-icon"
            data-id="de6ecf2"
            data-element_type="widget"
            data-widget_type="icon.default"
          >
            <div class="elementor-widget-container">
              <div class="elementor-icon-wrapper">
                <div class="elementor-icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 64 64"
                    width="64px"
                    height="64px"
                  >
                    <path
                      d="M32 6C17.641 6 6 17.641 6 32c0 12.277 8.512 22.56 19.955 25.286-.592-.141-1.179-.299-1.755-.479V50.85c0 0-.975.325-2.275.325-3.637 0-5.148-3.245-5.525-4.875-.229-.993-.827-1.934-1.469-2.509-.767-.684-1.126-.686-1.131-.92-.01-.491.658-.471.975-.471 1.625 0 2.857 1.729 3.429 2.623 1.417 2.207 2.938 2.577 3.721 2.577.975 0 1.817-.146 2.397-.426.268-1.888 1.108-3.57 2.478-4.774-6.097-1.219-10.4-4.716-10.4-10.4 0-2.928 1.175-5.619 3.133-7.792C19.333 23.641 19 22.494 19 20.625c0-1.235.086-2.751.65-4.225 0 0 3.708.026 7.205 3.338C28.469 19.268 30.196 19 32 19s3.531.268 5.145.738c3.497-3.312 7.205-3.338 7.205-3.338.567 1.474.65 2.99.65 4.225 0 2.015-.268 3.19-.432 3.697C46.466 26.475 47.6 29.124 47.6 32c0 5.684-4.303 9.181-10.4 10.4 1.628 1.43 2.6 3.513 2.6 5.85v8.557c-.576.181-1.162.338-1.755.479C49.488 54.56 58 44.277 58 32 58 17.641 46.359 6 32 6zM33.813 57.93C33.214 57.972 32.61 58 32 58 32.61 58 33.213 57.971 33.813 57.93zM37.786 57.346c-1.164.265-2.357.451-3.575.554C35.429 57.797 36.622 57.61 37.786 57.346zM32 58c-.61 0-1.214-.028-1.813-.07C30.787 57.971 31.39 58 32 58zM29.788 57.9c-1.217-.103-2.411-.289-3.574-.554C27.378 57.61 28.571 57.797 29.788 57.9z"
                    ></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="elementor-element elementor-element-70b001c e-con-full e-flex e-con e-child"
          data-id="70b001c"
          data-element_type="container"
          data-settings='{"background_background":"classic"}'
        >
          <div
            class="elementor-element elementor-element-cb1834c elementor-widget elementor-widget-heading"
            data-id="cb1834c"
            data-element_type="widget"
            data-widget_type="heading.default"
          >
            <div class="elementor-widget-container">
              <h2 class="elementor-heading-title elementor-size-default">
                GitHub
              </h2>
            </div>

            
          </div>
         
        </div>
      </div>
    </a>
 
  </div>

  <!-- contact -->
<br>
  <div class="card-container elementor-shortcode">
    <!-- Discord -->
    <a
      class="circle-link"
      title="Join the Conversation on Discord"
      href="https://discord.gg/bmaUQdez"
      target="_blank"
      rel="noopener"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="26"
        height="26"
        viewBox="0 0 245 240"
      >
        <title>Discord Logo</title>
        <path
          d="M104.4 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1.1-6.1-4.5-11.1-10.2-11.1zM140.9 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1s-4.5-11.1-10.2-11.1z"
        />
        <path
          d="M189.5 20h-134C44.2 20 35 29.2 35 40.6v135.2c0 11.4 9.2 20.6 20.5 20.6h113.4l-5.3-18.5 12.8 11.9 12.1 11.2 21.5 19V40.6c0-11.4-9.2-20.6-20.5-20.6zm-38.6 130.6s-3.6-4.3-6.6-8.1c13.1-3.7 18.1-11.9 18.1-11.9-4.1 2.7-8 4.6-11.5 5.9-5 2.1-9.8 3.5-14.5 4.3-9.6 1.8-18.4 1.3-25.9-.1-5.7-1.1-10.6-2.7-14.7-4.3-2.3-.9-4.8-2-7.3-3.4-.3-.2-.6-.3-.9-.5-.2-.1-.3-.2-.4-.3-1.8-1-2.8-1.7-2.8-1.7s4.8 8 17.5 11.8c-3 3.8-6.7 8.3-6.7 8.3-22.1-.7-30.5-15.2-30.5-15.2 0-32.2 14.4-58.3 14.4-58.3 14.4-10.8 28.1-10.5 28.1-10.5l1 1.2c-18 5.2-26.3 13.1-26.3 13.1s2.2-1.2 5.9-2.9c10.7-4.7 19.2-6 22.7-6.3.6-.1 1.1-.2 1.7-.2 6.1-.8 13-1 20.2-.2 9.5 1.1 19.7 3.9 30.1 9.6 0 0-7.9-7.5-24.9-12.7l1.4-1.6s13.7-.3 28.1 10.5c0 0 14.4 26.1 14.4 58.3 0 0-8.5 14.5-30.6 15.2z"
        />
      </svg>
    </a>

    <!-- Twitter -->
    <a
      class="circle-link"
      title="Follow on Twitter"
      href="https://x.com/Houssemjalloul1"
      target="_blank"
      rel="noopener"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="26"
        height="26"
        viewBox="0 0 24 24"
      >
        <title>Twitter Logo</title>
        <path
          d="M22.46 6.03c-.79.35-1.63.58-2.51.68.9-.54 1.59-1.39 1.91-2.41-.84.5-1.77.85-2.77 1.05-.8-.85-1.94-1.37-3.21-1.37-2.43 0-4.41 1.97-4.41 4.41 0 .34.04.68.1 1-.37-.02-.74-.11-1.07-.29-.31-.18-.58-.43-.82-.74-.27.48-.42 1.02-.42 1.61 0 1.11.56 2.09 1.41 2.67-.52-.02-1.02-.16-1.46-.39v.04c0 1.56 1.11 2.86 2.57 3.15-.27.07-.55.1-.84.1-.21 0-.42-.02-.62-.06.43 1.35 1.68 2.33 3.15 2.36-1.16.91-2.62 1.45-4.22 1.45-.27 0-.53-.02-.79-.05 1.46.93 3.18 1.48 5.04 1.48 6.05 0 9.36-5.02 9.36-9.36 0-.14-.01-.27-.02-.41.64-.46 1.2-1.03 1.64-1.68z"
        />
      </svg>
    </a>

    <a
      class="circle-link"
      title="Follow on Facebook"
      href="https://www.facebook.com/houssem.jallouli.3/"
      target="_blank"
      rel="noopener"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="26"
        height="26"
        viewBox="0 0 24 24"
      >
        <title>Facebook Logo</title>
        <path
          d="M22 12.07c0-5.53-4.47-10-10-10S2 6.54 2 12.07c0 4.99 3.66 9.12 8.43 9.88v-6.99H7.57v-2.9h2.86v-2.12c0-2.82 1.72-4.37 4.21-4.37 1.19 0 2.21.09 2.51.13v2.9h-1.72c-1.35 0-1.61.64-1.61 1.6v2.1h3.22l-.42 2.9h-2.8v6.99C18.34 21.19 22 17.07 22 12.07z"
        />
      </svg>
    </a>
  </div>


  <svg
    id="clouds"
    xmlns="http://www.w3.org/2000/svg"
    width="2611.084"
    height="485.677"
    viewBox="0 0 2611.084 485.677"
  >
    <title>Gray Clouds Background</title>
    <path
      id="Path_39"
      data-name="Path 39"
      d="M2379.709,863.793c10-93-77-171-168-149-52-114-225-105-264,15-75,3-140,59-152,133-30,2.83-66.725,9.829-93.5,26.25-26.771-16.421-63.5-23.42-93.5-26.25-12-74-77-130-152-133-39-120-212-129-264-15-54.084-13.075-106.753,9.173-138.488,48.9-31.734-39.726-84.4-61.974-138.487-48.9-52-114-225-105-264,15a162.027,162.027,0,0,0-103.147,43.044c-30.633-45.365-87.1-72.091-145.206-58.044-52-114-225-105-264,15-75,3-140,59-152,133-53,5-127,23-130,83-2,42,35,72,70,86,49,20,106,18,157,5a165.625,165.625,0,0,0,120,0c47,94,178,113,251,33,61.112,8.015,113.854-5.72,150.492-29.764a165.62,165.62,0,0,0,110.861-3.236c47,94,178,113,251,33,31.385,4.116,60.563,2.495,86.487-3.311,25.924,5.806,55.1,7.427,86.488,3.311,73,80,204,61,251-33a165.625,165.625,0,0,0,120,0c51,13,108,15,157-5a147.188,147.188,0,0,0,33.5-18.694,147.217,147.217,0,0,0,33.5,18.694c49,20,106,18,157,5a165.625,165.625,0,0,0,120,0c47,94,178,113,251,33C2446.709,1093.793,2554.709,922.793,2379.709,863.793Z"
      transform="translate(142.69 -634.312)"
      fill="#eee"
    />
  </svg>
<hr>
  
  <div class="w3-black w3-center w3-padding-24">made with ❤️ By Houssem-eddin<p class="w3-text-grey">Template by W3.CSS</p></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
