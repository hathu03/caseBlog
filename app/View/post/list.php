<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php?page=post-list">Post List</a>
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
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!--<h2>Post List</h2>-->
<button class="btn btn-success" style="margin-bottom: 10px; margin-top: 10px">
    <a style="color:white; text-decoration: none" href="index.php?page=post-create">Add New Blog</a>
</button>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Title</th>
        <th>Content</th>
        <th>Post_Time</th>
        <th></th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post->id ?></td>
                <td> <img style="width: 150px;height: 150px" src="<?php echo "upload/" . $post->image ?>" alt=""></td>
                <td><?php echo $post->title ?></td>
                <td><?php echo $post->content ?></td>
                <td><?php echo $post->post_time ?></td>
                <td>
                    <button class="btn btn-primary">
                        <a style="color: white; text-decoration: none" href="index.php?page=post-update&id=<?php echo $post->id ?>">Update</a>
                    </button>

                </td>
                <td>
                    <button class="btn btn-warning">
                        <a style="text-decoration: none; color: black" href="index.php?page=post-detail&id=<?php echo $post->id ?>">Detail</a>
                    </button>

                </td>
                <td>
                    <button class="btn btn-danger">
                        <a style="text-decoration: none; color: white" onclick="return confirm('Are you sure delete this post?')" href="index.php?page=post-delete&id=<?php echo $post->id ?>"><i class="fas fa-trash-alt"></i></a>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Empty blog!</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
