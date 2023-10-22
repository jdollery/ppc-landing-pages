<section class="hero">

  <div class="hero__media">

    <picture>

      <source type="image/webp" media="(min-width: 576px)" srcset="<?php echo convert_img('./img/hero.jpg','./img/hero.webp', 100); ?>">
      <source type="image/jpg" media="(min-width: 576px)" srcset="./img/hero.jpg">

      <source type="image/webp" media="(max-width: 575px)" srcset="<?php echo convert_img('./img/hero-sm.jpg','./img/hero-sm.webp', 100); ?>">
      <source type="image/jpg" media="(max-width: 575px)" srcset="./img/hero-sm.jpg">

      <img src="./img/hero.jpg" alt="<?php echo $hero_heading ?>" width="1920" height="1080" decoding="async">

    </picture>

  </div>

  <div class="hero__content">
    <div class="hero__inner">
      <div class="hero__strap">
        <?php if($current_page == 'home'){ ?>
        <?php if($hero_logo){ ?>
        <img class="hero__logo" src="./img/<?php echo $hero_logo ?>" alt="<?php echo $hero_alt ?>" width="300" height="78">
        <?php } ?>
        <h1><?php echo $hero_heading ?></h1>
        <?php } elseif($current_page == 'sorry'){ ?>
        <h1>Sorry</h1>
        <?php } elseif($current_page == 'thanks'){ ?>
        <h1>Thank you</h1>
        <?php } ?>
      </div>
      <?php if($current_page == 'home'){ ?>

        <?php if($hero_lead){ ?>
        <div class="hero__offers">
          <div class="hero__message">
            <h3 class="hero__lead"><?php echo $hero_lead ?></h3>
          </div>
        </div>
        <?php } elseif ($hero_offers) { ?>
        <div class="hero__offers">
          <ul class="hero__list hero--center">
            
            <?php foreach($hero_offers as $offer) { ?>
            <li class="hero__cell">
              <picture class="hero__icon hero__icon--white">
                <img src="./img/<?php echo $offer['img'] ?>" alt="<?php echo $offer['title'] ?>" width="65" height="65">
              </picture>
              <span class="hero__body"><h3 class="hero__title"><?php echo $offer['title'] ?></h3></span>
            </li>
            <?php } ?>

          </ul>
        </div>
        <?php } ?>

      <?php } elseif($current_page == 'sorry'){ ?>
        <div class="hero__offers">
          <div class="hero__message">
            <h3>Sorry, there seems to of been an issue sending your message.</h3>
            <p>Please try again, or alternatively call us on <?php echo $phone_number ?>. You can also email us at <a href="mailto:<?php echo $email_address ?>"><?php echo $email_address ?></a>.</p>
          </div>
        </div>
      <?php } elseif($current_page == 'thanks'){ ?>
        <div class="hero__offers">
          <div class="hero__message">
            <h3>Thank you for your enquiry, a member of our team will be in touch.</h3>
          </div>
        </div>
      <?php } ?>

      </div>
    </div>
  </div>
</section>