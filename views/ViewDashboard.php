<?php $titre = "Tableau de bord";
// var_dump($allProperties);
?>

<link rel="stylesheet" href="./style/dashboardHomePage.css">

</head>

<body>


    <div id="containerHomePageDashboard">
        <div id="positionElementsHomePageDashboard">
            <div id="managementProperty">
                <h1 class="titlePageDashboard">Gestion des biens</h1>
                <form method="post" action="">
                    <div id="dashboardManagementFilters">
                        <label id="dashboardSearch">
                            <input type="text" id="inputSearchDashboard" name="inputSearchDashboard" placeholder="Recherche">
                        </label>
                        <label for="typeOfProperty"> </label>
                        <select name="filterTypeOfProperty" id="dashaboardTypeProperty" class="btnFilterSelectDashboard">
                            <option value="">Choisi son type</option>
                            <option value="apartment">Appartement</option>
                            <option value="apartment">Maison</option>

                        </select>
                        <label for="propertyStatut"> </label>
                        <select name="filterPropertyStatut" id="dashaboardPropertyStatut" class="btnFilterSelectDashboard">
                            <option value="">Choisi son statut</option>
                            <option value="sale">A vendre</option>
                            <option value="rent">A louer</option>
                        </select>

                        <label for="locationOfProperty" class="formElement"></label>
                        <select name="locationOfProperty" id="locationProperty" class="btnFilterSelectDashboard">
                            <option value="">Choisi une ville</option>
                            <option value="Nice">Nice</option>
                            <option value="Nice">Saint-Jean-Cap-Ferrat</option>
                            <option value="Nice">Cagnes-sur-Mer</option>
                        </select>

                        <!-- <button type="submit" id="filterProperty"> Valider </button> -->

                    </div>
                </form>
                <a href="?action=addProperty">
                    <button type="button" id="btnAddProperty"> Ajouter un bien</button>
                </a>


                <div id="listOfProperties">
                    <table>
                        <tbody>
                            <?php
                            foreach ($allProperties as $property) {
                            ?>
                                <tr>
                                    <td class="listOfPropertyByUser"><a href=""><?= $property['property_name'] ?></a></td>

                                    <td class="listOfPropertyByUser"><?= $property['property_location'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="statistiquesDashboard">
                <h1>Statistiques</h1>
                <div id="numberOfPropertiesAvailable" class="numberStatistique">
                    <h3 class="statistiques">Nombre de biens total</h3>
                    <p id="numberPropertyAvailable">
                        <?php
                        echo count($allProperties);
                        ?>
                    </p>
                </div>
                <div id="numberOfPropertiesToSale" class="numberStatistique">
                    <h3 class="statistiques">Nombre de biens à vendre</h3>
                    <p id="numberPropertySale">
                        <?php
                        foreach ($allProperties as $property) {
                            // print_r($property);

                        }
                        ?>
                    </p>
                </div>

                <div id="numberOfPropertiesToRent" class="numberStatistique">
                    <h3 class="statistiques">Nombre de biens à louer</h3>
                    <p id="numberPropertyRent">
                        <?php
                        // foreach ($allProperties as $property) {
                        // print_r($property);


                        ?>
                    </p>
                </div>
            </div>
        </div>

        <div id="parametersDashboard">
            <h1 class="titlePageDashboard">Paramètres</h1>
            <div>
                <div id="titleParameters">
                    <h2 id="titleChangeContact">Changer les coordonnées</h2>
                    <button type="button" id="updateParameters" class="btnUpdateParameters">
                        Modifier
                    </button>
                    <button type="submit" id="buttonValidateUpdateParameters" class="btnUpdateParameters">Valider</button>
                </div>
                <div id="contactDetails">
                    <div id="updateAdress">
                        <label for="updateAddress">Adresse</label>
                        <input type="text" name="adressDashboard" id="updateAddress" class="inputUpdateAgencyDetails">
                    </div>
                    <div id="updatePhoneNumber">
                        <label for="updatePhoneNumber">Téléphone</label>
                        <input type="text" name="phoneNumbersDashboard" id="updatePhoneNumber" class="inputUpdateAgencyDetails">
                    </div>

                    <div id="agencyDescription">
                        <label for="updateAgencyPresentation">Présentation de l'agence</label>
                        <input type="text" name="agencyDescriptionDashboard" id="updateAgencyPresentation" class="inputUpdateAgencyDetails">
                    </div>
                </div>
            </div>
        </div>
    </div>