<?php

class TransactionLogs extends CI_Model {
        
        // Log information.
	var $data = array(
            array('spentPurchasing' => 10000, 
                'earnedSales' => 17500, 
                'ingredientsConsumed' => array(
                    array('code' => 'deck of cards', 'amount' => 4, 'value' => 4),
                    array('code' => 'poker chips', 'amount' => 4, 'value' => 200),
                    array('code' => 'chips', 'amount' => 6, 'value' => 42),
                    array('code' => 'cigars', 'amount' => 20, 'value' => 300),
                    array('code' => 'Netflix subscription', 'amount' => 3, 'value' => 29.97),
                    array('code' => 'candles', 'amount' => 12, 'value' => 60),
                    array('code' => 'wine', 'amount' => 6, 'value' => 90))));

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}
        
        //Add a log entry to the data model.
        public function addLog($purchasingSpent, $salesEarned, $consumedIngredients) {
           $spentPurchasing = 0;
           $earnedSales = 0;
           $ingredientsConsumed = array();
           $ingredientsOrdered = array();
           
           if (!is_null($spentPurchasing)) {
               $spentPurchasing = $purchasingSpent;
           }
           
           if (!is_null($earnedSales)) {
               $earnedSales = $salesEarned;
           }
           
           foreach ($consumedIngredients as $ingredient){
               array_push($ingredientsConsumed, $ingredient);
           }
           
           $data = array(
               'spentPurchasing' => $spentPurchasing,
               'earnedSales' => $earnedSales,
               'ingredientsConsumed' => $ingredientsConsumed,
               'ingredientsOrdered' => $ingredientsOrdered
            );

            $this->db->insert($data);
        }

	// Retrieve the money spent on purchasing.
	public function RetrieveMoneySpentPurchasing()
	{
            $cost = 0;
            foreach($this->data as $log){
                $cost += $log['spentPurchasing'];
            }
            
            return $cost;
	}
        
        // Retrieve money earned in sales.
        public function RetrieveMoneyEarnedSales() 
        {
            $revenue = 0;
            
            foreach ($this->data as $log) {
                $revenue += $log['earnedSales'];
            }
            
            return $revenue;
        }
        
        //Retrieve the amount consumed of a specific ingredient.
        public function RetrieveConsumedIngredientAmount($ingredient) {
            $consumedAmount = 0;
            
            foreach($this->data as $log){
                foreach ($log['ingredientsConsumed'] as $ingredients){
                    if ($ingredients['code'] == $ingredient) {
                        $consumedAmount += $ingredients['amount'];
                    }
                }
            }
            
            return $consumedAmount;
        }
        
        //Retrieve the amount consumed of a specific ingredient.
        public function RetrieveConsumedIngredientvalue($ingredient) {
            $consumedvalue = 0;
            
            foreach($this->data as $log){
                foreach ($log['ingredientsConsumed'] as $ingredients){
                    if ($ingredients['code'] == $ingredient) {
                        $consumedvalue += $ingredients['value'];
                    }
                }
            }
            
            return $consumedvalue;
        }
}