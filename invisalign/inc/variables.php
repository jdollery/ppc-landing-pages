<?php

/*-----------------------------------------------------------------------------------*/
/* BASE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$base_url           =   "https://dev.dental-design-clients.co.uk/dental-design/ppc/invisalign/"; //If using webhook add to script too

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

$button_header_text   =     "";
$button_header_url    =     "";

$whatsapp_link        =     "";
$instagram_link       =     "";
$facebook_link        =     "";
$twitter_link         =     "";
$tiktok_link          =     "";


/*-----------------------------------------------------------------------------------*/
/* FORM VARIABLES */
/*-----------------------------------------------------------------------------------*/

$form_heading       =   "Book your consultation with our friendly team today";
$form_button        =   "Send Consultation Request";
$privacy_policy     =   "https://dental-design.marketing/website-privacy-policy";
$securedent_id      =   "XXXXXXXXXX"; //Leave empty if Dengro
$dengro_hook        =   ""; //Leave empty if Securedent


/*-----------------------------------------------------------------------------------*/
/* HERO VARIABLES */
/*-----------------------------------------------------------------------------------*/

$hero_heading     =     "Rebuild Your Confidence with Invisalign Braces";
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
$steps_lead           =   "";

$steps = array(

  array(
    "img"      =>  "step-img-1",
    "title"    =>  "Personal Smile Assessment",
    "excerpt"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing aliquam vitae mi eu leo rutrum rhoncus eros."
  ),

  array(
    "img"      =>  "step-img-2",
    "title"    =>  "See How Your Smile Will Look",
    "excerpt"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing aliquam vitae mi eu leo rutrum rhoncus eros."
  ),

  array(
    "img"      =>  "step-img-3",
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
/* FAQ VARIABLES */
/*-----------------------------------------------------------------------------------*/

$questions = array(

  array(
    "heading"     =>  "Am I suitable for Invisalign?",
    "description" =>  "Most patients looking to improve the appearance of their smiles are suitable for Invisalign treatment. It is very successful for mild to moderate issues, including overcrowding, misalignment, and gaps. At your initial consultation, we will be able to advise if Invisalign is the best treatment for you."
  ),

  array(
    "heading"     =>  "How long do I need to wear the aligners for each day?",
    "description" =>  "You need to wear your aligners for around 22 hours a day in order for your treatment to be most effective. You can take them out for eating, drinking, and to brush your teeth, but should not have them out of your mouth for too long to avoid disrupting your treatment."
  ),

  array(
    "heading"     =>  "How long does Invisalign treatment take?",
    "description" =>  "Treatment length varies, but most Invisalign treatment journeys are completed in 9-18 months. Straightforward cases have a faster treatment time, whilst patients needing more complex straightening can expect to wear their aligners for longer. We will advise you of your expected treatment time after your initial consultation."
  ),

  array(
    "heading"     =>  "Are the aligners comfortable?",
    "description" =>  "Yes, the aligners are custom made and designed with comfort in mind. We use accurate scans to ensure a secure and precise fit and have no metal brackets or wires present to irritate your mouth."
  ),

  array(
    "heading"     =>  "Will I need to wear retainers after my treatment?",
    "description" =>  "Yes, you will need to wear retainers to keep your teeth in their new positions following your Invisalign treatment. Teeth have a habit of moving out of place, so you will need to wear retainers on a part time basis (usually overnight) for as long as you wish your teeth to stay straight. You will be given fixed or removable retainers."
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* FINANCE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$finance_heading        =   "Finance Available";
$finance_lead           =   "<h4>We know dental treatment can be expensive, so we are pleased to offer ways to spread the cost and make it more affordable, including 0% interest payments.</h4>";


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
/* RESULTS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$results_heading        =   "Before &amp; After Treatment";
$results_lead           =   "";

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
/* PROFILE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$profile_heading   =   "Meet Our Dentist";

$profiles = array(

  array(
    "img"       =>  "profile",
    "name"      =>  "Dr Jane Doe",
    "quals"     =>  "Associate Dentist BDS (Hons)",
    "gdc"       =>  "83549",
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