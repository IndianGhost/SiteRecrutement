<!DOCTYPE HTML>
<html>

<head>
  <title>JOB-Secteur publique-</title>
  <meta charset= "utf-16">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<!--Banniere publicitaire cree en Flash-->
<center>
	<a href="iPhone6Info.html" target="_blank">
		<embed src="../fichier_flash/iPhone6.swf" title="Découvrir le nouveau iPhone 6" width="1330" height="160"> </embed>
	</a>
</center>

  <div id="main">
    <div id="header">
      <div id="logo">
       <img src="../image/PICTO_PHRASEANET.png"> <h1><a href="../index.php">JOB.COM</a></h1>
        <div class="slogan">On se lasse de tout, excepté du travail </div>
      </div>
	
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="../index.php">Acceuil</a></li>
          <li><a href="../secteur_prive/secteur_prive.php">Secteur Privé</a></li>
          <li class="current"><a href="../secteur_public/secteur_public.php">Secteur Public</a></li>
          <li><a href="../stage/stage.php">Stage</a></li>
          <li><a href="../etranger/etranger.php">Etranger</li>
          <li><a href="../concours/concours.php">Concours</li>
          <li><a href="../contact_us/contact_us.php">Contactez_nous!</a></li>
        </ul>
      </div>
    </div>
	
<body>
    <div id="site_content">
      <div id="sidebar_container">
        <img class="paperclip" src="../style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Rechercher</h3>
       <div class="bloc-rechercher">
	   
    	<form name="form_search" action="https://www.google.com">
          
            <p><input type="text" onfocus="this.value = '';" value="Rechercher" name="query">
              
                <input type="submit" value="" class="send" name=""> </p>
                <center>
                  <button>
                    Rechercher
                  </button>
                </center>
        </form>
    </div>
		  
		 
        <img class="paperclip" src="../style/paperclip.png" alt="paperclip" /></div>
        <div class="sidebar">
          <h3>Demandez une publicité !</h3>
          
          <form method="post" action="mailto:hanae.ghafes@gmail.com" id="subscribe">
            <p style="padding: 0 0 9px 0;"><input class="search" type="text" name="email_address" value="your email address" onclick="javascript: document.forms['subscribe'].email_address.value=''" /></p>
            <p><input class="subscribe" name="subscribe" type="submit" value="Subscribe" /></p>
          </form>
        </div>
        <img class="paperclip" src="../style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>caricature</h3>
         <a href="../caricature/caricature.php"><img src="../image/tn_Capture.png"  alt="paperclip">
          <a href="../caricature/caricature1.PHP"><img src="../image/tn_ss.png"  alt="paperclip">
     <a href="../caricature/caricature2.PHP"><img src="../image/tn_chahada.png"  alt="paperclip">
		  
		  
             
			 
   
   
   
   <div class="bloc-right new">
	 
	<h1>Nombre de visite</h1>
<a href="http://www.compteurdevisite.com" title="compteur gratuit"><img src="http://counter1.bestfreecounterstat.com/private/compteurdevisite.php?c=f0f65c609b6b5e2eeac068afa428b0b7" border="0" title="compteur gratuit" alt="compteur gratuit"></a>

</div>

   	 
   
   
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
		
		<?php
      $bd=new PDO('mysql:host=localhost; dbname=site_recrutement', 'root','');

      try {
        $bd = new PDO('mysql:host=localhost; dbname=site_recrutement', 'root', '');
      } catch (Exception $e) {
        die('Erreur : '. $e->getMessage());
      }

      $result= $bd->query('select * from article where categorie="secteur_publique";');

      while($donnees=$result->fetch()){
        echo "<h1>".utf8_encode($donnees['titre'])."</h1>"."<br/>";
        echo "<p>".utf8_encode($donnees['demo']) ;
        $i=$donnees[0];
        echo '...<a href="../article/article.php?n='.$i.'">Afficher la suite</a></p><br/>';
        echo "<hr/>";
        echo "<br/><br/>";
      }

      $result->closeCursor();


      /*
      while($tab=$result->fetch()){
          foreach($tab as $val){
            echo "$val </br>";
          }
      }*/
  ?>        
        
	


      </div>
    </div>
  
  </div>
  <footer>
    <center>
      <p>Copyright &copy; Achraf Bellaali| 
        Abdellatif Bakar |
        Hanae Rhafes |
        Rachid Abdellaoui |
        Yasser Haddad
      </p>
    </center>
  </footer>
</body>
</html>
