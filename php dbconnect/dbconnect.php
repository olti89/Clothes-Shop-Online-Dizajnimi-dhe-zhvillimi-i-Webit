
    <?php

  class dbconnect { 
    private $conn = null;
    private $host = 'localhost';
    private $dbname = 'projekti';
    private $username = 'root';
    private $password = '';

    public function connectdb() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
           // echo "Lidhja me: {$this->dbname} - {$this->host}: eshte ralizuar me sukses!";
        } catch (PDOException $pdoe) {
            die("nuk mund te lidhej  me bazen e te dhenave {$this->dbname} :" . $pdoe->getMessage());
        }
        return $this->conn;
    }
}
//$link = new dbconnect();
 //$link->connectdb();



    ?>
