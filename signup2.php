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

function setToken(){
	$token = sha1(uniqid(mt_rand(), true));
	$_SESSION['token'] = $token;
	var_dump($_SESSION['token']);
}

function checkToken(){
	if(empty($_SESSION['token']) || ($_SESSION['token'] != $_POST['token'])){
		echo "不正なPOSTが行われました。";
		var_dump($_SESSION['token']);
		var_dump($_POST['token']);
		exit; //いずれは404ページのように専用のメッセージを表示するようにする。エラーログのページも用意するか？
	}
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
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>{$title}</title>
</head>
<body>

<h1>ログイン</h1>
<form action="" method="post">
	<p>お名前：<input type="text" name="name" value=""><?php echo $err["name"]; ?></p>
	<p>メールアドレス：<input type="text" name="email" value=""><?php echo $err["email"]; ?></p>
	<p>パスワード：<input type="password" name="password" value=""><?php echo $err["password"]; ?></p>
	<input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
	<p><input type="submit" value="新規登録"> <a href="index.php">戻る</a></p>
</form>



