<?php
class Controller
{
    private $db_server = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "test";
    private $conn;

    public function __construct() {
        // Create a connection
        $this->conn = new mysqli($this->db_server, $this->db_user, $this->db_pass, $this->db_name);

        // Check the connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }



    //CREATE
    public function createclient($client) {
        require_once 'Client.php';
       // $client = new Client();
        $name = $client->getName();
        $email = $client->getEmail();
        $password = $client->getPassword();
        $sql="INSERT INTO clients(name,email,password)
                VALUES('$name','$email','$password');";
        mysqli_query($this->conn,$sql);


    }

    public function getClientByEmail($email) {
        require_once "Client.php";
        $sql = "SELECT * FROM clients WHERE email = '$email'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);
            $client = new Client(
                $row['name'],
                $row['email'],
                $row['password']
            );
            $client->setId($row['id']);
            return $client;
        }
        return null;
    }

//    public function updatePersonByEmail($email, $person) {
//        $sql = "UPDATE people SET name = ?, age = ?, gender = ? WHERE email = ?";
//    }
//    public function updatePersonInscriptionByEmail($email, $inscription) {
//        $sql = "UPDATE people SET inscription = '$inscription' WHERE email = '$email'";
//        mysqli_query($this->conn, $sql);
//    }
//
//    public function deletePerson($id) {
//        $sql = "DELETE FROM persons WHERE id = ?";
//        $stmt = $this->conn->prepare($sql);
//
//        // Bind parameters
//        $stmt->bind_param("i", $id);
//
//        // Execute the statement
//        $result = $stmt->execute();
//
//        // Check for success
//        if ($result) {
//            echo "Person deleted successfully.";
//        } else {
//            echo "Error: " . $stmt->error;
//        }
//
//        // Close the statement
//        $stmt->close();
//    }
//
//    public function __destruct() {
//        // Close the database connection when the object is destroyed
//        if ($this->conn) {
//            $this->conn->close();
//        }
//    }


}