<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
     <?php
        $this->load->view("layouts/header_inc")
    ?>
</head>
<body>
    <div class="container">
    <?php $this->load->view("layouts/header");?>
        <!-- MAIN CONTENT -->
        <!-- MAIN CONTENT -->
    <?php $this->load->view("layouts/footer"); ?>
    </div> <!-- FIN CONTAINER -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php  $this->load->view("layouts/footer_inc"); ?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
</body>
</html>