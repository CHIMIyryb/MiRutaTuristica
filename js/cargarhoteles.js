//creamos variableas array para cada departamento
var municipio_Acaponeta = ["Gardenia Hotel & Suites", "Hotel G&B Continental", "HOTEL QUINTA BLANCA", "Hotel San Luis", "Hotel Casa Blanca", "Hotel y Restaurante Candelaria", "Hospedaje Royal"];
var municipio_Ahuacatlan=[ "Hotel Hacienda el Ceboruco", "Hotel Quinta Valentina", "Hotel Boutique Ibarra", "Hotel margarita", "Hotel Principal & Mesón Olas Altas"];
var municipio_Amatlan_de_Cañas=[ "Casa IxeYolo", "Habitacion Privada Zazen", "Hotel Agua Caliente", "Bungalows Los Pavorreales", "Hotel Boja-Boja"];
var municipio_Bahia_de_Banderas=[ "Aventura Pacifico", "Hotel y Suites Corita", "Hotel Olas Altas Bucerias", "Hotel Suites Nadia Bucerías Nayarit", "Banderas Suites & Hotel", "Hotel Palmeras", "HOTEL YSURI BUCERIAS", "La Posada de Bucerias", "Villa Bella Bed & Breakfast Inn", "VALLARTA GARDENS", "Nueva Vista Inn La Cruz", "The Octopus´s Garden", "Villa Bella Bed & Breakfast Inn", "Grand Matlali Riviera Nayarit All Inclusive", "Villa Magnolia", "Quinta del Encanto", "Casa Bella Cruz", "El Patio Hostel Tropical", "Delfin B&B", "Hotel BNayar", "Hard Rock Hotel Vallarta", "Marival Distinct Luxury Residences", "Hotel Villa Varadero", "MARINA BANDERAS", "Paradise Village Resort & Spa", "Casa Virgilios B&B", "Villa San Juan Bed & Breakfast", "Grand Palladium Vallarta Resort & Spa", "Conrad Punta de Mita", "W Punta de Mita", "HOTEL MESON DE MITA", "Punta Mita Surf Lodge", "Marival Armony Luxury Resort", "Four Seasons Resort Punta Mita", "Hotel Basalto", "ONDA Surf Hotel", "Punto Mita Suites & Hostal", "Casa Akai", "Hotel Vista Oceana", "Selina Sayulita", "Hotel Vista Oceana", "Casa Pia", "Hotel Sayulita Central", "Riad Lola Sayulita", "La Redonda Sayulita Hostel", "Playa Azul Sayulita", "Hotel Boutique Oz", "Villas Chulavista", "Hotel Boutique Siete Lunas", "Avela Boutique Hotel", "Hotelito Los Sueños"];
var municipio_Compostela=[ "Dos Hotel Nayar", "Hotel Akawe", "Hotel jardin de estrellas", "Hotel Plaza de Compostela S.A. de C.V.", "Hotel Asturias", "Hotel Hocaro y Alojamiento"];
var municipio_Ixtlan_del_Rio=[ "Hotel Maya", "OBSIDIANA RIO", "Hotel Boutique El Marqués de Minas", "Hotel Plaza Hidalgo"];
var municipio_Jala=[ "Nukari Quinta Boutique", "CASA CORITA", "Hostal Casa Tia María"];
var municipio_La_Yesca=[ "HOTEL La Placita"];
var municipio_Rosamorada=[ "HOTEL CATALINA"];
var municipio_Ruiz=[ "Hotel Casa Monte Ruesga", "Hotel Tenamache River", "Hotel Ruiz", "hotel barron"];
var municipio_San_Pedro_Lagunillas=[ "Posada Lepe´s", "Hotel del Río", "Verde Encanto"];
var municipio_San_Blas=[ "La casa de Fortu, Hotel & Bungalows", "Baos Hotel & Restaurant", "Hotel Marina San Blas", "Baos Hotel & Restaurant", "Hotel Posada del Rey", "Hotel Casa Mañana", "Casa De Las Cocadas", "Hotel ' Quinta Sierra'", "Hotel y Camping El Chaco"];
var municipio_Santa_Maria_del_Oro=[ "Hospedaje Casa Santa María", "Hotel Real María", "Hospedaje Duarte"];
var municipio_Santiago_Ixcuintla=[ "Hotel Santiago", "Hotel Casino Plaza", "Hotel plaza los reyes"];
var municipio_Tecuala=[ "Hotel Las Rosas en Tecuala, Nayarit", "Hotel y Restaurante Candelaria", "Hotel Imperial", "HOTEL MJ", "Hotel Ramirez"];
var municipio_Tepic=[ "Fiesta Inn Tepic", "Hotel La Loma", "EH Ejecutivo Urban Hotel", "Hotel Villa Las Rosas", "HOTEL MELANIE", "City Express Tepic", "EH Ejecutivo Urban Hotel", "Hotel Sierra de Álica", "Hotel Las Palomas Tepic", "Casa Violeta", "Hotel Humberto", "Hotel Fray Select", "Hotel Fray Junípero Serra", "Hotel Vista Valle", "Hotel Nekié Tepic", "Hotel San Jorge", "Hotel Hacienda las Higueras", "Hotel Las Palomas Tepic Express", "Hotel Aztlan", "Hotel Boutique Casa Mariano", "Hotel Real de Don Juan", "Hotel Tepic", "Hotel Paraíso", "Hotel Valeria", "Hotel Santa Lucia", "Hotel Santa Fe", "Hotel Las Brisas", "Hotel Colonial Santa Rita", "Hotel Casa Naiyari", "Hotel Nuevo Sol", "Hotel Nayar", "Hotel Posada San Luis", "Motel Platinum"];
var municipio_Tuxpan=["Hotel Provincia", "Hotel blanquita"];
var municipio_Xalisco=[ "Hotel Aztlan"];



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
   if(dpt=="Ahuacatlán"){ acentuada="Ahuacatlan";}
   else{
   	if(dpt=="Amatlán de Cañas"){ acentuada="Amatlan_de_Cañas"; }
   	else{
   		if(dpt=="Bahia de Banderas"){ acentuada="Bahia_de_Banderas"; }
   		else{
   			if(dpt=="El Nayar"){ acentuada="El_Nayar"; }
   			else{

   				if(dpt=="Ixtlán del Río"){ acentuada="Ixtlan_del_Rio"; }
   				else{
   					if(dpt=="La Yesca"){ acentuada="La_Yesca"; }
   					else{
   						if(dpt=="Ruíz"){ acentuada="Ruiz"; }
   						else{
   							if(dpt=="San Pedro Lagunillas"){ acentuada="San_Pedro_Lagunillas"; }
   							else{
   								if(dpt=="San Blas"){ acentuada="San_Blas"; }
   								else{
   									if(dpt=="Santa María del Oro"){ acentuada="Santa_Maria_del_Oro"; }
   									else{
   									if(dpt=="Santiago Ixcuintla"){ acentuada="Santiago_Ixcuintla"; }
   									else{
                                               	  acentuada=dpt;
                                               }
   											}
   										}
   									}	
   									}
   								}
   							}
   						}
   					}
   				}
   			}
			   return  acentuada
   		}

// fin funcion acentos