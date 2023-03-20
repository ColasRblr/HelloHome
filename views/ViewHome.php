<?php $titre = "Accueil"; ?>

<!-- Landing page with picture in background and research form -->
<div id="landingPage">
    <div id="researchForm">
        <form action="/getProperties" method="post" id="researchFormContent">

            <!-- Buttons that trigger rental or sale filters -->
            <div id="rentOrSaleBtns">
                <button id="rentalBtn" type="button" value="rental">Louer</button>
                <button id="saleBtn" type="button" value="sale">Acheter</button>
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
                <select name="location" id="type-select">
                    <option value="house" id="houseSelected">Maison</option>
                    <option value="flat" id="flatSelected">Appartement</option>
                </select>
            </div>
            <div id="rooms">
                <label for="rooms">Nombre de pièces:</label>
                <input type="number" id="roomsInput" name="rooms"></input>
            </div>
            <div id="area">
                <label for="area">Superficie (m2)</label>
                <input type="number" id="areaInput" name="area"></input>
            </div>

            <!-- button that trigger more filters (common to sales, rentals, flats and houses) -->
            <div id="filterBtn">
                <button id="moreFiltersBtn" type="button">Plus de critères</button>
            </div>

            <!-- More detailed filters which will appear if user clicks on the upper button -->
            <section id="generalFilters">
                <div id="seaDistance">
                    <label for="seaDistance">Distance de la mer (m)</label>
                    <input type="number" id="seaDistanceInput" name="seaDistance"></input>
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

            <!-- Specific attribute if it's a flat (triggered by -->
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
            <!-- Two specific attributes if it's a rental-->
            <section id="rentalFilters">
                <div id="furnished">
                    <label for="furnished">Meublé </label>
                    <input type="checkbox" name="furnished">

                </div>
                <div id="rent">
                    <label for="rent">Loyer</label>
                    <input type="number" id="rentInput" name="rent"></input>
                </div>
            </section>

            <!-- One specific attribute if it's a sale-->
            <section id="saleFilters">
                <div id="price">
                    <label for="price">Budget</label>
                    <input type="number" id="priceInput" name="price"></input>
                </div>
            </section>

            <!-- Search button -->
            <div id="searchBtn">
                <button type="submit" id="searchFormBtn">Rechercher</button>
            </div>
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
    <div id="contactContent">
        <div id="contactForm">
            <h5>Formulaire de contact</h5>
            <form action="../index.php" method="post" id="contact">
                <div id="nameDiv">
                    <input type="text" value="Nom" id="nameInput">
                    <input type="text" value="Prénom" id="firstNameInput">
                </div>
                <div id="contactDiv">
                    <input type="text" value="Téléphone" id="phoneInput">
                    <input type="text" value="Email" id="emailInput">
                </div>
                <div id="messageDiv">
                    <input type="textarea" value="Votre message" id="messageInput">
                </div>
                <div id="sendBtnDiv">
                    <button type="submit" id="contactBtn">Envoyer</button>
                </div>
            </form>
        </div>
        <div id="contactDetails">
            <div id="containerMap">
                <h5>Nos coordonnées</h5>
                <div id="map"></div>
            </div>
            <div id="containerAddress">
                <div id="address">
                    <h6>Adresse</h6>
                    <p>20 avenue Notre-Dame </br>
                        06000 Nice</p>
                </div>
                <div id="phoneNumber"></div>
                <h6>Téléphone:</h6>
                <p>04-32-16-32-16</p>
            </div>
        </div>
    </div>
</div>