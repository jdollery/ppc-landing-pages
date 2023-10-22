<?php

/*-----------------------------------------------------------------------------------*/
/* BASE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$base_url           =   "https://dev.dental-design-clients.co.uk/dental-design/ppc/new-patients/"; //If using webhook add to script too

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

$form_heading       =     "Book your consultation with our friendly team today";
$form_button        =     "Send Consultation Request";
$privacy_policy     =     "https://dental-design.marketing/website-privacy-policy";
$securedent_id      =     "XXXXXXXXXX"; //Leave empty if Dengro
$dengro_hook        =     ""; //Leave empty if Securedent


/*-----------------------------------------------------------------------------------*/
/* HERO VARIABLES */
/*-----------------------------------------------------------------------------------*/

$hero_heading       =     "Looking for a new dentist in [town/city]?";
$hero_lead          =     "";
$hero_logo          =     "";
$hero_alt           =     "";

$hero_offers = array(

  // array(
  //   "img"     =>  "smile-icon.svg",
  //   "title"    =>  "Straight Teeth<br>in 4+ Months",
  // ),

  // array(
  //   "img"     =>  "whitening-icon.svg",
  //   "title"    =>  "FREE Whitening<br>and 3D Scans",
  // ),

  // array(
  //   "img"     =>  "finance-icon.svg",
  //   "title"    =>  "0% Interest<br>Monthly Finance",
  // ),
  
);


/*-----------------------------------------------------------------------------------*/
/* OFFERS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$offers_heading      =    "Same Day/New Patient Appointments Available";
$offers_lead         =    "";

$offers_bullets = array(

  array(
    "item"    =>  "New patient consultation - £[XX] includes X-rays, full mouth and gum check and cancer screening",
  ),

  array(
    "item"    =>  "No registration fees",
  ),

  array(
    "item"    =>  "No waiting lists",
  ),

  array(
    "item"    =>  "Interest-free payment plans available",
  )
  
);


/*-----------------------------------------------------------------------------------*/
/* EMERGENCY VARIABLES */
/*-----------------------------------------------------------------------------------*/

$emergency_heading        =   "Emergency Treatments";
$emergency_lead           =   "<h4>We don&rsquo;t like to think of people in dental pain, and we will always try to offer emergency dental appointments where possible.</h4>";


/*-----------------------------------------------------------------------------------*/
/* FINANCE VARIABLES */
/*-----------------------------------------------------------------------------------*/

$finance_heading        =   "Finance Information";
$finance_lead           =   "<h4>Our dental treatment charges vary depending on the care that you need. We can offer interest-free payments, which can help you spread the costs of any advanced dental treatment you may wish to have.</h4>";


/*-----------------------------------------------------------------------------------*/
/* TREATMENTS VARIABLES */
/*-----------------------------------------------------------------------------------*/

$treatments_heading        =   "Types Of Treatment Available";
$treatments_lead           =   "<h4>If you need a dentist in [town/city], we can help. Our [dental clinic] near [town/city] has a team of experienced and friendly dental professionals. They will make you feel at home from the moment you step through the door. There are no waiting lists, and patients can come and go. All dentistry, from check-ups to full smile makeovers, is available under one super-friendly roof!</h4>
                                <h4>We offer a warm welcome to patients not registered with us, and there are no registration fees to join our practice.</h4>";

$treatments = array(

  array(
    "img"     =>  "treatment-img-1",
    "title"    =>  "Family/General Dentistry",
    "excerpt"  =>  ""
  ),

  array(
    "img"     =>  "treatment-img-2",
    "title"    =>  "Cosmetic Dentistry",
    "excerpt"  =>  ""
  ),

  array(
    "img"     =>  "treatment-img-3",
    "title"    =>  "Emergency Dentist",
    "excerpt"  =>  ""
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* CTA VARIABLES */
/*-----------------------------------------------------------------------------------*/

$cta_heading        =   "If you need an exceptional dentist in [town/city], contact us as soon as possible to book your appointment.";


/*-----------------------------------------------------------------------------------*/
/* FAQ VARIABLES */
/*-----------------------------------------------------------------------------------*/

$questions = array(

  array(
    "heading"     =>  "What should I expect at my first dentist appointment?",
    "description" =>  "We will ask about your general health, how your teeth have been since your last visit to a dentist, and if you are taking any medication. On your first visit to our dental practice in [town/city], we conduct an extensive oral health examination. We will also carry out any necessary treatments, tests, or x-rays if we feel they are required."
  ),

  array(
    "heading"     =>  "What do I need to do if I have a dental emergency?",
    "description" =>  "Get in contact with us as soon as possible. We will be able to give you advice until you are able to be seen by the emergency dentist. In most cases, your emergency appointment will be booked for the same day."
  ),

  array(
    "heading"     =>  "Do I need to be a registered patient to get a dentist appointment?",
    "description" =>  "We are offering you a chance to register with us without any registration fees. There are no hidden costs. We also have payment plans if you require more extensive dental work following your initial consultation."
  ),
  
);


/*-----------------------------------------------------------------------------------*/
/* WHY VARIABLES */
/*-----------------------------------------------------------------------------------*/

$why_heading        =   "Why Choose Us?";
$why_lead           =   "<h4>Looking after our patients&rsquo; smiles is important to us, but so is getting to know your wants, needs and expectations. We pride ourselves on putting our patients first, helping you make the right decisions for both your oral and general health.</h4>
                        <h4>We create a relaxed and friendly atmosphere, helping all our patients feel at ease from the moment they walk through the door. We delight in going the extra mile, always aiming to work around you to provide the best possible service.</h4>
                        <h4>Our aim is to give everyone a healthy smile they can be proud of. It&rsquo;s part of what makes you remarkable.</h4>";

$why_bullets = array(

  // array(
  //   "item"    =>  "Aliquam vitae mi eu leo rutrum rhoncus non ac eros.",
  // ),

  // array(
  //   "item"    =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
  // ),

  // array(
  //   "item"    =>  "Curabitur vel diam ut ligula vehicula fermentum nec eu enim.",
  // ),
  
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