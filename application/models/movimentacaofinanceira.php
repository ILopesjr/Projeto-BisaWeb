<?php

class Movimentacaofinanceira extends CI_model
{
	public function all()
	{
		return $this->db->get("movimentacao_financeiras")->result_array();
	}

	public function store($movimentacao)
	{
		$this->db->insert("movimentacao_financeiras", $movimentacao);
	}

	public function show($id)
	{
		return $this->db->get_where("movimentacao_financeiras", array("id" => $id))->row_array();
	}

	public function update($id, $movimentacao)
	{
		$this->db->where("id", $id);
		return $this->db->update("movimentacao_financeiras", $movimentacao);
	}

	public function destroy($id)
	{
		$this->db->where("id", $id);
		return $this->db->delete("movimentacao_financeiras");
	}
}
