// .....::.............
// ....:.:.............
// ....:=:.............
// ....:-..............
// .::==-=-::==:=-..... Tooltips - Este Módulo adiciona tooltips.
// ::...-:.::-+*+:..:.. Reserva Salas AEJICS
// .....-:....-+:..:-:. 
// .....-:..:---:..:-.. V1.0.0
// ..::..:-..:::::....: by marco pisco - marco@marcopisco.com - @marpisco
// ..:.....::....:.....
// ..:::..........::...

document.addEventListener('DOMContentLoaded', function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});