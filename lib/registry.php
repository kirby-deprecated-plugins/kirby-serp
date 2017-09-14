<?php
$path = __DIR__ . '/../snippets/';

kirby()->set('snippet', 'serp-header', $path . 'header.php');
kirby()->set('snippet', 'serp-hero', $path . 'hero.php');
kirby()->set('snippet', 'serp-body', $path . 'body.php');
kirby()->set('snippet', 'serp-item', $path . 'item.php');
kirby()->set('snippet', 'serp-items', $path . 'items.php');
kirby()->set('snippet', 'serp-footer', $path . 'footer.php');
kirby()->set('snippet', 'serp-pagination', $path . 'pagination.php');