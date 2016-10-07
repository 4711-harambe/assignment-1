<?php

class SuppliesModel extends CI_Model {
        
        var $data = array('code' => 'pizza slice',
            'description' => 'Slice of pepperoni pizza.',
            'receivingUnit' => 'slice',
            'receivingCost' => 2,
            'stockingUnit' => 'slice',
            'quantityOnHand' => 16);
        
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// Retrieve all the recipes
	public function all()
	{
		return $this->data;
	}
        
        // Retrieve a single recipe.
        public function singleRecipe($supplyCode) {
            foreach ($this->data as $supply) {
                if ($supply['code'] == $supplyCode) {
                    return $supply;
                }
            }
            
            return null;
        }
}