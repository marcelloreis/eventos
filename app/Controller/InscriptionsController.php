<?php
App::uses('AppController', 'Controller');
/**
 * Inscriptions Controller
 *
 * O controller 'Inscriptions' é responsável por gerenciar 
 * toda a lógica do model 'Inscription' e renderizar o seu retorno na interface da aplicação.
 *
 * PHP 5
 *
 * @copyright     Copyright 2013-2013, Nasza Produtora
 * @link          http://www.nasza.com.br/ Nasza(tm) Project
 * @package       app.Controller
 *
 * @property Inscription $Inscription
 */
class InscriptionsController extends AppController {

/**
	* Método index
	* Este método contem regras de negocios que permitem visualizar todos os registros contidos na entidade do controlador
	*
	* @override Metodo AppController.index
	* @param string $period (Periodo das movimentacoes q serao listadas)
	* @return void
	*/
	public function index($params=array()){
		//@override
		parent::index($params);
	}		

	/**
	* Método edit
	* Este método contem regras de negocios que permitem adicionar e editar registros na base de dados
	*
	* @override Metodo AppController.edit
	* @param string $id
	* @return void
	*/
	public function edit($id=null){
		//@override
		parent::edit($id);

		$payment_type = array(PAGSEGURO => 'PagSeguro', DINHEIRO => 'Dinheiro');
		$this->set(compact('payment_type'));
	}
}
