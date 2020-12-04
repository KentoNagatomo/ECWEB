<?php
// http://localhost/DT/ECweb/admin/admin.php
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

if(empty($_POST) !== true){
  $dataArr = [
    'staff_id' => $_POST['staff_id'],
    'staff_pass' => $_POST['staff_pass'],
    'errmsg' => 'スタッフIDもしくはパスワードが異なります。'
  ];
} else {
    $dataArr = [
      'staff_id' => '',
      'staff_pass' => '',
      'errmsg' => ''
    ];
}

$dataArr['loginflg'] = false;
$dataArr['loginflg'] = $admin_login->checklogin($dataArr);


if($dataArr['loginflg'] === true){
  $admin_login->setLoginflg($dataArr['staff_id']);
  $template = 'admin_top.html.twig';
} else {
  $template = 'admin.html.twig';
}

$context = [];
$context['dataArr'] = $dataArr;
$template = $twig->loadTemplate($template);
$template->display($context);