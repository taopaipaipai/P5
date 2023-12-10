<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

 <!-- Le pied de page -->
 <?php include('header.php'); ?>

 <!-- Le corps -->
 <main>

  <div id="liste-oeuvres">

   <!-- on importe les tableaux de la page oeuvre.php -->
   <?php include('oeuvres.php'); ?>

   <?php

   $max = count( $oeuvre );
   $PAGE=$_GET['page'];

	 // Test si la valeur est numérique
	 if ( is_numeric($PAGE)) {
	 	
	 	// fonction qui retourne la valeur numérique entière
	 	$PageINTVAL=intval($PAGE);
	 	
	 	 if ($PageINTVAL <= $max && $PageINTVAL >0 ) {

	 	   $OEUVRE=$oeuvre[$PageINTVAL];
	 	   
	 	   // test si la clé "id" existe dans le tableau
	     if (array_key_exists('id', $OEUVRE)){

   ?>

   <article id="detail-oeuvre">
    <div id="img-oeuvre">
     <img src="<?php echo $OEUVRE['image']; ?>" alt="<?php echo $OEUVRE['titre']; ?>">
    </div>
    <div id="contenu-oeuvre">
     <h1><?php echo $OEUVRE['titre']; ?></h1>
     <p class="description"><?php echo $OEUVRE['description']; ?></p>
     <p class="description-complete"><?php echo $OEUVRE['description-complete']; ?></p>
    </div>
   </article>

 	 <?php
			}
	  }
	  else {
	 ?>

 	 	<h1 class="TitreH1">
 	 		<?php

 	 		   echo "<br>";
 	 		   echo "<br>";
 	 		   echo "Page Inexistante !! <br>";
 	 		   echo "<br>";
 	 		   echo "<br>";

 	 		?>
 	 	</h1>

 	 <?php
 	 	}
 	 }
 	 
 	 else {
 	 	
	 ?>

 	 <h1 class="TitreH1">
 	 	<?php

 		   echo "<br>";
 	 	   echo "<br>";
 	 	   echo "Page Inexistante !! <br>";
 	 	   echo "<br>";
 	 	   echo "<br>";

 	 	?>
 	 	</h1>
 	 <?php 	 	}
 	 	?>
 	 	

  </div>

 </main>

 <!-- Le pied de page -->
 <?php include('footer.php'); ?>

</body>
</html>