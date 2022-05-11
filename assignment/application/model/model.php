<?php
class Model {
	
	public $dbhandle;
	
	
	public function __construct()
	{
		
		$dsn = 'sqlite:./db/file.db';
		$user = 'user';
		$pass = 'password';
		$options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
			PDO::ATTR_EMULATE_PREPARES   => false, 
		];
		try {	
			$this->dbhandle = new PDO($dsn, $user, $pass, $options);
		}
		catch (PDOEXception $e) {
        	print new Exception($e->getMessage());
    	}
	}
	
	
	public function Insertdb()
	{
		try{
			$this->dbhandle->exec("CREATE TABLE museum (Id INTEGER PRIMARY KEY, brandName TEXT, modelDescription TEXT, modelURL TEXT)");
			$this->dbhandle->exec(
			"INSERT INTO museum (Id, brandName, modelDescription, modelURL) 
				VALUES (0, 'Coke Zore', 'Coca-Cola Zero Sugar is a diet cola produced by The Coca-Cola Company. In some countries, it is sold as Coca-Cola No Sugar. The drink was introduced in 2005 as Coca-Cola Zero as a new no-calorie cola. In 2017, the formula was modified and the name updated, a change which led to some backlash. Another formula change occurred in the U.S. in August 2021 and in Canada in September 2021.', '../application/assets/x3d/cokezero.x3d'); " .
			"INSERT INTO museum (Id, brandName, modelDescription, modelURL) 
				VALUES (1, 'Sprite', 'Sprite is a colorless, lemon and lime-flavored soft drink created by The Coca-Cola Company. It was first developed in West Germany in 1959 as Fanta Klare Zitrone and was introduced in the United States under the current brand name Sprite in 1961 as a competitor to 7 Up. Sprite comes in multiple flavors, including cranberry, cherry, grape, orange, tropical, ginger, and vanilla.', '../application/assets/x3d/Sprite.x3d'); " .
			"INSERT INTO museum (Id, brandName, modelDescription, modelURL) 
				VALUES (2, 'Appletiser', 'Appletiser is a sparkling fruit juice created by blending fruit juice with carbonated water. It was created in 1966 in Elgin Valley, Western Cape, South Africa, by French-Italian immigrant Edmond Lombardi. For export and out of season, the juice is concentrated by extracting the aroma and the water from it. The concentrate can then be stored in cold rooms. In South Africa, the juice is filtered and then immediately bottled, with no water being added. The concentrate can then be converted to juice by adding the water and the concentrated aroma in the original ratios.','../application/assets/x3d/Appletiser.x3d'); ");
			return "Successfully inside tabel1 to file.db";
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	public function Insertdb1()
	{
		try{
			
			$this->dbhandle->exec("CREATE TABLE picture (Id INTEGER PRIMARY KEY, brandName TEXT,  imageURL TEXT,  imageURL1 TEXT)");
			$this->dbhandle->exec(
			"INSERT INTO picture (Id, brandName, imageURL, imageURL1) 
				VALUES (0, 'Coke', '../application/assets/images/coca-cola-index-page.jpg', '../application/assets/images/images1/coke.jpg'); " .
			"INSERT INTO picture (Id, brandName, imageURL, imageURL1) 
				VALUES (1, 'Coke Zore', '../application/assets/images/cc-zero-sugar-index-page.png', '../application/assets/images/gallery_images/coke_model.png'); " .
			"INSERT INTO picture (Id, brandName, imageURL, imageURL1) 
				VALUES (2, 'Appletiser', '../application/assets/images/appletiser-index-page.png', '../application/assets/images/images1/sprite.jpg'); " .
			"INSERT INTO picture (Id, brandName, imageURL, imageURL1) 
				VALUES (3, 'Dr-pepper', '../application/assets/images/dr-pepper-index-page.jpg', '../application/assets/images/gallery_images/sprite_model.png'); " .
			"INSERT INTO picture (Id, brandName, imageURL, imageURL1) 
				VALUES (4, 'Fanta', '../application/assets/images/fanta-gb-tile-580.jpg', '../application/assets/images/images1/appletiser.jpg'); " .
			"INSERT INTO picture (Id, brandName, imageURL, imageURL1) 
				VALUES (5, 'Sprite', '../application/assets/images/sprite-index-page.jpg', '../application/assets/images/gallery_images/appletiser_model.png'); ");
			return "Successfully inside tabel2 to file.db";
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function Readdb(){
		try{
			$sql = 'SELECT * FROM museum';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=0;
			while ($data = $stmt->fetch()) {
				$result['museum'][$i]['brandName'] = $data['brandName'];
				$result['museum'][$i]['modelDescription'] = $data['modelDescription'];
				$result['museum'][$i]['modelURL'] = $data['modelURL'];
				//increment the row index
				$i++;
			}
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
		return $result;
	}

	public function Readdb1(){
		try{
			
			$sql = 'SELECT * FROM picture';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=0;
			while ($data = $stmt->fetch()) {
				$result['picture'][$i]['brandName'] = $data['brandName'];
				$result['picture'][$i]['imageURL'] = $data['imageURL'];
				$result['picture'][$i]['imageURL1'] = $data['imageURL1'];
				$i++;
			}
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
		return $result;
	}
	
	function Deletedb() {
		$this->dbhandle->exec("DROP TABLE museum");
		return "Successfully deleted1";
	}
	function Deletedb1() {
		$this->dbhandle->exec("DROP TABLE picture");
		return "Successfully deleted2";
	}
}
