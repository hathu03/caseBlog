<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">

    <link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">
</head>
<body class="container">
<?php
session_start();

include_once "app/Controller/UserController.php";
include_once "app/Controller/PostController.php";
include_once "app/Controller/AuthController.php";
$userController = new UserController();
$postController = new PostController();
$authController = new AuthController();
$page = $_GET['page'] ?? null;

switch ($page) {
    case "user-list":
        $userController->showAll();
        break;
    case "user-create":
        $userController->create();
        break;
    case "user-delete":
        $userController->delete();
        break;
    case "user-update":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $userController->edit();
        } else {
            $userController->update();
        }
        break;
    case "user-detail":
        $userController->detail();
        break;


    case "post-list":
        $postController->showAll();
        break;
    case "post-create":
        $postController->createPost();
        break;
    case "post-delete":
        $postController->deletePost();
        break;
    case "post-update":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $postController->editPost();
        } else {
            $postController->updatePost();
        }
        break;
    case "post-detail":
        $postController->detailPost();
        break;
    case "login":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showFormLogin();
        } else {
            $authController->login($_REQUEST);
        }
        break;
    case "logout":
        $authController->logOut();
        break;
    default:
        if (isset($_REQUEST["search"])) {
            $userController->search($_REQUEST);
        }
        header("location:index.php?page=login");
}

?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>
