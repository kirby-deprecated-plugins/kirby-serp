<?php
if(site()->user() && c::get('plugin.serp.active', true) ) {
  kirby()->routes(array(
    array(
      'pattern' => [c::get('plugin.serp.url', 'serp'), c::get('plugin.serp.url', 'serp') . '/(:any)'],
      'action'  => function($uid = null) {
        require_once __DIR__ . DS . 'core.php';
        require_once __DIR__ . DS . 'registry.php';

        $filter = (isset($uid)) ? $uid : 'none';
        $prefix = c::get('plugin.serp.prefix', 'serp');
        
        snippet($prefix . '-header');
        snippet($prefix . '-body', ['filter' => $filter]);
        snippet($prefix . '-footer');
      }
    )
  ));
}