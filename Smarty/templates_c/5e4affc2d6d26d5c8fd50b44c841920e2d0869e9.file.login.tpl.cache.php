<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 08:01:31
         compiled from "/Users/gworks/Sites-Folder/CPI_dev_at-first_net/web_service/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195929918152d7fe949e9b23-15012901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e4affc2d6d26d5c8fd50b44c841920e2d0869e9' => 
    array (
      0 => '/Users/gworks/Sites-Folder/CPI_dev_at-first_net/web_service/templates/login.tpl',
      1 => 1390291282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195929918152d7fe949e9b23-15012901',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d7fe94a7e527_62933828',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7fe94a7e527_62933828')) {function content_52d7fe94a7e527_62933828($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>


<h1>ログイン</h1>
<form action="" method="post">
	<p>メールアドレス：<input type="text" name="email" value=""></p>
	<p>パスワード ：<input type="password" name="password" value=""></p>
	<p><input type="submit" value="ログイン"> <a href="signup2.php">新規登録はこちら！</a></p>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
