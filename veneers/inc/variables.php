<?php

/*-----------------------------------------------------------------------------------*/
/* BASE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$base_url           =   "https://dev.dental-design-clients.co.uk/dental-design/ppc/veneers/"; //If using webhook add to script too

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

$hero_heading     =     "Craft your Smile with Dental Veneers";
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
/* STEPS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$steps_heading        =   "Transform Your Smile With These Steps";
$steps_lead           =   "";

$steps = array(

  array(
    "img"     =>  "step-img-1",
    "title"    =>  "Personal Smile Assessment",
    "excerpt"  =>  "Ensure your smile ends up looking its best, boost self-confidence and create a fresher-looking mouth with dental veneers."
  ),

  array(
    "img"     =>  "step-img-2",
    "title"    =>  "Dental Veneers",
    "excerpt"  =>  "We use veneers to create an impressive and highly effective smile makeover. Your veneers are crafted at the dental laboratory using the models of your teeth."
  ),

  array(
    "img"     =>  "step-img-3",
    "title"    =>  "Smile with Confidence",
    "excerpt"  =>  "When we receive your veneers, we&rsquo;ll see you again for your fitting. We make sure the look isexactly what you expected before we fix the veneers using a dental adhesive."
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* OFFERS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$offers_heading        =   "Limited Special Offer";
$offers_lead           =   "";

$offers_bullets = array(

  array(
    "item"    =>  "£500 OFF your treatment",
  ),

  array(
    "item"    =>  "FREE initial consultation",
  ),

  array(
    "item"    =>  "Direct appointments with our hygienist &ndash; no need for referral",
  ),

  array(
    "item"    =>  "OPG X-ray &amp; all visits included",
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
    "heading"     =>  "How do I look after my veneers?",
    "description" =>  "After fitting, it is important to keep your veneer well-maintained with regular brushing and flossing. Your dentist and hygienist will show you how to keep on top of your dental hygiene and keep a close eye on the health of your teeth and gums."
  ),

  array(
    "heading"     =>  "Can veneers break?",
    "description" =>  "Although veneers are resilient, it is important to treat them with care, so try not to bite your fingernails or chew pen tops or use your teeth to open anything. Also, it is probably best to steer clear of very hard foods that could cause damage to the veneer."
  ),

  array(
    "heading"     =>  "Are veneers permanent?",
    "description" =>  "In many cases, fitting porcelain veneers requires some of your natural tooth enamel to be removed. Therefore, they are an irreversible treatment, designed to be kept on your teeth permanently. Your veneers themselves can last up to 15 years before needing to be replaced, depending on how well you look after them."
  ),

  array(
    "heading"     =>  "Are veneers painful?",
    "description" =>  "You shouldn&rsquo;t find either the treatment for veneers or the veneers themselves painful. We use local anaesthetic to minimise your discomfort during the preparation and fitting process, and ensure you are relaxed and ready before beginning any treatment. Most patients experience no pain or discomfort at all. You may feel some sensitivity once your veneers have been fitted, but this will go after a few days."
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* FINANCE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$finance_heading        =   "Finance Available";
$finance_lead           =   "<h4>We aim to keep your teeth healthy for life, and with that in mind, we offer a few payment options. You can spread the cost of your dental treatment with 0% interest for some treatments subject to status. Please contact the practice for more information.</h4>";


/*-----------------------------------------------------------------------------------*/
/* WHY VARIABLES */
/*-----------------------------------------------------------------------------------*/

$why_heading        =   "Why Choose Us?";
$why_lead           =   "";

$why_bullets = array(

  array(
    "item"    =>  "A stunning smile transformation",
  ),

  array(
    "item"    =>  "Knowledgeable and experienced restorative experts",
  ),

  array(
    "item"    =>  "Cost-effective and modern restorations",
  ),

  array(
    "item"    =>  "Creating long-lasting beautiful smiles",
  ),

  array(
    "item"    =>  "Quick, non-invasive restorative treatment",
  ),

  array(
    "item"    =>  "State-of-the-art digital technology used",
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

$profile_heading   =   "Meet Our Cosmetic Dentist[s]";

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