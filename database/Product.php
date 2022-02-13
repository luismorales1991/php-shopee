<?php

class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->conn)) return null;
        $this->db = $db;
    }

    public function getData($table = "product")
    {
        $result = $this->db->conn->query(query: "SELECT * FROM {$table}");
        $resultArray = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_array()) {
                $resultArray[] = $row;
            }
        }

        return $resultArray;
    }

    public function getProduct($item_id = null, $table = "product"){
        if(isset($item_id)){
            $result = $this->db->conn->query("SELECT * FROM ($table) WHERE item_id=($item_id)");
            $resultArray = array();

            while($item = mysqli_fetch_array($result)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }
}
