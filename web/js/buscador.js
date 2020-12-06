// JavaScript source cod
function buscar(){
    var busqueda = document.getElementById("search");
    if (busqueda.toUpperCase == 'MAQUILLAJE') {
        document.getElementById("form").value = 'maquillaje.html';
    }
    else if (busqueda.toUpperCase == 'PIEL') {
        document.getElementById("form").value= '"piel.html"';
    }
    if (busqueda.toUpperCase == 'TOOLS') {
        direccion = '"tools.html"';
    }
    else if (busqueda.toUpperCase == 'AMOR') {
        document.getElementById("form").value = '"amor.html"';
    }
    if (busqueda.toUpperCase == 'MAQUILLAJE') {
        document.getElementById("form").value = '"maquillaje.html"';
    }
    else if (busqueda.toUpperCase == 'BEAUTY') {
        document.getElementById("form").value = '"beauty.html"';
    }
    if (busqueda.toUpperCase == 'BISSU') {
        document.getElementById("form").value = '"bisu.html"';
    }
    else if (busqueda.toUpperCase == 'PROSA') {
        document.getElementById("form").value = '"prosa.html"';
    }
    else {
        document.getElementById("form").value = '"otras.html"'
    }
   
}