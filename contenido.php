<?php


/* 



<div class="column small-12 large-6">
    <div class="wrapper  ovh pr offer-thumb js-show-details pointer">
        <span class="lines-container pa fullheight fullwidth wrapper"></span>
        <img src="img/theme/offers/thumb/1.jpg" alt="" class="image fullwidth pointer" data-path="img/theme/offers/large/item1/" data-large-images='["1.jpg", "2.jpg", "3.jpg"]'>
        <div class="wrapper pa fullwidth left bottom pb15 price-palette pt15">
            <p class="text cw fz6 lh1 js-cost ac">
                Days - 2500$
            </p>
        </div>
    </div>
</div>






*/

$arrpm = array(
    ["San Miguel de Allende, Guanajuato","San Miguel de Allende es conocido por su arquitectura colonial, sus calles empedradas y su ambiente artístico. Sus coloridas fachadas, iglesias históricas y plazas encantadoras lo convierten en un destino popular para los amantes del arte y la cultura. Además, cuenta con una vibrante escena gastronómica y una variedad de festivales y eventos culturales a lo largo del año."],
    ["Taxco, Guerrero","Taxco es famoso por su rica historia minera y su arquitectura colonial. Este pueblo mágico es reconocido por sus calles empinadas y estrechas, sus casas blancas y sus hermosas plazas. Además, Taxco es famoso por su orfebrería de plata, y los visitantes pueden encontrar una amplia variedad de joyería y artesanías en plata en los talleres locales."],
    ["Pátzcuaro, Michoacán","Pátzcuaro es un pueblo mágico situado en las montañas de Michoacán, junto al lago de Pátzcuaro. Es conocido por su rica tradición indígena y sus festividades ancestrales. Durante el Día de los Muertos, Pátzcuaro cobra vida con celebraciones únicas y coloridas. Además, el centro histórico de Pátzcuaro cuenta con hermosas plazas, iglesias antiguas y una gran variedad de artesanías."],
    ["Bacalar, Quintana Roo",'Bacalar es un destino paradisíaco conocido como la "Laguna de los Siete Colores". Sus aguas cristalinas y suaves tonos de azul ofrecen un espectáculo visual impresionante. Los visitantes pueden disfrutar de actividades como kayak, snorkel y paseos en lancha por la laguna. Además, Bacalar cuenta con una rica historia y una fortaleza colonial que ofrece vistas panorámicas del entorno.'],
    ["Real de Catorce, San Luis Potosí","Real de Catorce es un pueblo mágico ubicado en el desierto de San Luis Potosí. Es famoso por su atmósfera mística y su pasado minero. Los visitantes pueden explorar las calles empedradas, visitar antiguas minas de plata y disfrutar de las vistas panorámicas desde el Cerro Quemado. Además, el pueblo es considerado sagrado por los huicholes y se pueden encontrar artesanías y rituales tradicionales en la zona."],
    ["Huasca de Ocampo, Hidalgo","Huasca de Ocampo es un encantador pueblo mágico rodeado de hermosos paisajes naturales. Es conocido por sus antiguas haciendas y sus bosques llenos de leyendas. Los visitantes pueden explorar las Haciendas de Santa María Regla y San Miguel Regla, así como los Prismas Basálticos, una formación rocosa impresionante. Además, Huasca de Ocampo ofrece actividades al aire libre como senderismo, ciclismo y paseos a caballo."]
);
$n = count($arrpm);

for ($i = 0; $i < $n; $i++) {
    if ($i % 2 == 0) {        
        $pueblosmagicos .= '<div class="row">';
    }

    $pueblosmagicos .= '<div class="column large-6 medium-6 mb40">
            <div class="wrapper component offer-item-wrapper js-offer-block">
                <div class="row">
                    <div class="column small-12 large-6">
                        <div class="wrapper  ovh pr offer-thumb js-show-details pointer">
                            <span class="lines-container pa fullheight fullwidth wrapper"></span>
                            <img src="img/theme/offers/thumb/'.($i+1).'.jpg" alt="" class="image fullwidth pointer" 
                            data-path="img/theme/offers/large/item'.($i+1).'/" 
                            data-large-images=\'["1.jpg", "2.jpg", "3.jpg"]\'>                            
                        </div>
                    </div>
                    <div class="column small-12 large-6">
                        <div class="wrapper">
                            <h4 class="title text fz6 fw3 lh12 ctm mb5 pointer js-show-details js-name">'.$arrpm[$i][0].'</h4>
                            <p class="description text fz1 c6 lh2 mb10 fsi js-description">
                                '.$arrpm[$i][1].'
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';

    if (($i + 1) % 2 == 0 || $i == $n - 1) {        
        $pueblosmagicos .= '</div>';
    }
}

