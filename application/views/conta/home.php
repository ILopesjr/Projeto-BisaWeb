<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2"><?= $title ?></h2>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url() ?>conta_bancaria/create" class="btn btn-sm btn-outline-secondary"><i
							class="fas fa-plus-square"></i> Conta</a>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
			<tr>
				<th>Descrição</th>
				<th>Saldo</th>
				<th>Ações</th>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach ($contas as $conta) : ?>
				<tr>
					<td><?= $conta["descricao"] ?></td>
					<td><?= $conta['saldo'] ?></td>
					<td>
						<a href="<?= base_url() ?>conta_bancaria/show/<?= $conta["id"] ?>" class="btn btn-info btn-sm">Ver</a>
						<a href="<?= base_url() ?>conta_bancaria/edit/<?= $conta["id"] ?>"
						   class="btn btn-warning btn-sm">Editar</a>
						<a id="cont-delete" href="javascript:contDelete(<?= $conta['id'] ?>)"
						   class="btn btn-sm btn-danger" id="delete_button">Excluir</a>
					</td>
				</tr>
			<?php
			endforeach; ?>
			</tbody>
		</table>
	</div>
</main>
