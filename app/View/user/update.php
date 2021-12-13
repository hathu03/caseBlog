<h2>Update user</h2>
<form method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>Name</td>
        <td>
            <input type="text" name="name" placeholder="Enter Name" value="<?php echo $user->name ?>">
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td>
            <input type="email" name="email" placeholder="Enter Email" value="<?php echo $user->email ?>">
        </td>
    </tr>
    <tr>
        <td>Password</td>
        <td>
            <input type="text" name="password" placeholder="Enter Password" value="<?php echo $user->password ?>">
        </td>
    </tr>
    <tr>
        <td>Birthday</td>
        <td>
            <input type="date" name="birthday" placeholder="Enter your birthday" value="<?php echo $user->birthday ?>">
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td>
            <select name="address">
                <option <?php echo $user->address=="Ha Noi"?"selected":"" ?> value="Ha Noi">Hà Nội</option>
                <option <?php echo $user->address=="Hue"?"selected":"" ?> value="Hue">Huế</option>
                <option <?php echo $user->address=="Phu Tho"?"selected":"" ?> value="Phu Tho">Phú Thọ</option>
                <option <?php echo $user->address=="Hai Duong"?"selected":"" ?> value="Hai Duong">Hải Dương</option>
                <option <?php echo $user->address=="Da Nang"?"selected":"" ?> value="Da Nang">Đà Nẵng</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Image</td>
        <td>
            <input class="form-control" type="file" name="fileUpToLoad" placeholder="Image Link">
            <img style="width: 150px; height: 150px" src="<?php echo "upload/" . $user->image ?>" alt="">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button type="submit">Update</button>
            <a href="index.php">
                <button>Back</button></a>
        </td>
    </tr>
</table>
</form>
