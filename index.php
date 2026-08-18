<?php
session_start();
// Declare variable
$page_title = "RUGBY GEAR| Home";
// Call files
include('includes/header.php');
include('includes/nav.php');
?>
<!-- Start of content 1 -->
<div class="container text-center pt-5">
    <div class="row align-items-start">
        <div class="col">
            <h1>RUGBY GEAR</h1>
            <p class="lead">Track Rugby Gear when goes missing</p>
        </div>
    </div>
</div>
<!-- Start of cards -->
<div class="container pt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card text-center h-100">
                <div class="card-body d-flex flex-column">
                    <i class="fa-solid fa-circle-info fa-3x mb-3"></i>
                    <h5 class="card-title">Rugby Gear</h5>
                    <p class="card-text">We can help you track your rugby gears.</p>
                    <a class="mt-auto" href="how_it_works.php"><button type="button" class="btn btn-danger btn-lg">Click me to find more <Info class=""></Info></button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center h-100">
                <div class="card-body d-flex flex-column">
                    <i class="fa-solid fa-list-check fa-3x mb-3"></i>
                    <h5 class="card-title">What is available</h5>
                    <p class="card-text">GEAR list.</p>
                    <a class="mt-auto" href="view_loans.php"><button type="button" class="btn btn-danger btn-lg">View loans</button></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center h-100">
                <div class="card-body d-flex flex-column">
                    <i class="fa-solid fa-user-shield fa-3x mb-3"></i>
                    <h5 class="card-title"><?php echo isset($_SESSION['id']) ? 'Control panel' : 'LOGIN TO RUGBY GEAR'; ?></h5>
                    <p class="card-text">Log a loan, or mark equipment as returned.</p>
                    <a class="mt-auto" href="<?php echo isset($_SESSION['id']) ? 'control_panel.php' : 'login.php'; ?>">
                        <button type="button" class="btn btn-danger btn-lg"><?php echo isset($_SESSION['id']) ? 'Open' : 'Log in'; ?></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Call footer
include('includes/footer.php');
?>

