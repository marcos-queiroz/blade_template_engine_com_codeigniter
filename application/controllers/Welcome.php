<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$dados = array(
			'page_title' => 'CodeIgniter com Blade Template Engine!',
			'page_content' => 'Esse é um exemplo do CodeIgniter com Blade Template Engine'
		);
		$this->blade->view('welcome_message', $dados);
	}
}
