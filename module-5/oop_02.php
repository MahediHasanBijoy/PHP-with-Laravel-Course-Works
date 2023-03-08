<?php
// Access modifier: private, protected, public

class Fund{
    private $fund;

    public function __construct($initialFund=0)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
    }

    public function deductFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo "Total Fund: {$this->fund}\n";
    }
}

$ourFund = new Fund(100);

$ourFund->addFund(10);
$ourFund->getTotal();

$ourFund->deductFund(5);
$ourFund->getTotal();


