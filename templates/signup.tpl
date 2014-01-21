{include file="header.tpl" title=foo}

<h1>ログイン</h1>
<form action="{$smarty.server.SCRIPT_NAME}{$idsid}" method="post">
	<p>お名前：<input type="text" name="name" value="">{$err.name}</p>
	<p>メールアドレス：<input type="text" name="email" value="">{$err.email}</p>
	<p>パスワード：<input type="password" name="password" value="">{$err.password}</p>
	<input type="hidden" name="token" value="{$token}">
	<p><input type="submit" value="新規登録"> <a href="index.php">戻る</a></p>
</form>
{$smarty.server.SCRIPT_NAME}{$idsid}
{include file="footer.tpl"}
