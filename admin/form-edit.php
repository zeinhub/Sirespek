<?php
// include database connection file
include_once("../config/koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $status = $_POST['status'];

    // update user data
    $result = mysqli_query($conn, "UPDATE transaksi SET status='$status' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM transaksi WHERE id=$id");

while ($data = mysqli_fetch_array($result)) {
    $nopol = $data['nopol'];
    $status = $data['status'];
}
?>
<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="form-edit.php">
        <table border="0">
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" value=<?php echo $status; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>