<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends Application {

	public function __construct() {
		parent::__construct();
	}
	/**
	 * Index Page for the Production controller.
	 */
	public function index()
	{
                $this->data['pagebody'] = 'sales_view';
		//$sales = $this->getViewData();
		//$this->data['sales'] = $sales;
                
                $this->render();
	}

}
