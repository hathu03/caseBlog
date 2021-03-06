<?php
include_once "app/Model/PostModel.php";

class PostController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function showAll()
    {
        $posts = $this->postModel->getAll();
        include_once "app/View/post/list.php";
    }

    public function createPost()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "app/View/post/create.php";
        } else {
            if (isset($_FILES["fileUpToLoad"])) {
                $targetFolder = "upload/";
                $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
                $targetFile = $targetFolder . $nameImage;
                if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                    echo "Upload successfull";
                    $_REQUEST["image"] = $nameImage;
                } else {
                    echo "Upload Failure";
                }
            }
            try {
                $this->postModel->addPost($_REQUEST);
                header("location:index.php?page=post-list");
            } catch (PDOException $e) {
                echo "ERRoR" . $e->getMessage();
                header("location:index.php?page=post-list");
            }
        }
    }

    public function deletePost()
    {
        if (isset($_REQUEST['id'])){
            $this->postModel->delete($_REQUEST['id']);
            header("location:index.php?page=post-list");
        }else {
            header("location:index.php?page=post-list");
        }
    }

    public function editPost()
    {
        if (isset($_REQUEST['id'])){
            $post = $this->postModel->getById($_REQUEST['id']);
            include_once "app/View/post/update.php";
        }
    }

    public function updatePost()
    {
        if (isset($_REQUEST['id'])){
            $post = $this->postModel->getById($_REQUEST["id"]);
            $_REQUEST["image"] = $post->image;
            if (isset($_FILES["fileUpToLoad"])) {
                $targetFolder = "upload/";
                $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
                $targetFile = $targetFolder . $nameImage;
                if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                    echo "Upload successfull";
                    $_REQUEST["image"] = $nameImage;
                } else {
                    echo "Upload failure";
                }
            }

            $this->postModel->updatePost($_REQUEST);
            header("location:index.php?page=post-list");
        }
    }

    public function detailPost()
    {
        if (isset($_REQUEST['id'])){
            $post = $this->postModel->getById($_REQUEST['id']);
            include_once "app/View/post/detail.php";
        }
    }
}