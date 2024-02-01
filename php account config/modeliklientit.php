

    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    require_once('dbconnect.php');

    class user extends dbconnect {
        private $emri;
        private $email;
        private $age;
        private $dbconn;

        public function __construct($emri = '', $email = '', $age = '') {
            $this->emri = $emri;
            $this->age = $age;
            $this->email = $email;

        
            $this->dbconn = $this->connectdb();
        
        }

        public function setEmri($emri) {
            $this->emri = $emri;
        }

        public function getEmri() {
            return $this->emri;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setAge($age) {
            $this->age = $age;
        }

        public function getAge() {
            return $this->age;
        }

    


        public function insertDhenat() {
            $sql = "INSERT INTO userss (emri,email,age) VALUES (:emri, :email, :age)";
        
            $stm = $this->dbconn->prepare($sql);
            $stm->bindParam(':emri', $this->emri);  
            $stm->bindParam(':email', $this->email);
            $stm->bindParam(':age', $this->age);
        
        
            $stm->execute();
            
            echo "<script>
            alert('dhenat jane ruajtur me sukses,Ju lutem kyquni perseri');   
            document.location = 'index.php';
        </script>";

        }

        public function deleteDhenat($emri){
            $sql="DELETE FROM userss WHERE emri=:emri";
   
            $stm=$this->dbconn->prepare($sql);
            $stm->bindParam(':emri',$emri); 
            $stm->execute();
            if ($stm==true){
               echo "<script>
                   alert('dhenat jane DELETE me sukses');
                   document.location='displaytedhenat.php';
                   </script>";
            }
            else {
                return false;
            }
        }


        public function lexodhenat() {
            $sql = "SELECT * FROM userss";

            $stm = $this->dbconn->prepare($sql);
            $stm->execute();

            $rrezulltati = $stm->fetchAll(PDO::FETCH_ASSOC);

            return $rrezulltati;
        }
    }



    class Contactus {
        private $dbconn; 


        public function __construct($dbconn) {
            $this->dbconn = $dbconn;
        }
    
        public function lexodhenat2() {
            $sql = "SELECT * FROM contactuss";
    
            $stm = $this->dbconn->prepare($sql);
            $stm->execute();
    
            $rrezulltati = $stm->fetchAll(PDO::FETCH_ASSOC);
    
            return $rrezulltati;
        }
        
        public function deleteDhenat2($emri) {
            $sql = "DELETE FROM contactuss WHERE emri = :emri";
        
            $stm = $this->dbconn->prepare($sql);
            $stm->bindParam(':emri', $emri);
            $stm->execute();
        
            if ($stm->rowCount() > 0) {
                echo "<script>
                   alert('Dhenat jane DELETE me sukses');
                   document.location='displaytedhenat.php';
                   </script>";
            } else {
                echo "<script>
                   alert('Error: Dhenat nuk jane DELETE');
                   document.location='displaytedhenat.php';
                   </script>";
            }
}
    }


   

    $test = new user();
    ?>

