console.log("toto");

$(document).ready(function () {
  // get list of properties thanks to filter
  $("#locationProperty").change(function () {
    var selectedValue = $(this).val();

    if (selectedValue) {
      var filteredElements = $("#contenuOfTable td.listOfPropertyByUser").filter(function () {
        return $(this).text().indexOf(selectedValue) !== -1;
      });

      $("#contenuOfTable tr").hide();
      filteredElements.closest("tr").show();
    } else {
      $("#contenuOfTable tr").show();
    }
  });

  $("#dashaboardPropertyStatut").change(function () {
    var selectedValue = $(this).val();

    if (selectedValue) {
      var filteredElements = $("#contenuOfTable td.listOfPropertyByUser").filter(function () {
        return $(this).text().indexOf(selectedValue) !== -1;
      });

      $("#contenuOfTable tr").hide();
      filteredElements.closest("tr").show();
    } else {
      $("#contenuOfTable tr").show();
    }
  });

  // add page dashboard
  $("#houseProperty").hide();
  $("#propertyApartment").hide();
  $(".specificationToRent").hide();

  $("#addTypeProperty").change(function () {
    if ($(this).val() == "house") {
      $("#houseProperty").show();
    } else {
      $("#houseProperty").hide();
    }
  });

  $("#locationProperty").change(function () {
    if ($(this).val() == "apartment") {
      $("#propertyApartment").show();
    } else {
      $("#propertyApartment").hide();
    }
  });

  $("#addStatut").change(function () {
    if ($(this).val() == "rent") {
      $(".specificationToRent").show();
      $("#price").hide();
    } else {
      $(".specificationToRent").hide();
      $("#price").show();
    }
  });
});

// const fileInput = document.querySelector('input[type=file]');
// const file = fileInput.files[0];

// const xhr = new XMLHttpRequest();
// xhr.open('POST', 'upload.php');

// const formData = new FormData();
// formData.append('photo', file);

// xhr.send(formData);
