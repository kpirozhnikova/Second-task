<html>
	<head> 
		<meta charset="UTF-8">
		<style type="text/css">
			.text{
				width: 600px;
				margin-left: 320px;
				margin-bottom: 50px;
				margin-top: 50px;
			}
		</style> 
		<title>����������� ������������</title>
	</head>
	<body>
		
		<form method="GET">
			<p align="center"><img src='http://planetcalc.ru/users/2/1271080992.JPG' ></p>
			<p align="center"><img src='http://planetcalc.ru/cgi-bin/mimetex.cgi?L=\frac{\sqrt{ab(a+b+c)(a+b-c)}}{a+b}' ></p>
	                <p align="center" class="text"> 
	                ����������� ����� ����������� ������������. ��. ������� ����. ������� ������������ ������ ���������� ���������� ������� A, B, C, � ��������� ������� a, b, c - ����� ��������������� ������. �.�. ������� AB - c, AC - b, BC - a. </p>
			<p align="center">������� a
			<input type="text" name="a" value= "<?php 
				if (isset($_GET['a'])){
					echo htmlspecialchars($_GET['a']);
				}
			?>">
			</p>
			
			<p align="center">������� b
			<input type="text" name="b" value= "<?php 
				if (isset($_GET['b'])){
					echo htmlspecialchars($_GET['b']);
				} 
			?>">
			</p>

			<p align="center">������� c
			<input type="text" name="c" value= "<?php 
				if (isset($_GET['c'])){
					echo htmlspecialchars($_GET['c']);
				} 
			?>">
			</p>
			<div class="button" align="center"><input type="submit" value="����������"></div>
		</form>

		<div class="calc" align="center">
		<?php
			function calculation($st1,$st2,$st3){	
				return ( (sqrt($st1*$st2*($st1+$st2+$st3)*($st1+$st2-$st3)) )/($st1+$st2) );
			}
			if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
				if (!is_numeric($_GET['a']) || !is_numeric($_GET['b']) || !is_numeric($_GET['c'])) {
					echo "�� ��� ���� ��������� ��� ������� ���������� ��������";
				} elseif ($_GET['a']<0 || $_GET['b']<0 || $_GET['c']<0) {
					echo "�������� �� ����� ���� �������������";
				} else {
					echo ('���������: '.number_format((calculation($_GET['a'], $_GET['b'], $_GET['c'])), 2, ',', ' '));
				}
			}
		?>
		</div>
		
	</body>
</html>