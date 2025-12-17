<?php
$conn = mysqli_connect("localhost", "root", "", "tourism");
if (isset($_GET["query"])) {

    $destinationID = $_GET["query"];
    $sql = "SELECT * FROM destination WHERE destinationID = '$destinationID'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <img src="<?php echo $row["imageURL"]; ?>" alt="">
    <?php
    echo $row["destination"];
    echo $row["description"];
?>

   <?php
$conn = mysqli_connect("localhost", "root", "", "tourism");

if (isset($_GET["query"])) {
    $destinationID = $_GET["query"];
    $sql = "SELECT * FROM destination WHERE destinationID = '$destinationID'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
    <div class="destination-details">
        <img src="<?php echo $row["imageURL"]; ?>" alt="">
        <h2><?php echo $row["destination"]; ?></h2>
        <p><?php echo $row["description"]; ?></p>
    </div>
<?php
}
?>

    <?php

}
echo "";

