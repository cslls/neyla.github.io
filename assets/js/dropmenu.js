/*автовыпад меню*/
var dropmenu = function() {
    $(document).ready(function() {
        $(".dropdown").hover(function() {
            $(this).addClass("show");
            $(this).find("a").attr("aria-expanded", "true");
            $(this).find(".dropdown-menu").addClass("show");
        }, function() {
            $(this).removeClass("show");
            $(this).find("a").attr("aria-expanded", "false");
            $(this).find(".dropdown-menu").removeClass("show");
        });
    });
}


if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
} else dropmenu()