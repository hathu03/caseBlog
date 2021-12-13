<?php
include_once "app/View/layout/header.php";
?>
<a href="index.php?page=logout">Logout</a>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="https://cdn-icons-png.flaticon.com/512/49/49334.png" width="30" height="30" class="d-inline-block align-top" alt=""> &ensp;
    <a class="navbar-brand" href="index.php?page=post-list">User List</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=user-list">User <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=post-list">Post</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $user->name ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?page=logout">Logout</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--        </form>-->
        <form class="form-inline my-2 my-lg-0" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="height: 300px; width: 800px" src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img style="height: 300px; width: 800px" src="https://pazanova.com/wp-content/uploads/2015/07/blog-banner.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img style="height: 300px; width: 800px" src="https://image.shutterstock.com/image-photo/website-banner-laptop-female-typing-260nw-1176612745.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>
<h1>User List</h1>
<button class="btn btn-success" style="margin-bottom: 10px">
    <a style="color: white; text-decoration: none" href="index.php?page=user-create">Add New User</a>
</button>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Address</th>
        <th></th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($users) || !empty($users)): ?>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user->id ?></td>
                <td> <img style="width: 150px;height: 150px" src="<?php echo "upload/" . $user->image ?>" alt=""></td>
                <td><?php echo $user->name ?></td>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->birthday ?></td>
                <td><?php echo $user->address ?></td>
                <td>
                    <button class="btn btn-primary" >
                        <a style="color: white; text-decoration: none" href="index.php?page=user-detail&id=<?php echo $user->id ?>">Detail</a>
                    </button>
                </td>

                <td>
                    <button class="btn btn-warning">
                        <a style="text-decoration: none; color: black" href="index.php?page=user-update&id=<?php echo $user->id ?>">Update</a>
                    </button>
                </td>

                <td>
                    <button class="btn btn-danger">
                        <a style="color: white" onclick="return confirm('Are you sure delete this user?')"
                           href="index.php?page=user-delete&id=<?php echo $user->id ?>"><i class="fas fa-trash-alt"></i></a>
                    </button>

                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td>Not found data!</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>