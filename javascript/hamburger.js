function openNav() {
    document.getElementById("mySidenav").style.width = "60%";
    document.getElementById("sidebarOpen").style.display = "none";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("sidebarOpen").style.display = "block";

}


$(function () {
  $(document).scroll(function () {
    var $top = $("#top");
    var $nav = $("#sidebarOpen");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $top.height());

  });
});
