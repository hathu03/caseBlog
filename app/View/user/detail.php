<h2>Detail</h2>
<button class="btn btn-info" style="margin-bottom: 10px">
    <a style="text-decoration: none; color: white" href="index.php?page=user-list">Back</a>
</button>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $user->id ?></td>
        <td><?php echo $user->name ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->birthday ?></td>
        <td><?php echo $user->address ?></td>
    <tr>
    </tbody>
</table>
