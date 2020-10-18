<?php

class Saldomodel extends CI_model
{
	public function all()
	{
		$query = $this->db->query(
			"SELECT id_conta,
    		SUM(CASE WHEN tipo_movimentacao = 0 THEN valor END) AS despesas,
    		SUM(CASE WHEN tipo_movimentacao = 1 THEN valor END) AS receitas,
    		(SUM(CASE WHEN tipo_movimentacao = 1 THEN valor END) 
    		     - SUM(CASE WHEN tipo_movimentacao = 0 THEN valor END)) AS saldo
			FROM movimentacao_financeiras
			GROUP BY id_conta
			ORDER BY id_conta"
		);

		return $query->result_array();
	}
}

