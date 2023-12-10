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

   <!-- on importe les tableaux de la page oeuvres.php -->
	 <?php include('oeuvres.php'); ?>

   <!-- On boucle sur le tableau des oeuvres-->

	 <?php

	 $max = count( $oeuvre );
	 // echo "il y a ".$max." élément dans le tableau oeuvre";
	 // echo "<br>";

	 for($counter=1; $counter<=$max; $counter++) {

	   $ID=$oeuvre[$counter]['id'];
	   $IMAGE=$oeuvre[$counter]['image'];
	   $TITRE=$oeuvre[$counter]['titre'];
	   $DESCRIPTION=$oeuvre[$counter]['description'];

   ?>

   <article class="oeuvre">
    <a href="./oeuvre?page=<?php echo $ID; ?>">
     <img src="<?php echo $IMAGE; ?>" alt="<?php echo $TITRE; ?>">
     <h2><?php echo $TITRE; ?></h2>
     <p class="description"><?php echo $DESCRIPTION; ?></p>
    </a>
   </article>

 	 <?php

		}
	 ?>

  </div>
 </main>

 <!-- Le pied de page -->
 <?php include('footer.php'); ?>

</body>
</html>