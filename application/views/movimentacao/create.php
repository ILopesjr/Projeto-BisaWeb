<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div
		class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
	</div>

	<div class="col-md-12">

		<?php echo validation_errors(); ?>

		<?php
		if (isset($movimentacao)) { ?>
		<form action="<?= base_url() ?>movimentacao_financeira/update/<?= $movimentacao["id"] ?>" method="post">
			<?php
			} else { ?>
			<form action="<?= base_url() ?>movimentacao_financeira/store" method="post">
				<?php
				} ?>

				<div class="col-md-6">
					<div class="form-group">
						<label for="descricao">Descrição</label>
						<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição"
							   value="<?= isset($movimentacao["descricao"]) ? $movimentacao["descricao"] : "" ?>">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="valor">Valor</label>
						<input type="text" class="form-control" name="valor" id="valor" placeholder="valor"
							   value="<?= isset($movimentacao["valor"]) ? $movimentacao["valor"] : "" ?>">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="tipo_movimentacao">Tipo Movimentação</label>


						<div class="fform-check form-check">
							<input class="form-check-input" type="radio" name="tipo_movimentacao" id="tipo_movimentacao"
								   value="1"
								<?php
								if (isset($movimentacao["tipo_movimentacao"])) {
									if ($movimentacao["tipo_movimentacao"] == "1") {
										echo "checked";
									}
								} else {
									echo "";
								}
								?>
							>
							<label class="form-check-label" for="tipo_movimentacao">Receita</label>
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="tipo_movimentacao" id="tipo_movimentacao"
								   value="0"
								<?php
								if (isset($movimentacao["tipo_movimentacao"])) {
									if ($movimentacao["tipo_movimentacao"] == "0") {
										echo "checked";
									}
								} else {
									echo "checked";
								}
								?>
							>
							<label class="form-check-label" for="tipo_movimentacao">Despesa</label>
						</div>

					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="data_movimentacao">Data Movimentação</label>
						<input type="date" class="form-control" name="data_movimentacao" id="data_movimentacao"
							   placeholder="Data Movimentação"
							   value="<?= isset($movimentacao["data_movimentacao"]) ? date(
								   'Y-m-d',
								   strtotime($movimentacao["data_movimentacao"])
							   ) : date('Y-m-d') ?>"
						>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="id_conta">Conta</label>
						<select name="id_conta" id="id_conta" class="form-control w-25 p-2">
							<?php
							if (isset($movimentacao["id_conta"])) {
								foreach ($contas as $conta) {
									echo "<option value='{$conta["id"]}'";
									if ($movimentacao["id_conta"] == $conta["id"]) {
										echo " selected";
									}
									echo ">{$conta["descricao"]}</option>";
								}
							} else {
								foreach ($contas as $conta) {
									echo "<option value='{$conta["id"]}'>{$conta["descricao"]}</option>";
								}
							}
							?>
						</select>

					</div>
				</div>

				<div class="col-md-6">
					<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
					<a href="<?= base_url() ?>movimentacao_financeira" class="btn btn-danger btn-xs"><i
							class="fas fa-times"></i>
						Cancelar</a>
				</div>
			</form>
	</div>
</main>
