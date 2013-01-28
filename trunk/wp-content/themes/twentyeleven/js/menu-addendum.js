$(document).ready(function() {
    $("div#wpm1.sf-grey ul").css({
        display: "inherit"
    });
    $("div#wpm1.sf-grey li").hover(function() {
        $(this).find('ul:first').css({
            visibility: "visible",
            display: "none"
        }).show(400);
        $("ul").prev("ul").attr('style', 'background-color:#000');
    }, function() {
        $(this).find('ul:first').css({
            visibility: "hidden"
        });
    });
    $("div#wpm1.sf-grey li ul li a").hover(function() {
		$(this).parent().parent().parent().find("a:first").attr('style', 'background: url(wp-content/plugins/menubar-templates/Suckerfish_41/ipc_sfondo_menu.png);color: #6F879A');
        //$(this).parent().parent().parent().find("a:first").attr('style', 'background-color:#FFFFFF;color: #6F879A');
    }, function() {
        $(this).parent().parent().parent().find("a").attr('style', null);
    });
});