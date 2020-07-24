<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>教科書予約aaa</title>
	</head>
	<body>
		<?php
			require_once '_database_conf.php';
			require_once '_h.php';

			session_cache_expire(30);// 有効期間30分
			session_start();

			try
			{
				$pro_code=$_GET['procode'];

				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql='SELECT * FROM mst_dat_order, mst_dat_sub, mst_dat_text WHERE mst_dat_order.code_order = :code';
				$stmt=$db->prepare($sql);
				$stmt->bindValue(':code', $pro_code, PDO::PARAM_INT);
				$stmt->execute();

				$rec=$stmt->fetch(PDO::FETCH_ASSOC);
				$dbh=null;

				if($rec==false)
				{
					print'注文番号が正しくありません。';
					print'<a href="order.php">戻る</a>';
					print '<br />';
					exit();
				}
				$_SESSION['code'] = "$pro_code";
				$pro_code_subject = $rec['code_subject'];
				$pro_name_subject = $rec['name_subject'];
				$pro_code_text = $rec['code_text'];
				$pro_name_text = $rec['name_text'];	
				$pro_quantity = $rec['quantity'];	
			}
			catch(Exception $e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}
			/*
			
			*/
		?>

		教科書予約<br />
		<br />
		注文番号：
		<?php print '　　'; print $pro_code; ?><br />
		科目番号：
		<?php print '　　'; print $pro_code_subject; ?><br />
		科目名：
		<?php print '　　　'; print $pro_name_subject;?><br />
		教科書番号：
		<?php print '　'; print $pro_code_text;?><br />
		教科書名：
		<?php print '　　'; print $pro_name_text; ?><br /><br>
		この教科書を予約してよろしいですか？<br /><br />

		<form method="post" action="reservation_done.php">
		<input type="button" onclick="history.back()" value="戻る">
		<input type="submit" value="予約">
		</form>

	</body>
	
</html>