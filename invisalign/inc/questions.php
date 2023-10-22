<section class="column column--bg-two">
  <div class="column__inner">
    <div class="column__content">
      <?php if ($questions_bullets) { ?>
      <ul class="tick-list tick-list--lg">
        <?php foreach($questions_bullets as $question) { ?>
        <li>
          <span class="icon icon--tick"><svg role="img"><use xlink:href="#tick" href="#tick"></use></svg></span>
          <?php echo $question['item'] ?>
        </li>
        <?php } ?>
      </ul>
      <?php } ?>
      <?php if ($questions_lead) { ?>
      <?php echo $questions_lead ?>
      <?php } ?>
    </div>
    <div class="column__footer">
      <button class="button" data-dialog="dialogContact" type="button"><?php echo $button_cta ?></button>
    </div>
  </div>
</section>