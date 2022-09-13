function AfficherSousMenu() {
    "use strict";

    if ($("#sous-Admin").hasClass("d-none")) {
        $("#sous-Admin").removeClass("d-none");
        $("#sous-Admin").addClass("d-block");
    } else {
        $("#sous-Admin").removeClass("d-block");
        $("#sous-Admin").addClass("d-none");
    }
}

function stopReservation(){
    document.location.href="VCIResa.php"; 
}

$(document).ready(function() {
    $("#Admin").on('click',AfficherSousMenu);
    $("#StopResa").on('click',stopReservation);
});