<section class="column column--bg-one">
  <div class="column__inner">
    <div class="column__content">
      <h2><?php echo $fees_heading ?></h2>
      <?php if ($fees_lead) { ?>
      <?php echo $fees_lead ?>
      <?php } ?>
      <?php if ($fees_table) { ?>
      <table>
        <tbody>
        <?php foreach($fees_table as $row) { ?>
          <tr>
            <th><?php echo $row['heading'] ?></th>
            <td><?php echo $row['description'] ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } ?>
    </div>
    <div class="column__footer">
      <button class="button" data-dialog="dialogContact" type="button"><?php echo $button_cta ?></button>
    </div>
  </div>
</section>