let button = document.getElementById("getIt");
button.addEventListener("click", function(event) {
   event.preventDefault()
});
$("#getIt").on("click", function() {
   $("#resultDiv").load("resultTable.php");
});