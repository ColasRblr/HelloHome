<link rel="stylesheet" href="style/pageAnnonce.css">

</head>

<body>
  <header>
    <div id="imageBackground">
      <img src="./asset/img/<?= $picture[0]["picture_url"] ?>" alt="Une villa splendide">
    </div>
    <div class="navbar">
      <div id="logo">
        <a href="?action=backToHomePage">
          <img src="asset/hellohome_1.png" width="150px" alt="hellohome logo">
        </a>
      </div>
      <div id="links">
        <ul>
          <li><a href="#" onclick="rtn()">Accueil</a></li>
          <li><a href="#decouverteHouse">Le Bien</a></li>
          <li><a href="#pics">Photos</a></li>
          <li><a href="#infoTitleAnnonce">Informations essentielles</a></li>
        </ul>
      </div>
    </div>
  </header>

  <div id="annonceVente">

    <p class="vente">
      <?php
      if (isset($displayProperty[0]['rent']) && !empty($displayProperty[0]['rent'])) {
        echo "À LOUER";
      } elseif (isset($displayProperty[0]['selling_price']) && !empty($displayProperty[0]['selling_price'])) {
        echo "À vendre";
      } else {
        echo "Titre à définir";
      }
      ?>
    </p>

    <p class="annonceTitle"><?= $displayProperty[0]["property_location"] ?></p>
    <h2 class="houseName" style="font-size: smaller"><?= $displayProperty[0]["property_name"] ?></h2>

    <hr>
    <div class="divAnnonce">
      <div>
        <img src="./asset/img/lit.png" alt="">
        <p>Pièces</p>
        <p><?= $displayProperty[0]['property_numberOfPieces'] ?> pièces</p>
      </div>
      <div>
        <div>
          <img src="./asset/img/sur.png" alt="">
          <p>Surfaces</p>
          <p><?= $displayProperty[0]['property_area'] ?>m²</p>
        </div>

      </div>
    </div>
  </div>


  <section class="decouverteHouse" id="decouverteHouse">
    <h1 class="decouverte">Découvrez <?= $displayProperty[0]["property_name"] ?> </h1>
    <hr>
    <div>
      <p id="texteAnnonce"><?= $displayProperty[0]['property_description'] ?></p>
    </div>
    <div class="appareilAnnonce" id="pics">
      <img src="./images/appareil.png" alt="">
      <h3>Les photos</h3>
      <hr>

      <div id="appareilPhotoAnnonce">

        <?php foreach ($displayProperty as $property) { ?>
          <img src="asset/img/<?= $property['picture_url'] ?>" alt="<?= $property['picture_description'] ?>">
        <?php } ?>
        <?php foreach ($displayProperty as $property) { ?>
          <img src="asset/img/<?= $property['picture_url'] ?>" alt="<?= $property['picture_description'] ?>">
        <?php } ?>
      </div>

  </section>

  <div class="main">
    <section class="infoHouseAnnonce">
      <img src="./asset/" alt="">
      <div id="infoTitleAnnonce">
        <h1>Les informations essentielles</h1>
        <hr>
      </div>
      <div id="infoDetailHouse">
        <ul>

          <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">- Numéro Bien : <?= $displayProperty[0]['id_property'] ?></li>

          <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">- Nombre de pièces: <?= $displayProperty[0]['property_numberOfPieces'] ?></li>

          <?php if ($displayProperty[0]['property_swimmingpool'] == 1) { ?>
            <li style="margin-bottom: 1px; font-size: 13px; line-height: 8px">- Piscine privée</li>
          <?php } ?>

          <?php
          if (isset($displayProperty[0]['balcony']) && $displayProperty[0]['balcony'] == 1) {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">- Balcon</li>
          <?php
          } else {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px"></li>
          <?php
          }
          ?>


          <?php
          if (isset($displayProperty[0]['caretaking']) && $displayProperty[0]['caretaking'] == 1) {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">- Service de conciergerie</li>
          <?php
          } else {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px"></li>
          <?php
          }
          ?>


          <?php
          if (isset($displayProperty[0]['garden']) && $displayProperty[0]['garden'] == 1) {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">- Jardin</li>
          <?php
          } else {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px"></li>
          <?php
          }
          ?>

          <ul>
            <?php
            if (isset($displayProperty[0]['rent']) && !empty($displayProperty[0]['rent'])) {
            ?>
              <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-<?php echo $displayProperty[0]['rent']; ?> €/mois</li>
            <?php
            } elseif (isset($displayProperty[0]['selling_price']) && !empty($displayProperty[0]['selling_price'])) {
            ?>
              <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-<?php echo $displayProperty[0]['selling_price']; ?> €</li>
            <?php
            } else {
            ?>
              <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px"></li>
            <?php
            }
            ?>
          </ul>

          <?php
          if (isset($displayProperty[0]['selling_price']) && $displayProperty[0]['selling_price'] == 1) {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">- Prix</li>
          <?php
          } else {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px"></li>
          <?php
          }
          ?>
          <?php
          if (!empty($displayProperty[0]['parking'])) {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">-Parking</li>
          <?php
          } else {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px"></li>
          <?php
          }
          ?>

          <?php
          if (isset($displayProperty[0]['bonus']) && !empty($displayProperty[0]['bonus'])) {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">- Bonus : <?php echo $displayProperty[0]['bonus']; ?></li>
          <?php
          } else {
          ?>
            <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px"></li>
          <?php
          }
          ?>

        </ul>
      </div>
    </section>

    <section id="infoDetailAgence">
      <img src="./images/coeur.png" alt="">
      <h1>Ce qui a séduit HELLO HOME</h1>
      <hr>
      <ul>
        <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">- Localisation: <?= $displayProperty[0]['property_location'] ?></li>
        <?php
        if ($displayProperty[0]['property_seaView'] == 1) {
        ?>

          <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">- Belle vue sur mer</li>
        <?php
        }
        ?>
        <li style="margin-bottom: 5px; font-size: 13px; line-height: 8px">- Distance à la mer: <?= $displayProperty[0]['property_distanceFromSea'] ?> m</li>

      </ul>
      <hr>
      <div id="agent">
        <img src="asset/img/agent.jpg" alt="">
        <div>
          <p id="readAgent">Solenne vous accompagne<br>à la découverte de ce bien !</p>
          <p id="sendMSG">Envoyer un message -></p>
        </div>
      </div>
    </section>
  </div>


  <footer>
    <h1 id="footer">
      Mentions légales | 2023 |
      <a href="?action=dashboardConnection">
        Dashboard
      </a>
    </h1>
  </footer>