<?php
namespace ECweb\admin;

require_once dirname(__FILE__) . './../Bootstrap.class.php';

use ECweb\lib\PDODatabase;
use ECweb\lib\Admin;
use ECweb\Bootstrap;

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader,[
  'cache' => Bootstrap::CACHE_DIR
]);
$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);

$admin_login = new Admin($db);



// $admin_login->unsetLoginflg($dataArr['staff_id']);

// if($_POST['logout'] === true){
//   header('Location:' . Bootstrap::ENTRY_URL_ADMIN . 'admin_login.php');
//   exit();
// }
echo 'ログアウト画面';