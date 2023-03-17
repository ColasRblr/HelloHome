<?php $titre = "Tableau de bord"; ?>

<div id="containerHomePageDashboard">
    <div id="statistiquesDashboard">
        <h1>Statistiques</h1>
        <div id="numberOfPropertiesAvailable">
            <p class="statistiques">Nombre de biens disponibles</p>
        </div>
        <div id="numberOfPropertiesToSale">
            <p class="statistiques">Nombre de biens à vendre</p>
        </div>
        <div id="numberOfPropertiesToRent">
            <p class="statistiques">Nombre de biens à louer</p>
        </div>
        <canvas id="myChart"></canvas>
    </div>
    <div id="managementProperty">
        <h1>Gestion des biens</h1>
        <div id="dashboardManagementFilters">
            <label id="dashboardSearch">
                <input type="text" id="inputSearchDashboard" name="inputSearchDashboard" placeholder="Recherche">
            </label>
            <label for="typeOfProperty"> </label>
            <select name="filterTypeOfProperty" id="dashaboardTypeProperty">
                <option value="apartment">Appartement</option>
                <option value="apartment">Maison</option>
            </select>
            <label for="propertyStatut"> </label>
            <select name="filterPropertyStatut" id="dashaboardPropertyStatut">
                <option value="sale">A vendre</option>
                <option value="rent">A louer</option>
            </select>
            <button type="button" id="btnAddProperty">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
            </button>
        </div>
    </div>
    <div id="listOfProperties"></div>

    <div id="parametersDashboard">
        <div id="titleParameters">
            <h1>Paramètres</h1>
            <button type="button">
                <i class="bi bi-pencil-fill"></i>
            </button>
            <button type="submit" class="buttonValidateUpdateParameters">Valider</button>
        </div>
        <div id="contactDetails">
            <h2>Changer les coordonnées</h2>
            <div id="updateAdress">
                <label for="adress">Adresse</label>
                <input type="text" name="adressDashboard" class="inputUpdateAgencyDetails">
            </div>
            <div id="updatePhoneNumber">
                <label for="phoneNumber">Téléphone</label>
                <input type="text" name="phoneNumbersDashboard" class="inputUpdateAgencyDetails">
            </div>
        </div>
        <div id="agencyDescription">
            <label for="updateAgencyPresentation">Présentation de l'agence</label>
            <input type="text" name="agencyDescriptionDashboard" class="inputUpdateAgencyDetails">
        </div>
    </div>
</div>