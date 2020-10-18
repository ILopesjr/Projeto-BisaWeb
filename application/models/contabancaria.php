<?php

class Contabancaria extends CI_model
{
	public function all()
	{
		return $this->db->get("conta_bancarias")->result_array();
	}

	public function store($data)
	{
		$this->db->insert("conta_bancarias", $data);
	}

	public function show($id)
	{
		return $this->db->get_where("conta_bancarias", array("id" => $id))->row_array();
	}

	public function update($id, $conta)
	{
		$this->db->where("id", $id);
		return $this->db->update("conta_bancarias", $conta);
	}

	public function destroy($id)
	{
		$this->db->where("id", $id);
		return $this->db->delete("conta_bancarias");
	}
}
