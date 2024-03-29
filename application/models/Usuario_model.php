<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	
	private $table;
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->table = 'usuarios';
	}

	/**
	 * Insere um usuário no banco de dados
	 */
	public function save($data) {
		if($result = $this->findByCPF($data['cpf'])) {	
			
			// $this->db->where('id', $result->id);
			// $this->db->update('usuarios', $data);

			$this->edit($result->id, $data);
			$userID = $result->id;
		} else {
			$this->db->insert($this->table, $data);
			$userID = $this->db->insert_id();
		}
		if($userID) {
			return $this->find($userID);
		} else {
			return false;
		}
	}
	/**
	 * Atualiza os dados do usuário, através do id informado
	 */
	public function edit($id, $data) {
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
	}
	/**
	 * Atualiza os dados do usuário, através do cpf informado
	 */
	public function editByCPF($cpf, $data) {
		$this->db->where('cpf', $cpf);
		$this->db->update($this->table, $data);
	}

	/**
	 * Busca um usuário no banco de dados, através do $id informado
	 */
	public function find($id) {
		$this->db->select('*')->from($this->table)->where('id', $id);
		$result = $this->db->get()->result();

		if($result) {
			return $result[0];
		} else {
			return false;
		}
	}

	/**
	 * Busca usuário no banco de dados, através do $cpf informado
	 */
	public function findByCPF($cpf) {
		$this->db->select('*')->from($this->table)->where('cpf', $cpf);
		$result = $this->db->get()->result();

		if($result) {
			return $result[0];
		} else {
			return false;
		}
	}
}
