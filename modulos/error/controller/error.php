<?php
namespace Controller;

class Error extends \Framework\Controller {

	protected $modulo = [
		'modulo' 	=> 'error',
		'name'		=> 'Error',
		'send'		=> 'Errors'
	];

	public function index() {
		$this->view->render('back/cabecalho_rodape', $this->modulo['modulo'] . '/view/error/error');
	}
}