
$(document).ready(function () {
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

  $("#addTypeProperty").change(function () {
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

