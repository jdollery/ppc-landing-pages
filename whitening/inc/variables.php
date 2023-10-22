<?php

/*-----------------------------------------------------------------------------------*/
/* BASE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$base_url           =   "https://dev.dental-design-clients.co.uk/dental-design/ppc/whitening/"; //If using webhook add to script too

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

$hero_heading     =     "Enhance Your Smile with Teeth Whitening";
$hero_lead        =     "";
$hero_logo        =     "";
$hero_alt         =     "";

$hero_offers = array(

  array(
    "img"      =>  "finance-icon.svg",
    "title"    =>  "0% Interest<br>Monthly<br>Finance",
  ),

  array(
    "img"      =>  "smile-icon.svg",
    "title"    =>  "FREE<br>Consultations",
  ),

  array(
    "img"      =>  "whitening-icon.svg",
    "title"    =>  "Half Price<br>Whitening<br>Wednesdays",
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* STEPS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$steps_heading        =   "Transform Your Smile With These Steps";
$steps_lead           =   "";

$steps = array(

  array(
    "img"     =>  "step-img-1",
    "title"    =>  "Personal Smile Assessment",
    "excerpt"  =>  "Talk to us about your whitening goals and we can advise you which whitening treatment will best suit your needs."
  ),

  array(
    "img"     =>  "step-img-2",
    "title"    =>  "Customised Trays",
    "excerpt"  =>  "We take impressions of your teeth, and customised whitening trays are produced to fit comfortably and securely."
  ),

  array(
    "img"     =>  "step-img-3",
    "title"    =>  "Your New Smile",
    "excerpt"  =>  "After completing the treatment, which can take a few weeks, you will attend a follow-up appointment to check your teeth have been successfully lightened."
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* OFFERS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$offers_heading        =   "Tooth Whitening Special Offers";
$offers_lead           =   "<h4>Professional whitening treatment is a superior alternative to kits bought over the counter because the mouth trays are designed to be a perfect fit, which allows the active gel to work more effectively. The bleaching agent is also stronger and offers enhanced lightening power.</h4>";

$offers_bullets = array(

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
/* FAQ VARIABLES */
/*-----------------------------------------------------------------------------------*/

$questions = array(

  array(
    "heading"     =>  "How does teeth whitening work?",
    "description" =>  "Professional teeth whitening is a simple and safe treatment to lighten the colour of your smile. The active ingredient in the whitening gel, hydrogen peroxide or carbamide peroxide, allows oxygen to enter your tooth enamel, breaking down stains and bleaching your teeth. Teeth whitening can lighten your discoloured and stained teeth by several shades."
  ),

  array(
    "heading"     =>  "Can teeth whitening damage teeth?",
    "description" =>  "Teeth whitening will not damage your tooth enamel. It is a very safe treatment when overseen by an experienced dental professional. Occasionally, your teeth may feel sensitive, but this can be addressed by your clinician and will subside quickly."
  ),

  array(
    "heading"     =>  "Will teeth whitening remove stains?",
    "description" =>  "Yes, tooth bleaching is highly effective at removing stains and discolouration, giving you a beautifully brighter, lighter smile. However, severe intrinsic staining may require additional home whitening."
  ),

  array(
    "heading"     =>  "How long does teeth whitening take to work?",
    "description" =>  "The teeth whitening process can vary between patients depending on how many shades lighter we are trying to achieve. It can take from a single visit for in-surgery whitening to several weeks for at-home teeth whitening."
  ),

  array(
    "heading"     =>  "How long does teeth whitening last?",
    "description" =>  "Tooth whitening is not permanent, and the white shade will fade over time. If you can limit the amount of tea, coffee, red wine, and smoking, then it can take years for your teeth to go back to the original shade. "
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* FINANCE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$finance_heading        =   "Finance Available";
$finance_lead           =   "<h4>We know tooth whitening can be expensive, so we are pleased to offer ways to spread the cost and make it more affordable, including 0% interest payments.</h4>";


/*-----------------------------------------------------------------------------------*/
/* WHY VARIABLES */
/*-----------------------------------------------------------------------------------*/

$why_heading        =   "Why Choose Us?";
$why_lead           =   "<h4>At [name of practice], we believe our patients are the most important part of our story. Every aspect of our approach and the care we provide focuses on you, and we are passionate about creating the best experience for all. We offer a wide range of treatments to look after your oral health, restore your smile and boost your confidence.</h4>";

$why_bullets = array(

  array(
    "item"    =>  "Spread the cost of your whitening treatment with our 0% monthly finance options",
  ),

  array(
    "item"    =>  "Using the latest technology available",
  ),

  array(
    "item"    =>  "Experienced Team",
  ),

  array(
    "item"    =>  "We are fully qualified to administer teeth whitening and use high quality products",
  ),

  array(
    "item"    =>  "Teeth can appear whiter after just one visit and will be finished usually within a few weeks",
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
/* PROFILE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$profile_heading   =   "Meet Our Dentist[s]";

$profiles = array(

  array(
    "img"       =>  "profile",
    "name"      =>  "Dr Jane Doe",
    "quals"     =>  "Associate Dentist BDS (Hons)",
    "gdc"       =>  "83549",
    "intro"     =>  "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum enim mauris, vel mattis dui vestibulum ut.</p>",
    "excerpt"   =>  "<p>Lorem ipsum dolor sit amet, sdcvdascsdc adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</p>",
    "more"      =>  "<p>Curabitur vel diam ut ligula vehicula fermentum nec eu enim. Suspendisse molestie nibh hendrerit, egestas arcu a, aliquam felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam a tempor tortor. Suspendisse congue venenatis erat.</p>"
  ),

  array(
    "img"       =>  "profile",
    "name"      =>  "Dr John Smith",
    "quals"     =>  "Associate Dentist BDS (Hons)",
    "gdc"       =>  "83549",
    "intro"     =>  "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rutrum enim mauris, vel mattis dui vestibulum ut.</p>",
    "excerpt"   =>  "<p>Lorem ipsum dolor sit amet, sdcvdascsdc adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</p>",
    "more"      =>  "<p>Curabitur vel diam ut ligula vehicula fermentum nec eu enim. Suspendisse molestie nibh hendrerit, egestas arcu a, aliquam felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam a tempor tortor. Suspendisse congue venenatis erat.</p>"
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