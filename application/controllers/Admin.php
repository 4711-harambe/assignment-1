<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Application {

	public function __construct() {
		parent::__construct();
		$this->load->model('recipesModel');
		$this->load->model('suppliesModel');
		$this->load->model('stockModel');
	}
        
	//Index Page for the Admin controller.
	public function index()
	{
		$recipes = $this->getRecipeViewData();
                $stock = $this->getStockViewData();
                $supplies = $this->getSuppliesViewData();
		$this->data['recipes'] = $recipes;
                $this->data['stock'] = $stock;
                $this->data['supplies'] = $supplies;
                
		$this->data['pagetitle'] = "Administrative page";
		$this->data['pagebody'] = 'admin_view';
                
		$this->render();
	}
        
        // Get the recipe data for the view.
	public function getRecipeViewData() {
            $recipes = $this->recipesModel->all();
            
            return $recipes;
	}
        
        //Get the stock data for the view.
        public function getStockViewData() {
            $stock = $this->stockModel->all();
            
            return $stock;
        }
        
        // Get the supplies data for the view.
        public function getSuppliesViewData() {
            $supplies = $this->suppliesModel->all();
            
            return $supplies;
        }
        
        // Add a recipe to the data model.
        public function addRecipe($recipe) {
            $this->recipesModel->addRecipe($recipe);
            $normalCode = str_replace('_', ' ', $recipe['code']);
            $this->phpAlert("Created new recipe: " . $normalCode);
		redirect('/admin', 'refresh');
        }
        
        // Add a stock item to the stock model.
        public function addStock($stock) {
            $this->stockModel->addStock($stock);
            $normalCode = str_replace('_', ' ', $stock['code']);
            $this->phpAlert("Created new stock item: " . $normalCode);
		redirect('/admin', 'refresh');
        }
        
        // Add a supply item to the supply model.
        public function addSupply($supply) {
            $this->suppliesModel->addSupply($supply);
            $normalCode = str_replace('_', ' ', $supply['code']);
            $this->phpAlert("Created new supply item: " . $normalCode);
		redirect('/admin', 'refresh');
        }
        
        // Edit a recipe data model item.
        public function editRecipe($recipe) {
            $normalCode = str_replace('_', ' ',$recipe['code']);
            $this->phpAlert("Recipe: " . $normalCode . " has been updated.");
		redirect('/admin', 'refresh');
        }
        
        // Edit a stock data model item.
        public function editStock($stock) {
            $normalCode = str_replace('_', ' ', $stock['code']);
            $this->phpAlert("Stock item: " . $normalCode . " has been updated.");
		redirect('/admin', 'refresh');
        }
        
        // Edit a supply data model item.
        public function editSupply($supply) {
            $normalCode = str_replace('_', ' ', $supply['code']);
            $this->phpAlert("Supply item: " . $normalCode . " has been updated.");
		redirect('/admin', 'refresh');
        }
        
        // Delete Recipe from data model.
        public function deleteRecipe($code) {
            $normalCode = str_replace('_', ' ', $code);
            $this->recipesModel->deleteRecipe($normalCode);
            $this->phpAlert("Deleted recipe: " . $normalCode);
		redirect('/admin', 'refresh');
        }
        
        // Delete stock item from data model.
        public function deleteStock($code) {
            $normalCode = str_replace('_', ' ', $code);
            $this->stockModel->deleteStock($normalCode);
            $this->phpAlert("Deleted stock item: " . $normalCode);
		redirect('/admin', 'refresh');
        }
        
        // Delete supply item from data model.
        public function deleteSupply($code) {
            $normalCode = str_replace('_', ' ', $code);
            $this->suppliesModel->deleteSupply($normalCode);
            $this->phpAlert("Deleted supply item: " . $normalCode);
		redirect('/admin', 'refresh');
        }

	public function phpAlert($msg) {
	    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
}