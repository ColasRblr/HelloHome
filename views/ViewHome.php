<?php $titre = "Accueil"; ?>

<!-- Landing page with picture in background and research form -->
<div id="landingPage">
    <div id="researchForm">
        <form action="../index.php" method="post">
            <div>Contenu formulaire</div>
        </form>

    </div>
</div>

<!-- Results of research (which only appear after a research : click event on the form) -->
<div id="results">
    <div class="homePageTitles">Résultats</div>
    <div class="cardProperty">
        <div id="bgPicture">
            <div id="preview">
                <div id="type"></div>
                <div id="content"></div>
                <div id="price"></div>
                <button id="visit"></button>
            </div>
        </div>
    </div>
</div>

<!-- Last/spotlight properties  -->

<div id="lastProperties">
    <div class="homePageTitles">Nos biens à la une</div>
    <div class="cardProperty">
        <div id="bgPicture">
            <div id="preview">
                <div id="type"></div>
                <div id="content"></div>
                <div id="price"></div>
                <button id="visit"></button>
            </div>
        </div>
    </div>
</div>

<!--  HELLOHOME presentation text-->

<div id="helloHomeAgency">
    <div class="homePageTitles">Hello Home</div>
    <div id="helloHomeDescription">
        <h4>Votre agence immobilière de prestige à Nice</h4>
        <p>Acheter, vendre, nous le faisons tous les jours, mais lorsqu’il s’agit de votre projet immobilier, l’exercice est tout autre et requiert
            un engagement beaucoup plus fort.

            Parce que dans votre agence immobilière - Hello Home - nous en avons conscience, nous vous accompagnons dans la vente de votre
            maison, appartement ou terrain en vous proposant un service à la hauteur de vos enjeux.</p>
    </div>
</div>

<!-- Contact form and informations -->

<div id="contactSection">
    <div class="homePageTitles">Nous contacter</div>
    <div id="contactForm">
        <h5>Formulaire de contact</h5>
        <form action=""></form>
    </div>
    <div id="contactDetails">
        <h5>Nos coordonnées</h5>
        <div id="containerMap">
            <div id="map"></div>
            <div id="address">
                <h5>Adresse</h5>
                <p>20 avenue Notre-Dame </br>
                    06000 Nice</p>
            </div>
            <div id="phoneNumber"></div>
            <h5>Téléphone:</h5>
            <p>04-32-16-32-16</p>
        </div>
    </div>
</div>