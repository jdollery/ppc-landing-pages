<section class="column">
  <div class="column__inner">
      <div class="column__heading">
        <h2>Frequently Asked Questions</h2>
      </div>

      <ul class="accordion">

        <?php foreach($questions as $question) { ?>
        <li class="accordion__item" id="dropItem">
          <dt class="accordion__term" >
            <h4><?php echo $question['heading'] ?></h4>
            <span class="icon icon--arrow"><svg role="img"><use xlink:href="#arrow" href="#arrow"></use></svg></span>
          </dt>
          <dd class="accordion__description" id="dropDesc">
          <span><?php echo $question['description'] ?></span>
          </dd>
        </li>
        <?php } ?>

      </ul>

      <div class="column__footer">
        <button class="button" data-dialog="dialogContact" type="button"><?php echo $button_cta ?></button>
      </div>

  </div>
</section>