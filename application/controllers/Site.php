<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	/**
	 * Exibe página com formulário de cadastro trabalhe conosco
	 */
	public function TrabalheConosco()
	{

		$data['title'] = 'Trabalhe Conosco - EMPRESA';
		$data['description'] = "Venha trabalhar conosco";
		
		$this->load->view('trabalhe-conosco', $data);
		
	}
	/**
	 * Registra o usuário no banco de dados
	 */
	public function  TrabalheConoscoInsert()
	{

		// Regras de validação
		//$this->form_validation->set_rules('')
		
	}

	/**
	 * Exibe página para consultar a situação
	 */
	public function Consultar()
	{

	}
	/**
	 * Exibe página com formulário de login
	 */
	public function Login()
	{

	}
	
	/**
	 * Exibe página com formulário para recuperação da senha atráves do e-mail
	 */
	public function EsqueciSenha()
	{

	}
}
