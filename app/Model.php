<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// include "../database/connection.php";

class Model {
    
    public $hasil = array();

    public function authenticationLogin($username, $password) {
        require "../database/connection.php";
        $query = mysqli_query($connection, "SELECT * FROM user 
                            WHERE username = '$username' AND password = '$password'");
        $validate = mysqli_num_rows($query);
        if ($validate > 0) {
            $_SESSION['login'] = true;
        } else {
            $_SESSION['login'] = false;
        }

        return $_SESSION['login'];
    }

    // FITUR REQUEST [ARVIN]
    public function showrequest(){
        require __DIR__ . "/../database/Connection.php";
        $query = mysqli_query($connection, "SELECT * FROM service");
        // Fetch data and store it in $this->hasil
        while ($row = mysqli_fetch_assoc($query)) {
            $this->hasil[] = $row;
        }

        return $this->hasil;
    }
    public function addRequest($namaPelanggan, $kontakPelanggan, $merkDevice, $deskripsi) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("INSERT INTO SERVICE (NAMA_PELANGGAN, KONTAK_PELANGGAN, MERK_DEVICE, DESKRIPSI) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $namaPelanggan, $kontakPelanggan, $merkDevice, $deskripsi);
        $stmt->execute();
    }

    public function deleteRequest($id) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("DELETE FROM service WHERE ID_SERVICE = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
    }


    // FITUR REVIEW [ALAM]
    public function saveReview($review, $userId) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("INSERT INTO reviews (review, user_id) VALUES (?, ?)");
        $stmt->bind_param("si", $review, $userId);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function getReviews() {
        require __DIR__ . "/../database/Connection.php";
        $query = "SELECT reviews.review, user.USERNAME FROM reviews JOIN user ON reviews.user_id = user.ID_USER";
        $result = $connection->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getReviewsByUserId($userId) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("SELECT reviews.*, user.USERNAME FROM reviews JOIN user ON reviews.user_id = user.ID_USER WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteReview($reviewId, $userId) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("DELETE FROM reviews WHERE id = ? AND user_id = ?");
        $stmt->bind_param("ii", $reviewId, $userId);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    public function updateReview($reviewId, $userId, $newReview) {
        require __DIR__ . "/../database/Connection.php";
        $stmt = $connection->prepare("UPDATE reviews SET review = ? WHERE id = ? AND user_id = ?");
        $stmt->bind_param("sii", $newReview, $reviewId, $userId);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    } 

    // FITUR APPLY MECHANIC [HAL]
    public function addMechanic($fname, $lname, $contact, $specialist) {
        require '../../database/connection.php';
        $name = $fname . ' ' . $lname;
        $applicant = "Applicant";
        $query = "INSERT INTO mechanic (NAMA_MECHANIC, KONTAK_MECHANIC, ID_SPECIALIST, NOTE) VALUES (?, ?, ?, ?)";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ssss", $name, $contact, $specialist, $applicant);
        $stmt->execute();
        $result = mysqli_query($connection, "SELECT ID_MECHANIC FROM MECHANIC WHERE KONTAK_MECHANIC = '$contact' ORDER BY ID_MECHANIC DESC LIMIT 1");
        $row = mysqli_fetch_assoc($result);
        return $row['ID_MECHANIC'];
    }

    public function findMechianic($contact, $id) {
        require '../../database/connection.php';
        $result = mysqli_query($connection, "SELECT NAMA_MECHANIC, KONTAK_MECHANIC, ID_SPECIALIST, ID_MECHANIC FROM MECHANIC WHERE KONTAK_MECHANIC = '$contact' AND ID_MECHANIC = '$id'");
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function editMechianic($fname, $lname, $contact, $specialist, $id) {
        require '../../database/connection.php';
        $name = $fname . ' ' . $lname;
        $query = "UPDATE MECHANIC SET NAMA_MECHANIC = ?, KONTAK_MECHANIC = ?, ID_SPECIALIST = ? WHERE ID_MECHANIC = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ssss", $name, $contact, $specialist, $id);
        $stmt->execute();
    }

    public function deleteMechanic($id) {
        require '../../database/connection.php';
        $query = "DELETE FROM MECHANIC WHERE ID_MECHANIC = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $id);
        $stmt->execute();
    }

    // FITUR SELL AND BUY SUPPLY [NAU]
    public function getDataSupply() {
        require "../../database/connection.php";

        $result = mysqli_query($connection, "SELECT * FROM supply");

        $rows = array();

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;

    }

    public function getDataPreview($id) {
        require "../../database/connection.php";
        $result = mysqli_query($connection, "SELECT * FROM supply WHERE ID_BARANG = '$id'");
        
        $rows = array();

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }
    
    public function getDataSupplyLaptop() {
        require "../../database/connection.php";
        $result = mysqli_query($connection, "SELECT * FROM supply WHERE ID_CATEGORY = 1");

        $rows = array();

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getDataSupplyDesktop() {
        require "../../database/connection.php";
        $result = mysqli_query($connection, "SELECT * FROM supply WHERE ID_CATEGORY = 2");

        $rows = array();

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getDataSupplyGadget() {
        require "../../database/connection.php";
        $result = mysqli_query($connection, "SELECT * FROM supply WHERE ID_CATEGORY = 3");

        $rows = array();

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function addData($name, $price, $stock, $idcategory, $image) {
        require "../../database/connection.php";

        $query = mysqli_query($connection, "INSERT INTO supply (NAMA_SUPPLY, STOK_SUPPLY, HARGA_SUPPLY, ID_CATEGORY, GAMBAR_SUPPLY) 
                                    VALUES ('$name', '$stock', '$price', '$idcategory', '$image')");

        return $query;
    }

    public function updateData($id, $stock) {
        require "../../database/connection.php";

        $query = mysqli_query($connection, "UPDATE supply 
                                            SET STOK_SUPPLY = STOK_SUPPLY-'$stock' 
                                            WHERE ID_BARANG = '$id'");

        return $query;
    }

    public function deleteData($id) {
        require "../../database/connection.php";

        $query = mysqli_query($connection, "DELETE FROM supply 
                                            WHERE ID_BARANG = '$id'");

        return $query;
    }
    
    // FITUR PROFILE [RYN]

    public function checkPassword($username, $password)
    {
        global $connection;

        if ($connection === null) {
            die('Database connection is null. Check your connection.');
        }

        $stmt = $connection->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
        if (!$stmt) {
            die('Prepare statement failed: ' . $connection->error);
        }

        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();

        if ($stmt->error) {
            die('Error during statement execution: ' . $stmt->error);
        }

        $stmt->store_result();
        $validate = $stmt->num_rows;

        $stmt->close();

        return $validate > 0;
    }

    public function updateUsername($oldUsername, $newUsername)
    {
        global $connection;
        $stmt = $connection->prepare("UPDATE user SET username = ? WHERE username = ?");
        $stmt->bind_param("ss", $newUsername, $oldUsername);
        $stmt->execute();

        if ($stmt->error) {
            echo "Error: " . $stmt->error;
            exit();
        }
    }

    public function updateEmail($username, $newEmail)
    {
        global $connection;
        $stmt = $connection->prepare("UPDATE user SET email = ? WHERE username = ?");
        $stmt->bind_param("ss", $newEmail, $username);
        $stmt->execute();

        if ($stmt->error) {
            echo "Error: " . $stmt->error;
            exit();
        }
    }

    public function updatePassword($username, $newPassword)
    {
        global $connection;
        $stmt = $connection->prepare("UPDATE user SET password = ? WHERE username = ?");
        $stmt->bind_param("ss", $newPassword, $username);
        $stmt->execute();

        if ($stmt->error) {
            echo "Error: " . $stmt->error;
            exit();
        }
    }
}


?>