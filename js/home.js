$(document).ready(function () {
  console.log("toto");
  // Waits until the page is ready
  // Write your JS code here
  // console.log('coucou');

  // hide the different specific filters at the beginning
  $("#generalFilters").hide();
  $("#rentalFilters").hide();
  $("#flatFilters").hide();
  $("#houseFilters").show();

  // Showing saleFilters on click
  $("#saleBtn").click(function () {
    $("#btns-sale-lbl").css("box-shadow", "inset 2px 2px 10px #6a4c04");
    $("#btns-rental-lbl").css("box-shadow", "none");
    $("#rentalFilters").hide();
    $("#saleFilters").show();
  });

  // Showing rentalFilters on click
  $("#btns-rental-lbl").click(function () {
    $("#btns-rental").css("box-shadow", "inset 2px 2px 10px #255057");
    $("#btns-sale").css("box-shadow", "none");
    $("#rentalFilters").show();
    $("#saleFilters").hide();
  });

  // Showing more general filters on click
  $("#moreFiltersBtn").click(function () {
    console.log("tata");
    $("#generalFilters").toggle();
  });

  //Showing flat filters on select
  $("#flatSelected").click(function () {
    $("#flatFilters").show();
    $("#houseFilters").hide();
  });

  //Showing house filters on select
  $("#houseSelected").click(function () {
    $("#houseFilters").show();
    $("#flatFilters").hide();
  });

  // Play again : refreshing page
  // $("#playAgainBtn").click(function () {
  //   console.log("playagain");
  //   location.reload(true);
  // });
});
