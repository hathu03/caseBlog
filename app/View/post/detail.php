<h2>Detail</h2>
<button style="margin-bottom: 10px" class="btn btn-info">
    <a style="text-decoration: none; color: white" href="index.php?page=post-list">Back to List</a>
</button>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Conten</th>
        <th>Post_Time</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $post->id ?></td>
        <td><?php echo $post->title ?></td>
        <td><?php echo $post->content ?></td>
        <td><?php echo $post->post_time ?></td>
    </tr>
    </tbody>
</table>
