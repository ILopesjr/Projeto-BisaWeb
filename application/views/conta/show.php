<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
	</div>

	<div class="col-md-12">

		<div class="col-md-6">
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição"
					   value="<?= $conta["descricao"] ?>" readonly>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="saldo">Saldo</label>
				<input type="text" class="form-control" name="saldo" id="saldo" placeholder="saldo"
					   value="<?= $conta["saldo"] ?>"  readonly>
			</div>
		</div>

		<div class="col-md-6">
			<a href="<?= base_url() ?>conta_bancaria" class="btn btn-info btn-xs">
				<i class="fas fa-arrow-circle-left"></i> Voltar</a>
		</div>
		</form>
	</div>
</main>
