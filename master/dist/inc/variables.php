<?php

/*-----------------------------------------------------------------------------------*/
/* BASE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$base_url           =   "https://dev.dental-design-clients.co.uk/dental-design/ppc/template/"; //If using webhook add to script too

$google_fonts_url   =   "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,600&family=Roboto+Serif:ital,opsz,wght@0,8..144,300;0,8..144,500;1,8..144,300;1,8..144,500&display=swap";
$typekit_url        =   "";


/*-----------------------------------------------------------------------------------*/
/* COOKIE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$cookie_tag            =   "GTM-XXXXXXX";
$cookie_pixel          =   "XXXXXXXXXXXXXXXX";
$cookie_whatconverts   =   "XXXXXXXXXXXXXXXX";

$cookie_policy_text    =   "cookie policy";
$cookie_policy_link    =   "https://dental-design.marketing/cookie-policy/"; //use privacy policy if parent site doesn't have a cookie policy


/*-----------------------------------------------------------------------------------*/
/* PRACTICE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$practice_name      =   "Dental Design";
$phone_number       =   "01202 677277";
$email_address      =   "info@dental-design.marketing";
$location_address   =   "Braeside Business Park, West House, Sterte Ave W, Poole, BH15 2BX"; // Make sure you use this format
$location_link      =   "https://goo.gl/maps/YCbKE1MQgM8hb5QTA"; //remember to update this link


/*-----------------------------------------------------------------------------------*/
/* MAP VARIABLES */
/*-----------------------------------------------------------------------------------*/

$center_longitude     =   "57.47373162352704";
$center_latitude      =   "-4.169567476227658";

$location_longitude   =   "57.47295283435454";
$location_latitude    =   "-4.16941727251645";

$marker_width         =   "250";
$marker_height        =   "90";


/*-----------------------------------------------------------------------------------*/
/* BUTTON VARIABLES */
/*-----------------------------------------------------------------------------------*/

$button_cta           =     "Book your consultation today";

$button_header_text   =     "Book Online";
$button_header_url    =     "https://dental-design.marketing/";

$whatsapp_link        =     "https://api.whatsapp.com/send?phone=441234567891";
$instagram_link       =     "https://www.instagram.com/_dentaldesignuk";
$facebook_link        =     "https://www.facebook.com/dentaldesignuk/";
$twitter_link         =     "https://twitter.com/_dentaldesignUK";
$tiktok_link          =     "https://www.tiktok.com/@dentaldesignuk/";


/*-----------------------------------------------------------------------------------*/
/* FORM VARIABLES */
/*-----------------------------------------------------------------------------------*/

$form_heading       =   "Book your consultation with our friendly team today";
$form_button        =   "Send Consultation Request";
$privacy_policy     =   "https://dental-design.marketing/website-privacy-policy";
$securedent_id      =   ""; //Leave empty if Dengro
$dengro_hook        =   "XXXXXXXXXX"; //Leave empty if Securedent


/*-----------------------------------------------------------------------------------*/
/* HERO VARIABLES */
/*-----------------------------------------------------------------------------------*/

$hero_heading     =     "Stunning smile makeovers";
$hero_lead        =     "";
$hero_logo        =     "invisalign-provider-wo.svg";
$hero_alt         =     "Invisalign Provider";

