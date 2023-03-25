<?php $titre = "Ajouter un bien";
// var_dump($properties);
// print_r($type);
?>

<link rel="stylesheet" href="./style/dashboardAddProperty.css">
</head>

<body>
    <header>
        <a href="?action=displayDashboard">
            <img src="././asset/img/logo_white.png" alt="logo">
        </a>
        <div id="icon_container">
            <i class="bi bi-person-fill"></i>
            <i class="bi bi-x-circle-fill"></i>
        </div>
    </header>
    <div id="containerDashboardAddProperty">
        <div id="titleAddProperty">
            <h1 class="titlePageDashboard">Modifier le bien</h1>
        </div>

        <form autocomplete="off" id="addPropertyForm" method="post" action="?action=validUpdateProperty" enctype="multipart/form-data">
            <div id="addPropertyDetails">
                <div>
                    <label for="addTypeOfProperty" class="formElement"></label>
                    <select name="addTypeOfProperty" id="addTypeProperty" class="btnSelectAddDetails">
                        <option value="">Type</option>
                        <option value="house" id="btnSelectHouse" <?php if ($type[0] == "maison") {
                                                                        echo "selected='selected'";
                                                                    } ?>>Maison</option>
                        <option value="apartment" <?php if ($type[0] == "appartement") {
                                                        echo "selected='selected'";
                                                    } ?>>Appartement</option>
                    </select>
                </div>
                <div>
                    <label for="addStatutProperty" class="formElement"></label>
                    <select name="addStatutProperty" id="addStatut" class="btnSelectAddDetails">
                        <option value="">Statut</option>
                        <option value="sale" <?php if ($status[0] == "à vendre") {
                                                    echo "selected='selected'";
                                                } ?>>A vendre</option>
                        <option value="rent" id="btnSelectRent" <?php if ($status[0] == "à louer") {
                                                                    echo "selected='selected'";
                                                                } ?>>A louer</option>
                    </select>
                </div>
                <div>
                    <label for="locationOfProperty" class="formElement"></label>
                    <select name="locationOfProperty" id="locationProperty" class="btnSelectAddDetails">
                        <option value="">Ville</option>
                        <option value="Nice" <?php if ($properties['property_location'] == "Nice") {
                                                    echo "selected='selected'";
                                                } ?>>Nice</option>
                        <option value="Saint-Jean-Cap-Ferrat" <?php if ($properties['property_location'] == "Saint-Jean-Cap-Ferrat") {
                                                                    echo "selected='selected'";
                                                                } ?>>Saint-Jean-Cap-Ferrat</option>
                        <option value="Cagnes-sur-Mer" <?php if ($properties['property_location'] == "Cagnes-sur-Mer") {
                                                            echo "selected='selected'";
                                                        } ?>>Cagnes-sur-Mer</option>
                    </select>
                </div>
                <div>
                    <input type="text" name="nameProperty" id="propertyName" placeholder="<?= $properties['property_name'] ?>">
                </div>
                <div class="specificationToRent">
                    <label for="furnishedProperty" class="formElement"></label>
                    <select name="furnishedProperty" id="furnished" class="btnSelectAddDetails">
                        <option value="furnished">Meublé</option>
                        <option value="noFurnished">Non meublé</option>
                    </select>
                </div>
                <div id="price">
                    <label for="addPriceProperty" class="formElement"></label>
                    <input type="number" name="salePrice" value=<?php if ($status[0] == "à vendre") {
                                                                } ?> class="formElement input" placeholder="Prix de vente*">
                </div>
                <div class="specificationToRent">
                    <label for="addPriceProperty" class="formElement"></label>
                    <input type="number" name="rent" value="" class="formElement input" placeholder="Prix par mois*">
                </div>
                <div class="specificationToRent">
                    <label for="chargesForRent" class="formElement"></label>
                    <input type="number" name="chargesForRent" value="" class="formElement input" placeholder="Charges par mois*">
                </div>
                <div>
                    <label for="area" class="formElement"></label>
                    <input type="number" name="area" value="" class="formElement input" placeholder="<?= $properties["property_area"] ?>">
                </div>
                <div>
                    <label for="numberOfPieces" class="formElement"></label>
                    <input type="number" name="numberOfPieces" value="" class="formElement input" placeholder="<?= $properties["property_numberOfPieces"] ?>">
                </div>
                <div>
                    <label for="distanceFromTheSea" class="formElement"></label>
                    <input type="number" name="distanceFromTheSea" value="" class="formElement input" placeholder="<?= $properties["property_distanceFromSea"] ?>">
                </div>

            </div>
            <div id="btnCheckbox">
                <label for="swimmingpool" class="formElement">Piscine</label>
                <input type="checkbox" id="swimmingpool" class="btnCheckboxBonus" name="swimmingpool" value="swimmingpool" <?php if ($properties["property_swimmingpool"] == "1") {
                                                                                                                                echo "checked='checked'";
                                                                                                                            } ?>>
                <label for="seaView" class="formElement">Vue sur mer</label>
                <input type="checkbox" id="seaView" class="btnCheckboxBonus" name="seaView" value="seaView">
                <div id="houseProperty">
                    <label for="garden" class="formElement">Jardin</label>
                    <input type="checkbox" id="garden" class="btnCheckboxBonus" name="garden" value="garden">
                    <input type="text" name="bonus" id="bonus" placeholder="Bonus">
                </div>
                <div id="propertyApartment">
                    <label for="parking" class="formElement">Parking</label>
                    <input type="checkbox" id="parking" class="btnCheckboxBonus" name="parking" value="parking">
                    <label for="lift" class="formElement">Ascenseur</label>
                    <input type="checkbox" id="lift" class="btnCheckboxBonus" name="elevator" value="elevator">
                    <label for="daycareService" class="formElement">Gardiennage</label>
                    <input type="checkbox" id="daycareService" class="btnCheckboxBonus" name="caretaking" value="caretaking">
                    <label for="balcony" class="formElement">Balcon</label>
                    <input type="checkbox" id="balcony" class="btnCheckboxBonus" name="balcony" value="balcony">

                    <input type="text" id="floor" name="floor" class="" value="floor">
                </div>

                <div id="textarea">
                    <label for="descriptionProperty" class="formElement"></label>
                    <textarea id="descritionOfTheProperty" name="descriptionProperty" placeholder="<?= $properties["property_description"] ?>" value=""></textarea>
                </div>
                <label for="picture">Ajouter des images</label>
                <input type="file" name="picture" id="picture">
                <!-- <button type="button" id="addImage">Ajouter des images</button> -->
                <div class="bottomForm">
                    <button type="submit" class="propertySubmitBtn"> Valider </button>
                    <button type="reset" class="propertySubmitBtn"> Annuler </button>
                </div>
            </div>
        </form>
    </div>
    <footer>
        <p>HelloHome © 2023</p>
    </footer>
    <script src="./js/dashboard.js"></script>