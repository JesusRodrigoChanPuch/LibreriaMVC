<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>El soñador</title>
</head>

<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="<?= base_url('/') ?>"><img src="./public/uploads/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        El Soñador</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- incio de menu de opciones  para admin-->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <?php
                if($autenticado){?>
                    <a class="nav-link" href="<?= base_url('/UsuarioController/cerrarSesion') ?>">Cerrar Sesión <span class="sr-only">(current)</span></a>
                <?php     
                }else{ ?>
                    <a class="nav-link" href="<?= base_url('/entrar') ?>">Iniciar Sesión <span class="sr-only">(current)</span></a>
              <?php  } ?>
                
                
          
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= base_url('agregar') ?>">Agregar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url('eliminar') ?>">Editar o Eliminar</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="https://www.twitch.tv/jrodrigochanp">Sobre mi</a>
            </li>
        </ul>
        <!-- fin de opciones para admin -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<body>