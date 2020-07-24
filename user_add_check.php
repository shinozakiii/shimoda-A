<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>入力内容チェック</title>
	</head>
	<body>
		<?php
			require_once '_h.php';

			session_cache_expire(30);// 有効期間30分
			session_start();

<<<<<<< HEAD
			$pro_name=$_POST['name'];
			$pro_name2=$_POST['name2'];
=======
			$pro_name=$_POST['name_user'];
			$pro_id=$_POST['student_id'];
			$pro_pass=$_POST['password'];
>>>>>>> aa
			

			if($pro_name=='')
			{
<<<<<<< HEAD
=======
				print '名前が入力されていません。<br />';
			}
			else
			{
				print '名前:';
				print  h($pro_name);
				print '<br />';
			}

			if($pro_id=='')
			{
>>>>>>> aa
				print '学籍番号が入力されていません。<br />';
			}
			else
			{
				print '学籍番号:';
<<<<<<< HEAD
				print  h($pro_name);
				print '<br />';
			}

			if($pro_name2=='')
			{
				print '名前が入力されていません。<br />';
			}
			else
			{
				print '名前:';
				print h($pro_name2);
=======
				print h($pro_id);
				print '<br />';
			}

			if($pro_pass=='')
			{
				print 'パスワードが入力されていません。<br />';
			}
			else
			{
				print 'パスワード:非表示';
>>>>>>> aa
				print '<br />';
			}

			

<<<<<<< HEAD
			if($pro_name=='' || $pro_name2=='')
=======
			if($pro_name=='' || $pro_id=='' || $pro_pass=='')
>>>>>>> aa
			{
				print '<form>';
				print '<input type="button" onclick="history.back()" value="戻る">';
				print '</form>';
			}
			else
			{
				print '上記の内容を追加します。<br />';
				print '<br />';

<<<<<<< HEAD
				$_SESSION['name'] = "$pro_name";
				$_SESSION['name2'] = "$pro_name2";
=======
				$_SESSION['name_user'] = "$pro_name";
				$_SESSION['student_id'] = "$pro_id";
				$_SESSION['password'] = "$pro_pass";

>>>>>>> aa
			

				print '<form method="post" action="user_add_done.php">';
				print '<input type="button" onclick="history.back()" value="戻る">';
				print '<input type="submit" value="登録">';
				print '</form>';

			}
		?>
	</body>
</html>
