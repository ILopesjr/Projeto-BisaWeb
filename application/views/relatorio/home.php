<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2"><?= $title ?></h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
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
