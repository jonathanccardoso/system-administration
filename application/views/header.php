<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <meta name="description" content="System Administration">
    <meta name="author" content="Jonathan Cardoso">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
  </head>
  <body>
    <div class="row row-nav p-3 mb-2">
      <div class="container">
        <div class="col-md-12">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('empresa'); ?>">Empresas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('colaborador'); ?>">Colaboradores</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Relatórios</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item" href="<?php echo base_url('empresa/relatorio'); ?>">Empresas</a> 
                 <a class="dropdown-item" href="<?php echo base_url('colaborador/relatorio'); ?>">Colaboradores</a>
              </div>
            </li>
            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Cadastro</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item" href="<?php echo base_url('empresa_cadastrar'); ?>">Empresa</a> 
                 <a class="dropdown-item" href="<?php echo base_url('colaborador_cadastrar'); ?>">Colaborador</a>
              </div>
            </li>-->
          </ul>
        </div>
      </div>
    </div>
    