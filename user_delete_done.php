<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登録情報削除</title>
	</head>
	<body>
		<?php
			require_once '_database_conf.php';
			require_once '_h.php';

			session_start();
			if (isset($_SESSION['code'])) {
				$pro_code=$_SESSION['code'];
			}
			else{
				print'登録者コードが受信できません。';
				exit();
			}
			session_unset();// セッション変数をすべて削除
			session_destroy();// セッションIDおよびデータを破棄

			try
			{
				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql='DELETE FROM mst_product WHERE code = :code';
				$prepare=$db->prepare($sql);
				$prepare->bindValue(':code', $pro_code, PDO::PARAM_INT);
				$prepare->execute();

				$db=null;

				print '削除しました。<br />';

			}
			catch(Exception$e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}
		?>
		<a href="user_touroku_index.php">戻る</a>
	</body>
</html>
