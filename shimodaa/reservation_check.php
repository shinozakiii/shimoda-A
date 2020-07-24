<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
<<<<<<< HEAD:reservation.php
<<<<<<< HEAD
		<title>教科書予約/title>
=======
		<title>教科書一覧</title>
>>>>>>> aa
=======
		<title>教科書予約</title>
>>>>>>> 79f38e78ace014d7d7b95b94514e11ad38a91c99:shimodaa/reservation_check.php
	</head>
	<body>
		<?php
			require_once '_database_conf.php';
			require_once '_h.php';
<<<<<<< HEAD

			session_cache_expire(30);// 有効期間30分
			session_start();

			try
			{
				$pro_code=$_GET['procode'];

				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql='SELECT * FROM mst_dat_order 
				LEFT OUTER JOIN mst_dat_sub ON mst_dat_order.code_subject = mst_dat_sub.code_subject 
				LEFT OUTER JOIN mst_dat_text ON mst_dat_order.code_text = mst_dat_text.code_text
				WHERE mst_dat_order.code_order=:code';

				$stmt=$db->prepare($sql);
				$stmt->bindValue(':code', $pro_code, PDO::PARAM_INT);
				$stmt->execute();

				$rec=$stmt->fetch(PDO::FETCH_ASSOC);
				$dbh=null;

				if($rec==false)
				{
					print'注文番号が正しくありません。';
					print'<a href="reservation.php">戻る</a>';
					print '<br />';
					exit();
				}
				$_SESSION['code'] = "$pro_code";
				$pro_code_subject = $rec['code_subject'];
				$pro_name_subject = $rec['name_subject'];
				$pro_name_teacher = $rec['name_teacher'];
				$pro_code_text = $rec['code_text'];
				$pro_name_text = $rec['name_text'];	
			}
			catch(Exception $e)
=======
			try
			{
				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				/*
				$sql='INSERT INTO dat_order(code_subject, code_text)
				SELECT dat_sub.code_subject, dat_text.code_text FROM dat_sub, dat_text';
				*/
				$sql='SELECT * FROM mst_dat_order 
				LEFT OUTER JOIN mst_dat_sub ON mst_dat_order.code_subject = mst_dat_sub.code_subject 
				LEFT OUTER JOIN mst_dat_text ON mst_dat_order.code_text = mst_dat_text.code_text';
				/*******************************************************************************
				$sql='SELECT distinct code_subject, code_text FROM dat_order ';
				$sql='SELECT code_order FROM dat_order';
				select * from テーブル名1
				left outer join テーブル名2
				on テーブル名1.フィールド名 = テーブル名2.フィールド名;
				**************************************************************************************/

//				$sql='SELECT code,name,price FROM mst_product WHERE price > 100';
//				$sql='SELECT code,name,price FROM mst_product ORDER BY price DESC';

				$prepare=$db->prepare($sql);
				$prepare->execute();


				$db=null;

				print '教科書一覧<br /><br />';

				while(true)
				{
					$rec=$prepare->fetch(PDO::FETCH_ASSOC);
					if($rec==false)
					{
						break;
					}
					print '注文番号：';
					print h($rec['code_order']).'　';
					print '科目番号：';
					print h($rec['code_subject']).'　';
					print '科目名：';
					print h($rec['name_subject']).'　';
					print '教科書番号：';
					print h($rec['code_text']).'　';
					print '教科書名：';
					print h($rec['name_text']).'　';
					print '<br />';
					}
					print '<br />';
					print '<form method="get" action="reservation_check.php">';
					print '教科書予約：番号';
					print '<input type="text" name="procode" style="width:20px">';
					print '<input type="submit" value="決定">';
					print '</form>';
			}
			catch (Exception $e)
>>>>>>> aa
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}
<<<<<<< HEAD
			/*
			
			*/
		?>

		教科書予約<br />
		<br />
		注文番号：
		<?php print '　　'; print $pro_code; ?><br />
<!--
		科目番号：
		<?php print '　　'; print $pro_code_subject; ?><br />
-->
		科目名：
		<?php print '　　　'; print $pro_name_subject;?><br />
		教員名：
		<?php print '　　　'; print $pro_name_teacher;?><br />
<!--
		教科書番号：
		<?php print '　'; print $pro_code_text;?><br />
-->
		教科書名：
		<?php print '　　'; print $pro_name_text; ?><br /><br>
		この教科書を予約してよろしいですか？<br /><br />

		<form method="post" action="reservation_done.php">
		<input type="button" onclick="history.back()" value="戻る">
		<input type="submit" value="予約">
		</form>

	</body>
	
</html>
=======
		?>
		<a href="my_page.php">マイページへ</a>	
	</body>
</html>	
>>>>>>> aa
