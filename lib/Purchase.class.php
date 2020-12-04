<?php
namespace ECweb\lib;

class Purchase
{
  private $db = null;

  public function __construct($db)
  { $this->db = $db; }
  
  public function insPurchase($dataArr,$purchase_unit)
  {
    $table = ' purchase ';
    $insData = [
      'purchase_unit' => $purchase_unit,
      'customer_no' => $dataArr['customer_no'],
      'item_id' => $dataArr['item_id'],
      'item_name' => $dataArr['item_name'],
      'price' => $dataArr['price'],
      'image' => $dataArr['image'],
      'quantity' => $dataArr['NUM'],
      'regist_date' => date("Y-m-d H:i:s")
    ];
    return $this->db->insert($table, $insData);
  }

    public function purchase_history($customer_no)
    {
    $table = ' purchase ';
    $column = 'purchase_unit, item_id, item_name, price, image, quantity, regist_date';
    $where = ' customer_no=? ';
    $arrVal = [$customer_no];
    return $this->db->select($table, $column, $where, $arrVal);
  }
}