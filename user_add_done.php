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
<<<<<<< HEAD
			if (isset($_SESSION['name'])) {
				$pro_name=$_SESSION['name'];
=======
			if (isset($_SESSION['name_user'])) {
				$pro_name=$_SESSION['name_user'];
>>>>>>> aa
			}
			else{
				print'学籍番号が受信できません。';
				exit();
			}

<<<<<<< HEAD
			if (isset($_SESSION['name2'])) {
				$pro_name2=$_SESSION['name2'];
=======
			if (isset($_SESSION['student_id'])) {
				$pro_id=$_SESSION['student_id'];
>>>>>>> aa
			}
			else{
				print'名前が受信できません。';
				exit();
			}
<<<<<<< HEAD
=======

			if (isset($_SESSION['password'])) {
				$pro_pass=$_SESSION['password'];
			}
			else{
				print'パスワードが受信できません。';
				exit();
			}
>>>>>>> aa
			
			session_unset();// セッション変数をすべて削除
			session_destroy();// セッションIDおよびデータを破棄

			try
			{
				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

<<<<<<< HEAD
				$sql='INSERT INTO mst_dat_user(name,name2) VALUES (:name, :name2)';
				$prepare=$db->prepare($sql);
				$prepare->bindValue(':name', $pro_name, PDO::PARAM_INT);
				$prepare->bindValue(':name2', $pro_name2, PDO::PARAM_STR);
=======
				$sql='INSERT INTO mst_dat_user(name_user,student_id,password) VALUES (:name_user,:student_id,:password)';
				$prepare=$db->prepare($sql);
				$prepare->bindValue(':name_user', $pro_name, PDO::PARAM_STR);
				$prepare->bindValue(':student_id', $pro_id, PDO::PARAM_INT);
				$prepare->bindValue(':password', $pro_pass, PDO::PARAM_STR);
>>>>>>> aa
				$prepare->execute();

				$db=null;

				print h($pro_name).' ';
<<<<<<< HEAD
				print h($pro_name2);
=======
				print h($pro_id);
>>>>>>> aa
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
