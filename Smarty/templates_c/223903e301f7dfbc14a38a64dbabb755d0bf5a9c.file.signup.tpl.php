<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 03:41:19
         compiled from "/Users/gworks/Sites-Folder/CPI_dev_at-first_net/web_service/templates/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117965805152ddec5fa8aba2-87923163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '223903e301f7dfbc14a38a64dbabb755d0bf5a9c' => 
    array (
      0 => '/Users/gworks/Sites-Folder/CPI_dev_at-first_net/web_service/templates/signup.tpl',
      1 => 1390174022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117965805152ddec5fa8aba2-87923163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'idsid' => 0,
    'err' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52ddec5fb601f2_22757917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ddec5fb601f2_22757917')) {function content_52ddec5fb601f2_22757917($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<h1>ログイン</h1>
<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
<?php echo $_smarty_tpl->tpl_vars['idsid']->value;?>
" method="post">
	<p>お名前：<input type="text" name="name" value=""><?php echo $_smarty_tpl->tpl_vars['err']->value['name'];?>
</p>
	<p>メールアドレス：<input type="text" name="email" value=""><?php echo $_smarty_tpl->tpl_vars['err']->value['email'];?>
</p>
	<p>パスワード：<input type="password" name="password" value=""><?php echo $_smarty_tpl->tpl_vars['err']->value['password'];?>
</p>
	<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
	<p><input type="submit" value="新規登録"> <a href="index.php">戻る</a></p>
</form>
<?php echo $_SERVER['SCRIPT_NAME'];?>
<?php echo $_smarty_tpl->tpl_vars['idsid']->value;?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
