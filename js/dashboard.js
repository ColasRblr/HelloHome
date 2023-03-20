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
