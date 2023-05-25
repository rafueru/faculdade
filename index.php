<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<div class="content">
	<h2>Home</h2>
	<p>Cadastro de alunos!</p>
</div>

<?=template_footer()?>

<div class="content">
    <h2>Cadastro de Alunos</h2>
    <p>Use uma das opções abaixo para se cadastrar:</p>
    <a href="auth-instagram.php">Login com Instagram</a>
    <a href="auth-gmail.php">Login com Gmail</a>
    <a href="auth-facebook.php">Login com Facebook</a>
</div>
