<?php
// Start session
@session_start();

//Protect page from unauthorized access
// Check if session is not set before redirecting to home page
if(!isset($_SESSION["id"])){
    header("Location:../index.php");
}
// Declare page title variable
$page_title = "Control Panel";

// Call header and navigation files
include('includes/header.php');
include('includes/nav.php');
?>

<!-- Start of content -->
<?php
echo "<p class='text-end me-5 mt-2 fs-4'>user: " . $_SESSION["id"] . "</p>";
?>
<!-- Start of content one -->
<div class ="container">
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
        <?php
            if (isset($_SESSION["id"])){
                echo "<p class='text-center'>Welcome back, " . $_SESSION["firstname"] . " " . $_SESSION["lastname"]. "</p>";
            }
        ?>
        </div> 
        <div class="col-sm-3">

        </div>
</div>

<?php
// Call footer
include('includes/footer.php');
?>