<?php

/*-----------------------------------------------------------------------------------*/
/* BASE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$base_url           =   "https://dev.dental-design-clients.co.uk/dental-design/ppc/emergency/"; //If using webhook add to script too

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
$securedent_id      =   ""; //Leave empty if Dengro
$dengro_hook        =   "XXXXXXXXXX"; //Leave empty if Securedent


/*-----------------------------------------------------------------------------------*/
/* HERO VARIABLES */
/*-----------------------------------------------------------------------------------*/

$hero_heading     =     "Book An Emergency Dentist Today";
$hero_lead        =     "Initial consultations starting from just £XX.XX";
$hero_logo        =     "";
$hero_alt         =     "";

$hero_offers = array(

  // array(
  //   "img"      =>  "smile-icon.svg",
  //   "title"    =>  "Straight Teeth<br>in 4+ Months",
  // ),

  // array(
  //   "img"      =>  "whitening-icon.svg",
  //   "title"    =>  "FREE Whitening<br>and 3D Scans",
  // ),

  // array(
  //   "img"      =>  "finance-icon.svg",
  //   "title"    =>  "0% Interest<br>Monthly Finance",
  // ),
  
);


/*-----------------------------------------------------------------------------------*/
/* FEES VARIABLES */
/*-----------------------------------------------------------------------------------*/

$fees_heading        =   "Treatment Fees";
$fees_lead           =   "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae mi eu leo rutrum rhoncus non ac eros. Suspendisse ac ipsum erat libero.</h4>";

$fees_table = array(

  array(
    "heading"     =>  "Emergency assessment",
    "description" =>  "From £60.00"
  ),

  array(
    "heading"     =>  "Emergency extractions",
    "description" =>  "From £180.00"
  ),

  array(
    "heading"     =>  "Emergency lost fillings",
    "description" =>  "From £120.00"
  ),

  array(
    "heading"     =>  "Emergency draining of tooth abscess",
    "description" =>  "From £150.00"
  ),

  array(
    "heading"     =>  "Emergency crown recement",
    "description" =>  "From £60.00"
  ),
  
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
/* CTA VARIABLES */
/*-----------------------------------------------------------------------------------*/

$cta_heading        =   "If you have a dental emergency, please contact us as soon as possible to book your appointment.";


/*-----------------------------------------------------------------------------------*/
/* FAQ VARIABLES */
/*-----------------------------------------------------------------------------------*/

$questions = array(

  array(
    "heading"     =>  "What is considered a dental emergency?",
    "description" =>  "If you are in severe pain and need urgent dental care, this is when to seek an emergency dental appointment. It could be caused by infection, injury, or trauma. You may be experiencing severe tooth ache, decay, broken, or knocked out teeth or a dental abscess."
  ),

  array(
    "heading"     =>  "What do I need to do if I have a dental emergency?",
    "description" =>  "Get in contact with us as soon as possible. We will be able to give you advice until you are able to be seen by the emergency dentist. In most cases, your emergency appointment will be booked for the same day."
  ),

  array(
    "heading"     =>  "Should I go to A&E for a dental emergency?",
    "description" =>  "There is usually no need for you to visit A&E for a dental emergency, as dentists are far better equipped to treat you in a dental practice than a doctor in a hospital. You may also waste time waiting in A&amp;E to find you can&rsquo;t be effectively treated. If you have a dental emergency, the best option is to contact your dental practice for advice."
  ),

  array(
    "heading"     =>  "Do I need to be a registered patient to get an emergency dental care appointment?",
    "description" =>  "No, you don&rsquo;t necessarily need to be registered with a specific dental practice to be treated as an emergency patient. Many practices offer emergency appointments, but earlier appointment times may be reserved for registered patients."
  ),

  array(
    "heading"     =>  "Can I visit a different dental practice to my regular one in an emergency?",
    "description" =>  "Yes, if you are in a different area or can&rsquo;t get to your regular dental practice, you are able to visit a different dentist. Many practices reserve several emergency appointments for existing or unregistered patients. Also, if you are unable to get an emergency appointment at your normal dentist, they may be able to advise you of another practice that could help."
  ),

  array(
    "heading"     =>  "How do I best avoid a dental emergency in the future?",
    "description" =>  "By their very nature, most dental emergencies cannot be avoided. However, if you maintain a good regular oral hygiene routine, your teeth and gums will be in the best condition and better able to avoid severe pain due to decay or abscess."
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