// internacioales
$arrint = array(
    ["París, Francia",'París, la "Ciudad de la Luz", es famosa por su belleza y romanticismo. Con icónicos monumentos como la Torre Eiffel, el Louvre y la Catedral de Notre Dame, así como sus encantadoras calles, cafés y boutiques, París ofrece una combinación única de historia, cultura y gastronomía.'],
    ["Nueva York, Estados Unidos",'La ciudad de Nueva York es un destino vibrante y diverso. Conocida como la "Gran Manzana", esta metrópolis cosmopolita ofrece una increíble variedad de atracciones, como Times Square, Central Park, el Empire State Building y una emocionante escena artística y teatral.'],
    ["Bali, Indonesia",'Bali es una isla paradisíaca conocida por sus playas impresionantes, su rica cultura y su belleza natural. Los visitantes pueden relajarse en las playas de arena blanca, explorar los templos hindúes como el Templo Uluwatu y el Templo Besakih, y descubrir hermosos paisajes como los arrozales de Tegalalang y las cascadas de Sekumpul. Además, Bali ofrece una amplia gama de actividades como surf, yoga y retiros espirituales.'],
    ["Ciudad del Cabo, Sudáfrica",'Ciudad del Cabo es un destino impresionante con una belleza natural excepcional. Con la majestuosa Table Mountain como telón de fondo, esta ciudad costera ofrece playas espectaculares, una rica historia, una deliciosa gastronomía y una emocionante vida nocturna. Además, los visitantes pueden explorar la cercana región vinícola de Stellenbosch y el famoso Cabo de Buena Esperanza.'],
    ["Kioto, Japón",'Kioto es la antigua capital de Japón y es famosa por sus templos, santuarios y jardines tradicionales. Esta ciudad ofrece una visión fascinante de la cultura japonesa, con hermosos templos como Kinkaku-ji (el Pabellón Dorado), el Bosque de Bambú de Arashiyama y el famoso Santuario Fushimi Inari, conocido por sus miles de torii rojos.'],
    ["Roma, Italia",'Roma es una ciudad histórica llena de monumentos antiguos y un ambiente encantador. Los visitantes pueden explorar el Coliseo, el Foro Romano, el Vaticano con la Basílica de San Pedro y la Capilla Sixtina, así como las pintorescas calles del Trastevere. Además, Roma ofrece una deliciosa gastronomía italiana, con platos tradicionales como la pasta, la pizza y el gelato. situada en la costa mediterránea de España. Con una combinación única de arquitectura modernista, playas soleadas y una emocionante escena gastronómica, Barcelona ofrece atracciones']
);

$n = count($arrint);
for ($i = 0; $i < $n; $i++) {
    if ($i % 2 == 0) {        
        $internacionales .= '<div class="row">';
    }

    $internacionales .= '<div class="column large-6 medium-6 mb40">
            <div class="wrapper component offer-item-wrapper js-offer-block">
                <div class="row">
                    <div class="column small-12 large-6">
                        <div class="wrapper  ovh pr offer-thumb js-show-details pointer">
                            <span class="lines-container pa fullheight fullwidth wrapper"></span>
                            <img src="img/theme/inter/thumb/'.($i+1).'.jpg" alt="" class="image fullwidth pointer" 
                            data-path="img/theme/inter/large/item'.($i+1).'/" 
                            data-large-images=\'["1.jpg", "2.jpg", "3.jpg"]\'>                            
                        </div>
                    </div>
                    <div class="column small-12 large-6">
                        <div class="wrapper">
                            <h4 class="title text fz6 fw3 lh12 ctm mb5 pointer js-show-details js-name">'.$arrint[$i][0].'</h4>
                            <p class="description text fz1 c6 lh2 mb10 fsi js-description">
                                '.$arrint[$i][1].'
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';

    if (($i + 1) % 2 == 0 || $i == $n - 1) {        
        $internacionales .= '</div>';
    }
}


// links pm

