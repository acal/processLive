// Generates search bar hidden effect with alternating glyphicons
$(document).ready(function () {
     $('.collapse')
         .on('shown.bs.collapse', function() {
             $(this)
                 .parent()
                 .find(".glyphicon-search")
                 .removeClass("glyphicon-search")
                 .addClass("glyphicon-remove");
             })
         .on('hidden.bs.collapse', function() {
             $(this)
                 .parent()
                 .find(".glyphicon-remove")
                 .removeClass("glyphicon-remove")
                 .addClass("glyphicon-search");
             });
         });
         
         
         