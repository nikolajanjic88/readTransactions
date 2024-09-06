<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

require_once APP_PATH . 'App.php';
require_once APP_PATH . 'format.php';

$files = getFiles(FILES_PATH);

$transactions = [];

foreach($files as $file)
{
  $transactions = array_merge($transactions, getTransactions($file));
}

$totals = calculateTotals($transactions);

require VIEWS_PATH . 'index.view.php';