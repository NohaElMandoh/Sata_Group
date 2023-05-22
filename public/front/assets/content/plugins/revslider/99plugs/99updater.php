<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

define('P99_4564', 'Slider Revolution Responsive WordPress Plugin');

if (class_exists('Plugs99_Plugin_Updater') && function_exists('p99_fetchkey')) {
  function p99_update_4564() {
    $doing_cron = defined('DOING_CRON') && DOING_CRON;
    if (!current_user_can('manage_options') && !$doing_cron) {
      return;
    }
    $key_99 = p99_fetchkey(P99_4564);
    
    $edd_updater = new Plugs99_Plugin_Updater('https://99plugs.com/', PMAIN_4564, array(
      'version' => "6.5.15",
      'license' => $key_99,
      'item_id' => "4564",
      'author' => "ThemePunch",
      'url' => home_url()
    ));
  }
  add_action('init', 'p99_update_4564');
}

function p99_filter_4564($transient) {
  if (isset($transient) && is_object($transient)) {
    if (isset($transient->response[plugin_basename(PMAIN_4564)])) {
      if (strpos($transient->response[plugin_basename(PMAIN_4564)]->package, '99plugs') !== false) {
      } else {
        unset($transient->response[plugin_basename(PMAIN_4564)]);
      }
    }
  }
  return $transient;
}
add_filter('pre_set_site_transient_update_plugins', 'p99_filter_4564');
add_filter('pre_site_transient_update_plugins', 'p99_filter_4564');
add_filter('site_transient_update_plugins', 'p99_filter_4564');

add_filter('http_request_args', function ($r, $url) {
  if (0 === strpos($url, 'https://api.wordpress.org/plugins/update-check/1.1/')) {
    $plugins = json_decode($r['body']['plugins'], true);
    if (array_key_exists(plugin_basename(PMAIN_4564), $plugins['plugins'])) {
      unset($plugins['plugins'][plugin_basename(PMAIN_4564)]);
    }
    $r['body']['plugins'] = json_encode($plugins);
  }
  return $r;
}, PHP_INT_MAX, 3);

if (!function_exists('p99_dupechk')) {
  function p99_dupechk($needle, $haystack, $strict = false) {
    if(is_array($haystack)) {
      foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle)
        || (is_array($item) && p99_dupechk($needle, $item, $strict))) {
          return true;
        }
      }
    }
    return false;
  }
}
function p99_updmgr_4564() {
  $current_keys = get_option('apikeys');
  $unser_keys = maybe_unserialize($current_keys);
  $new_keys = array();

  if (!p99_dupechk(P99_4564, $unser_keys)) {
    $new_keys['keyname'] = stripslashes(strip_tags(P99_4564));
    $new_keys['keyvalue'] = '';
    $new_keys['keystatus'] = '';
    $unser_keys[] = $new_keys;
  }
  if (!empty($new_keys) && $new_keys != $unser_keys) {
    update_option('apikeys', $unser_keys);
  }
}
register_activation_hook(PMAIN_4564, 'p99_updmgr_4564');
