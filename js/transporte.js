//creamos variableas array para cada departamento
var municipio_Rincon_de_Guayabitos = ["Ixtlan del Rio", "Tepic","Mezcales", "Nuevo Vallarta", "Bahia de Banderas", "Xalisco", "Santiago Ixcuintla", "Sam Blas", "La Cruz", "Ahuacatlan", "Compostela", "Bucerias"];
var municipio_Tepic=[ "Ixtlan del Rio","Mezcales", "Nuevo Vallarta", "Bahia de Banderas", "Xalisco", "Santiago Ixcuintla", "Sam Blas", "La Cruz", "Ahuacatlan", "Compostela", "Bucerias", "Santa MAria del Oro", "Amatlan de Cañas", "Rosamorada", "Rincon de Guayabitos", "Sayulita"];
var municipio_Mezcales=[ "Ixtlan del Rio", "Tecuala", "Bhaia de Banderas", "Xalisco", "Santiago Ixcuintla", "San blas", "Ahuacatlan","Bucerias", "Rincon de Guayabitos", "Sayulita", "La Cruz", "Tepic"];
var municipio_Tuxpan=[ "San Blas", "Tepic", "Bahia de Baderas" ];
var municipio_Bucerias=[ "Tepic", "Ixtlan del Rio", "Mezcales", "Santiago Ixcuintla","San Blas","Ahuacatlan","Compostela","La Cruz", "Rincon de Guayabitos", "Sayulita"];
var municipio_Acaponeta=[ "Ixtlan del Rio", "Tepic", "Tecuala", "Bahia de Banderas", "Santiago Ixcuintla", "San Blas", "Rosamorada"];
var municipio_Santiago_Ixcuintla=[ "Tecuala", "Bahia de Banderas", "Xalisco", "San bLas", "Acaponeta", "Tepic","Bucerias"];
var municipio_Tecuala=[ "Santiago Ixcuintla", "San Blas", "Acaponeta", "Rosamorada", "Rincon de GUayabitos", "Tepic"];
var municipio_San_Blas=[ "Santiago Ixcuintla", "Sayulita", "Tuxpan", "Tepic", "Bucerias", "Mexcales", "Rincon de Guayabitos"];



function cambia_departamento(){
    //tomamos el valor del select departamento elegido
    var dpt
    dpt = document.getElementById('municipio').value	
        mis_dptos = acentos(dpt)
        // verificamos si el Departamento está definido
   
   if (mis_dptos!=0) { 
              //si estaba definido, entonces coloco las opciones del Departamento correspondiente. 
              //selecciono el array del departamento adecuado 
              mis_hoteles=eval("municipio_"+mis_dptos) 
               //calculo el numero de municipios 
              num_hoteles = mis_hoteles.length 
              //marco el número de municipios en el select 
              document.f1.hotel.length = num_hoteles 
              //para cada municipio del array, lo introduzco en el select 
              for(i=0;i<num_hoteles;i++){ 
                 document.f1.hotel.options[i].value=mis_hoteles[i] 
                 document.f1.hotel.options[i].text=mis_hoteles[i] 
              }	
              }else{ 
              //si no había municipio seleccionado, elimino los municipios del select 
              document.f1.hotel.length = 1 
              //coloco un guión en la única opción que he dejado 
              document.f1.hotel.options[0].value = " " 
              document.f1.hotel.options[0].text = "SIN ASIGNAR" 
             } 
          }// FIN DE FUNCIONcambia_departamento
   
      function acentos(dpt){
      var acentuada
      if(dpt=="Rincon de Guayabitos"){ acentuada="Rincon_de_Guayabitos";}
      else{
          if(dpt=="Santiago Ixcuintla"){ acentuada="Santiago_Ixcuintla"; }
          else{
              if(dpt=="San Blas"){ acentuada="San_Blas"; }
              else{
                                                        acentuada=dpt;
                                                  }
                                                  }
                                              }
                                              return  acentuada
                                          }	
                                          
   
   // fin funcion acentos