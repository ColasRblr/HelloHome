<?php $titre = "Ajouter un bien"; ?>


<link rel="stylesheet" href="./style/dashboardAddProperty.css">

<div id="containerDashboardAddProperty">
    <div id="titleAddProperty">
        <h1 class="titlePageDashboard">Ajouter un bien</h1>
    </div>
    <form id="addPropertyForm" method="post" action="?action=validAddProperty" enctype="multipart/form-data>
        <div id=" addPropertyDetails">
        <div>
            <label for="addTypeOfProperty" class="formElement"></label>
            <select name="addTypeOfProperty" id="addTypeProperty" class="btnSelectAddDetails">
                <option value="house">Maison</option>
                <option value="apartment">Appartement</option>
            </select>
        </div>
        <div>
            <label for="nameProperty">Nom du bien</label>
            <input type="text" name="nameProperty" id="nameProperty">
        </div>
        <div>
            <label for="addStatutProperty" class="formElement"></label>
            <select name="addStatutProperty" id="addStatut" class="btnSelectAddDetails">
                <option value="">Choisi son statut</option>
                <option value="sale">A vendre</option>
                <option value="rent">A louer</option>
            </select>
        </div>
        <div>
            <label for="locationOfProperty" class="formElement"></label>
            <select name="locationOfProperty" id="locationProperty" class="btnSelectAddDetails">
                <option value="">Choisi une ville</option>
                <option value="Nice">Nice</option>
                <option value="Saint-Jean-Cap-Ferrat">Saint-Jean-Cap-Ferrat</option>
                <option value="Cagnes-sur-Mer">Cagnes-sur-Mer</option>
            </select>
        </div>

        <div>
            <label for="addPriceProperty" class="formElement"></label>
            <input type="number" name="addPriceHouse" class="formElement input" placeholder="Prix*">
        </div>
        <div class="specificationToRent">
            <label for="addPriceProperty" class="formElement"></label>
            <input type="number" name="addPriceApartment" value="" class="formElement input" placeholder="Prix par mois*">
        </div>

        <div>
            <label for="area" class="formElement"></label>
            <input type="number" name="area" class="formElement input" placeholder="Surface en m2*">
        </div>
        <div>
            <label for="numberOfPieces" class="formElement"></label>
            <input type="number" name="numberOfPieces" value="" class="formElement input" placeholder="Nombre de pièce*">
        </div>
        <div>
            <label for="distanceFromTheSea" class="formElement"></label>
            <input type="number" name="distanceFromTheSea" value="" class="formElement input" placeholder="Distance de la mer en mètre*">
        </div>

        <div class="specificationToRent">
            <label for="chargesForRent" class="formElement"></label>
            <input type="number" name="chargesForRent" value="" class="formElement input" placeholder="Charges par mois*">
        </div>
        <div class="specificationToRent">
            <label for="furnishedProperty" class="formElement"></label>
            <select name="furnishedProperty" id="furnished" class="btnSelectAddDetails">
                <option value="furnished">Meublé</option>
                <option value="noFurnished">Non meublé</option>
            </select>
        </div>
</div>
<div id="btnCheckbox">
    <label for="swimmingpool" class="formElement">Piscine</label>
    <input type="checkbox" id="swimmingpool" class="btnCheckboxBonus" name="swimmingpool" value="swimmingpool">
    <label for="seaView" class="formElement">Vue sur mer</label>
    <input type="checkbox" id="seaView" class="btnCheckboxBonus" name="seaView" value="seaView">
</div>

<div id="textarea">
    <label for="descriptionProperty" class="formElement"></label>
    <textarea id="descritionOfTheProperty" name="descriptionProperty" placeholder="Description*" value=""></textarea>
</div>
<input type="file" name="picture" id="">Ajouter des images
<!-- <button type="button" id="addImage">Ajouter des images</button> -->
<div class="bottomForm">
    <button type="submit" class="propertySubmitBtn"> Valider </button>
    <button type="reset" class="propertySubmitBtn"> Annuler </button>
</div>
</form>
</div>