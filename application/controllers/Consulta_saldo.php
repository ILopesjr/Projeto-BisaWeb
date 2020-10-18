<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Consulta_saldo extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("saldomodel");
	}

	public function index()
	{
		$data["title"] = "Relatório de Saldos";

		$data["saldos"] = $this->saldomodel->all();

		$this->load->model("contabancaria");
		$data["contas"] = $this->contabancaria->all();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('saldo/home');
		$this->load->view('templates/footer');
	}
}
