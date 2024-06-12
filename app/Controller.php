<?php

// session_start();

include ("Model.php");

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function showrequest(){
        return $this->model->showrequest();
    }

    public function addrequest($namaPelanggan, $kontakPelanggan, $merkDevice, $deskripsi){
        $this->model->addrequest($namaPelanggan, $kontakPelanggan, $merkDevice, $deskripsi);
    }

    public function deleteRequest($id){
        $this->model->deleteRequest($id);
    }

    public function saveReview($review) {
        $userId = $_SESSION['user_id'];
        return $this->model->saveReview($review, $userId);
    }
    
    public function getReviews() {
        return $this->model->getReviews();
    }

    public function getMyReviews($userId) {
        return $this->model->getReviewsByUserId($userId);
    }

    public function deleteReview($reviewId) {
        $userId = $_SESSION['user_id'];
        return $this->model->deleteReview($reviewId, $userId);
    }

    public function updateReview($reviewId, $newReview) {
        $userId = $_SESSION['user_id'];
        return $this->model->updateReview($reviewId, $userId, $newReview);
    }

    public function displayMechanicPage() {
        include("mechanic-list.php");
    }

    public function inputMechanic($fname, $lname, $contact, $specialist) {
        return $this->model->addMechanic($fname, $lname, $contact, $specialist);
    }

    public function searchMechanic($contact, $id){
        return $this->model->findMechianic($contact, $id);
    }

    public function modifyMechanic($fname, $lname, $contact, $specialist, $id) {
        $this->model->editMechianic($fname, $lname, $contact, $specialist, $id);
    }

    public function removeMechanic($id) {
        $this->model->deleteMechanic($id);
    }

    public function getDataSupply() {
        return $this->model->getDataSupply();
    }   

    public function getDataSupplyLaptop() {
        return $this->model->getDataSupplyLaptop();
    }

    public function getDataSupplyDesktop() {
        return $this->model->getDataSupplyDesktop();
    }

    public function getDataSupplyGadget() {
        return $this->model->getDataSupplyGadget();
    }

    public function getDataPreview($id) {
        return $this->model->getDataPreview($id);
    }

    public function addData($name, $price, $stock, $idcategory, $image) {
        $this->model->addData($name, $price, $stock, $idcategory, $image);
    }

    public function displaySupplyPage() {
        include("supply-list.php");
    }

    public function updateData($id, $stock) {
        $this->model->updateData($id, $stock);
    }   

    public function deleteData($id) {
        $this->model->deleteData($id);
    }   

    public function editProfile($currentPassword, $newUsername, $newEmail, $newPassword)
    {
        $username = $_SESSION['username'];
        $result = $this->model->checkPassword($username, $currentPassword);

        if ($result) {
            $this->model->updateUsername($username, $newUsername);

            if (!empty($newEmail)) {
                $this->model->updateEmail($username, $newEmail);
            }

            if (!empty($newPassword)) {
                $this->model->updatePassword($username, $newPassword);
            }

            $_SESSION['username'] = $newUsername;
            $_SESSION['update_success'] = true;
            header("location: ../dashboard.php");
            exit();
        } else {
            $_SESSION['update_error'] = "Current password is incorrect.";
            header("location: editProfil.php");
            exit();
        }
    }
}

?>