$hero_offers = array(

  array(
    "img"      =>  "smile-icon.svg",
    "title"    =>  "Straight Teeth<br>in 4+ Months",
  ),

  array(
    "img"      =>  "whitening-icon.svg",
    "title"    =>  "FREE Whitening<br>and 3D Scans",
  ),

  array(
    "img"      =>  "finance-icon.svg",
    "title"    =>  "0% Interest<br>Monthly Finance",
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* STEPS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$steps_heading        =   "Transform Your Smile With These Steps";
$steps_lead           =   "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</h4>";

$steps = array(

  array(
    "img"     =>  "step-img-1",
    "title"    =>  "Personal Smile Assessment",
    "excerpt"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing aliquam vitae mi eu leo rutrum rhoncus eros."
  ),

  array(
    "img"     =>  "step-img-2",
    "title"    =>  "See How Your Smile Will Look",
    "excerpt"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing aliquam vitae mi eu leo rutrum rhoncus eros."
  ),

  array(
    "img"     =>  "step-img-3",
    "title"    =>  "FREE When You Book Today",
    "excerpt"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing aliquam vitae mi eu leo rutrum rhoncus eros."
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* OFFERS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$offers_heading        =   "Limited Special Offer";
$offers_lead           =   "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</h4>";

$offers_bullets = array(

  array(
    "item"    =>  "£500 OFF Invisalign Treatment",
  ),

  array(
    "item"    =>  "FREE Initial Consultation",
  ),

  array(
    "item"    =>  "Complimentary Teeth Whitening",
  ),

  array(
    "item"    =>  "FREE Hygiene Treatment",
  ),

  array(
    "item"    =>  "OPG X-ray &amp; All Visits Included",
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* FEES VARIABLES */
/*-----------------------------------------------------------------------------------*/

$fees_heading        =   "Treatments Fees";
$fees_lead           =   "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</h4>";

$fees_table = array(

  array(
    "heading"     =>  "Treatment one",
    "description" =>  "From £60.00"
  ),

  array(
    "heading"     =>  "Treatment two",
    "description" =>  "From £180.00"
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* CTA VARIABLES */
/*-----------------------------------------------------------------------------------*/

$cta_heading        =   "Treatments Fees";
$cta_lead           =   "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</h4>";


/*-----------------------------------------------------------------------------------*/
/* RESULTS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$results_heading        =   "Before &amp; After Treatment";
$results_lead           =   "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</h4>";

$results = array(

  array(
    "img"     =>  "before",
    "title"    =>  "Before",
  ),

  array(
    "img"     =>  "after",
    "title"    =>  "After",
  )
  
);


/*-----------------------------------------------------------------------------------*/
/* QUESTIONS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$questions_lead           =   "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</h4>";

$questions_bullets = array(

  array(
    "item"    =>  "Need to fix a broken tooth?",
  ),

  array(
    "item"    =>  "Have painful toothache?",
  ),

  array(
    "item"    =>  "Need wisdom tooth pain relief?",
  ),

  array(
    "item"    =>  "Are your gums or cheeks swollen or bleeding?",
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* FAQ VARIABLES */
/*-----------------------------------------------------------------------------------*/

$questions = array(

  array(
    "heading"     =>  "Why should I choose implants?",
    "description" =>  "Lorem ipsum dolor sit amet, consectetur adipiscing aliquam vitae mi eu leo rutrum rhoncus eros."
  ),

  array(
    "heading"     =>  "Am I suitable for implant treatment?",
    "description" =>  "Lorem ipsum dolor sit amet, consectetur adipiscing aliquam vitae mi eu leo rutrum rhoncus eros."
  ),

  array(
    "heading"     =>  "How long does the dental implant treatment process take?",
    "description" =>  "Lorem ipsum dolor sit amet, consectetur adipiscing aliquam vitae mi eu leo rutrum rhoncus eros."
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* BENEFITS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$benefits_heading        =   "Benefits of Dental Implants";
$benefits_lead           =   "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</h4>";

$benefits_bullets = array(

  array(
    "item"    =>  "Look, feel and function like natural teeth",
  ),

  array(
    "item"    =>  "Confidence to eat and chew whatever you choose",
  ),

  array(
    "item"    =>  "Easy to clean and care for",
  ),

  array(
    "item"    =>  "Supports and preserves your facial structure",
  ),

  array(
    "item"    =>  "Improves your speech",
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* WHY VARIABLES */
/*-----------------------------------------------------------------------------------*/

$why_heading        =   "Why Choose Us?";
$why_lead           =   "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</h4>";

$why_bullets = array(

  array(
    "item"    =>  "Aliquam vitae mi eu leo rutrum rhoncus non ac eros.",
  ),

  array(
    "item"    =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
  ),

  array(
    "item"    =>  "Curabitur vel diam ut ligula vehicula fermentum nec eu enim.",
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* REVIEW VARIABLES */
/*-----------------------------------------------------------------------------------*/

$reviews = array(

  array(
    "link"      =>  "https://goo.gl/maps/wEPFSv9SmtwEAUSR6",
    "author"    =>  "Lora",
    "excerpt"   =>  "<p>Very nice team to work with. Dental Design has been managing our practice website and social media for a few years, Rosie, Marcus and Lucy are all very helpful, and prompt to attend to our requests and resolve any issues. Their work is always professional and of high quality. Won't hesitate to recommend.</p>",
    "more"      =>  ""
  ),

  array(
    "link"      =>  "https://goo.gl/maps/EBuZwiW2RUGaa4Gh7",
    "author"    =>  "Emily Kasai",
    "excerpt"   =>  "<p>The whole team at Dental Design Marketing are absolutely fantastic, with special mention to Rosie, Marcus & Vicky. They really listen to our requests but also offer lots of great suggestions to help enhance our website.</p>",
    "more"      =>  "<p>Would not hesitate in recommended dental design to anyone looking for a new website designer!</p>"
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* TREATMENTS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$treatments_heading        =   "Types Of Treatment Available";
$treatments_lead           =   "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</h4>";

$treatments = array(

  array(
    "img"     =>  "treatment-img-1",
    "title"    =>  "Single Implant",
    "excerpt"  =>  ""
  ),

  array(
    "img"     =>  "treatment-img-2",
    "title"    =>  "Full Arch Implants",
    "excerpt"  =>  ""
  ),

  array(
    "img"     =>  "treatment-img-3",
    "title"    =>  "Implant Retained Bridges",
    "excerpt"  =>  ""
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* PROFILE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$profile_heading   =   "Meet Our Dentist";

$profiles = array(

  array(
    "img"       =>  "profile",
    "name"      =>  "Dr Jane Doe",
    "quals"     =>  "Associate Dentist BDS (Hons)",
    "gdc"       =>  "835495",
    "intro"     =>  "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum enim mauris, vel mattis dui vestibulum ut.</p>",
    "excerpt"   =>  "<p>Curabitur vel diam ut ligula vehicula fermentum nec eu enim. Suspendisse molestie nibh hendrerit, egestas arcu a, aliquam felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam a tempor tortor. Suspendisse congue venenatis erat.</p>"
  ),

  array(
    "img"       =>  "profile",
    "name"      =>  "Dr John Smith",
    "quals"     =>  "Associate Dentist BDS (Hons)",
    "gdc"       =>  "83549",
    "intro"     =>  "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum enim mauris, vel mattis dui vestibulum ut.</p>",
    "excerpt"   =>  "<p>Curabitur vel diam ut ligula vehicula fermentum nec eu enim. Suspendisse molestie nibh hendrerit, egestas arcu a, aliquam felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam a tempor tortor. Suspendisse congue venenatis erat.</p>"
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* EMERGENCY VARIABLES */
/*-----------------------------------------------------------------------------------*/

$emergency_heading        =   "Emergency Treatments";
$emergency_lead           =   "<h4>We don&rsquo;t like to think of people in dental pain, and we will always try to offer emergency dental appointments where possible.</h4>";


/*-----------------------------------------------------------------------------------*/
/* FINANCE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$finance_heading        =   "Finance Available";
$finance_lead           =   "<h4>We know dental treatment can be expensive, so we are pleased to offer ways to spread the cost and make it more affordable, including 0% interest over 12 months.</h4>";


/*-----------------------------------------------------------------------------------*/
/* OPENING VARIABLES */
/*-----------------------------------------------------------------------------------*/

$opening_extra  =  "Parking available";

$opening = array(

  array(
    "day"   =>  "Monday",
    "time"  =>  "9:00am - 5:00pm"
  ),

  array(
    "day"   =>  "Tuesday",
    "time"  =>  "9:00am - 5:00pm"
  ),

  array(
    "day"   =>  "Wednesday",
    "time"  =>  "9:00am - 5:00pm"
  ),

  array(
    "day"   =>  "Thursday",
    "time"  =>  "9:00am - 5:00pm"
  ),

  array(
    "day"   =>  "Friday",
    "time"  =>  "9:00am - 5:00pm"
  ),

  array(
    "day"   =>  "Saturday",
    "time"  =>  "Closed"
  ),

  array(
    "day"   =>  "Sunday",
    "time"  =>  "Closed"
  ),


);