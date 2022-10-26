 $(document).ready(function() {
     $(".content").slice(0, 8).show();
     $(".load").on("click", function(e) {
         e.preventDefault();
         $(".content:hidden").slice(0, 4).slideDown();
         if ($(".content:hidden").length == 0) {
             $(".load").text("More coming soon!").addClass("noContent");
         }
     });
 })