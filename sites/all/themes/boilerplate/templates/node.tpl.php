<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
  <div class="node-inner">
    <header>
        <?php if (!$page): ?>
      <h2 class=""<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>

      <?php if ($user_picture): ?>
        <div class="user-image">
          <?php print $user_picture; ?>
        </div>
      <?php endif; ?>

      <?php if ($name): ?>
        <div class="user-name">
          <?php print $name; ?>
        </div>
      <?php endif; ?>

      <?php if ($display_submitted): ?>
        <div class="date-item">
          <span class="date-item-month"><?php print $submitted_month; ?></span>
          <span class="date-item-day"><?php print $submitted_day; ?></span>
          <span class="date-item-year"><?php print $submitted_year; ?></span>
        </div>
      <?php endif; ?>
    </header>
    <div class="content">
<?php
// We hide the comments and links now so that we can render them later.
hide($content['comments']);
hide($content['links']);
print render($content);
?>
    </div>
    <?php if (!empty($content['links']['terms']) || !empty($content['links'])): ?>
      <footer>
      <?php if (!empty($content['links']['terms'])): ?>
        <div class="terms"><?php print render($content['links']['terms']); ?></div>
      <?php endif;?>

      <?php if (!empty($content['links'])): ?>
        <div class="links"><?php print render($content['links']); ?></div>
      <?php endif; ?>
      </footer>
    <?php endif; ?>
  </div> <!-- /node-inner -->
</article> <!-- /node-->

<?php print render($content['comments']); ?>
