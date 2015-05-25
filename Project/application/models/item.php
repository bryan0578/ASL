<?php

class Item extends MY_Model {
    
    const DB_TABLE = 'item';
    const DB_TABLE_PK = 'item_id';
    
    public $item_id;
    public $item_name;
    public $item_price;
    public $item_sale_price;
    public $item_stock;
    
}