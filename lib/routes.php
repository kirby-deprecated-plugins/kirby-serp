<?php
if(site()->user() && c::get('plugin.serp.active', true) ) {
  kirby()->routes(array(
    array(
      'pattern' => [c::get('plugin.serp.url', 'serp'), c::get('plugin.serp.url', 'serp') . '/(:any)', c::get('plugin.serp.url', 'serp') . '/(:any)/(:any)'],
      'action'  => function($uid = null, $sub = null) {
        require_once __DIR__ . DS . 'core.php';
        require_once __DIR__ . DS . 'registry.php';

        $tab = (isset($uid)) ? $uid : 'none';
        $tab .= (isset($sub)) ? '/' . $sub : '';

        $prefix = c::get('plugin.serp.prefix', 'serp');
        
        snippet($prefix . '-header');
        snippet($prefix . '-body', ['filter' => $tab]);
        snippet($prefix . '-footer');
      }
    )
  ));
}