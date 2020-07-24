<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>教科書予約</title>
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
				print'注文番号が受信できません。';
				exit();
			}
			if (isset($_SESSION['user_id'])) {
				$pro_name=$_SESSION['user_id'];
			}
			else{
				print'利用者コードが受信できません。';
				exit();
			}
//			session_unset();// セッション変数をすべて削除
//			session_destroy();// セッションIDおよびデータを破棄

			try
			{
<<<<<<< HEAD:reservation_done.php
<<<<<<< HEAD
				

=======
>>>>>>> aa
=======
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/reservation_done.php
				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

<<<<<<< HEAD:reservation_done.php
<<<<<<< HEAD
				$sql='UPDATE mst_dat_text
				SET quantity = quantity - 1
				WHERE code_text = :$pro_code_text';

				$sql='INSERT INTO dat_reserv(code_order) VALUES (:code_order)';

=======
				//説明
				$sql='INSERT INTO dat_reserv(code_order) VALUES (:code_order)';
>>>>>>> aa
=======
				//説明
				$sql='INSERT INTO dat_reserv(name, code_order) VALUES (:name, :code_order)';
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/reservation_done.php
				$prepare=$db->prepare($sql);
				$prepare->bindValue(':name', $pro_name, PDO::PARAM_STR);
				$prepare->bindValue(':code_order', $pro_code, PDO::PARAM_STR);
				$prepare->execute();

				$db=null;

				print '注文番号';
				print h($pro_code).' ';
				print 'を予約しました。<br />';
			}
			catch(Exception$e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}
		?>
<<<<<<< HEAD:reservation_done.php
<<<<<<< HEAD
		<a href="order.php">戻る</a>
=======
		<a href="reservation.php">戻る</a>
>>>>>>> aa
=======
		<a href="reservation.php">戻る</a>
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/reservation_done.php
	</body>
</html>
