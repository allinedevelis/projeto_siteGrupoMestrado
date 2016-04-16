<?php
class My_Walker_Nav_Menu_offCanvas extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth, $args = array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class='menu vertical'>\n";
  }
}

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth, $args = array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class='menu vertical medium-text-left'>\n";
  }
}
?>