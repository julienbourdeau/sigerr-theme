// Create the dropdown base
jQuery("<select />").appendTo("nav").addClass("visible-phone");

// Create default option "Go to..."
jQuery("<option />", {
   "selected": "selected",
   "value"   : "",
   "text"    : "(Menu) Go to..."
}).appendTo("nav select");

// Populate dropdown with menu items
jQuery("nav ul.nav li a").each(function() {
 var el = jQuery(this);
 console.log(el);
 jQuery("<option />", {
     "value"   : el.attr("href"),
     "text"    : el.text()
 }).appendTo("nav select");
});

jQuery("nav select").change(function() {
  window.location = jQuery(this).find("option:selected").val();
});