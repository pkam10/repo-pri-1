
<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Formate.php');

?>

<?php
 
class Product{
	
private $db;
private $fm;

	public function __construct()
	{
		
		$this->db = new Database();
		$this->fm = new Format();
	}

public function getAllProduct(){

$query = "SELECT p.*,c.catName,b.brandName
FROM tbl_product as p,tbl_category as c, tbl_brand as b
WHERE p.catId = c.catId AND p.brandId = b.brandId
ORDER BY p.productId DESC";

/*
$query = "SELECT tbl_product.*, tbl_category.catName,tbl_brand.brandName
FROM tbl_product

INNER JOIN tbl_category
ON tbl_product.catId = tbl_category.catId

INNER JOIN tbl_brand
ON tbl_product.brandId = tbl_brand.brandId
ORDER BY tbl_product.productId DESC";
*/

	$result = $this->db->select($query);
	return $result;
}

public function getProById($id){

	$query = "SELECT * FROM tbl_product WHERE productId = '$id'";
	$result = $this->db->select($query);
	return $result;

}


public function getFeaturedProduct(){               //getting featuredproductbasedntype

	$query = "SELECT * FROM tbl_product WHERE type = '0' ORDER BY productId DESC LIMIT 4";
	$result = $this->db->select($query);
	return $result;
}

public function getNewProduct(){                    //gettingnewproduct
   $query = "SELECT * FROM tbl_product ORDER BY productId DESC LIMIT 4";
	$result = $this->db->select($query);
	return $result;

}

public function getSingleProduct($id){               //getting details of single book

	$query = "SELECT p.*,c.catName,b.brandName
FROM tbl_product as p,tbl_category as c, tbl_brand as b
WHERE p.catId = c.catId AND p.brandId = b.brandId AND p.productId = '$id'";
	$result = $this->db->select($query);
	return $result;
}



public function getTopbrandkids(){

	$query = "SELECT * FROM tbl_product WHERE brandId = '5' ORDER BY productId DESC LIMIT 4";
	$result = $this->db->select($query);
	return $result;
}
public function getTopbrandhealth(){

	$query = "SELECT * FROM tbl_product WHERE brandId = '2' ORDER BY productId DESC LIMIT 4";
	$result = $this->db->select($query);
	return $result;
}

public function getTopbrandliterature(){

	$query = "SELECT * FROM tbl_product WHERE brandId = '3' ORDER BY productId DESC LIMIT 4";
	$result = $this->db->select($query);
	return $result;
}

public function getTopbrandacademic(){

	$query = "SELECT * FROM tbl_product WHERE brandId = '4' ORDER BY productId DESC LIMIT 4";
	$result = $this->db->select($query);
	return $result;
}
}

?>