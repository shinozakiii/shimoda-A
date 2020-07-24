<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ユーザ登録</title>
	</head>
	<body>
		<?php
			require_once '_database_conf.php';
			require_once '_h.php';

			session_start();
			if (isset($_SESSION['name_user'])) {
				$pro_name=$_SESSION['name_user'];
			}
			else{
				print'学籍番号が受信できません。';
				exit();
			}

			if (isset($_SESSION['student_id'])) {
				$pro_id=$_SESSION['student_id'];
			}
			else{
				print'名前が受信できません。';
				exit();
			}

			if (isset($_SESSION['password'])) {
				$pro_pass=$_SESSION['password'];
			}
			else{
				print'パスワードが受信できません。';
				exit();
			}
			
			session_unset();// セッション変数をすべて削除
			session_destroy();// セッションIDおよびデータを破棄

			try
			{
				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql='INSERT INTO mst_dat_user(name_user,student_id,password) VALUES (:name_user,:student_id,:password)';
				$prepare=$db->prepare($sql);
				$prepare->bindValue(':name_user', $pro_name, PDO::PARAM_STR);
				$prepare->bindValue(':student_id', $pro_id, PDO::PARAM_INT);
				$prepare->bindValue(':password', $pro_pass, PDO::PARAM_STR);
				$prepare->execute();

				$db=null;

				print h($pro_name).' ';
				print h($pro_id);
				print 'を追加しました。<br />';

			}
			catch(Exception$e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}
		?>
		<a href="my_page.php">マイページへ</a>
	</body>
</html>
