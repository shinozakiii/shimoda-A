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

<<<<<<< HEAD:user_add_check.php
<<<<<<< HEAD
			$pro_name=$_POST['name'];
			$pro_name2=$_POST['name2'];
=======
			$pro_name=$_POST['name_user'];
			$pro_id=$_POST['student_id'];
			$pro_pass=$_POST['password'];
>>>>>>> aa
=======
			$pro_name=$_POST['name_user'];
			$pro_id=$_POST['student_id'];
			$pro_pass=$_POST['password'];
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/user_add_check.php
			

			if($pro_name=='')
			{
<<<<<<< HEAD:user_add_check.php
<<<<<<< HEAD
=======
=======
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/user_add_check.php
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
<<<<<<< HEAD:user_add_check.php
>>>>>>> aa
=======
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/user_add_check.php
				print '学籍番号が入力されていません。<br />';
			}
			else
			{
				print '学籍番号:';
<<<<<<< HEAD:user_add_check.php
<<<<<<< HEAD
				print  h($pro_name);
=======
				print h($pro_id);
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/user_add_check.php
				print '<br />';
			}

			if($pro_pass=='')
			{
				print 'パスワードが入力されていません。<br />';
			}
			else
			{
<<<<<<< HEAD:user_add_check.php
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
=======
				print 'パスワード:非表示';
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/user_add_check.php
				print '<br />';
			}

			

<<<<<<< HEAD:user_add_check.php
<<<<<<< HEAD
			if($pro_name=='' || $pro_name2=='')
=======
			if($pro_name=='' || $pro_id=='' || $pro_pass=='')
>>>>>>> aa
=======
			if($pro_name=='' || $pro_id=='' || $pro_pass=='')
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/user_add_check.php
			{
				print '<form>';
				print '<input type="button" onclick="history.back()" value="戻る">';
				print '</form>';
			}
			else
			{
				print '上記の内容で進めます。<br />';
				print '<br />';

<<<<<<< HEAD:user_add_check.php
<<<<<<< HEAD
				$_SESSION['name'] = "$pro_name";
				$_SESSION['name2'] = "$pro_name2";
=======
=======
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/user_add_check.php
				$_SESSION['name_user'] = "$pro_name";
				$_SESSION['student_id'] = "$pro_id";
				$_SESSION['password'] = "$pro_pass";

<<<<<<< HEAD:user_add_check.php
>>>>>>> aa
=======
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/user_add_check.php
			

				print '<form method="post" action="user_add_done.php">';
				print '<input type="button" onclick="history.back()" value="戻る">';
				print '<input type="submit" value="進む">';
				print '</form>';

			}
		?>
	</body>
</html>
