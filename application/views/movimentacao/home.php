<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2"><?= $title ?></h2>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url() ?>movimentacao_financeira/create" class="btn btn-sm btn-outline-secondary"><i
							class="fas fa-plus-square"></i> Movimentação</a>
			</div>
		</div>
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
				<th>Ações</th>
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
					<td>
						<a href="<?= base_url() ?>movimentacao_financeira/show/<?= $movimentacao["id"] ?>"
						   class="btn btn-info btn-sm">Ver</a>
						<a href="<?= base_url() ?>movimentacao_financeira/edit/<?= $movimentacao["id"] ?>"
						   class="btn btn-warning btn-sm">Editar</a>
						<a  id="mov_delete" href="javascript:movDelete(<?= $movimentacao['id'] ?>)"
						   class="btn btn-sm btn-danger">Excluir</a>
					</td>
				</tr>
			<?php
			endforeach; ?>
			</tbody>
		</table>
	</div>
</main>
