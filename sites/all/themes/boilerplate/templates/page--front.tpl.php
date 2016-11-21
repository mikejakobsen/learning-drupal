<div class="container" id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<!-- ______________________ HEADER _______________________ -->
  <header id="header">
    <?php if ($logo): ?>
      <div id="header-logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img class="logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
        </a>
      </div>
    <?php endif; ?>
    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h2 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </h2>
          <?php endif; ?>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($page['header']): ?>
      <div id="header-region">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>
  </header> <!-- /header -->

<!-- ______________________ Nav _______________________ -->
   <?php if ($main_menu || $secondary_menu || $page['navbar']): ?>
        <nav id="navigation" class="menu <?php !empty($main_menu) ? print "with-primary" : ''; !empty($secondary_menu) ? print " with-secondary" : ''; ?>">
          <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
          <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
          <?php if ($page['navbar']): ?>
            <div id="navbar" class="clear">
              <?php print render($page['navbar']); ?>
            </div>
          <?php endif; ?>
        </nav>
    <?php endif; ?>

<!-- ______________________ Content _______________________ -->
  <div id="main" class="clearfix" role="main">
    <div class="frontpage">
	  <div class="frontpage-inner">
		<div class="frontpage-content">
		  <?php print render($page["content"]["system_main"]["nodes"][36]["body"]["#object"]->body["und"][0]["safe_value"]); ?>
			<div id="content-area">
				<?php print render($page['content']["system_main"]["nodes"][36]["field_image"]); ?>
			</div>
		</div>
	  </div>
	</div> <!-- /frontpage-inner /content -->

  <!-- ______________________ FOOTER _______________________ -->
    <?php if ($page['footer']): ?>
      <div class="row">
        <footer id="footer">
          <?php print render($page['footer']); ?>
          <?php dpm(get_defined_vars()); ?>
        </footer> <!-- /footer -->
      </div>
    <?php endif; ?>
  </div> <!-- /main -->
</div> <!-- /page -->
