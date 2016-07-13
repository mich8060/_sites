<?php
    include('application/functions.php');
    // Cycle through the variables in the url
    foreach($_GET as $value){  $clean = key($_GET); }
    
    // Clean the first character and remove all white space
    $clean = ltrim($clean, '/');
    
    // Explode based on forward slash
    $pages = explode("/", $clean);
    
    if($pages[0] == "") {
        $pages[0] = "home";
    }
    
    

    // Execute Template
    
?>
<?php include('sections/head.php'); ?>
<?php include('sections/header.php'); ?>
<?php include('sections/navigation.php'); ?>
<?php include('sections/fixed-navigation.php'); ?>
<div class="screen-overlay"></div>
<main>
    <div class="main-container">
        <?php include('pages/'.$pages[0]).'.php'; ?>
    </div>
</main>
<footer>
    
</footer>

<?php include('sections/foot.php'); ?>