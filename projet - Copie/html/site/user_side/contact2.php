﻿<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function genererSelecteurVoitures(){
   $selecteur = "<select class='mail_text' name='voiture'>
                   <option value='' disabled selected> Sélectionner la Voiture</option>";

   require_once('../controllers/VoitureController.php');
   $v = new VoitureController();
   $res = $v->liste();
   
   while ($row = $res->fetch()){
       $marque = $row[2];
       $modele = $row[3];

       // Concaténation de la marque et du modèle pour l'option
       $selecteur .= "<option value='$row[0]'>$marque $modele</option>";
   }
   $selecteur .= "</select>";

   return $selecteur;
}
echo "<html>
   <head>
   <!-- basic -->
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <!-- mobile metas -->
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <meta name='viewport' content='initial-scale=1, maximum-scale=1'>
   <!-- site metas -->
   <title>Contact</title>
   <meta name='keywords' content=''>
   <meta name='description' content=''>
   <meta name='author' content=''>
   <!-- bootstrap css -->
   <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
   <!-- style css -->
   <link rel='stylesheet' type='text/css' href='css/style.css'>
   <!-- Responsive-->
   <link rel='stylesheet' href='css/responsive.css'>
   <!-- fevicon -->
   <link rel='icon' href='images/fevicon.png' type='image/gif' />
   <!-- font css -->
   <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap' rel='stylesheet'>
   <!-- Scrollbar Custom CSS -->
   <link rel='stylesheet' href='css/jquery.mCustomScrollbar.min.css'>
   <!-- Tweaks for older IEs-->
   <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
</head>
<body>
   <!-- header section start -->
   <div class='header_section'>
      <div class='container'>
         <nav class='navbar navbar-expand-lg navbar-light bg-light'>
            <a class='navbar-brand' href='index.html'><img class='logo1' src='images/logo.png'></a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
               <ul class='navbar-nav ml-auto'>
                  <li class='nav-item'>
                     <a class='nav-link' href='index.html'>Home</a>
                  </li>
                  <li class='nav-item'>
                     <a class='nav-link' href='about.html'>About</a>
                  </li>
                  <li class='nav-item'>
                     <a class='nav-link' href='services.html'>Services</a>
                  </li>
                  <li class='nav-item'>
                     <a class='nav-link' href='gallery.html'>Vehicles</a>
                  </li>
                  <li class='nav-item'>
                     <a class='nav-link' href='client.html'>Client</a>
                  </li>
                  <li class='nav-item'>
                     <a class='nav-link' href='login.html'>Contact</a>
                  </li>
                  <li class='nav-item'>
                     <a class='nav-link' href='loginAdmin.html'>Admin</a>
                  </li>
               </ul>
               <form class='form-inline my-2 my-lg-0'>
               </form>
            </div>
         </nav>
      </div>
   </div>
   <!-- header section end -->
   <div class='call_text_main'>
      <div class='container'>
         <div class='call_taital'>
            <div class='call_text'><a href='#'><i class='fa fa-map-marker' aria-hidden='true'></i><span class='padding_left_15'>Location</span></a></div>
            <div class='call_text'><a href='#'><i class='fa fa-phone' aria-hidden='true'></i><span class='padding_left_15'>(+216) 20332777</span></a></div>
            <div class='call_text'><a href='#'><i class='fa fa-envelope' aria-hidden='true'></i><span class='padding_left_15'>awelcar@yahoo.fr</span></a></div>
         </div>
      </div>
   </div>
   <!-- contact section start -->
   <div class='contact_section layout_padding'>
      <div class='container'>
         <div class='row'>
            <div class='col-sm-12'>
               <h1 class='contact_taital'>Get In Touch</h1>
            </div>
         </div>
      </div>
      <div class='container'>
         <div class='contact_section_2'>
            <div class='row'>
               <div class='col-md-12'>
                  <div class='mail_section_1'>
                     <form action='AjouterReservation.php' method='post'>
                        <input type='date' class='mail_text' placeholder='Date Début' name='date_debut'/>
                        <input type='date' class='mail_text' placeholder='Date Fin' name='date_fin'/>";
                        echo genererSelecteurVoitures();
                        echo "<textarea class='massage-bt' placeholder='Message' rows='5' id='comment' name='message'></textarea>
                        <input  class='send_bt' type='submit' value='send'/>
                    </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->
   <!-- footer section start -->
   <div class='footer_section layout_padding'>
      <div class='container'>
         <div class='row'>
            <div class='col-md-12'>
               <div class='footeer_logo'><img src='images/logo.png'></div>
            </div>
         </div>
         <div class='footer_section_2'>
            <div class='row'>
               <div class='col'>
                  <h4 class='footer_taital'>Subscribe Now</h4>
                  <p class='footer_text'>There are many variations of passages of Lorem Ipsum available,</p>
                  <div class='form-group'>
                     <textarea class='update_mail' placeholder='Enter Your Email' rows='5' id='comment' name='Enter Your Email'></textarea>
                     <div class='subscribe_bt'><a href='#'>Subscribe</a></div>
                  </div>
               </div>
               <div class='col'>
                  <h4 class='footer_taital'>Information</h4>
                  <p class='lorem_text'>There are many variations of passages of Lorem Ipsum available, but the majority </p>
               </div>
               <div class='col'>
                  <h4 class='footer_taital'>Helpful Links</h4>";
                 

?>