<!DOCTYPE HTML>
<html>
	<head>
		<title>Lista de Percentual</title>
		<meta charset="utf-8" />
	</head>
<body>
	<div>
		<form name="sal_form" method="POST" action="exercicio2.php">
			
			<h2>FAIXA SALARIAL</h2>
			<hr/>
			<p><input type="text" placeholder="Funcionário" required="required" name="funcionario"/></p>
			
			<div class="salarios">
				<input type="radio" name="pgto" value="1" class="radioinput"><label class="radiopgto">Salario Minímo (R$ 1.045)</label>
				<input type="radio" name="pgto" value="2" class="radioinput"><label class="radiopgto">Ganha entre R$ 1.045,01 e R$2.089,60</label>
				<input type="radio" name="pgto" value="3" class="radioinput"><label class="radiopgto">Ganha entre R$2.089,61 e R$3.134,40)</label>
				<input type="radio" name="pgto" value="4" class="radioinput"><label class="radiopgto">Ganha entre R$3.134,41 e R$6.101,06</label>
			</div>
			
			<?php
				if(!empty($_POST)){
					@$funcionario=$_POST["funcionario"];
					@$op=$_POST["pgto"];
					switch($op){
						case 1:
							$
		</form>
	</div>
</body>
</html>