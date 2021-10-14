$(document).ready(function () {
  $("#ancla-add").click(function () {
    $("#ancla-add").toggleClass("hidden");
    $(".create-clients").toggleClass("hidden");
  });
  $(".btn-cancel-create").click(function () {
    $("#ancla-add").toggleClass("hidden");
    $(".create-clients").toggleClass("hidden");
  });
});
