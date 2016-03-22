window.onload = function() {
var  mainMenu = jQuery(".menu-header");
    mainMenuScrolled = "main-menu-scrolled";
    headerHeight = jQuery(".header").outerHeight();
    console.log(jQuery(".header"));

jQuery(window).scroll(function() {
  if( jQuery(this).scrollTop() > headerHeight ) {
    mainMenu.addClass(mainMenuScrolled);
  } else {
    mainMenu.removeClass(mainMenuScrolled);
  }
});
};
