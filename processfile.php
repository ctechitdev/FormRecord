<?php
 
 
class process{
	
	private $host  = 'localhost';
    private $user  = 'kplaocom';
    private $password   = "0n8fRMmIFV1F";
    private $database  = "kplaocom_pjprecord";         
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
        $conn -> set_charset("utf8");
    }
	
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}
	
	 
	 	
	public function ItemRequest($POST) {
		 
		$sqlInsert = "
			INSERT INTO tbl_order (sale_id,cus_id,date_check) 
			VALUES ('".$POST['sale_id']."', '".$POST['cus_id']."', '".$POST['meeting_date']."' )";		
		mysqli_query($this->dbConnect, $sqlInsert);
		$lastInsertId = mysqli_insert_id($this->dbConnect);
	 
		for ($i = 0; $i < count($POST['quantity']); $i++) {
			$sqlInsertItem = " insert into tbl_order_detail (order_id,item_id,units_name,quantity) values ('".$lastInsertId."','".$POST['itemtype'][$i]."','".$POST['unit'][$i]."' ,'".$POST['quantity'][$i]."' )";			
			mysqli_query($this->dbConnect, $sqlInsertItem);
		}
		return 1;
	}
	
 
 
	  
	 
	
	public function GetStaffInfo1305(){
		$sqlQuery = " SELECT * From salesperson where s_scode=1305 ";
		return  $this->getData($sqlQuery);	
	}
	
	public function GetCusInfo1305(){
		$sqlQuery = "SELECT * From customers where salescode=1305 ";
		return  $this->getData($sqlQuery);	
	}
	
	public function GetStaffInfo1297(){
		$sqlQuery = " SELECT * From salesperson where s_scode=1297 ";
		return  $this->getData($sqlQuery);	
	}
	
	public function GetCusInfo1297(){
		$sqlQuery = "SELECT * From customers where salescode=1297 ";
		return  $this->getData($sqlQuery);	
	}
	
	
	public function GetItemDropdowwn(){
		$sqlQuery = " select * from item ";
		return  $this->getData($sqlQuery);	
	}
	
	 
 
	 
}
?>