$(document).ready(function ()
{
    $("#btn").hover(mouse_enter, mouse_leave);

    function mouse_enter()
    {
        $("#submit").css('right', '13rem');
    }
    function mouse_leave()
    {
        $("#submit").css('right', '0');
    }

    $("#btn").hover(mouse_leave, mouse_enter);
});