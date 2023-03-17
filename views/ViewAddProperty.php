<div id="containerDashboardAddProperty">
    <div id="titleAddProperty">
        <h1>Ajouter un bien</h1>
    </div>
    <form id="addPropertyForm" method="post" action="">
        <div id="addPropertyDetails">
            <div>
                <label for="addTypeOfProperty" class="formElement"></label>
                <select name="addTypeOfProperty" id="addTypeProperty">
                    <option value="house">Maison</option>
                    <option value="Aaartment">Appartement</option>
                </select>
            </div>
            <div>
                <label for="addStatutProperty" class="formElement"></label>
                <select name="addStatutProperty" id="addStatut">
                    <option value="sale">A vendre</option>
                    <option value="rent">A louer</option>
                </select>
            </div>
            <div>
                <label for="locationOfProperty" class="formElement"></label>
                <select name="locationOfProperty" id="locationProperty">
                    <option value="Nice">Nice</option>
                    <option value="Nice">Nice</option>
                    <option value="Nice">Nice</option>
                    <option value="Nice">Nice</option>
                </select>
            </div>
            <div>
                <label for="descriptionProperty" class="formElement"></label>
                <textarea id="descritionOfTheProperty" name="descriptionProperty" placeholder="Description*" value=""></textarea>
            </div>
            <div>
                <label for="addPriceProperty" class="formElement"></label>
                <input type="text" name="addPriceProperty" value="" class="formElement input" placeholder="Prix*">
            </div>

            <div>
                <label for="area" class="formElement"></label>
                <input type="text" name="area" value="" class="formElement input" placeholder="Surface*">
            </div>
            <div>
                <label for="numberOfPieces" class="formElement"></label>
                <input type="text" name="numberOfPieces" value="" class="formElement input" placeholder="Nombre de pièce*">
            </div>
            <div>
                <label for="distanceFromTheSea" class="formElement"></label>
                <input type="text" name="distanceFromTheSea" value="" class="formElement input" placeholder="Distance de la mer*">
            </div>

            <div>
                <label for="chargesForRent" class="formElement"></label>
                <input type="text" name="chargesForRent" value="" class="formElement input" placeholder="Charges par mois*">
            </div>
            <div>
                <label for="furnishedProperty" class="formElement"></label>
                <select name="furnishedProperty" id="furnished">
                    <option value="furnished">Meublé</option>
                    <option value="noFurnished">Non meublé</option>
                </select>
            </div>
            <div>
                <label for="swimmingpool" class="formElement">Piscine</label>
                <input type="radio" id="swimmingpool" name="bonus" value="">
                <label for="seaView" class="formElement">Vue sur mer</label>
                <input type="radio" id="seaView" name="bonus" value="">
            </div>
            <button type="button" id="addImage">Ajouter des images</button>
            <div class="bottomForm">
                <button class="button" type="submit" class="propertySubmitBtn"> Valider </button>
                <button class="button" type="submit" class="propertySubmitBtn"> Annuler </button>
            </div>
    </form>
</div>