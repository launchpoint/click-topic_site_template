  <style type="text/css">
  <?
  $ds = $domain_settings;
  ?>
  body .top .navigation { width: <?=$ds->site_width?>px; }
  body .middle { width: <?=$ds->site_width?>px; }
  body .mainArea {
    width: <?=$ds->site_width?>px;
    <? if($ds->site_border_left_size_px != 0): ?>
      border-width-left: <?=$ds->site_border_left_size_px?>px;
      border-left-color: #<?=$ds->site_border_left_color?>;
      border-left-style: solid;
    <? endif; ?>
    <? if($ds->site_border_right_size_px != 0): ?>
      border-width-right: <?=$ds->site_border_right_size_px?>px;
      border-right-color: #<?=$ds->site_border_right_color?>;
      border-right-style: solid;
    <? endif; ?>
    <? if($ds->site_border_top_size_px != 0): ?>
      border-width-top: <?=$ds->site_border_top_size_px?>px;
      border-top-color: #<?=$ds->site_border_top_color?>;
      border-top-style: solid;
    <? endif; ?>
    <? if($ds->site_border_bottom_size_px != 0): ?>
      border-width-bottom: <?=$ds->site_border_bottom_size_px?>px;
      border-bottom-color: #<?=$ds->site_border_bottom_color?>;
      border-bottom-style: solid;
    <? endif; ?>
  
  }
  body {
    text-align: <?=$ds->site_alignment?>;
    <? if($ds->sitebackgroundimage): ?>
      background-image: url('<?=$ds->sitebackgroundimage->vpath?>');
    <? endif; ?>
    background-color: #<?=$ds->site_background_color?>;
    font-family: <?=$ds->site_font_type?>;
    color: #<?=$ds->bodytext_color?>;
    font-size: <?=$ds->bodytext_size?>pt;
  }
  .banner {
    background-image: url('<?=$ds->headerimage->vpath?>');
    background-repeat: no-repeat;
    height: <?=$ds->header_height?>px;
  }
  body .top .top-menu-navigation {
    <? if($ds->topmenubackgroundimage): ?>
      background-image: url('<?=$ds->topmenubackgroundimage->vpath?>');
    <? endif; ?>
    background-color: #<?=$ds->top_menu_background_color?>;
    height: <?=$ds->top_menu_height?>px;
  }
  body .top .bottom-menu-navigation {
    <? if($ds->bottommenubackgroundimage): ?>
      background-image: url('<?=$ds->bottommenubackgroundimage->vpath?>');
    <? endif; ?>
    background-color: #<?=$ds->bottom_menu_background_color?>;
    height: <?=$ds->bottom_menu_height?>px;
  }
  table thead tr th {
    background-color: #<?=$ds->table_heading_background_color?>;
  }
  table thead tr td {
    background-color: #<?=$ds->table_heading_background_color?>;
  }
  table tr th
  {
    background-color: #<?=$ds->table_heading_background_color?>;
  }
  
  h1 {
    color: #<?=$ds->h1_color?>;
    font-size: <?=$ds->h1_size?>pt;
  }
  h2 {
    color: #<?=$ds->h2_color?>;
    font-size: <?=$ds->h2_size?>pt;
  }
  h3 {
    color: #<?=$ds->h3_color?>;
    font-size: <?=$ds->h3_size?>pt;
  }
  
  a {
    color: #<?=$ds->a_color?>;
    font-size: <?=$ds->a_size?>pt;
  }
  a:hover {
    color: #<?=$ds->a_hover_color?>;
    font-size: <?=$ds->a_hover_size?>pt;
  }
  .navigation {
    color: #<?=$ds->topmenu_color?>;
    font-size: <?=$ds->topmenu_size?>pt;
  }
  .navigation a {
    color: #<?=$ds->topmenulink_color?>;
    font-size: <?=$ds->topmenulink_size?>pt;
  }
  .navigation a:hover {
    color: #<?=$ds->topmenulink_hover_color?>;
    font-size: <?=$ds->topmenulink_hover_size?>pt;
  }
  .footer {
    background-color: #<?=$ds->footer_background_color?>;
    color: #<?=$ds->footertext_color?>;
    font-size: <?=$ds->footertext_size?>pt;
  }
  .footer a {
    color: #<?=$ds->footertextlink_color?>;
    font-size: <?=$ds->footertextlink_size?>pt;
  }
  .footer a:hover {
    color: #<?=$ds->footertextlink_hover_color?>;
    font-size: <?=$ds->footertextlink_hover_size?>pt;
  }
  .footer .copyright {
    color: #<?=$ds->footertextlink_color?>;
    font-size: <?=$ds->footertextlink_size?>pt;
  }
  .footer .links {
    color: #<?=$ds->bottommenu_color?>;
    font-size: <?=$ds->bottommenu_size?>pt;
  }
  .footer .links a {
    color: #<?=$ds->bottommenulink_color?>;
    font-size: <?=$ds->bottommenulink_size?>pt;
  }
  .footer .links a:hover {
    color: #<?=$ds->bottommenulink_hover_color?>;
    font-size: <?=$ds->bottommenulink_hover_size?>pt;
  }
</style>