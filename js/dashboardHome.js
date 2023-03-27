// console.log("toto");

$(document).ready(function () {
  // get list of properties thanks to filter

  $(".btnFilterSelectDashboard").on("change", function () {
    let selectedLocation = $("#locationProperty").val();
    let selectedStatus = $("#dashboardPropertyStatus").val();
    let selectedType = $("#dashaboardTypeProperty").val();

    $(".propertyItem").each(function () {
      // "find()" pour sélectionner les éléments enfants de chaque "propertyItem" ayant les classes CSS "propertyLocation", "propertyStatus" et "propertyType"."text()" permet d'extraire le texte de chaque élément sélectionné.
      let location = $(this).find(".propertyLocation").text();
      let status = $(this).find(".propertyStatus").text();
      let type = $(this).find(".propertyType").text();

      if ((selectedLocation === "all" || location === selectedLocation) && (selectedStatus === "all" || status === selectedStatus) && (selectedType === "all" || type === selectedType)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
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
