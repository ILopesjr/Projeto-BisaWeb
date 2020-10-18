<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Movimentacao_financeira extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("movimentacaofinanceira");
	}

	public function index()
	{
		$data["title"] = "Listagem de Movimentações Financeiras";
		$data["movimentacoes"] = $this->movimentacaofinanceira->all();

		$this->load->model("contabancaria");
		$data["contas"] = $this->contabancaria->all();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('movimentacao/home');
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data["title"] = "Cadastro de Movimentação Financeira";

		$this->load->model("contabancaria");
		$data["contas"] = $this->contabancaria->all();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('movimentacao/create');
		$this->load->view('templates/footer');
	}

	public function store()
	{
		$descricao = $this->input->post('descricao');
		$valor = $this->input->post('valor');
		$tipo_movimentacao = $this->input->post('tipo_movimentacao');
		$data_movimentacao = $this->input->post('data_movimentacao');
		$id_conta = $this->input->post('id_conta');

		$data = [
			'descricao' => $descricao,
			'valor' => $valor,
			'tipo_movimentacao' => $tipo_movimentacao,
			'data_movimentacao' => $data_movimentacao,
			'id_conta' => $id_conta
		];

		$config = [
			[
				'field' => 'descricao',
				'label' => 'Descrição',
				'rules' => 'required'
			],
			[
				'field' => 'valor',
				'label' => 'Valor',
				'rules' => "required|decimal|greater_than[0]"
			],
			[
				'field' => 'data_movimentacao',
				'label' => 'Data Movimentação',
				'rules' => 'required|callback_compareDate'
			],
			[
				'field' => 'id_conta',
				'label' => 'Conta',
				'rules' => 'required'
			]
		];

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == false) {
			$this->create();
		} else {
			$this->movimentacaofinanceira->store($data);
			redirect("movimentacao_financeira");
		}
	}

	public function show($id)
	{
		$data["title"] = "Detalhes da Movimentação Financeira";
		$data["movimentacao"] = $this->movimentacaofinanceira->show($id);

		$this->load->model("contabancaria");
		$data["contas"] = $this->contabancaria->all();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('movimentacao/show');
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$data["title"] = "Edição da Movimentação Financeira";
		$data["movimentacao"] = $this->movimentacaofinanceira->show($id);

		$this->load->model("contabancaria");
		$data["contas"] = $this->contabancaria->all();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu');
		$this->load->view('movimentacao/create');
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$descricao = $this->input->post('descricao');
		$valor = $this->input->post('valor');
		$tipo_movimentacao = $this->input->post('tipo_movimentacao');
		$data_movimentacao = $this->input->post('data_movimentacao');
		$id_conta = $this->input->post('id_conta');

		$data = [
			'descricao' => $descricao,
			'valor' => $valor,
			'tipo_movimentacao' => $tipo_movimentacao,
			'data_movimentacao' => $data_movimentacao,
			'id_conta' => $id_conta
		];

		$config = [
			[
				'field' => 'descricao',
				'label' => 'Descrição',
				'rules' => 'required'
			],
			[
				'field' => 'valor',
				'label' => 'Valor',
				'rules' => "required|decimal|greater_than[0]"
			],
			[
				'field' => 'data_movimentacao',
				'label' => 'Data Movimentação',
				'rules' => 'required'
			],
			[
				'field' => 'id_conta',
				'label' => 'Conta',
				'rules' => 'required'
			]
		];

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == false) {
			$this->edit($id);
		} else {
			$this->movimentacaofinanceira->update($id, $data);
			redirect("movimentacao_financeira");
		}
	}

	public function destroy($id)
	{
		$this->movimentacaofinanceira->destroy($id);
		redirect("movimentacao_financeira");
	}

	public function compareDate()
	{
		$startDate = date("Y-m-d", strtotime("1992-01-03"));
		$endDate = $this->input->post('data_movimentacao');
		if ($endDate > $startDate) {
			return true;
		} else {
			$this->form_validation->set_message('compareDate', '%s tem que ser maior que 03/01/1992.');
			return false;
		}
	}
}
