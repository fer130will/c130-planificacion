//window.onload = function ver() {
   // alert ('Ingrese las horas actuales de la aeronave que desee las EFH');
  //  };
  function final() {
    var hactual2 = parseInt(document.getElementById('horaInput').value);
    var hacentral2 = parseInt(document.getElementById('hAlacentral').value);
    var haexterna2 = parseInt(document.getElementById('hAlaExterna').value);
var hefh = parseFloat(document.getElementById('cel1').textContent);

var avion = hactual2 * hefh;
var aCentral = hacentral2 * hefh;
var aExterior = haexterna2 * hefh;

document.getElementById('cel2').textContent = avion;
document.getElementById('cel3').textContent=aCentral;
document.getElementById('cel4').textContent=aExterior;
}
//----------------------- fae 892 end ----------------------------------------------------------------//
//----------------------- fae 893 ----------------------------------------------------------------//
function final893() {
  var hactual93 = parseInt(document.getElementById('horaInput893').value);
  var hacentral93 = parseInt(document.getElementById('hAlacentral893').value);
  var haexterna93 = parseInt(document.getElementById('hAlaExterna893').value);
var hefh93 = parseFloat(document.getElementById('cel112').textContent);

var avion93 = hactual93 * hefh93;
var aCentral93 = hacentral93 * hefh93;
var aExterior93 = haexterna93 * hefh93;

document.getElementById('cel22').textContent = avion93;
document.getElementById('cel32').textContent=aCentral93;
document.getElementById('cel42').textContent=aExterior93;
}
//----------------------- fae 893 end ----------------------------------------------------------------//
//----------------------- fae 898 ----------------------------------------------------------------//
function final898() {
  var hactual98 = parseInt(document.getElementById('horaInput898').value);
  var hacentral98 = parseInt(document.getElementById('hAlacentral898').value);
  var haexterna98 = parseInt(document.getElementById('hAlaExterna898').value);
var hefh93 = parseFloat(document.getElementById('cel113').textContent);

var avion98 = hactual98 * hefh93;
var aCentral98 = hacentral98 * hefh98;
var aExterior98 = haexterna98 * hefh98;

document.getElementById('cel23').textContent = avion98;
document.getElementById('cel33').textContent=aCentral98;
document.getElementById('cel43').textContent=aExterior98;
}
//----------------------- fae 898 end ----------------------------------------------------------------//