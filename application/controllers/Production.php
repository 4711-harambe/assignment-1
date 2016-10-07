<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Production extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('recipesModel');
		$this->load->model('suppliesModel');
	}
	/**
	 * Index Page for the Production controller.
	 */
	public function index()
	{
		$recipes = $this->getViewData();
		$this->data['recipes'] = $recipes;
		$this->load->view('production_view', $this->data);
	}


	public function getViewData() {
		$recipes = $this->getRecipes();
		foreach ($recipes as &$recipe) {
			foreach ($recipe['ingredients'] as &$ingredient) {
				$ingredient['amt_in_stock'] = $this->getSupplyCount($ingredient['ingredient']);
			}
		}
		return $recipes;
	}

	public function getRecipes() {
		$recipes = $this->recipesModel->all();
		return $recipes;
	}

	public function getSupplyCount($code) {
		$supplyCount = $this->suppliesModel->singleSupply($code)['quantityOnHand'];
		return $supplyCount;
	}
}
