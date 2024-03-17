<?php
    class Order {
        public $id;
        public $costumerName;
        public $costumerId;
        public $items;
        public $totalPrice;
        public $orderDate;
        public $status; // order status (e.g Shipped, Order Place)

        public function __construct($id, $costumerName, $costumerId, $items, $totalPrice, $orderDate, $status) {
            $this->id = $id;
            $this->costumerName = $costumerName;
            $this->costumerId = $costumerId;
            $this->items = $items;
            $this->totalPrice = $totalPrice;
            $this->orderDate = $orderDate;
            $this->status = $status;
        }

        public function displayInfo() {
            echo "Order ID: $this->id \n";
            echo "Costumer Name: $this->costumerName \n";
            echo "Order date: $this->orderDate \n";
            echo "Status: $this->status \n";
            echo "** Items Ordered **";

            foreach ($this->items as $item) {
                echo $item->displayInfo();
            }

            echo "Total Price: $this->totalPrice";
        }
    }

    $order1 = new Order('1', 'Marc', '1', array('T shirt', 'Pair of Socks', 'Basketball'), '$120', date('d/y/m h:i:s a'), 'pending');
    var_dump($order1);
    print_r($order1);
    // echo(array_values($order1));
?>