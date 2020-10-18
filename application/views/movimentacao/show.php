<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
	</div>

	<div class="col-md-12">

		<div class="col-md-6">
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição"
					   value="<?= $movimentacao["descricao"] ?>" readonly>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="valor">Valor</label>
				<input type="text" class="form-control" name="valor" id="valor" placeholder="Valor"
					   value="<?= $movimentacao["valor"] ?>" readonly>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="tipo-movimentacao">Tipo Movimentação</label>
				<input type="text" class="form-control" name="tipo-movimentacao" id="tipo-movimentacao"
					   placeholder="Tipo Movimentação"
					   value="<?= $movimentacao["tipo_movimentacao"] == 1 ? "Receita" : "Despesa" ?>" readonly>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="data-movimentacao">Data Movimentação</label>
				<input type="data" class="form-control" name="data-movimentacao" id="data-movimentacao"
					   placeholder="Data Movimentação"
					   value="<?= date('d/m/Y', strtotime($movimentacao["data_movimentacao"])) ?>" readonly>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="conta">Conta</label>
				<input type="text" class="form-control" name="conta" id="conta" placeholder="Conta"
					   value="<?php
					   foreach ($contas as $conta) {
						   if ($movimentacao["id_conta"] == $conta["id"]) {
							   echo "{$conta["descricao"]}";
						   }
					   }
					   ?>"
					   readonly>
			</div>
		</div>

		<div class="col-md-6">
			<a href="<?= base_url() ?>movimentacao_financeira" class="btn btn-info btn-xs">
				<i class="fas fa-arrow-circle-left"></i> Voltar</a>
		</div>
		</form>
	</div>
</main>
