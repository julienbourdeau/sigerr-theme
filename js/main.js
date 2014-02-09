// Create the dropdown base
jQuery("<select />").appendTo("nav").addClass("visible-phone responsive-menu");

// Create default option "Go to..."
jQuery("<option />", {
   "selected": "selected",
   "value"   : "",
   "text"    : "(Menu) Go to..."
}).appendTo("nav select");

// Populate dropdown with menu items
jQuery("nav ul.nav li a").each(function() {
 var el = jQuery(this);
 jQuery("<option />", {
     "value"   : el.attr("href"),
     "text"    : el.text()
 }).appendTo("nav select");
});

jQuery("nav select").change(function() {
  window.location = jQuery(this).find("option:selected").val();
});


// Add flags before link in the post list (homepage)
jQuery('ul.post-list a[href^="http://blog.julienbourdeau.com"]').before("<span class='flag flag-fr'></span>");
jQuery('ul.post-list a[href^="http://www.sigerr.org"]').before("<span class='flag flag-uk'></span>");
jQuery('ul.post-list a[href^="http://travel.julienbourdeau.com"]').before("<span class='flag flag-fr'></span> <span class='flag flag-uk'></span>");