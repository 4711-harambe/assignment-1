<?php

class StockModel extends CI_Model {
        
        var $data = array(
            array('code' => 'Breakfast',
                'description' => 'The most important meal of the day!',
                'sellingPrice' => 6,
                'quantityOnHand' => 5),
            array('code' => 'Lunch',
                'description' => 'Something to tide you over.',
                'sellingPrice' => 9,
                'quantityOnHand' => 8),
            array('code' => 'Dinner',
                'description' => 'The meat and potatoes of the day.',
                'sellingPrice' => 35,
                'quantityOnHand' => 10),
            array('code' => 'Poker Night',
                'description' => 'Just you and the fellas.',
                'sellingPrice' => 200,
                'quantityOnHand' => 6),
            array('code' => 'Date Night',
                'description' => 'Netflix and chill?',
                'sellingPrice' => 59.99,
                'quantityOnHand' => 3),
            array('code' => 'House Cleaning',
                'description' => 'For that once every couple months occasion.',
                'sellingPrice' => 17,
                'quantityOnHand' => 3));

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// Retrieve all stock.
	public function all()
	{
		return $this->data;
	}
        
        // Retrieve stock information on specific item.
        public function singleRecipe($itemCode) {
            foreach ($this->data as $stock) {
                if ($stock['code'] == $itemCode) {
                    return $stock;
                }
            }
            
            return null;
        }
}