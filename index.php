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

   <!-- On boucle sur le tableau des oeuvres -->
	 <?php foreach($oeuvre as $oeuvre) : ?>

   <article class="oeuvre">
    <a href="./oeuvre?page=<?php echo $oeuvre['id']; ?>">
     <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
     <h2><?php echo $oeuvre['titre']; ?></h2>
     <p class="description"><?php echo $oeuvre['description']; ?></p>
    </a>
   </article>
	 
   <?php endforeach ?>

  </div>
 </main>

 <!-- Le pied de page -->
 <?php include('footer.php'); ?>

</body>
</html>