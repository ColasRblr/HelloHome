<?php $titre = "Tableau de bord";
// var_dump($allProperties);
?>

<link rel="stylesheet" href="./style/dashboardHome.css">

</head>

<body>
    <header>
        <a href="?action=displayDashboard">
            <img src="././asset/img/logo_white.png" alt="logo">
        </a>
        <div id="icon_container">
            <a href="?action=profil">
                <i class="bi bi-person-fill"></i>
            </a>
            <a href="?action=deconnection">
                <i class="bi bi-x-circle-fill"></i>
            </a>
            <a href="./views/ViewHome.php">
                <i class="bi bi-window-fullscreen"></i>
            </a>
            <i class="bi bi-person-fill"></i>
            <i class="bi bi-x-circle-fill"></i>
        </div>
    </header>

    <div id="containerHomePageDashboard">
        <div id="positionElementsHomePageDashboard">
            <div id="managementProperty">
                <h1 class="titlePageDashboard">Gestion des biens</h1>
                <form method="post" action="">
                    <div id="dashboardManagementFilters">

                        <select name="filterTypeOfProperty" id="dashaboardTypeProperty" class="btnFilterSelectDashboard">
                            <option value="">Choisi son type</option>
                            <option value="house">Appartement</option>
                            <option value="apartment">Maison</option>
                        </select>

                        <select name="filterPropertyStatut" id="dashaboardPropertyStatut" class="btnFilterSelectDashboard">
                            <option value="">Choisi son statut</option>
                            <option value="sale">A vendre</option>
                            <option value="rent">A louer</option>
                        </select>


                        <select name="locationOfProperty" id="locationProperty" class="btnFilterSelectDashboard">
                            <option value="">Choisi une ville</option>
                            <option value="Nice">Nice</option>
                            <option value="Saint-Jean-Cap-Ferrat">Saint-Jean-Cap-Ferrat</option>
                            <option value="Cagnes-sur-Mer">Cagnes-sur-Mer</option>
                        </select>

                </form>
                <a href="?action=addProperty">
                    <button type="button" id="btnAddProperty"> Ajouter un bien</button>
                </a>
            </div>

            <div id="listOfProperties">
                <table>
                    <tbody id="contenuOfTable">
                        <?php
                        foreach ($allProperties as $property) {
                        ?>
                            <tr>
                                <td class="listOfPropertyByUser"><a href="?action=updateProperty"><?= $property['property_name'] ?></a> <?= $property['property_location'] ?> </td>
                            <?php
                        }
                            ?>
                            </tr>
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
                    // echo count($allHouses);
                    ?>
                </p>
            </div>

            <div id="numberOfPropertiesToRent" class="numberStatistique">
                <h3 class="statistiques">Nombre de biens à louer</h3>
                <p id="numberPropertyRent">
                    <?php
                    // echo count($allRental);
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
                    <input type="text" name="phoneNumbersDashboard" id="inputUpdatePhoneNumber" class="inputUpdateAgencyDetails">
                </div>

                <div id="agencyDescription">
                    <label for="updateAgencyPresentation">HelloHome</label>
                    <input type="text" name="agencyDescriptionDashboard" id="updateAgencyPresentation" class="inputUpdateAgencyDetails">
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer>
        <p>HelloHome © 2023</p>
    </footer>