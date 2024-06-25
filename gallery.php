<!DOCTYPE html>
<html lang="en">


<head>
<title> Home | Rakhumai Multispeciality ICU, Bhose </title>
<!--headscript snippet-->

<?php
include 'partials/headscripts.php';
?>
</head>


<body>
<!--navbar snippet-->
<?php
include 'partials/navbar.php';
?>
<!--navbar snippet-->


<!--css snippet-->
<style>
    . {
  box-sizing: border-box;
  margin: 0 ;
}

.container {
  margin: 0 auto;
  max-width: 1200px;
  padding: 0 1rem;
}

.responsive-image {
  max-width: 100%;
}
.cell img {
  display: block;
}
@media screen and (min-width: 600px){
  .grid {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
  }
  .cell {
    width:50%;
  }
}
@media screen and (min-width: 1000px){
  .cell {
    width:calc (100%/3);
  }
}
.cell {
  margin: 1rem;
}

@media screen and (min-width: 600px){
  .cell {
    width: calc(50% - 2rem);
  }
}
@media screen and (min-width: 1000px){
  .cell{
    width: calc(33.3333% - 2rem);
  }
}
</style>
<!--css snippet-->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 ftco-animate text-center">
<h1 class="mb-2 bread">Image Gallery</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Image Gallery <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>

<!--image Gallery snippet-->
<div class="container">
  <div class="grid">
    <div class="cell">
      <img src="images/assets/opd.jpeg" class="responsive-image">
    </div>

    <div class="cell">
      <img src="images/assets/opening.jpeg" class="responsive-image">
    </div>

    <div class="cell">
      <img src="images/assets/opening.jpeg" class="responsive-image">
    </div>

  </div>
</div>
 <!--css snippet-->




<?php
include 'partials/footer.php';
?>
</body>
</html>