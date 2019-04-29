<?php
require_once ("config.php");

class Product {
    public $id, $name, $description, $price, $category, $image, $rating;
    private $pdo;

    public function __construct($id=null, $name=null, $description=null, $price=null, $category=null, $image=null, $rating=null)
    {
        $connString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
        $this->pdo = new PDO($connString, DBUSER, DBPASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($id != null) {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->category = $category;
            $this->images = $image;
            $this->rating = $rating;
        }
    }

    
    /*
     * This function returns product objects Array
     */
    public function GetAllRecords() {
        $sql = "select * from product";
        $result = $this->pdo->query($sql);
        $empArr = array();
        $i = 0;
        while($row = $result->fetch()) {
            $empArr[$i] = new Product($row['id'], $row['Name'],
             $row['description'], $row['image'],$row['price'],$row['image'],$row['category'],$row['rating']);
            $i++;
        }
        return $empArr;
    }

    /*
     * This function returns single Object of this class
     * Search Criteria: id
     */
    public function GetSingleRecord($id) {
        $sql = "SELECT * FROM product WHERE id = $id";
        $result= $this->$pdo->query($sql);
        $row = $result->fetch();
        $empArr = new Product($row['id'], $row['Name'],
        $row['description'], $row['image'],$row['price'],$row['image'],$row['category'],$row['rating']);
        
        return $empArr;

    }
}

?>