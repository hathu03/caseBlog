<?php
include_once "app/Model/UserModel.php";

class UserController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showAll()
    {
        $users = $this->userModel->getAll();
        include_once "app/View/user/list.php";
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "app/View/user/create.php";
        } else{
            try {
                $this->userModel->store($_REQUEST);
                header("location:index.php?page=user-list");
            }catch (PDOException $e){
                echo ("ERROR".$e->getMessage());
            }
        }
    }

    public function delete()
    {
        if (isset($_REQUEST['id'])){
            $this->userModel->delete($_REQUEST['id']);
            header("location:index.php?page=user-list");
        } else {
            header("location:index.php?page=user-list");
        }
    }

    public function edit()
    {
        if (isset($_REQUEST['id'])){
            $user = $this->userModel->getById($_REQUEST['id']);
            include_once "app/View/user/update.php";
        }
    }

    public function update()
    {
        if (isset($_REQUEST['id'])){
            $this->userModel->update($_REQUEST);
            header("location:index.php?page=user-list");
        }
    }

    public function detail()
    {
        if (isset($_REQUEST['id'])){
            $user = $this->userModel->getById($_REQUEST['id']);
            include_once "app/View/user/detail.php";
        }
    }
}