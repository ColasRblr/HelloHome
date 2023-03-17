<?php $titre = "Accueil"; ?>

<!-- Landing page with picture in background and research form -->
<div id="landingPage">
    <div id="researchForm">
        <form action="../index.php" method="post">

        <!-- Buttons that trigger -->
            <div id="rentOrSale">
                <button id="rental">Louer</button>
                <button id="sale">Acheter</button>
            </div>
            <!-- Property search form : general attributes for both sales and rentals, flats and houses -->
            <div id="location">
                <label for="location">Ville:</label>
                <select name="location" id="location-select">
                    <option value="nice">Nice</option>
                    <option value="saint-jean">Saint-Jean-Cap-Ferrat</option>
                    <option value="cagnes">Cagnes-sur-Mer</option>
                </select>
            </div>
            <div id="property">
                <label for="property">Type de bien </label>
                <select name="location" id="location-select">
                    <option value="flat">Appartement</option>
                    <option value="house">Maison</option>
                </select>
            </div>
            <div id="rooms">
                <label for="rooms">Nombre de pièces:</label>
                <input type="number" id="rooms" name="rooms"></input>
            </div>
            <div id="price">
                <label for="area">Superficie (en m2)</label>
                <input type="number" id="area" name="area"></input>
            </div>

            <button id="moreFilters">Plus de critères</button>
            <!-- More detailed filters which will appear if user clicks on the upper button -->
            <section id="generalFilters">
                <div id="seaDistance">
                    <label for="seaDistance">Distance de la mer (en km)</label>
                    <input type="number" id="seaDistance" name="seaDistance"></input>
                </div>
                <div id="pool">
                    <label for="pool">Piscine</label>
                    <input type="checkbox" name="pool">
                </div>
                <div id="seaView">
                    <label for="seaView">Vue sur mer</label>
                    <input type="checkbox" name="seaView">
                </div>
            </section>

            <!-- Two specific attributes if it's a rental-->
            <section id="rentalFilters">
                <div id="furnished">
                    <label for="furnished">Meublé</label>
                    <input type="checkbox" name="furnished">
                </div>
                <div id="rent">
                    <label for="rent">Budget pour un loyer mensuel</label>
                    <input type="number" id="rent" name="rent"></input>
                </div>
            </section>

            <!-- One specific attribute if it's a sale-->
            <section id="saleFilters">
                <div>
                    <label for="price">Budget</label>
                    <input type="number" id="price" name="price"></input>
                </div>
            </section>

            <!-- Specific attribute if it's a flat-->
            <section id="flatFilters">
                <div id="parking">
                    <label for="parking">Parking</label>
                    <input type="checkbox" name="parking">
                </div>
                <div id="elevator">
                    <label for="elevator">Ascenseur</label>
                    <input type="checkbox" name="elevator">
                </div>
                <div id="caretaking">
                    <label for="caretaking">Gardiennage</label>
                    <input type="checkbox" name="caretaking">
                </div>
                <div id="balcony">
                    <label for="balcony">Balcon</label>
                    <input type="checkbox" name="balcony">
                </div>
            </section>

            <!-- Specific attribute if it's a house-->
            <section id="houseFilters">
                <div id="garden">
                    <label for="garden">Jardin</label>
                    <input type="checkbox" name="garden">
                </div>
            </section>

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