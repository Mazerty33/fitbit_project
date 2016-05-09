<link rel="stylesheet" media="screen" type="text/css" href="css.css">

<?php
 $pourcentage=27;

 $remplissage= $pourcentage * 537 / 100;
 $remplispas = 537 - $remplissage;
 ?>

<style type="text/css">

.chart .outer {
  stroke-dashoffset: <?php echo "$remplispas" ?>;
  -webkit-animation: show 2s;
  animation: show 2s;
}

  @-webkit-keyframes show {
  from {
    stroke-dashoffset: 537;
  }
  
  to {
    stroke-dashoffset: <?php echo "$remplispas" ?>;
  }
}

@keyframes show {
  from {
    stroke-dashoffset: 537;
  }
  
  to {
    stroke-dashoffset: <?php echo "$remplispas" ?>;
  }
}


</style>
<section class="container">
 
  <!-- HTML Chart -->
  <figure class="chart" data-percent="<?php echo $pourcentage ; ?>">
    <figcaption><?php echo"$pourcentage"."%"; ?></figcaption>
     <img class="html" src="">
     Nom
    <svg width="100%" height="100%">
      <circle class="outer" cx="95" cy="95" r="85" transform="rotate(90, 95, 95)"/>
    </svg>
  </figure>
  
</section>