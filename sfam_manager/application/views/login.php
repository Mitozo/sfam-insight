<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
     <?php
        $this->load->view("layouts/header_inc")
    ?>
</head>
  <body class="bg-black">
        <!-- MAIN CONTENT -->
        <div class="form-box" id="login-box">
            <div class="header">Authentification</div>
            <form action="../../index.html" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="Utilisateur"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe"/>
                    </div>          
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">S'authentifier</button>  
                    
                    <p><a href="#">Mot de passe oublier</a></p>
                    
                    <a href="register.html" class="text-center">Enregistrer un nouvel utilisateur</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>***** ___Gestionnaire des activit&eacute;s du SFAM___  *****</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-star"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-globe"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-star"></i></button>

            </div>
        </div>
        <!-- MAIN CONTENT -->
    <?php $this->load->view("layouts/footer"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php  $this->load->view("layouts/footer_inc"); ?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
</body>
</html>