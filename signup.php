<?php
//require_once('config.php');
//require_once('functions.php');
require('setup.php');

session_start();


function emailExists($email, $dbh){
	$sql = "select * from users where email = :email limit 1";
	$stmt = $dbh->prepare($sql);
	$stmt->execute(array(":email" => $email));
	$user = $stmt->fetch();
	return $user ? true : false;
}

if($_SERVER['REQUEST_METHOD'] != 'POST'){
	// CSRF対策
	setToken();
} else {
	checkToken();

	$name = h($_POST['mame']);
	$email = h($_POST['email']);
	$password = h($_POST['password']);

	$dbh = connectDB();
	$err = array();

	//名前が空？
	if($name == ''){
		$err['name'] = 'お名前を入力してください。';
	}
	//メールアドレスが正しい?
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$err['email'] = 'メールアドレスの形式が正しくないです。';
	}
	if(emailExists($email, $dbh)){
		$err['email'] = 'このメールアドレスは既に登録されています。';
	}

	//メールアドレスが空
	if($email == ''){
		$err['email'] = 'メールアドレスを入力してください。';
	}
	//Passwordが空
	if($password == ''){
		$err['password'] = 'パスワードを入力してください。';
	}

	if(empty($err)){
		//登録処理
	}
}


$smarty = new Smarty_webService();
$smarty->caching = 0; //キャッシュを無効化
$smarty->assign('token',h($_SESSION['token']));

	if(!isset($id)){$id = 0;}
	$idsid = "?id=".$id.h(SID);
	$smarty->assign('idsid', $idsid);

$smarty->assign('err', $err);

$smarty->display('signup.tpl');