$arrlinks["culturales"] = array(
    "San Miguel de Allende"=>"",
    "Taxco de Alarcón"=>"",
    "Tlaquepaque"=>"",
    "Pátzcuaro"=>"",
    "Izamal"=>"",
    "Comala"=>"",
    "Bacalar"=>"",
    "Dolores Hidalgo"=>"",
    "Coatepec"=>"",
    "Atlixco"=>"",
    "Cuetzalan"=>"",
    "Tepotzotlán"=>"",
    "Cuitzeo"=>"",
    "Tecate"=>"",
    "San Cristóbal de las Casas"=>"",
    "Xilitla"=>"",
    "Mineral del Chico"=>"",
    "Tepoztlán"=>"",
    "Real de Asientos"=>"",
    "El Oro"=>""
);

$arrlinks["historicos"] = array(
    "Guanajuato" => "",
    "Zacatecas" => "",
    "Campeche" => "",
    "Querétaro" => "",
    "Morelia" => "",
    "Oaxaca de Juárez" => "",
    "San Luis Potosí" => "",
    "Durango" => "",
    "Aguascalientes" => "",
    "Salvatierra" => "",
    "Cosalá" => "",
    "Orizaba" => "",
    "San Felipe" => "",
    "Sombrerete" => "",
    "Guerrero" => "",
    "Tulum" => "",
    "Mapimí" => "",
    "Huasca de Ocampo" => "",
    "Álamos" => "",
    "Mazamitla" => ""
);

$arrlinks["tradicionales"] = array(
    "Tequila" => "",
    "Real de Catorce" => "",
    "Santiago de Querétaro" => "",
    "Tepotzotlán" => "",
    "Tequisquiapan" => "",
    "Teotihuacán" => "",
    "Bacalar" => "",
    "Mazunte" => "",
    "San Sebastián del Oeste" => "",
    "San Joaquín" => "",
    "Papantla" => "",
    "Aculco" => "",
    "Santa Clara del Cobre" => "",
    "San Martín de las Pirámides" => "",
    "Tapalpa" => "",
    "Ajijic" => "",
    "Xico" => "",
    "Tlayacapan" => "",
    "Atotonilco el Grande" => "",
    "Mitla" => ""
);


foreach ($arrlinks as $categoria => $list) {    
    foreach ($list as $cd => $url) {
        if($url){
            $link = '<span class="price text fw3 fz4 lss cmt fr">
                    <a href="'.$url.'" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                </span>';
        } else {
            $url = '';
        }
        $pmCat[$categoria] .= '<div class="deal-item wrapper mb15">
                <p class="text c6 fz4 lh12 fw3 fsi clear">
                    '.$cd.'
                    '.$url.'
                </p>
            </div>
        ';

    }
}


// turismo mexa

$arrplayas = array(
    ["Quintana Roo","Cancún","Cancún es un famoso destino turístico ubicado en la costa caribeña de México. Es conocido por sus playas de arena blanca y aguas cristalinas, ideales para practicar buceo y snorkel. Cancún también ofrece una gran cantidad de resorts de lujo, restaurantes, tiendas y una animada vida nocturna. Además, cerca de Cancún se encuentra la antigua ciudad maya de Chichén Itzá, una de las Nuevas Siete Maravillas del Mundo."],
    ["BCS","Los Cabos",'Los Cabos es un destino turístico ubicado en la punta de la península de Baja California. Comprende dos ciudades principales: Cabo San Lucas, conocida por su animada vida nocturna y su famoso arco de roca natural llamado "El Arco", y San José del Cabo, un pueblo colonial lleno de encanto y cultura. Los Cabos ofrece hermosas playas, actividades acuáticas como pesca deportiva y buceo, campos de golf de clase mundial y una gran variedad de resorts y restaurantes de lujo.'],
    ["Jalisco","Puerto Vallarta","Puerto Vallarta es un encantador destino situado en la costa del Pacífico de México. Esta ciudad combina playas impresionantes con montañas exuberantes y un casco antiguo lleno de calles empedradas y encanto colonial. Puerto Vallarta es conocido por su ambiente relajado, su animada escena artística y cultural, y su deliciosa gastronomía. Los visitantes pueden disfrutar de actividades como paseos en barco, avistamiento de ballenas y explorar la famosa Zona Romántica."]
);

$n = count($arrplayas);

