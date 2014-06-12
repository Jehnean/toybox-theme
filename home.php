<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toybox
 */

get_header(); ?>

  
<!-- Begin page content -->
  
<div class="container what-we-do-header">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header text-center">
      <h1>What we do</h1>
    </div>
    
    <p class="lead text-center"> 
      We are a digital design agency helping business create<br/>
      strategic digital solutions that look and functional joyfully.
    </p> 

  </div>
  <div class="toybox-cube"></div>
</div>
  
<section class="bg-1">
  <div class="col-sm-6 col-sm-offset-3 text-center"></div>
</section>
  
<div class="divider" id="section2"></div>
   
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <h1>Profile</h1>
      
      <hr>
     
      <p>
    The Firm has had a great deal of experience and is highly regarded for its expertise in the areas of design, construction administration, construction management, tight cost control and scheduling.
    </p> 
      <p>
    We have been involved in a wide range of building projects, including college facilities, banks, schools, nursing homes, office buildings, churches, industrial buildings and major urban development projects.
      </p> 
      <p>
    The various projects have included new construction, renovation and adaptive re-use as a way of providing new space for the various clients. Tessier Associates provides in-house programming, master planning, architectural design, construction documentation, project administration and interior design services. Sustainable design, as appropriate for each client, is incorporated in cost effective ways to benefit the long term value of the buildings created by the firm.
    </p> 
      <p>
    Together with selected consultants, The Firm provides complete professional services including landscape architecture, structural engineering, electrical and mechanical engineering and site planning.
    </p> 
      
      <hr>
      
      <div class="divider"></div>
      
    </div><!--/col-->
</div><!--/container-->

<div class="divider"></div>
  
<section class="bg-3">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Clients &amp; Partners</h2></div>
</section>
  
<div class="divider" id="section4"></div>

<div class="row">
  <div class="col-md-8 col-md-offset-1">
  </div>
</div>
  
  
<?php get_footer(); ?>