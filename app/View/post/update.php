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
                    <?php echo $post->title ?>
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


<form method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name="title" placeholder="Title" value="<?php echo $post->title?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Content</label>
        <div class="col-sm-10">
            <input type="text" name="content" placeholder="Content" value="<?php echo $post->content?>" class="form-control" id="inputPassword">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Post Time</label>
        <div class="col-sm-10">
            <input type="date" name="post_time" placeholder="Post_time" value="<?php echo $post->post_time?>" class="form-control" id="inputPassword">
        </div>
    </div>
<!--    <div class="form-group row">-->
<!--        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>-->
<!--        <div class="col-sm-10">-->
<!--            <input type="file" name="fileUpToLoad" placeholder="Image Link" class="form-control" id="inputPassword">-->
<!--        </div>-->
<!--    </div>-->
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input type="file" name="fileUpToLoad" placeholder="Image Link" class="form-control">
            <img style="width: 150px; height: 150px" src="<?php echo "upload/" . $post->image ?>" alt="">
        </div>
    </div>


    <button type="submit" class="btn btn-warning">Update</button>
    <a href="index.php?page=post-list">
        <button type="button" class="btn btn-secondary">Back to Post List</button></a>
</form>
