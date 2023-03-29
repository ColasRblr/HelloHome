 <?php
  // include '/PropertyController.php';
  // print_r($displayProperty);
  // var_dump($picture);
  ?>

 <link rel="stylesheet" href="style/pageAnnonce.css">
 <title>Page annonce</title>
 </head>

 <body>
   <header>
     <div id="imageBackground">
       <img src="./asset/img/<?= $picture[0]["picture_url"] ?>" alt="Une villa splendide">
     </div>
     <div id="logoAnnonce">
       <img src="./images/HelloHome-logo.png" alt="">
     </div>
     <nav class="navbar">
       <ul>
         <li><a href="#">Contact</a></li>
         <li><a href="#">L'agence</a></li>
         <li><a href="#">Recherche</a></li>
         <li><a href="#">Nos biens à la une</a></li>
         <li><a href="#">Accueil</a></li>
       </ul>
     </nav>
   </header>
   <div id="annonceVente">
     <p class="vente">A vendre !</span></p>
     <p class="annonceTitle">Pont de Claix | A vendre</p>
     <h2 class="houseName" style="font-size: smaller"><?= $displayProperty[0]["property_name"] ?></h2>

     <hr>
     <div class="divAnnonce">
       <div>
         <img src="./images/lit.png" alt="">
         <p>Pièces</p>
         <p>9 pièces</p>
       </div>
       <div>
         <img src="./images/sur.png" alt="">
         <p>Surfaces</p>
         <p>198m2</p>
       </div>
       <div>
         <img src="./images/sapin.png" alt="">
         <p>Terrain</p>
         <p>1680m2</p>
       </div>
     </div>
   </div>
   </header>

   <section class="decouverteHouse">
     <h1 class="decouverte">Découvrez <?= $displayProperty[0]["property_name"] ?> </h1>
     <hr>
     <div>
       <p id="texteAnnonce"><?= $displayProperty[0]['property_description'] ?></p>

     </div>
     <div class="appareilAnnonce">
       <img src="./images/appareil.png" alt="">
       <h3>Les photos</h3>
       <hr>
       <div id="appareilPhotoAnnonce">
         <img src="./images/photo1.jpg" alt="">
         <img src="./images/photo2.jpg" alt="">
       </div>
     </div>
     </div>
   </section>
   <div class="main">
     <section class="infoHouseAnnonce">
       <img src="./images/top.png" alt="">
       <div id="infoTitleAnnonce">
         <h1>Les informations essentielles</h1>
         <hr>
       </div>
       <div id="infoDetailHouse">
         <ul>
           <!--<li>-Taille :9 pièces: </li>-->
           <!--<li>-Surface : 108 m²</li>-->
           <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Numéro Bien : <?= $displayProperty[0]['id_property'] ?></li>

           <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Nombre de pièces: <?= $displayProperty[0]['property_numberOfPieces'] ?></li>

           <?php if ($displayProperty[0]['property_swimmingpool'] == 1) { ?>
             <li style="margin-bottom: 1px; font-size: 13px; line-height: 8px">-Piscine privée</li>
           <?php } ?>

           <?php if ($displayProperty[0]['balcony'] == 1) { ?>
             <li style="margin-bottom: 1px; font-size: 13px; line-height: 8px">-Balcon</li>
           <?php } ?>

           <?php if ($displayProperty[0]['caretaking'] == 1) { ?>
             <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Service de gardiennage</li>
           <?php } ?>


           <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Statut de la transaction : <?= $displayProperty[0]['transaction_status'] ?></li>


           <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Date de transaction : <?= $displayProperty[0]['transaction_onlineDate'] ?></li>



           <!--[picture_description] => Seashell 
Suite [26] => Seashell Suite [picture_url] => appartement9.jpg [27] => appartement9.jpg ) )-->



           </*?php if($displayProperty[0]['floor']==0){ ?>
           <!--<li>- Sans Etage</li>-->
           </*?php } ?>



           </*?php if($displayProperty[0]['elevator']==0){ ?>
           <!--<li>-Sans Ascenseur</li>-->
           </*?php } ?>


           <?php
            if ($displayProperty[0]['parking'] == 1) {
            ?>
             <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Parking</li>
           <?php
            }
            ?>

           <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Zone: <?= $displayProperty[0]['property_area'] ?></li>
           <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Informations complémentaires :un garage, une cave</li>
           <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Prix de vente frais agence inclus : <em><?= $displayProperty[0]['selling_price'] ?> </em></li>
         </ul>
       </div>
     </section>

     <section id="infoDetailAgence">
       <img src="./images/coeur.png" alt="">
       <h1>Ce qui a séduit POO-Immo</h1>
       <hr>
       <ul>
         <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Localisation: <?= $displayProperty[0]['property_location'] ?></li>
         <?php
          if ($displayProperty[0]['property_seaView'] == 1) {
          ?>
           <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Belle vue sur mer</li>
         <?php
          }
          ?>
         <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Distance à la mer: <?= $displayProperty[0]['property_distanceFromSea'] ?></li>
       </ul>
       <hr>
       <div id="agent">
         <img src="./images/agent.jpg" alt="">
         <div>
           <p id="readAgent">Solenne vous accompagne<br>à la découverte de ce bien !</p>
           <p id="sendMSG">Envoyer un message -></p>
     </section>
   </div>
   <div class="photoInfo">
     <img src="./images/lux.jpg" alt="une pièce lumineuse">
     <div id="cadreInfo">
       <p>Restez au courant des actualités de votre agence Poo-Immo</p>
       <h3>Abonnez vous à la newsletter !</h3>
       <hr>
       <div class="infoH3">
         <h4 class="p">Prénom</h4>
         <h4 class="n">Nom</h4>
         <h4 class="e">Email</h4>
         <h4 class="s">S'abonner</h4>
       </div>
     </div>

     <footer>
       <h1 class="footer">
         Mentions légales | 2023
       </h1>
       <div></div>
     </footer>