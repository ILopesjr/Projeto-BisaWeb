<?php

defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use Dompdf\Dompdf;

class Relatorio extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("relatoriomodel");
	}

	public function index()
	{
		$data["title"] = "Relatório de Movimentções Financeiras";
		$data["movimentacoes"] = $this->relatoriomodel->all();

		$this->load->model("contabancaria");
		$data["contas"] = $this->contabancaria->all();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('relatorio/home');
		$this->load->view('templates/footer');
	}

	public function pdf()
	{
		$dompdf = new DOMPDF();

		$data["movimentacoes"] = $this->relatoriomodel->all();

		$this->load->model("contabancaria");
		$data["contas"] = $this->contabancaria->all();

		$view = $this->load->view('relatorio/pdf', $data, true);

		$dompdf->loadHtml((string)$view);
		$dompdf->setPaper('A4', 'landscape');
		$dompdf->render();
		$dompdf->stream();
	}
}
