<?php
// Start session
<<<<<<< HEAD
@session_start();

//Protect page from unauthorized access
// Check if session is not set before redirecting to home page
if(!isset($_SESSION["id"])){
    header("Location:../index.php");
}
// Declare page title variable
$page_title = "Control Panel";
=======
session_start();

// Protect page from unauthorized access
require('includes/auth_check.php');

// Declare page title variable
$page_title = "Control panel | Gear Out";
>>>>>>> dac6550cea7f9ca330b8ff5639c084f57c0426dd

// Call header and navigation files
include('includes/header.php');
include('includes/nav.php');
?>
<<<<<<< HEAD

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
=======
<p class="text-end me-5 mt-2 fs-4">Signed in: <?php echo htmlspecialchars($_SESSION['firstname'] . ' ' . $_SESSION['lastname']); ?></p>

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-center">
            <h2 class="pb-4">Welcome back, <?php echo htmlspecialchars($_SESSION['firstname']); ?></h2>
            <a href="borrow.php"><button class="btn btn-danger btn-lg m-2">Log a new loan</button></a>
            <a href="manage_loans.php"><button class="btn btn-primary btn-lg m-2">Manage loans</button></a>
        </div>
        <div class="col-sm-3"></div>
    </div>
>>>>>>> dac6550cea7f9ca330b8ff5639c084f57c0426dd
</div>

<?php
// Call footer
include('includes/footer.php');
<<<<<<< HEAD

=======
>>>>>>> dac6550cea7f9ca330b8ff5639c084f57c0426dd
?>