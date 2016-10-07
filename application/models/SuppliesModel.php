<?php

class SuppliesModel extends CI_Model {
        
        var $data = array(
            array('code' => 'pizza slice',
                'description' => 'Slice of pepperoni pizza.',
                'receivingUnit' => 'slice',
                'receivingCost' => 2,
                'stockingUnit' => 'slice',
                'quantityOnHand' => 16),
            array('code' => 'kraft dinner',
                'description' => 'Macaroni and cheese.',
                'receivingUnit' => 'box',
                'receivingCost' => 1.5,
                'stockingUnit' => 'box',
                'quantityOnHand' => 10),
            array('code' => 'mountain dew',
                'description' => 'Nectar of the nerds.',
                'receivingUnit' => 'bottle',
                'receivingCost' => 2.5,
                'stockingUnit' => '1L bottle',
                'quantityOnHand' => 13),
            array('code' => 'steak',
                'description' => 'Just the beef.',
                'receivingUnit' => 'single',
                'receivingCost' => 8,
                'stockingUnit' => 'single',
                'quantityOnHand' => 20),
            array('code' => 'baked potatoe',
                'description' => 'Russet potatoe.',
                'receivingUnit' => 'single',
                'receivingCost' => .5,
                'stockingUnit' => 'single',
                'quantityOnHand' => 25),
            array('code' => 'asparagus spear',
                'description' => 'Fresh non-organic asparagus.',
                'receivingUnit' => 'spear',
                'receivingCost' => 3,
                'stockingUnit' => 'spear',
                'quantityOnHand' => 30),
            array('code' => 'beer',
                'description' => 'Local craft beer.',
                'receivingUnit' => 'bottle',
                'receivingCost' => 8,
                'stockingUnit' => '22oz bottle',
                'quantityOnHand' => 25),
            array('code' => 'deck of cards',
                'description' => 'Simple and cheap fun.',
                'receivingUnit' => 'deck',
                'receivingCost' => 1,
                'stockingUnit' => 'deck',
                'quantityOnHand' => 15),
            array('code' => 'poker chips',
                'description' => 'Casino chip set.',
                'receivingUnit' => 'set',
                'receivingCost' => 50,
                'stockingUnit' => 'set',
                'quantityOnHand' => 10),
            array('code' => 'cigars',
                'description' => 'Premium Cuban cigars.',
                'receivingUnit' => 'single',
                'receivingCost' => 15,
                'stockingUnit' => 'single',
                'quantityOnHand' => 40),
            array('code' => 'chips',
                'description' => 'Good old fashioned salt and vinegar.',
                'receivingUnit' => 'bag',
                'receivingCost' => 3.5,
                'stockingUnit' => 'bag',
                'quantityOnHand' => 20),
            array('code' => 'Netflix subscription',
                'description' => 'The be-all end-all of streaming media.',
                'receivingUnit' => 'subscription',
                'receivingCost' => 9.99,
                'stockingUnit' => 'subscription',
                'quantityOnHand' => 9999),
            array('code' => 'candles',
                'description' => 'Fancy-smelling candles.',
                'receivingUnit' => 'single',
                'receivingCost' => 5,
                'stockingUnit' => 'single',
                'quantityOnHand' => 30),
            array('code' => 'wine',
                'description' => 'Run of the mill Riesling.',
                'receivingUnit' => 'bottle',
                'receivingCost' => 15,
                'stockingUnit' => '750ml bottle',
                'quantityOnHand' => 28),
            array('code' => 'wine',
                'description' => 'Run of the mill Riesling.',
                'receivingUnit' => 'bottle',
                'receivingCost' => 15,
                'stockingUnit' => '750ml bottle',
                'quantityOnHand' => 28),
            array('code' => 'febreeze',
                'description' => 'Cleaning supplies for lazy people.',
                'receivingUnit' => 'bottle',
                'receivingCost' => 5,
                'stockingUnit' => 'bottle',
                'quantityOnHand' => 4),
            array('code' => 'garbage bag',
                'description' => 'hefty x-large black garbage bags.',
                'receivingUnit' => 'bag',
                'receivingCost' => 4,
                'stockingUnit' => 'bag',
                'quantityOnHand' => 21));
            
        
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