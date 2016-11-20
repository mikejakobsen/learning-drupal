<article id="interview-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
  <div class="interview-inner">
    <header>
        <?php if (!$page): ?>
      <h2 class=""<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>

      <?php print $user_picture; ?>

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
  </div> <!-- /interview-inner -->
</article> <!-- /interview-->

<?php print render($content['comments']); ?>
