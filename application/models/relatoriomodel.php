<?php

class Relatoriomodel extends CI_model
{
	public function all()
	{
		$this->db->select('*');
		$this->db->from('movimentacao_financeiras');
		$this->db->order_by('tipo_movimentacao', 'desc');
		$this->db->group_by(['tipo_movimentacao', 'data_movimentacao', 'id']);

		$query = $this->db->get()->result_array();

		return $query;
	}
}

