<?php $titre = "Tableau de bord";
var_dump($allProperties);
?>

<link rel="stylesheet" href="./../style/dashboardHomePage.css">

<div id="containerHomePageDashboard">
    <div id="positionElementsHomePageDashboard">

        <div id="managementProperty">
            <h1 class="titlePageDashboard">Gestion des biens</h1>
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
                <div>
                    <label for="locationOfProperty" class="formElement"></label>
                    <select name="locationOfProperty" id="locationProperty" class="btnFilterSelectDashboard">
                        <option value="">Choisi une ville</option>
                        <option value="Nice">Nice</option>
                        <option value="Nice">Saint-Jean-Cap-Ferrat</option>
                        <option value="Nice">Cagnes-sur-Mer</option>
                    </select>
                </div>
                <a href="">
                    <button type="button" id="btnAddProperty"> Ajouter un bien</button>
                </a>
            </div>
        </div>
        <div id="listOfProperties">
            <a href="./../controllers/PropertyController.php?action=getOneProperty">
                <table>
                    <tr>
                        <th>Liste des biens</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </a>
        </div>

        <div id="statistiquesDashboard">
            <h1>Statistiques</h1>
            <div id="numberOfPropertiesAvailable">
                <p class="statistiques">Nombre de biens disponibles</p>
                <div class="numberStatistique">
                    <input type="number" id="inputNumberPropertiesAvailable" class="inputStatistiques">
                </div>
            </div>
            <div id="numberOfPropertiesToSale">
                <p class="statistiques">Nombre de biens à vendre</p>
                <div class="numberStatistique">
                    <input type="number" id="inputNumberPropertiesSale" class="inputStatistiques">
                </div>
            </div>
            <div id="numberOfPropertiesToRent">
                <p class="statistiques">Nombre de biens à louer</p>
                <div class="numberStatistique">
                    <input type="number" id="inputNumberPropertiesRent" class="inputStatistiques">
                </div>
            </div>
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <div id="parametersDashboard">
        <h1 class="titlePageDashboard">Paramètres</h1>
        <div>
            <div id="titleParameters">
                <h2 id="titleChangeContact">Changer les coordonnées</h2>
                <button type="button" id="updateParameters" class="btnUpdateParameters">
                    <!-- <i class="bi bi-pencil-fill"></i> -->
                    Modifier
                </button>
                <button type="submit" id="buttonValidateUpdateParameters" class="btnUpdateParameters">Valider</button>
            </div>
            <div id="contactDetails">
                <div id="updateAdress">
                    <label for="adress">Adresse</label>
                    <input type="text" name="adressDashboard" class="inputUpdateAgencyDetails">
                </div>
                <div id="updatePhoneNumber">
                    <label for="phoneNumber">Téléphone</label>
                    <input type="text" name="phoneNumbersDashboard" class="inputUpdateAgencyDetails">
                </div>

                <div id="agencyDescription">
                    <label for="updateAgencyPresentation">Présentation de l'agence</label>
                    <input type="text" name="agencyDescriptionDashboard" class="inputUpdateAgencyDetails">
                </div>
            </div>
        </div>
    </div>
</div>