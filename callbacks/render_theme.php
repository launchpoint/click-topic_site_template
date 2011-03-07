<?


function sort_by_order($a, $b) {

  if ($a->order == $b->order) {
    return 0;
  }
  return ($a->order < $b->order) ? -1 : 1;
}

$menu_items = $domain_settings->menu_items;
$top_menu_items = array();
$bottom_menu_items = array();

foreach($menu_items as $menu) {
  if ($menu->location == 'top') {
    $top_menu_items[] = $menu;
  } else {
    $bottom_menu_items[] = $menu;
  }
}

usort ($top_menu_items, 'sort_by_order');
usort ($bottom_menu_items, 'sort_by_order');