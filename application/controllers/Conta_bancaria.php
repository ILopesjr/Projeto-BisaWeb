<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Conta_bancaria extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("contabancaria");
	}

	public function index()
	{
		$data["title"] = "Listagem de Contas";
		$data["contas"] = $this->contabancaria->all();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('conta/home');
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data["title"] = "Cadastro de Contas";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('conta/create');
		$this->load->view('templates/footer');
	}

	public function store()
	{
		$descricao = $this->input->post('descricao');
		$saldo = $this->input->post('saldo');

		$data = [
			'descricao' => $descricao,
			'saldo' => $saldo
		];

		$config = [
			[
				'field' => 'descricao',
				'label' => 'Descrição',
				'rules' => 'required|is_unique[conta_bancarias.descricao]'
			],
			[
				'field' => 'saldo',
				'label' => 'Saldo',
				'rules' => "required|decimal|greater_than[0]"
			]
		];

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == false) {
			$this->create();
		} else {
			$this->contabancaria->store($data);
			redirect("conta_bancaria");
		}
	}

	public function show($id)
	{
		$data["title"] = "Detalhes da Conta";
		$data["conta"] = $this->contabancaria->show($id);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('conta/show');
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$data["title"] = "Edição de Contas";
		$data["conta"] = $this->contabancaria->show($id);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('conta/create');
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$descricao = $this->input->post('descricao');
		$saldo = $this->input->post('saldo');

		$data = [
			'descricao' => $descricao,
			'saldo' => $saldo
		];

		$config = [
			[
				'field' => 'descricao',
				'label' => 'Descrição',
				'rules' => 'required'
			],
			[
				'field' => 'saldo',
				'label' => 'Saldo',
				'rules' => "required|decimal|greater_than[0]"
			]
		];

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == false) {
			$this->edit($id);
		} else {
			$this->contabancaria->update($id, $data);
			redirect("conta_bancaria");
		}
	}

	public function destroy($id)
	{
		$this->contabancaria->destroy($id);
		redirect("conta_bancaria");
	}

}
