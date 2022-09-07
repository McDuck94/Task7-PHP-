<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <header> 
		<h1>Таблица истиности PHP</h1>
	 <table class="table">
	 <thead>
		<tr>
			<th> A </th>
			<th> B </th>
			<th> !A </th>
			<th> A || B </th>
			<th> A && B </th>
			<th> A xor B </th>
		</tr>
	 </thead>
	 <tbody>
		<?php include 'calculations1.php' ?>
		<tr>
			<td> <?php echo $A1 ?> </td>
			<td> <?php echo $B1 ?> </td>
			<td> <?php echo $den1 ?> </td>
			<td> <?php echo $or1 ?> </td>
			<td> <?php echo $and1 ?> </td>
			<td> <?php echo $sw1 ?> </td>
		</tr>
		<tr>
			<td> <?php echo $A2 ?> </td>
			<td> <?php echo $B2 ?> </td>
			<td> <?php echo $den2 ?> </td>
			<td> <?php echo $or2 ?> </td>
			<td> <?php echo $and2 ?> </td>
			<td> <?php echo $sw2?> </td>
		</tr>
		<tr>
			<td> <?php echo $A3 ?> </td>
			<td> <?php echo $B3 ?> </td>
			<td> <?php echo $den3 ?> </td>
			<td> <?php echo $or3 ?> </td>
			<td> <?php echo $and3 ?> </td>
			<td> <?php echo $sw3 ?> </td>
		</tr>
		<tr>
			<td> <?php echo $A4 ?> </td>
			<td> <?php echo $B4 ?> </td>
			<td> <?php echo $den4 ?> </td>
			<td> <?php echo $or4 ?> </td>
			<td> <?php echo $and4 ?> </td>
			<td> <?php echo $sw4 ?> </td>
	 </tbody>
     </table>
	</header>

	<header>
        <h1>Таблицы сравнений в PHP</h1>
		<h2>Жесткое сравнение</h2>
	 <table class="table">
	 <colgroup>
	    <col span = "1" style = "background-color:#f3f1f1"> <!--Так как таблиц мало решил изменить цвет столбца сразу в коде-->
	</colgroup>
	 <thead>
		<tr>
			<th></th>
			<th> trye </th>
			<th> false </th>
			<th> 1 </th>
			<th> 0 </th>
			<th> -1 </th>
			<th> "1" </th>
			<th> null </th>
			<th> "php" </th>
		</tr>
	 </thead>
	 <tbody>
		<?php include 'calculations2.php' ?>
		<tr>
			<td> trye </td>
			<td> <?php echo $rez1 ?> </td>
			<td> <?php echo $rez2 ?> </td>
			<td> <?php echo $rez3 ?> </td>
			<td> <?php echo $rez4 ?> </td>
			<td> <?php echo $rez5 ?> </td>
			<td> <?php echo $rez6 ?> </td>
			<td> <?php echo $rez7 ?> </td>
			<td> <?php echo $rez8 ?> </td>
		</tr>
		<tr>
			<td> false </td>
			<td> <?php echo $rez9 ?> </td>
			<td> <?php echo $rez10 ?> </td>
			<td> <?php echo $rez11 ?> </td>
			<td> <?php echo $rez12 ?> </td>
			<td> <?php echo $rez13 ?> </td>
			<td> <?php echo $rez14 ?> </td>
			<td> <?php echo $rez15 ?> </td>
			<td> <?php echo $rez16 ?> </td>
		</tr>
		<tr>
			<td> 1 </td>
			<td> <?php echo $rez17 ?> </td>
			<td> <?php echo $rez18 ?> </td>
			<td> <?php echo $rez19 ?> </td>
			<td> <?php echo $rez20 ?> </td>
			<td> <?php echo $rez21 ?> </td>
			<td> <?php echo $rez22 ?> </td>
			<td> <?php echo $rez23 ?> </td>
			<td> <?php echo $rez24 ?> </td>
		</tr>
		<tr>
			<td> 0 </td>
			<td> <?php echo $rez25 ?> </td>
			<td> <?php echo $rez26 ?> </td>
			<td> <?php echo $rez27 ?> </td>
			<td> <?php echo $rez28 ?> </td>
			<td> <?php echo $rez29 ?> </td>
			<td> <?php echo $rez30 ?> </td>
			<td> <?php echo $rez31 ?> </td>
			<td> <?php echo $rez32 ?> </td>
        </tr>
		<tr>
			<td> -1 </td>
			<td> <?php echo $rez33 ?> </td>
			<td> <?php echo $rez34 ?> </td>
			<td> <?php echo $rez35 ?> </td>
			<td> <?php echo $rez36 ?> </td>
			<td> <?php echo $rez37 ?> </td>
			<td> <?php echo $rez38 ?> </td>
			<td> <?php echo $rez39 ?> </td>
			<td> <?php echo $rez40 ?> </td>
        </tr>
		<tr>
			<td> "1" </td>
			<td> <?php echo $rez41 ?> </td>
			<td> <?php echo $rez42 ?> </td>
			<td> <?php echo $rez43 ?> </td>
			<td> <?php echo $rez44 ?> </td>
			<td> <?php echo $rez45 ?> </td>
			<td> <?php echo $rez46 ?> </td>
			<td> <?php echo $rez47 ?> </td>
			<td> <?php echo $rez48 ?> </td>
        </tr>
		<tr>
			<td> null </td>
			<td> <?php echo $rez49 ?> </td>
			<td> <?php echo $rez50 ?> </td>
			<td> <?php echo $rez51 ?> </td>
			<td> <?php echo $rez52 ?> </td>
			<td> <?php echo $rez53 ?> </td>
			<td> <?php echo $rez54 ?> </td>
			<td> <?php echo $rez55 ?> </td>
			<td> <?php echo $rez56 ?> </td>
        </tr>
		<tr>
			<td> "php" </td>
			<td> <?php echo $rez57 ?> </td>
			<td> <?php echo $rez58 ?> </td>
			<td> <?php echo $rez59 ?> </td>
			<td> <?php echo $rez60 ?> </td>
			<td> <?php echo $rez61 ?> </td>
			<td> <?php echo $rez62 ?> </td>
			<td> <?php echo $rez63 ?> </td>
			<td> <?php echo $rez64 ?> </td>
        </tr>
			
	 </tbody>
     </table>
 
    </header>

	<header>
		<h2>Гибкое сравнение в PHP</h2>
	 <table class="table">
	 <colgroup>
	    <col span = "1" style = "background-color:#f3f1f1"> <!--Так как таблиц мало решил изменить цвет столбца сразу в коде-->
	</colgroup>
	 <thead>
		<tr>
			<th></th>
			<th> trye </th>
			<th> false </th>
			<th> 1 </th>
			<th> 0 </th>
			<th> -1 </th>
			<th> "1" </th>
			<th> null </th>
			<th> "php" </th>
		</tr>
	 </thead>
	 <tbody>
		<?php include 'calculations2.php' ?>
		<tr>
			<td> trye </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td> false </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td> 1 </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td> 0 </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
        </tr>
		<tr>
			<td> -1 </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
        </tr>
		<tr>
			<td> "1" </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
        </tr>
		<tr>
			<td> null </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
        </tr>
		<tr>
			<td> "php" </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
        </tr>
			
	 </tbody>
     </table>
 
    </header>

    <main>
    </main>

    <footer>
    </footer>

</body>

</html>