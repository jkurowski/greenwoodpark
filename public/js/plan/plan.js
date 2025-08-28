const resizeDelay = 200;
const floorHoverColor = 'fb9b00';
const floorHoverOpacity = 0.8;

function onWindowResize() {
    window.setTimeout(function () {
        const e = $('#plan-holder').width();
        $("#invesmentplan").mapster("resize",e);
    }, resizeDelay);
}
$(document).ready(function(){
    $('#invesmentplan').mapster({
        fillColor: floorHoverColor,
        fillOpacity: floorHoverOpacity,
        clickNavigate: true
    });
});
$(window).bind('resize', onWindowResize);