for ($i=0; $i < $n; $i++) { 
    $mexico["playas"] .= '<div class="wrapper component offer-item-wrapper js-offer-block mb40">
            <div class="row">
                <div class="column small-12 large-6">
                    <div class="wrapper  ovh pr offer-thumb js-show-details pointer">
                        <span class="lines-container pa fullheight fullwidth wrapper"></span>
                        <img src="img/theme/playas/thumb/'.($i+1).'.jpg" 
                        alt="" class="image fullwidth pointer" 
                        data-path="img/theme/playas/large/item'.($i+1).'/" data-large-images=\'["1.jpg", "2.jpg", "3.jpg"]\'>
                        <div class="wrapper pa fullwidth left bottom pb15 price-palette pt15">
                            <p class="text cw fz6 lh1 js-cost ac">
                                '.$arrplayas[$i][0].'
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column small-12 large-6">
                    <div class="wrapper">
                        <h4 class="title text fz6 fw3 lh12 cw mb5 pointer mt20 js-show-details js-name">'.$arrplayas[$i][1].'</h4>
                        <p class="description text fz1 c6 lh2 mb10 fsi js-description cw fw3">
                            '.$arrplayas[$i][2].'
                        </p>
                    </div>
                </div>
            </div>            
        </div>
            ';
}

// ciudades
$arrcitys = array(
    ["Nuevo León","Monterrey",'Monterrey es una ciudad ubicada en el norte de México y es conocida por ser un importante centro industrial y comercial. También es apodada "La Sultana del Norte". La ciudad cuenta con una combinación única de modernidad y belleza natural. Entre los atractivos se encuentran el famoso Parque Fundidora, un antiguo complejo industrial reconvertido en un amplio espacio público con jardines, museos y áreas recreativas. El Macroplaza es otra atracción destacada, siendo una de las plazas públicas más grandes del mundo. Monterrey también es famosa por su gastronomía, especialmente por sus deliciosos cortes de carne asada y su variedad de platillos regionales. Además, la ciudad está rodeada por hermosas montañas, lo que permite a los visitantes disfrutar de actividades al aire libre como senderismo y escalada.'],
    ["CDMX","Ciudad de México",'La Ciudad de México, capital del país, es una metrópolis vibrante y llena de historia. Con una rica cultura y una mezcla única de influencias prehispánicas y coloniales, la Ciudad de México ofrece una amplia gama de atracciones turísticas. Entre los lugares más destacados se encuentran el Zócalo (la plaza principal), el impresionante Palacio de Bellas Artes, el Templo Mayor, el Museo Frida Kahlo y el Museo Nacional de Antropología. Además, la ciudad es conocida por su deliciosa gastronomía, que incluye platos tradicionales como tacos, tamales y mole.'],
    ["Jalisco","Guadalajara",'Guadalajara, la segunda ciudad más grande de México, es famosa por ser la cuna del mariachi y el tequila. La ciudad ofrece una mezcla de tradición y modernidad, con hermosas plazas coloniales, iglesias históricas y una próspera escena artística. Algunos de los lugares de interés incluyen la Catedral de Guadalajara, el Instituto Cultural Cabañas (declarado Patrimonio de la Humanidad por la UNESCO) y el Mercado Libertad, uno de los mercados más grandes de América Latina. Guadalajara también es conocida por sus festivales, como la Feria Internacional del Libro de Guadalajara y el Festival Cultural de Mayo.']
);

$n = count($arrcitys);

for ($i=0; $i < $n; $i++) { 
    $mexico["ciudades"] .= '<div class="wrapper component offer-item-wrapper js-offer-block mb40">
            <div class="row">
                <div class="column small-12 large-6">
                    <div class="wrapper  ovh pr offer-thumb js-show-details pointer">
                        <span class="lines-container pa fullheight fullwidth wrapper"></span>
                        <img src="img/theme/ciudades/thumb/'.($i+1).'.jpg" 
                        alt="" class="image fullwidth pointer" 
                        data-path="img/theme/ciudades/large/item'.($i+1).'/" data-large-images=\'["1.jpg", "2.jpg", "3.jpg"]\'>
                        <div class="wrapper pa fullwidth left bottom pb15 price-palette pt15">
                            <p class="text cw fz6 lh1 js-cost ac">
                                '.$arrcitys[$i][0].'
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column small-12 large-6">
                    <div class="wrapper">
                        <h4 class="title text fz6 fw3 lh12 cw mb5 pointer mt20 js-show-details js-name">'.$arrcitys[$i][1].'</h4>
                        <p class="description text fz1 c6 lh2 mb10 fsi js-description cw fw3">
                            '.$arrcitys[$i][2].'
                        </p>
                    </div>
                </div>
            </div>            
        </div>
            ';
}

?>