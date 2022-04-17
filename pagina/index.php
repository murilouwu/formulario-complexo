<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style\estiloM.css">
		<title>Rpg Baki</title>
	</head>
	<body>
		<img src="imagens\mouse.png" class="mouse">
		<header class="topo">

			<img src="imagens/baki.png" alt="logo" id="logo">
		</header>
		<main class="meio">
				<div class="barra">
					<strong>Informações base</strong>
					<button class="bt" id="b1"><strong>▲</strong></button>
				</div>
				<div class="dp">
					<div class="sus">
						<label>Nome:</label>
						<input type="text" name="nome" class="in" placeholder="ex: carlos">
						<label>Sobrenome:</label>
						<input type="text" name="nome2" class="in" placeholder="ex: Santos">
						<label>Apelido:</label>
						<input type="text" name="app" class="in" placeholder="ex: Tombador de guepardos">
					</div>
					<div class="sus">
						<label>Idade:</label>
						<input type="number" name="idade" class="in">
						<label>Nome da familia:</label>
						<input type="text" name="hanma" class="in" placeholder="ex: Hanma">
						<label>Altura:</label>
						<input type="number" name="altura" class="in">
					</div>
					<div class="sus">
						<label>Peso:</label>
						<input type="number" name="peso" class="in">
						<label>Apoiador:</label>
						<input type="text" name="apoiar" class="in" placeholder="ex: SpaceX">
					</div>
					<div class="sus">
						<label>Mentor:</label>
						<input type="text" name="meme" class="in" placeholder="ex: Jack Hanma" id="a">
					</div>
				</div>
				<div class="barra">
					<strong>localidade</strong>
					<button class="bt" id="b2"><strong>▲</strong></button>
				</div>
				<div class="end">
					<div class="sus">
						<label>Nacionalidade:</label>
						<input type="text" name="nacao" class="in" placeholder="ex: brasil">
						<label>Continente:</label>
						<input type="text" name="conte" class="in" placeholder="ex: América">
						<label>estado:</label>
						<input type="text" name="state" class="in" placeholder="ex: Texas">
					</div>
					<div class="sus">
						<label>CordenadaX:</label>
						<input type="number" name="x" class="in">
						<label>Cidade:</label>
						<input type="text" name="city" class="in" placeholder="ex: são paulo">
						<label>CodenadaY:</label>
						<input type="number" name="y" class="in">
					</div>
				</div>
				<div class="barra">
					<strong>Atributos iniciais</strong>
					<button class="bt" id="b3"><strong>▲</strong></button>
				</div>
				<div class="con">
					<div class="sus">
						<label>Força:</label>
						<input type="number" name="for" class="in">
						<label>Velocidade:</label>
						<input type="number" name="vel" class="in">
						<label>Agilidade:</label>
						<input type="number" name="agl" class="in">
					</div>
					<div class="sus">
						<label>Inteligência:</label>
						<input type="number" name="int" class="in">
						<label>Tipo de corpo:</label>
						<input type="text" name="body" class="in" placeholder="ex: Hectomorfo">
						<label>Porcentagem de gordura:</label>
						<input type="number" name="por" class="in">
					</div>
					<div class="sus">
						<label>Otimismo:</label>
						<input type="number" name="otm" class="in">
						<label>Raiva:</label>
						<input type="number" name="rav" class="in">
						<label>Seriedade:</label>
						<input type="number" name="ser" class="in">
					</div>
					<div class="sus">
						<label>Felicidade:</label>
						<input type="number" name="fel" class="in">
						<label>Perverção:</label>
						<input type="number" name="per" class="in">
						<label>bondade:</label>
						<input type="number" name="bom" class="in">
					</div>
				</div>
				<div class="barra">
					<strong>Artes Marciais</strong>
					<button class="bt" id="b4"><strong>▲</strong></button>
				</div>
				<div class="form">
					<div class="sus">
						<label>Bokator:</label>
						<input type="checkbox" name="es1" class="check">
						<label>Combato:</label>
						<input type="checkbox" name="es2" class="check">
						<label>Shippalgi:</label>
						<input type="checkbox" name="es3" class="check">
					</div>
					<div class="sus">
						<label>Capoeira:</label>
						<input type="checkbox" name="es4" class="check">
						<label>Keysi:</label>
						<input type="checkbox" name="es5" class="check">
						<label>Sambo:</label>
						<input type="checkbox" name="es6" class="check">
					</div>
					<div class="sus">
						<label>Kung Fu:</label>
						<input type="checkbox" name="es7" class="check">
						<label>Jiu Jitsu Brasileiro:</label>
						<input type="checkbox" name="es8" class="check">
						<label>Muay Thai:</label>
						<input type="checkbox" name="es9" class="check">
					</div>
					<div class="sus">
						<label>Krav Maga:</label>
						<input type="checkbox" name="es10" class="check">
						<label>Godou:</label>
						<input type="checkbox" name="es11" class="check">
						<label>Karate:</label>
						<input type="checkbox" name="es12" class="check">
					</div>
					<div class="sus">
						<label>Kenpo:</label>
						<input type="checkbox" name="es13" class="check">
						<label>Pro Wrestling:</label>
						<input type="checkbox" name="es14" class="check">
						<label>Street Fighting:</label>
						<input type="checkbox" name="es15" class="check">
					</div>
					<div class="sus">
						<label>Ninjutsu:</label>
						<input type="checkbox" name="es16" class="check">
						<label>Estilo Selvagem:</label>
						<input type="checkbox" name="es17" class="check">
						<label>Estilo animal:</label>
						<input type="checkbox" name="es18" class="check">
					</div>
				</div>
		</main>
		<div class="b">
			<button class="bu" id="ver"><strong>VER FICHA</strong></button>
		</div>
	</body>
	<script src="script\botão.js"></script>
	<script src="script\mouse.js"></script>
	<?php
		if($_POST){
			$nome = $_POST['nome']; $snome = $_POST['nome2']; $apelido = $_POST['app']; $idade = $_POST['idade']; 
			$nfamilia = $_POST['hanma']; $altura = $_POST['altura']; $peso = $_POST['peso']; $apoiador = $_POST['apoiar'];
			$mentor = $_POST['meme']; $nacao = $_POST['nacao']; $continente = $_POST['conte']; $estado = $_POST['state'];
			$x = $_POST['x']; $cidade = $_POST['city']; $y = $_POST['y']; $for = $_POST['for']; $vel = $_POST['vel'];
			$agl = $_POST['agl']; $int = $_POST['int']; $body = $_POST['body']; $por = $_POST['por']; $otm = $_POST['otm'];
			$rav = $_POST['rav']; $ser = $_POST['ser']; $fel = $_POST['fel']; $per = $_POST['per']; $bom = $_POST['bom'];
			$html = '';
		}
	?>	
</html>