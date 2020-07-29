<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>予約教科書一覧</title>
	</head>
	<body>
		<?php
			require_once '_database_conf.php';
			require_once '_h.php';

			try{
				$db = new PDO($dsn, $dbUser, $dbPass);
				$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql='SELECT * FROM dat_reserv';
//				$sql='SELECT code,name,price FROM mst_product WHERE price > 100';
//				$sql='SELECT code,name,price FROM mst_product ORDER BY price DESC';
				$prepare=$db->prepare($sql);
				$prepare->execute();
				$db=null;

				print '教科書<br /><br />';

				while(true)
				{
					$rec=$prepare->fetch(PDO::FETCH_ASSOC);
					if($rec==false)
					{
						break;
					}
					print('予約番号：');
					print h($rec['code_reservation']).'　　';
					print('ユーザー番号：');
					print h($rec['code_user']).'　　';
					print('注文番号：');
					print h($rec['code_order']).'　　';
					print '<br />';
				}
					
			}
			catch (Exception $e)
			{
				echo 'エラーが発生しました。内容: ' . h($e->getMessage());
	 			exit();
			}
            ?>
		<a href="admin_index.php">管理者ページへ</a>	
	</body>
</html>