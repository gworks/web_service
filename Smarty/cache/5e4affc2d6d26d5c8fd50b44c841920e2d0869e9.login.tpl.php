<?php /*%%SmartyHeaderCode:195929918152d7fe949e9b23-15012901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e4affc2d6d26d5c8fd50b44c841920e2d0869e9' => 
    array (
      0 => '/Users/gworks/Sites-Folder/CPI_dev_at-first_net/web_service/templates/login.tpl',
      1 => 1389879597,
      2 => 'file',
    ),
    '874b5f0f208fd16d62d8b9db940c45c4cda8e8cf' => 
    array (
      0 => '/Users/gworks/Sites-Folder/CPI_dev_at-first_net/web_service/templates/header.tpl',
      1 => 1389798218,
      2 => 'file',
    ),
    'a965c064e69b45a04088ffdafb9159c6ce161a61' => 
    array (
      0 => '/Users/gworks/Sites-Folder/CPI_dev_at-first_net/web_service/templates/footer.tpl',
      1 => 1389797871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195929918152d7fe949e9b23-15012901',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d7fe94a8fce8_56464979',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7fe94a8fce8_56464979')) {function content_52d7fe94a8fce8_56464979($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>foo</title>
</head>
<body>


<h1>ログイン</h1>
<form action="" method="post">
	<p>メールアドレス：<input type="text" name="email" value=""></p>
	<p>パスワード：<input type="password" name="password" value=""></p>
	<p><input type="submit" value="ログイン"> <a href="signup.php">新規登録はこちら！</a></p>
</form>

</body>
</html>

<?php }} ?>
