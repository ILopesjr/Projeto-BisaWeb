<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Controle Financeiro BisaWeb</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

	<style>
		main {
			margin: auto;
			text-align: center;
			display: table;
			font-weight: bold;
		}

		.title {
			text-align: center;
			color: black;
			font-size: larger;
			text-decoration-line: underline;
		}

		.pdf {
			padding: 1rem;
		}

		.pdf tr {
			text-align: center;
		}

		.pdf td {
			padding: 1rem 4rem;
			border-style: dashed;
		}
	</style>

</head>
<body>
<main>
	<div class="title">
		<h2>Relatório de Movimentações Financeiras</h2>
	</div>

	<div class="pdf">
		<table>
			<thead>
			<tr>
				<th>Descrição</th>
				<th>Valor</th>
				<th>Tipo Movimentação</th>
				<th>Data Movimentação</th>
				<th>Conta</th>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach ($movimentacoes as $movimentacao) : ?>
				<tr>
					<td><?= $movimentacao["descricao"] ?></td>
					<td><?= $movimentacao['valor'] ?></td>
					<td><?= $movimentacao["tipo_movimentacao"] == 1 ? "Receita" : "Despesa" ?></td>
					<td><?= date('d/m/Y', strtotime($movimentacao["data_movimentacao"])) ?></td>
					<td><?php
						foreach ($contas as $conta) {
							if ($movimentacao["id_conta"] == $conta["id"]) {
								echo "{$conta["descricao"]}";
							}
						}
						?>
					</td>
				</tr>
			<?php
			endforeach; ?>
			</tbody>
		</table>
	</div>
</main>

</body>
</html>
