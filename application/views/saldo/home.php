<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2"><?= $title ?></h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
			<tr>
				<th>Conta</th>
				<th>Saldo</th>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach ($saldos as $saldo) : ?>
				<tr>
					<td><?php
						foreach ($contas as $conta) {
							if ($saldo["id_conta"] == $conta["id"]) {
								echo "{$conta["descricao"]}";
							}
						}
						?>
					</td>
					<td>
						<?php if(isset($saldo["saldo"])){
								echo $saldo["saldo"];
						} elseif (isset($saldo["despesas"])){
								echo  "-" . $saldo["despesas"];
						}else{
							echo $saldo["receitas"];
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
