<?php

/*-----------------------------------------------------------------------------------*/
/* BASE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$base_url           =   "https://dev.dental-design-clients.co.uk/dental-design/ppc/cosmetic-dentistry/"; //If using webhook add to script too

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
$dengro_hook        =   "";//Leave empty if Securedent


/*-----------------------------------------------------------------------------------*/
/* HERO VARIABLES */
/*-----------------------------------------------------------------------------------*/

$hero_heading     =     "Craft Your Smile With Cosmetic Dentistry";
$hero_lead        =     "";
$hero_logo        =     "";
$hero_alt         =     "";

$hero_offers = array(

  array(
    "img"      =>  "finance-icon.svg",
    "title"    =>  "0% Interest<br>Monthly<br>Finance",
  ),

  array(
    "img"      =>  "star-icon.svg",
    "title"    =>  "Over 180 <br>5* Google<br>Reviews",
  ),

  array(
    "img"      =>  "whitening-icon.svg",
    "title"    =>  "Save £100<br>on Teeth<br>Whitening",
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* TREATMENTS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$treatments_heading        =   "Types Of Treatment Available";
$treatments_lead           =   "";

$treatments = array(

  array(
    "img"     =>  "treatment-img-1",
    "title"    =>  "Composite Bonding",
    "excerpt"  =>  "Transform your smile<br>from £200 per tooth"
  ),

  array(
    "img"     =>  "treatment-img-2",
    "title"    =>  "Teeth Whitening",
    "excerpt"  =>  "Normally £360,<br>now £260 (saving £100)"
  ),

  array(
    "img"     =>  "treatment-img-3",
    "title"    =>  "Facial Aesthetics",
    "excerpt"  =>  "Anti-wrinkle treatment<br>from £195"
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* OFFERS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$offers_heading        =   "Limited Special Offer";
$offers_lead           =   "<h4>FREE professional teeth whitening when you have cosmetic bonding treatment on more than four teeth.</h4>";

$offers_bullets = array(

  // array(
  //   "item"    =>  "£500 OFF Invisalign Treatment",
  // ),

  // array(
  //   "item"    =>  "FREE Initial Consultation",
  // ),

  // array(
  //   "item"    =>  "Complimentary Teeth Whitening",
  // ),

  // array(
  //   "item"    =>  "FREE Hygiene Treatment",
  // ),

  // array(
  //   "item"    =>  "OPG X-ray &amp; All Visits Included",
  // ),
  
);


/*-----------------------------------------------------------------------------------*/
/* STEPS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$steps_heading        =   "Transform your smile at [practice name / city]";
$steps_lead           =   "";

$steps = array(

  array(
    "img"     =>  "step-img-1",
    "title"    =>  "Personal Smile Assessment",
    "excerpt"  =>  "Ensure your smile ends up looking its best, boost self-confidence with cosmetic dentistry and facial aesthetics. "
  ),

  array(
    "img"     =>  "step-img-2",
    "title"    =>  "See How Your Smile Will Look",
    "excerpt"  =>  "Transformative treatments can include composite bonding, teeth whitening, white fillings, and facial aesthetics."
  ),

  array(
    "img"     =>  "step-img-3",
    "title"    =>  "Book Your Consultation Today",
    "excerpt"  =>  "You can treat yourself to an individual treatment or go the whole hog and combine several treatments for a total transformation."
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* FAQ VARIABLES */
/*-----------------------------------------------------------------------------------*/

$questions = array(

  array(
    "heading"     =>  "What common dental problems are suitable for cosmetic dentistry?",
    "description" =>  "Cosmetic dentistry is suitable to resolve a whole host of dental issues. These include lightening and whitening darker teeth, replacing teeth, filling gaps, repairing, straightening, and reshaping teeth."
  ),

  array(
    "heading"     =>  "What does cosmetic dentistry involve?",
    "description" =>  "Treatments usually placed under the cosmetic dentistry umbrella include teeth whitening, veneers, crowns, white fillings, cosmetic bonding, bridges, dental implants, orthodontics, and smile makeovers."
  ),

  array(
    "heading"     =>  "What are the benefits of cosmetic dental treatment?",
    "description" =>  "Cosmetic dentistry can transform lives. Patients can enjoy improved confidence and self-esteem, better oral health, and general well-being, improved facial appearance, comfort and speech."
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* FINANCE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$finance_heading        =   "Finance Available";
$finance_lead           =   "<h4>We know cosmetic dental treatment can seem expensive, so we are pleased to offer ways to spread the cost and make it more affordable, including 0% interest options. Please contact us for more information.</h4>";


/*-----------------------------------------------------------------------------------*/
/* WHY VARIABLES */
/*-----------------------------------------------------------------------------------*/

$why_heading        =   "Why Choose Us?";
$why_lead           =   "<h4>Benefits of cosmetic dentistry at [name of practice]</h4>";

$why_bullets = array(

  array(
    "item"    =>  "No case is too complex for our highly experienced team, all with over 15 years’ experience in cosmetic dentistry",
  ),

  array(
    "item"    =>  "Free consultation face to face or online",
  ),

  array(
    "item"    =>  "State-of-the-art digital technology used, including the iTero scanner",
  ),

  array(
    "item"    =>  "Award-winning practice",
  ),

  array(
    "item"    =>  "Knowledge of the best treatments available for your individual needs",
  ),

  array(
    "item"    =>  "Cost effective and modern restorations",
  ),
  
  array(
    "item"    =>  "Creating long-lasting beautiful smiles",
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

$profile_heading   =   "Meet our Cosmetic Dentist[s]<br>in [name of practice / city]";

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