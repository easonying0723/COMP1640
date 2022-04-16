// Category Model Toggle

$('#addcategory').on( 'click',function () {

   $("#categoryModal").modal("show");

});

$('#createcategory').on( 'click',function () {

   $("#categoryModal").modal("hide");

});

$('#createcategory').on( 'click',function () {

   $("#successModal").modal("show");

});

// Title Model Toggle

$('#addtitle').on( 'click',function () {

   $("#titleModal").modal("show");

});

$('#createtitle').on( 'click',function () {

   $("#titleModal").modal("hide");

});

$('#createtitle').on( 'click',function () {

   $("#successModal").modal("show");

});

// Idea Model Toggle

$('#addidea').on( 'click',function () {

   $("#ideaModal").modal("show");

});

// View Toggle

 $('#view').on( 'click',function () {

    $("#viewModal").modal("show");

 });


//----------------------------Upload Photo----------------------------//

$(document).on("click", ".browse", function() {
   var photo = $(this).parents().find("#photo");
   photo.trigger("click");
 });
 
 $("#uploadphoto").change(function(e) {
   var fileName = e.target.files[0].name;
   
   $("#photo").val(fileName);

   var reader = new FileReader();
   reader.onload = function(e) {
     // get loaded data and render thumbnail.
     document.getElementById("preview").src = e.target.result;
   };
   // read the image file as a data URL.
   reader.readAsDataURL(this.files[0]);
});