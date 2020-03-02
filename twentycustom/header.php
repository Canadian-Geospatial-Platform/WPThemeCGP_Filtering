<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title><?php bloginfo('name');?>
        <?php  is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

  <link href="<?php bloginfo('stylesheet_directory')?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory')?>/css/mycss.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 </head>
  <div class="row">
 </div>
  <body>
<div class="container-fluid">
 <div class="row justify-content-center">
                     <div class="col-12 col-md-10 col-lg-8">
                         <form class="card card-sm">
                             <div class="card-body row no-gutters align-items-center">
                                 <div class="col-auto">
                                     <i class="fas fa-search h4 text-body"></i>
                                 </div>
                                 <!--end of col-->
                                 <div class="col">
                                     <input id="searchcontent" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                 </div>
                                 <!--end of col-->
                                 <div class="col-auto">
                                     <button id="btnsearchbykeyboard"  class="btn btn-lg btn-success" type="submit">Search</button>
                                 </div>
                                 <!--end of col-->
                             </div>
                         </form>
                     </div>
                     <!--end of col-->
                 </div>
