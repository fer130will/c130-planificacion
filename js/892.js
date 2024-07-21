//-------------calculos 892------------------------------------------------------------------------------------------//
document.querySelector("button").addEventListener("click", calcular1);
window.onload = function carga() {

};
function calcular1() {
  //--------------------------------------Variables ----------------------------------------------------------------//
  //------------------------ datos iniciales ---------------------------------------------------------------------//
  var inputFecha = document.getElementById("fechaInput").value;
  var inputMision = document.getElementById("misionInput").value;
  var inputHora = parseInt(document.getElementById("horaInput").value);
  var inputSegundo = parseInt(document.getElementById("segundoInput").value);
  var inputAlt = parseInt(document.getElementById("alturaInput").value);
  var inputCombustible = parseInt(document.getElementById("combustibleInput").value);
  var inputCarga = parseInt(document.getElementById("cargaInput").value);
  var inputPasajeros = parseInt(document.getElementById("pasajerosInput").value);

  //------------------------ datos iniciales end-----------------------------------------------------------------//
  //------------------------ validación datos de ingreso -----------------------------------------------------------------//
  if (inputHora > 12 || inputSegundo > 60 || inputAlt > 33000 || inputCombustible > 65000
    || inputCarga > 40000 || inputPasajeros > 100) {
    Swal.fire({
      title: "FAE 892",
      text: "Los datos superan el valor",
      icon: "warning",
      footer: "C-130 Hercules",
      timer: 6000,
      timerProgressBar: true,
      allowOutSideClick: false,
      allowSideEscapeKey: false,
      allowEnterKey: false
    });
  }
  //------------------------ validación datos de ingreso end -----------------------------------------------------------------//
  //----------------------------- datos OWE --------------------------------...-------------------------------..//
  var pesoOwe = parseInt(document.getElementById("pesoVacio").value);
  var aceiteOwe = parseInt(document.getElementById("aceiteNoUsado").value);
  var combOwe = parseInt(document.getElementById("combustibleNoUsado").value);
  var trip = parseInt(document.getElementById("tripulacion").value);
  var aguaComida = parseInt(document.getElementById("comidaAgua").value);
  var cargaAccesorios = parseInt(document.getElementById("accesoriosCarga").value);
  //----------------------------- datos OWE end -------------------------------------------------------------.....//
  var grossPeso = parseInt(document.getElementById("grossWeight").value);
  //--------------------------------------Variables end -----------------------------------------------------------//
  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //-------------OWE calculos------------------------------------------------------------------------------//   
  var sumaOwe = pesoOwe + aceiteOwe + combOwe + aguaComida + cargaAccesorios + trip;
  document.getElementById("oweTotal").value = sumaOwe;
  //-------------OWE calculos end------------------------------------------------------------------------------//
  //-------------ECW calculos ---------------------------------------------------------------------------------//
  var restaEcw = grossPeso - inputCombustible - sumaOwe;
  document.getElementById("CombustibleEwc").value = inputCombustible;
  document.getElementById("pesoOweTotal").value = sumaOwe;
  document.getElementById("ecwTotal").value = restaEcw;
  //-------------calculos ECW end ---------------------------------------------------------------------------//
  ////////////////////////////////////////////////////////////////////////////////////////////////
  //--------------------------Logistico Corto ----------------------------------------------------------------//
  if (inputMision == "corto") {
    //------------------------ suma de contador ......................................................-----//
    var númeroVueloCorto = parseInt(document.getElementById("vueloCorto").value);
    var sumaNumeroCorto = númeroVueloCorto + 1;
    document.getElementById("vueloCorto").value = sumaNumeroCorto;

    //-----...................... Suma contador end  ---------------------------------------------------------//
    //-------horas --------------------------------------------------//
    var horaCortoTotal = parseInt(document.getElementById("horaTotalCorto").value);
    var segundoCortoTotal = parseInt(document.getElementById("segundoTotalCorto").value);

    var sumaHoraCorto = inputHora + horaCortoTotal;
    var sumaSegundoCorto = inputSegundo + segundoCortoTotal;

    if (sumaSegundoCorto > "59") {
      var horaFinalCorto = sumaHoraCorto + 1;
      var segundoFinalCorto = sumaSegundoCorto - 60;
      document.getElementById("horaTotalCorto").value = horaFinalCorto;
      document.getElementById("segundoTotalCorto").value = segundoFinalCorto;
    } else {
      if (sumaSegundoCorto < "60") {
        var horaFinalCorto = sumaHoraCorto;
        var segundoFinalCorto = sumaSegundoCorto;
        document.getElementById("horaTotalCorto").value = horaFinalCorto;
        document.getElementById("segundoTotalCorto").value = segundoFinalCorto;
      }
      document.getElementById("HCorto").value = horaFinalCorto;
    }
    //----------------------------- horas  end ---------------------------------------------------------//
    //------------------------------ Suma de altura ---------------------------------------------------//
    var alturaCorto = parseInt(document.getElementById("altTotalCorto").value);
    var sumaAltCorto = (alturaCorto + inputAlt).toFixed(0);
    document.getElementById("altTotalCorto").value = sumaAltCorto;
    //------------------------------ Suma de altura end ---------------------------------------------------//
    //------------------------------ Suma de promedio altura ---------------------------------------------------//
    var promedioAltCortoFinal = (sumaAltCorto / sumaNumeroCorto).toFixed(0);
    document.getElementById("altPromCorto").value = promedioAltCortoFinal;
    //----------------------------- altura promedio end --------------------------------------------------//
    //------------------------------ Suma carga --------------------------------------------------------//
    var totalCargaCorto = parseInt(document.getElementById("cargTotalCorto").value);
    var sumaCargaCorto = inputCombustible + inputCarga + (inputPasajeros * 170) + totalCargaCorto;
    document.getElementById("cargTotalCorto").value = sumaCargaCorto;
    //------------------------------ Suma carga end --------------------------------------------------------//
    //------------------------------ Promedio carga --------------------------------------------------------//        
    var promedioCargaCorto = (sumaCargaCorto / sumaNumeroCorto).toFixed(0);
    document.getElementById("cargPromCorto").value = promedioCargaCorto;
    //--------------------------carga promedio end ----------------------------------------------------------//
    //---------------------------------- FS Corto ---------------------------------------//
    if (promedioAltCortoFinal < 5000) {
      if (promedioCargaCorto < 10000) {
        document.getElementById("fsCorto").value = 3;
      } else {
        if (promedioCargaCorto < 20000) {
          document.getElementById("fsCorto").value = 4;
        } else {
          if (promedioCargaCorto <= 29000) {
            document.getElementById("fsCorto").value = 6;
          } else {
            if (promedioCargaCorto > 29000) {
              document.getElementById("fsCorto").value = 9;
            }
          }
        }
      }
    } else {
      if (promedioAltCortoFinal < 12000) {
        if (promedioCargaCorto < 10000) {
          document.getElementById("fsCorto").value = 2;
        } else {
          if (promedioCargaCorto < 20000) {
            document.getElementById("fsCorto").value = 3;
          } else {
            if (promedioCargaCorto <= 29000) {
              document.getElementById("fsCorto").value = 4;
            } else {
              if (promedioCargaCorto > 29000) {
                document.getElementById("fsCorto").value = 6;
              }
            }
          }
        }
      } else {
        if (promedioAltCortoFinal <= 18000) {
          if (promedioCargaCorto < 10000) {
            document.getElementById("fsCorto").value = 1;
          } else {
            if (promedioCargaCorto < 20000) {
              document.getElementById("fsCorto").value = 1.5;
            } else {
              if (promedioCargaCorto <= 29000) {
                document.getElementById("fsCorto").value = 2;
              } else {
                if (promedioCargaCorto > 29000) {
                  document.getElementById("fsCorto").value = 3;
                }
              }
            }
          }
        } else {
          if (promedioAltCortoFinal > 18000) {
            if (promedioCargaCorto < 10000) {
              document.getElementById("fsCorto").value = 0.5;
            } else {
              if (promedioCargaCorto < 20000) {
                document.getElementById("fsCorto").value = 0.75;
              } else {
                if (promedioCargaCorto <= 29000) {
                  document.getElementById("fsCorto").value = 1;
                } else {
                  if (promedioCargaCorto > 29000) {
                    document.getElementById("fsCorto").value = 1.5;
                  }
                }
              }
            }
          }
        }
      }
    }
    var fsc = parseFloat(document.getElementById("fsCorto").value);
    var hrsCorto = parseInt(document.getElementById("HCorto").value);
    var efhCorto = fsc * hrsCorto;
    document.getElementById("efhCorto").value = efhCorto;

    alert("horas cortp "+hrsCorto);
  alert("efh corto "+fsc);
  }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //------------------------------ largo --------------------------------------------//
  if (inputMision == "largo") {
    //------------------------ suma de contador ......................................................-----//
    var númeroVueloLargo = parseInt(document.getElementById("vueloLargo").value);
    var sumaNumeroLargo = númeroVueloLargo + 1;
    document.getElementById("vueloLargo").value = sumaNumeroLargo;
    //-----...................... Suma contador end  ---------------------------------------------------------//
    //-------horas --------------------------------------------------//
    var horaLargoTotal = parseInt(document.getElementById("horaTotalLargo").value);
    var segundoLargoTotal = parseInt(document.getElementById("segundoTotalLargo").value);
    var sumaHoraLargo = inputHora + horaLargoTotal;
    var sumaSegundoLargo = inputSegundo + segundoLargoTotal;
    if (sumaSegundoLargo > "59") {
      var horaFinalLargo = sumaHoraCorto + 1;
      var segundoFinalLargo = sumaSegundoLargo - 60;
      document.getElementById("horaTotalLargo").value = horaFinalLargo;
      document.getElementById("segundoTotalLargo").value = segundoFinalLargo;
    } else {
      if (sumaSegundoLargo < "60") {
        var horaFinalLargo = sumaHoraLargo;
        var segundoFinalLargo = sumaSegundoLargo;
        document.getElementById("horaTotalLargo").value = horaFinalLargo;
        document.getElementById("segundoTotalLargo").value = segundoFinalLargo;
      }
      document.getElementById("HLargo").value = horaFinalLargo;
    }
    //----------------------------- horas  end ---------------------------------------------------------//
    //------------------------------ Suma de altura ---------------------------------------------------//
    var alturaLargo = parseInt(document.getElementById("altTotalLargo").value);
    var sumaAltLargo = (alturaLargo + inputAlt).toFixed(0);
    document.getElementById("altTotalLargo").value = sumaAltLargo;
    //------------------------------ Suma de altura end ---------------------------------------------------//
    //------------------------------ Suma de promedio altura ---------------------------------------------------//
    var promedioAltLargoFinal = (sumaAltLargo / sumaNumeroLargo).toFixed(0);
    document.getElementById("altPromLargo").value = promedioAltLargoFinal;
    //----------------------------- altura promedio end --------------------------------------------------//
    //------------------------------ Suma carga --------------------------------------------------------//
    var totalCargaLargo = parseInt(document.getElementById("cargTotalLargo").value);
    var sumaCargaLargo = inputCombustible + inputCarga + (inputPasajeros * 170) + totalCargaLargo;
    document.getElementById("cargTotalLargo").value = sumaCargaLargo;
        //------------------------------ Suma carga end --------------------------------------------------------//
    //------------------------------ Promedio carga --------------------------------------------------------//        
    var promedioCargaLargo = (sumaCargaLargo / sumaNumeroLargo).toFixed(0);
    document.getElementById("cargPromLargo").value = promedioCargaLargo;
    //--------------------------carga promedio end -------------------------------------------------//
    //---------------------------------- FS Corto ---------------------------------------//
    if (promedioAltLargoFinal < 5000) {
      if (promedioCargaLargo < 10000) {
        document.getElementById("fsLargo").value = 3;
      } else {
        if (promedioCargaLargo < 20000) {
          document.getElementById("fsLargo").value = 4;
        } else {
          if (promedioCargaLargo <= 29000) {
            document.getElementById("fsLargo").value = 6;
          } else {
            if (promedioCargaLargo > 29000) {
              document.getElementById("fsLargo").value = 9;
            }
          }
        }
      }
    } else {
      if (promedioAltLargoFinal < 12000) {
        if (promedioCargaLargo < 10000) {
          document.getElementById("fsLargo").value = 2;
        } else {
          if (promedioCargaLargo < 20000) {
            document.getElementById("fsLargo").value = 3;
          } else {
            if (promedioCargaLargo <= 29000) {
              document.getElementById("fsLargo").value = 4;
            } else {
              if (promedioCargaLargo > 29000) {
                document.getElementById("fsLargo").value = 6;
              }
            }
          }
        }
      } else {
        if (promedioAltLargoFinal <= 18000) {
          if (promedioCargaLargo < 10000) {
            document.getElementById("fsLargo").value = 1;
          } else {
            if (promedioCargaLargo < 20000) {
              document.getElementById("fsLargo").value = 1.5;
            } else {
              if (promedioCargaLargo <= 29000) {
                document.getElementById("fsLargo").value = 2;
              } else {
                if (promedioCargaLargo > 29000) {
                  document.getElementById("fsLargo").value = 3;
                }
              }
            }
          }
        } else {
          if (promedioAltLargoFinal > 18000) {
            if (promedioCargaLargo < 10000) {
              document.getElementById("fsLargo").value = 0.5;
            } else {
              if (promedioCargaLargo < 20000) {
                document.getElementById("fsLargo").value = 0.75;
              } else {
                if (promedioCargaLargo <= 29000) {
                  document.getElementById("fsLargo").value = 1;
                } else {
                  if (promedioCargaLargo > 29000) {
                    document.getElementById("fsLargo").value = 1.5;
                  }
                }
              }
            }
          }
        }
      }
    }
    //----------------------- FS end --------------------------------------------//
    var fsl = parseFloat(document.getElementById("fsLargo").value);
    var hrsLargo = parseInt(document.getElementById("HLargo").value);
    var efhLargo = fsl * hrsLargo;
    document.getElementById("efhLargo").value = efhLargo;
    //---------------------------------- EBH _______________________________________//
  }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //------------------------------ Entrenamiento --------------------------------------------//
  if (inputMision == "entrenamiento") {
    //------------------------ suma de contador ......................................................-----//
    var numeroVueloEntren = parseInt(document.getElementById("vueloEntren").value);
    var sumaNumeroEntren = numeroVueloEntren + 1;
    document.getElementById("vueloEntren").value = sumaNumeroEntren;
    //-----...................... Suma contador end  ---------------------------------------------------------//
    //-------horas --------------------------------------------------//
    var horaEntrenTotal = parseInt(document.getElementById("horaTotalEntren").value);
    var segundoEntrenTotal = parseInt(document.getElementById("segundoTotalEntren").value);
    var sumaHoraEntren = inputHora + horaEntrenTotal;
    var sumaSegundoEntren = inputSegundo + segundoEntrenTotal;
    if (sumaSegundoEntren > "59") {
      var horaFinalEntren = sumaHoraEntren + 1;
      var segundoFinalEntren = sumaSegundoEntren - 60;
         document.getElementById("horaTotalEntren").value = horaFinalEntren;
      document.getElementById("segundoTotalEntren").value = segundoFinalEntren;
    } else {
      if (sumaSegundoEntren < "60") {
        var horaFinalEntren = sumaHoraEntren;
        var segundoFinalEntren = sumaSegundoEntren;
        document.getElementById("horaTotalEntren").value = horaFinalEntren;
        document.getElementById("segundoTotalEntren").value = segundoFinalEntren;
      }
      document.getElementById("HEntren").value = horaFinalEntren;
    }
    //----------------------------- horas  end ---------------------------------------------------------//
    //------------------------------ Suma de altura ---------------------------------------------------//
    var alturaEnt = parseInt(document.getElementById("altTotalEntren").value);
    var sumaAltEnt = (alturaEnt + inputAlt).toFixed(0);
    document.getElementById("altTotalEntren").value = sumaAltEnt;
    //------------------------------ Suma de altura end ---------------------------------------------------//
    //------------------------------ Suma de promedio altura ---------------------------------------------------//
    var promedioAltEntFinal = (sumaAltEnt / sumaNumeroEntren).toFixed(0);
    document.getElementById("altPromEntren").value = promedioAltEntFinal;
    //----------------------------- altura promedio end --------------------------------------------------//
    //------------------------------ Suma carga --------------------------------------------------------//
    var totalCargaEntren = parseInt(document.getElementById("cargTotalEntren").value);
    var sumaCargaEntren = inputCombustible + inputCarga + (inputPasajeros * 170) + totalCargaEntren;
    document.getElementById("cargTotalEntren").value = sumaCargaEntren;
        //------------------------------ Suma carga end --------------------------------------------------------//
    //------------------------------ Promedio carga --------------------------------------------------------//        
    var promedioCargaEntren = (sumaCargaEntren / sumaNumeroEntren).toFixed(0);
    document.getElementById("cargPromEntren").value = promedioCargaEntren;
    //--------------------------carga promedio end -------------------------------------------------//
    if (promedioAltEntFinal < 5000) {
      if (promedioCargaEntren < 10000) {
        document.getElementById("fsEntren").value = 3;
      } else {
        if (promedioCargaEntren < 20000) {
          document.getElementById("fsEntren").value = 4;
        } else {
          if (promedioCargaEntren <= 29000) {
            document.getElementById("fsEntren").value = 6;
          } else {
            if (promedioCargaEntren > 29000) {
              document.getElementById("fsEntren").value = 9;
            }
          }
        }
      }
    } else {
      if (promedioAltEntFinal < 12000) {
        if (promedioCargaEntren < 10000) {
          document.getElementById("fsEntren").value = 2;
        } else {
          if (promedioCargaEntren < 20000) {
            document.getElementById("fsEntren").value = 3;
          } else {
            if (promedioCargaEntren <= 29000) {
              document.getElementById("fsEntren").value = 4;
            } else {
              if (promedioCargaEntren > 29000) {
                document.getElementById("fsEntren").value = 6;
              }
            }
          }
        }
      } else {
        if (promedioAltEntFinal <= 18000) {
          if (promedioCargaEntren < 10000) {
            document.getElementById("fsEntren").value = 1;
          } else {
            if (promedioCargaEntren < 20000) {
              document.getElementById("fsEntren").value = 1.5;
            } else {
              if (promedioCargaEntren <= 29000) {
                document.getElementById("fsEntren").value = 2;
              } else {
                if (promedioCargaEntren > 29000) {
                  document.getElementById("fsEntren").value = 3;
                }
              }
            }
          }
        } else {
          if (promedioAltEntFinal > 18000) {
            if (promedioCargaEntren < 10000) {
              document.getElementById("fsEntren").value = 0.5;
            } else {
              if (promedioCargaEntren < 20000) {
                document.getElementById("fsEntren").value = 0.75;
              } else {
                if (promedioCargaEntren <= 29000) {
                  document.getElementById("fsEntren").value = 1;
                } else {
                  if (promedioCargaEntren > 29000) {
                    document.getElementById("fsEntren").value = 1.5;
                  }
                }
              }
            }
          }
        }
      }
    }
    //----------------------- FS end --------------------------------------------//
    var fse = parseFloat(document.getElementById("fsEntren").value);
    var hrsEntre = parseInt(document.getElementById("HEntren").value);
    var efhEntre = fse * hrsEntre;
    document.getElementById("efhEntren").value = efhEntre;
    //---------------------------------- EBH _______________________________________//
  }
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //------------------------------ tactico --------------------------------------------//
  if (inputMision == "tactico") {
    //------------------------ suma de contador ......................................................-----//
    var númeroVueloTactico = parseInt(document.getElementById("vueloTactico").value);
    var sumaNumeroTactico = númeroVueloTactico + 1;
    document.getElementById("vueloTactico").value = sumaNumeroTactico;
    //-----...................... Suma contador end  ---------------------------------------------------------//
    //-------horas --------------------------------------------------//
    var horaTacticoTotal = parseInt(document.getElementById("horaTotalTactico").value);
    var segundoTacticoTotal = parseInt(document.getElementById("segundoTotalTactico").value);
    var sumaHoraTactico = inputHora + horaTacticoTotal;
    var sumaSegundoTactico = inputSegundo + segundoTacticoTotal;
    if (sumaSegundoTactico > "59") {
      var horaFinalTactico = sumaHoraTactico + 1;
      var segundoFinalTactico = sumaSegundoTactico - 60;
      // falta la memoria de las horas se hizo con local store pero no valio//
      document.getElementById("horaTotalTactico").value = horaFinalTactico;
      document.getElementById("segundoTotalTactico").value = segundoFinalTactico;
    } else {
      if (sumaSegundoTactico < "60") {
        var horaFinalTactico = sumaHoraTactico;
        var segundoFinalTactico = sumaSegundoTactico;
        //falta el almacenamiento en memoria se hizo con local pero no valio...//
        document.getElementById("horaTotalTactico").value = horaFinalTactico;
        document.getElementById("segundoTotalTactico").value = segundoFinalTactico;
      }
      document.getElementById("HTactico").value = horaFinalTactico;
    }
    //----------------------------- horas  end ---------------------------------------------------------//
    //------------------------------ Suma de altura ---------------------------------------------------//
    var alturaTactico = parseInt(document.getElementById("altTotalTactico").value);
    var sumaAltTactico = (alturaTactico + inputAlt).toFixed(0);
    document.getElementById("altTotalTactico").value = sumaAltTactico;
    //------------------------------ Suma de altura end ---------------------------------------------------//
    //------------------------------ Suma de promedio altura ---------------------------------------------------//
    var promedioAltTacticoFinal = (sumaAltTactico / sumaNumeroTactico).toFixed(0);
    document.getElementById("altPromTactico").value = promedioAltTacticoFinal;
    //----------------------------- altura promedio end --------------------------------------------------//
    //------------------------------ Suma carga --------------------------------------------------------//
    var totalCargaTactico = parseInt(document.getElementById("cargTotalTactico").value);
    var sumaCargaTactico = inputCombustible + inputCarga + (inputPasajeros * 170) + totalCargaTactico;
    document.getElementById("cargTotalTactico").value = sumaCargaTactico;
    //falta el almacenamiento en memoria//
    //------------------------------ Suma carga end --------------------------------------------------------//
    //------------------------------ Promedio carga --------------------------------------------------------//        
    var promedioCargaTactico = (sumaCargaTactico / sumaNumeroTactico).toFixed(0);
    document.getElementById("cargPromTactico").value = promedioCargaTactico;
    //--------------------------carga promedio end --------------------------------------------------------------//
    //---------------------------------- FS Tactico ---------------------------------------//
    if (promedioAltTacticoFinal < 5000) {
      if (promedioCargaTactico < 10000) {
        document.getElementById("fsTactico").value = 3;
      } else {
        if (promedioCargaTactico < 20000) {
          document.getElementById("fsTactico").value = 4;
        } else {
          if (promedioCargaTactico <= 29000) {
            document.getElementById("fsTactico").value = 6;
          } else {
            if (promedioCargaTactico > 29000) {
              document.getElementById("fsTactico").value = 9;
            }
          }
        }
      }
    } else {
      if (promedioAltTacticoFinal < 12000) {
        if (promedioCargaTactico < 10000) {
          document.getElementById("fsTactico").value = 2;
        } else {
          if (promedioCargaTactico < 20000) {
            document.getElementById("fsTactico").value = 3;
          } else {
            if (promedioCargaTactico <= 29000) {
              document.getElementById("fsTactico").value = 4;
            } else {
              if (promedioCargaTactico > 29000) {
                document.getElementById("fsTactico").value = 6;
              }
            }
          }
        }
      } else {
        if (promedioAltTacticoFinal <= 18000) {
          if (promedioCargaTactico < 10000) {
            document.getElementById("fsTactico").value = 1;
          } else {
            if (promedioCargaTactico < 20000) {
              document.getElementById("fsTactico").value = 1.5;
            } else {
              if (promedioCargaTactico <= 29000) {
                document.getElementById("fsTactico").value = 2;
              } else {
                if (promedioCargaTactico > 29000) {
                  document.getElementById("fsTactico").value = 3;
                }
              }
            }
          }
        } else {
          if (promedioAltTacticoFinal > 18000) {
            if (promedioCargaTactico < 10000) {
              document.getElementById("fsTactico").value = 0.5;
            } else {
              if (promedioCargaTactico < 20000) {
                document.getElementById("fsTactico").value = 0.75;
              } else {
                if (promedioCargaTactico <= 29000) {
                  document.getElementById("fsTactico").value = 1;
                } else {
                  if (promedioCargaTactico > 29000) {
                    document.getElementById("fsTactico").value = 1.5;
                  }
                }
              }
            }
          }
        }
      }
    }
    //----------------------- FS end --------------------------------------------//
    var fst = parseFloat(document.getElementById("fsTactico").value);
    var hrsTactico = parseInt(document.getElementById("HTactico").value);
    var efhTactico = fst * hrsTactico;
    document.getElementById("efhTactico").value = efhTactico;
    //---------------------------------- EBH _______________________________________//
  }
  /////////////////////////////////////////////////////////////////////////////////////////////////////
  //------------------------ horas totales ----------------------------------------------------------//
  //......esto   //
  var cortoH = parseInt(document.getElementById("HCorto").value);
  var largoH = parseInt(document.getElementById("HLargo").value);
  var entreH = parseInt(document.getElementById("HEntren").value);
  var tacticoH = parseInt(document.getElementById("HTactico").value);
  var sumaHorasMisones = cortoH + largoH + entreH + tacticoH;
  document.getElementById("totalHorasMisiones").value = sumaHorasMisones;
  //-------------------------- horas totales end end -----------------------------------------//
  //-------------------------- usabilidad ---------------------------------------------//
  var tc = parseInt(document.getElementById("totalHorasMisiones").value);
  var usc = ((cortoH * 100) / tc).toFixed(1);
  document.getElementById("usabCorto").value = usc;
  //-------------------------- usabilidad end corto ----------------------------------//
  //-------------------------- usabilidad ---------------------------------------------//
  var tl = parseInt(document.getElementById("totalHorasMisiones").value);
  var usl = ((largoH * 100) / tl).toFixed(1);
  document.getElementById("usabLargo").value = usl;
  //-------------------------- usabilidad end corto ----------------------------------//
  //-------------------------- usabilidad ---------------------------------------------//
  var te = parseInt(document.getElementById("totalHorasMisiones").value);
  var use = ((entreH * 100) / te).toFixed(1);
  document.getElementById("usabEntren").value = use;
  //-------------------------- usabilidad end corto ----------------------------------//
  //-------------------------- usabilidad ---------------------------------------------//
  var tt = parseInt(document.getElementById("totalHorasMisiones").value);
  var ust = ((tacticoH * 100) / tt).toFixed(1);
  document.getElementById("usabTactico").value = ust;
  //-------------------------- usabilidad end corto ----------------------------------//
  //------------------- efh --------------------------------------------------//
  var fscf = parseInt(document.getElementById("fsCorto").value);
  var fslf = parseInt(document.getElementById("fsLargo").value);
  var fsef = parseInt(document.getElementById("fsEntren").value);
  var fstf = parseInt(document.getElementById("fsTactico").value);

  var hcf = parseInt(document.getElementById("HCorto").value);
  var hlf = parseInt(document.getElementById("HLargo").value);
  var hef = parseInt(document.getElementById("HEntren").value);
  var htf = parseInt(document.getElementById("HTactico").value);

  var efhcf = fscf * hcf;
  var efhlf = fslf * hlf;
  var efhef = fsef * hef;
  var efhtf = fstf * htf;

  var totalefh = (efhcf + efhlf + efhef + efhtf).toFixed(1);

  document.getElementById("efhCorto").value = efhcf;
  document.getElementById("efhLargo").value = efhlf;
  document.getElementById("efhEntren").value = efhef;
  document.getElementById("efhTactico").value = efhtf;

  document.getElementById("efhAcumulado").value = totalefh;
  //--------------------- efh end --------------------------------------------------------//
  alert("total efh " +totalefh);
  var fsDiv = (totalefh / sumaHorasMisones).toFixed(1);
  document.getElementById("fsTotal").value = fsDiv;
}

//------------------- boton arriba --------------------------------//
// Back to top button
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $(".back-to-top").fadeIn("slow");
  } else {
    $(".back-to-top").fadeOut("slow");
  }
});
$(".back-to-top").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
  return false;
});
//------------------------boton end ---------------------------//

