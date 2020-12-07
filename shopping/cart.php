<?php
namespace ECweb\shopping;
session_start();

require_once dirname(__FILE__) . './../Bootstrap.class.php';

use ECweb\Bootstrap;
use ECweb\lib\PDODatabase;
use ECweb\lib\Cart;
use ECweb\lib\Login;

$db = new PDODatabase(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME, Bootstrap::DB_TYPE);

$cart = new Cart($db);
$login = new Login($db);

$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, [
  'cache' => Bootstrap::CACHE_DIR
]);

$login->check_Login_session();

// ログイン済ユーザかどうか分岐
if($_SESSION['login_flg'] === "1"){
  $template = 'cart.html.twig';
} else {
  $template = 'request_login.html.twig';
  $context = [];
  $context['session'] = $_SESSION;
  $template = $twig->loadTemplate($template);
  $template->display($context);
  exit();
}

$item_id = (isset($_GET['item_id']) === true && preg_match('/^\d+$/', $_GET['item_id']) === 1) ? $_GET['item_id'] : '';
$crt_id = (isset($_GET['crt_id']) === true && preg_match('/^\d+$/', $_GET['crt_id']) === 1) ? $_GET['crt_id'] : '';

$customer_no = $_SESSION['customer_no'];

if($item_id !== ''){
  $res = $cart->insCartData($customer_no, $item_id);
  if($res === false){
    echo "商品カート登録に失敗しました。";
    exit();
  }
}

if($crt_id !== ''){
  $res = $cart->delCartData($crt_id);
}

$dataArr = $cart->getCartData($customer_no);
list($sumNum, $sumPrice) = $cart->getTotalItemAndSumPrice($customer_no);


$context = [];
$context['sumNum'] = $sumNum;
$context['sumPrice'] = $sumPrice;
$context['dataArr'] = $dataArr;
$context['session'] = $_SESSION;

$template = $twig->loadTemplate($template);
$template->display($context);