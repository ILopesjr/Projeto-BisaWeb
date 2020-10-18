<header>
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">BisaWeb</a>

		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center container centralizar">
			<h2 class="text-light">Controle Financeiro</h2>
		</div>
	</nav>

	<div class="container-fluid navbar">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>Menu</span>
						<a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
							<span data-feather="plus-circle"></span>
						</a>
					</h6>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url() ?>conta_bancaria">
								<span data-feather="file"></span>
								Conta
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url() ?>movimentacao_financeira">
								<span data-feather="file"></span>
								Movimentações
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url() ?>consulta_saldo">
								<span data-feather="file"></span>
								Saldo
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url() ?>relatorio">
								<span data-feather="shopping-cart"></span>
								Relatório em Tela
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url() ?>relatorio/pdf">
								<span data-feather="shopping-cart"></span>
								Relatório em PDF
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
