<!-- Header -->
<?php include "../header.php"; ?>

<?php 
if (isset($_GET['delete'])) {
    $userid = $_GET['delete'];

    // SQL query to delete data from user table where ID = $userid
    $query = "DELETE FROM user WHERE ID = {$userid}";
    $delete_query = mysqli_query($conn, $query);

    // Redirect to home page after deletion
    header("Location: home.php");
}
?>

<!-- Footer -->
<?php include "footer.php"; ?>
