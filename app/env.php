<?php

// A RELLENAR //

// INTERVALO en milisegundos para refrescar la llamada a Twitter y que lea un nuevo tweet
define('INTERVAL_MAP',10000);

// DEFINIR listado de tweets a mostrar en el MAPA (añadir los que se quieran)
// @ es para personas
// # es para tweets
define('MAPA_LIST', array('define los tweets que se van a mostrar'));

/////////////////////////////////////////////////////////////////////////

// comunidades autónomas
define('COMUNIDADES',array('galicia','asturias','cantabria','país vasco','navarra','aragón','cataluña','la rioja','castilla y león','comunidad de madrid','extremadura','castilla-la mancha','comunidad valenciana','islas baleares','región de murcia','andalucía','canarias','ceuta','melilla'));

// cada comunidad autonomo tiene diferentes opciones que puede devolver twitter en la localizacion

// opciones de galicia
define('GALICIA', array('la coruña','coruña','pontevedra','orense','galicia','vigo'));
// opciones asturias
define('ASTURIAS',array('asturias','oviedo','gijón'));
// opciones cantabria
define('CANTABRIA',array('cantabria','santander'));
// opciones pasi vasco
define('PAIS_VASCO',array('vizcaya','guipúzcoa','álava','país vasco','bilbao','donostia','san sebastián','vitoria'));
//opciones navarra
define('NAVARRA',array('navarra','pamplona'));
//opciones aragón
define('ARAGON',array('huesca','zaragoza','teruel','aragón'));
// opciones cataluña
define('CATALUNA',array('gerona','lérida','lleida','tarragona','barcelona','catalunya'));
// opciones valencia
define('VALENCIA',array('castellón','valencia','alicante'));
//opciones murcia
define('MURCIA',array('murcia','cartagena'));
// opciones baleres
define('BALEARES',array('baleares','mallorca','ibiza','menorca'));
// opciones castilla la mancha
define('CASTILLA_MANCHA',array('toledo','guadalajara','cuenca','albacete','ciudad real'));
// opciones madrid
define('MADRID',array('madrid','san sebastián de los reyes','españa'));
//opciones andalucía
define('ANDALUCIA',array('córdoba','jaén','granada','almería','málaga','cádiz','sevilla','huelva','andalucía'));
//opciones extremadura
define('EXTREMADURA',array('badajoz','cáceres','extremadura'));
// opciones castilla león
define('CASTILLA_LEON',array('león','zamora','palencia','burgos','soria','segovia','ávila','salamanca','valladolid'));
// opciones rioja
define('RIOJA',array('rioja'));
// opciones canarias
define('CANARIAS',array('canarias','las palmas','tenerife','gran canaria','lanzarote','fuerteventura'));
