<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
	</div>

	<div class="col-md-12">

		<?php echo validation_errors(); ?>

		<?php
		if (isset($conta)) { ?>

		<form action="<?= base_url() ?>conta_bancaria/update/<?= $conta["id"] ?>" method="post">
			<?php
			} else { ?>
				<?php echo form_open('conta_bancaria/store'); ?>
			<?php
				} ?>

				<div class="col-md-6">
					<div class="form-group">
						<label for="descricao">Descrição</label>
						<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição"
							   value="<?= isset($conta["descricao"]) ? $conta["descricao"] : "" ?>">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="saldo">Saldo</label>
						<input type="text" class="form-control" name="saldo" id="saldo" placeholder="saldo"
							   value="<?= isset($conta["saldo"]) ? $conta["saldo"] : "" ?>">
					</div>
				</div>

				<div class="col-md-6">
					<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
					<a href="<?= base_url() ?>conta_bancaria" class="btn btn-danger btn-xs"><i class="fas fa-times"></i>
						Cancelar</a>
				</div>
			</form>
	</div>
</main>
