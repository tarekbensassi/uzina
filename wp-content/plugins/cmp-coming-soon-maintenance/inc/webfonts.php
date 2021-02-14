<?php
$custom_fonts = '';
if ( get_option('niteoCS_custom_fonts') ) {
    $custom_fonts = get_option('niteoCS_custom_fonts');
    $custom_fonts = substr($custom_fonts, 1, -1);
    $custom_fonts = $custom_fonts . ',';
}

return '['.$custom_fonts.'{"id":"Average Sans","text":"Average Sans","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Roboto","text":"Roboto","variants":["100","100italic","300","300italic","regular","italic","500","500italic","700","700italic","900","900italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Open Sans","text":"Open Sans","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Lato","text":"Lato","variants":["100","100italic","300","300italic","regular","italic","700","700italic","900","900italic"],"subset":["latin-ext","latin"]},{"id":"Montserrat","text":"Montserrat","variants":["100","100italic","200","200italic","300","300italic","regular","italic","500","500italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin","vietnamese"]},{"id":"Roboto Condensed","text":"Roboto Condensed","variants":["300","300italic","regular","italic","700","700italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Oswald","text":"Oswald","variants":["200","300","regular","500","600","700"],"subset":["latin-ext","cyrillic","latin","vietnamese"]},{"id":"Source Sans Pro","text":"Source Sans Pro","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","900","900italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Raleway","text":"Raleway","variants":["100","100italic","200","200italic","300","300italic","regular","italic","500","500italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["latin-ext","latin"]},{"id":"Slabo 27px","text":"Slabo 27px","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Merriweather","text":"Merriweather","variants":["300","300italic","regular","italic","700","700italic","900","900italic"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin","vietnamese"]},{"id":"PT Sans","text":"PT Sans","variants":["regular","italic","700","700italic"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin"]},{"id":"Roboto Slab","text":"Roboto Slab","variants":["100","300","regular","700"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Poppins","text":"Poppins","variants":["100","100italic","200","200italic","300","300italic","regular","italic","500","500italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["devanagari","latin-ext","latin"]},{"id":"Noto Sans","text":"Noto Sans","variants":["regular","italic","700","700italic"],"subset":["greek","cyrillic-ext","devanagari","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Ubuntu","text":"Ubuntu","variants":["300","300italic","regular","italic","500","500italic","700","700italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","greek-ext"]},{"id":"Roboto Mono","text":"Roboto Mono","variants":["100","100italic","300","300italic","regular","italic","500","500italic","700","700italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Playfair Display","text":"Playfair Display","variants":["regular","italic","700","700italic","900","900italic"],"subset":["latin-ext","cyrillic","latin","vietnamese"]},{"id":"Lora","text":"Lora","variants":["regular","italic","700","700italic"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin","vietnamese"]},{"id":"PT Serif","text":"PT Serif","variants":["regular","italic","700","700italic"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin"]},{"id":"Titillium Web","text":"Titillium Web","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","900"],"subset":["latin-ext","latin"]},{"id":"Muli","text":"Muli","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Arimo","text":"Arimo","variants":["regular","italic","700","700italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext","hebrew"]},{"id":"PT Sans Narrow","text":"PT Sans Narrow","variants":["regular","700"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin"]},{"id":"Fira Sans","text":"Fira Sans","variants":["100","100italic","200","200italic","300","300italic","regular","italic","500","500italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Nunito","text":"Nunito","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Noto Serif","text":"Noto Serif","variants":["regular","italic","700","700italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Work Sans","text":"Work Sans","variants":["100","200","300","regular","500","600","700","800","900"],"subset":["latin-ext","latin"]},{"id":"Dosis","text":"Dosis","variants":["200","300","regular","500","600","700","800"],"subset":["latin-ext","latin"]},{"id":"Crimson Text","text":"Crimson Text","variants":["regular","italic","600","600italic","700","700italic"],"subset":["latin"]},{"id":"Nanum Gothic","text":"Nanum Gothic","variants":["regular","700","800"],"subset":["korean","latin"]},{"id":"Inconsolata","text":"Inconsolata","variants":["regular","700"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Indie Flower","text":"Indie Flower","variants":["regular"],"subset":["latin"]},{"id":"Quicksand","text":"Quicksand","variants":["300","regular","500","700"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Josefin Sans","text":"Josefin Sans","variants":["100","100italic","300","300italic","regular","italic","600","600italic","700","700italic"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Oxygen","text":"Oxygen","variants":["300","regular","700"],"subset":["latin-ext","latin"]},{"id":"Libre Baskerville","text":"Libre Baskerville","variants":["regular","italic","700"],"subset":["latin-ext","latin"]},{"id":"Bitter","text":"Bitter","variants":["regular","italic","700"],"subset":["latin-ext","latin"]},{"id":"Cabin","text":"Cabin","variants":["regular","italic","500","500italic","600","600italic","700","700italic"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Fjalla One","text":"Fjalla One","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Anton","text":"Anton","variants":["regular"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Rubik","text":"Rubik","variants":["300","300italic","regular","italic","500","500italic","700","700italic","900","900italic"],"subset":["latin-ext","cyrillic","latin","hebrew"]},{"id":"Hind","text":"Hind","variants":["300","regular","500","600","700"],"subset":["devanagari","latin-ext","latin"]},{"id":"Lobster","text":"Lobster","variants":["regular"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin","vietnamese"]},{"id":"Arvo","text":"Arvo","variants":["regular","italic","700","700italic"],"subset":["latin"]},{"id":"Exo 2","text":"Exo 2","variants":["100","100italic","200","200italic","300","300italic","regular","italic","500","500italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["latin-ext","cyrillic","latin"]},{"id":"Libre Franklin","text":"Libre Franklin","variants":["100","100italic","200","200italic","300","300italic","regular","italic","500","500italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["latin-ext","latin"]},{"id":"Karla","text":"Karla","variants":["regular","italic","700","700italic"],"subset":["latin-ext","latin"]},{"id":"Pacifico","text":"Pacifico","variants":["regular"],"subset":["latin-ext","cyrillic","latin","vietnamese"]},{"id":"Varela Round","text":"Varela Round","variants":["regular"],"subset":["latin-ext","latin","vietnamese","hebrew"]},{"id":"Abel","text":"Abel","variants":["regular"],"subset":["latin"]},{"id":"Yanone Kaffeesatz","text":"Yanone Kaffeesatz","variants":["200","300","regular","700"],"subset":["latin-ext","cyrillic","latin","vietnamese"]},{"id":"Source Serif Pro","text":"Source Serif Pro","variants":["regular","600","700"],"subset":["latin-ext","latin"]},{"id":"Dancing Script","text":"Dancing Script","variants":["regular","700"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Shadows Into Light","text":"Shadows Into Light","variants":["regular"],"subset":["latin"]},{"id":"Kanit","text":"Kanit","variants":["100","100italic","200","200italic","300","300italic","regular","italic","500","500italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["thai","latin-ext","latin","vietnamese"]},{"id":"Merriweather Sans","text":"Merriweather Sans","variants":["300","300italic","regular","italic","700","700italic","800","800italic"],"subset":["latin-ext","latin"]},{"id":"Nunito Sans","text":"Nunito Sans","variants":["200","200italic","300","300italic","regular","italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Abril Fatface","text":"Abril Fatface","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Bree Serif","text":"Bree Serif","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Ubuntu Condensed","text":"Ubuntu Condensed","variants":["regular"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","greek-ext"]},{"id":"Hind Siliguri","text":"Hind Siliguri","variants":["300","regular","500","600","700"],"subset":["latin-ext","latin","bengali"]},{"id":"Acme","text":"Acme","variants":["regular"],"subset":["latin"]},{"id":"Asap","text":"Asap","variants":["regular","italic","500","500italic","600","600italic","700","700italic"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Questrial","text":"Questrial","variants":["regular"],"subset":["latin"]},{"id":"Archivo Narrow","text":"Archivo Narrow","variants":["regular","italic","500","500italic","600","600italic","700","700italic"],"subset":["latin-ext","latin"]},{"id":"Russo One","text":"Russo One","variants":["regular"],"subset":["latin-ext","cyrillic","latin"]},{"id":"Amatic SC","text":"Amatic SC","variants":["regular","700"],"subset":["latin-ext","cyrillic","latin","vietnamese","hebrew"]},{"id":"Comfortaa","text":"Comfortaa","variants":["300","regular","700"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese"]},{"id":"Exo","text":"Exo","variants":["100","100italic","200","200italic","300","300italic","regular","italic","500","500italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Play","text":"Play","variants":["regular","700"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese"]},{"id":"Gloria Hallelujah","text":"Gloria Hallelujah","variants":["regular"],"subset":["latin"]},{"id":"Cairo","text":"Cairo","variants":["200","300","regular","600","700","900"],"subset":["latin-ext","latin","arabic"]},{"id":"Teko","text":"Teko","variants":["300","regular","500","600","700"],"subset":["devanagari","latin-ext","latin"]},{"id":"Encode Sans Condensed","text":"Encode Sans Condensed","variants":["100","200","300","regular","500","600","700","800","900"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Maven Pro","text":"Maven Pro","variants":["regular","500","700","900"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Signika","text":"Signika","variants":["300","regular","600","700"],"subset":["latin-ext","latin"]},{"id":"Francois One","text":"Francois One","variants":["regular"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Source Code Pro","text":"Source Code Pro","variants":["200","300","regular","500","600","700","900"],"subset":["latin-ext","latin"]},{"id":"EB Garamond","text":"EB Garamond","variants":["regular","italic","500","500italic","600","600italic","700","700italic","800","800italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Merienda","text":"Merienda","variants":["regular","700"],"subset":["latin-ext","latin"]},{"id":"Rokkitt","text":"Rokkitt","variants":["100","200","300","regular","500","600","700","800","900"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Crete Round","text":"Crete Round","variants":["regular","italic"],"subset":["latin-ext","latin"]},{"id":"Righteous","text":"Righteous","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Catamaran","text":"Catamaran","variants":["100","200","300","regular","500","600","700","800","900"],"subset":["tamil","latin-ext","latin"]},{"id":"PT Sans Caption","text":"PT Sans Caption","variants":["regular","700"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin"]},{"id":"Permanent Marker","text":"Permanent Marker","variants":["regular"],"subset":["latin"]},{"id":"Vollkorn","text":"Vollkorn","variants":["regular","italic","600","600italic","700","700italic","900","900italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese"]},{"id":"Alegreya","text":"Alegreya","variants":["regular","italic","500","500italic","700","700italic","800","800italic","900","900italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Patua One","text":"Patua One","variants":["regular"],"subset":["latin"]},{"id":"Ropa Sans","text":"Ropa Sans","variants":["regular","italic"],"subset":["latin-ext","latin"]},{"id":"Concert One","text":"Concert One","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Cuprum","text":"Cuprum","variants":["regular","italic","700","700italic"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin","vietnamese"]},{"id":"Courgette","text":"Courgette","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Cinzel","text":"Cinzel","variants":["regular","700","900"],"subset":["latin-ext","latin"]},{"id":"Old Standard TT","text":"Old Standard TT","variants":["regular","italic","700"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin","vietnamese"]},{"id":"Heebo","text":"Heebo","variants":["100","300","regular","500","700","800","900"],"subset":["latin","hebrew"]},{"id":"Domine","text":"Domine","variants":["regular","700"],"subset":["latin-ext","latin"]},{"id":"Poiret One","text":"Poiret One","variants":["regular"],"subset":["latin-ext","cyrillic","latin"]},{"id":"Great Vibes","text":"Great Vibes","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Pathway Gothic One","text":"Pathway Gothic One","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Cardo","text":"Cardo","variants":["regular","italic","700"],"subset":["greek","latin-ext","latin","greek-ext"]},{"id":"Kaushan Script","text":"Kaushan Script","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Noticia Text","text":"Noticia Text","variants":["regular","italic","700","700italic"],"subset":["latin-ext","latin","vietnamese"]},{"id":"ABeeZee","text":"ABeeZee","variants":["regular","italic"],"subset":["latin"]},{"id":"Satisfy","text":"Satisfy","variants":["regular"],"subset":["latin"]},{"id":"Prompt","text":"Prompt","variants":["100","100italic","200","200italic","300","300italic","regular","italic","500","500italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["thai","latin-ext","latin","vietnamese"]},{"id":"Rajdhani","text":"Rajdhani","variants":["300","regular","500","600","700"],"subset":["devanagari","latin-ext","latin"]},{"id":"Cookie","text":"Cookie","variants":["regular"],"subset":["latin"]},{"id":"Orbitron","text":"Orbitron","variants":["regular","500","700","900"],"subset":["latin"]},{"id":"Fira Sans Condensed","text":"Fira Sans Condensed","variants":["100","100italic","200","200italic","300","300italic","regular","italic","500","500italic","600","600italic","700","700italic","800","800italic","900","900italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Khand","text":"Khand","variants":["300","regular","500","600","700"],"subset":["devanagari","latin-ext","latin"]},{"id":"Quattrocento Sans","text":"Quattrocento Sans","variants":["regular","italic","700","700italic"],"subset":["latin-ext","latin"]},{"id":"Hind Madurai","text":"Hind Madurai","variants":["300","regular","500","600","700"],"subset":["tamil","latin-ext","latin"]},{"id":"Arapey","text":"Arapey","variants":["regular","italic"],"subset":["latin"]},{"id":"Lobster Two","text":"Lobster Two","variants":["regular","italic","700","700italic"],"subset":["latin"]},{"id":"Monoton","text":"Monoton","variants":["regular"],"subset":["latin"]},{"id":"Alegreya Sans","text":"Alegreya Sans","variants":["100","100italic","300","300italic","regular","italic","500","500italic","700","700italic","800","800italic","900","900italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Philosopher","text":"Philosopher","variants":["regular","italic","700","700italic"],"subset":["cyrillic-ext","cyrillic","latin","vietnamese"]},{"id":"Assistant","text":"Assistant","variants":["200","300","regular","600","700","800"],"subset":["latin","hebrew"]},{"id":"Monda","text":"Monda","variants":["regular","700"],"subset":["latin-ext","latin"]},{"id":"Istok Web","text":"Istok Web","variants":["regular","italic","700","700italic"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin"]},{"id":"Amiri","text":"Amiri","variants":["regular","italic","700","700italic"],"subset":["latin-ext","latin","arabic"]},{"id":"Basic","text":"Basic","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Caveat","text":"Caveat","variants":["regular","700"],"subset":["latin-ext","cyrillic","latin"]},{"id":"Volkhov","text":"Volkhov","variants":["regular","italic","700","700italic"],"subset":["latin"]},{"id":"Quattrocento","text":"Quattrocento","variants":["regular","700"],"subset":["latin-ext","latin"]},{"id":"News Cycle","text":"News Cycle","variants":["regular","700"],"subset":["latin-ext","latin"]},{"id":"Josefin Slab","text":"Josefin Slab","variants":["100","100italic","300","300italic","regular","italic","600","600italic","700","700italic"],"subset":["latin"]},{"id":"Yantramanav","text":"Yantramanav","variants":["100","300","regular","500","700","900"],"subset":["devanagari","latin-ext","latin"]},{"id":"Ultra","text":"Ultra","variants":["regular"],"subset":["latin"]},{"id":"Passion One","text":"Passion One","variants":["regular","700","900"],"subset":["latin-ext","latin"]},{"id":"Archivo Black","text":"Archivo Black","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Cormorant Garamond","text":"Cormorant Garamond","variants":["300","300italic","regular","italic","500","500italic","600","600italic","700","700italic"],"subset":["cyrillic-ext","latin-ext","cyrillic","latin","vietnamese"]},{"id":"Tinos","text":"Tinos","variants":["regular","italic","700","700italic"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext","hebrew"]},{"id":"Luckiest Guy","text":"Luckiest Guy","variants":["regular"],"subset":["latin"]},{"id":"Fredoka One","text":"Fredoka One","variants":["regular"],"subset":["latin"]},{"id":"Sacramento","text":"Sacramento","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Didact Gothic","text":"Didact Gothic","variants":["regular"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","greek-ext"]},{"id":"Handlee","text":"Handlee","variants":["regular"],"subset":["latin"]},{"id":"Alfa Slab One","text":"Alfa Slab One","variants":["regular"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Pontano Sans","text":"Pontano Sans","variants":["regular"],"subset":["latin-ext","latin"]},{"id":"Kalam","text":"Kalam","variants":["300","regular","700"],"subset":["devanagari","latin-ext","latin"]},{"id":"Cantarell","text":"Cantarell","variants":["regular","italic","700","700italic"],"subset":["latin"]},{"id":"Playfair Display SC","text":"Playfair Display SC","variants":["regular","italic","700","700italic","900","900italic"],"subset":["latin-ext","cyrillic","latin","vietnamese"]},{"id":"Tangerine","text":"Tangerine","variants":["regular","700"],"subset":["latin"]},{"id":"Boogaloo","text":"Boogaloo","variants":["regular"],"subset":["latin"]},{"id":"Nanum Myeongjo","text":"Nanum Myeongjo","variants":["regular","700","800"],"subset":["korean","latin"]},{"id":"Cabin Condensed","text":"Cabin Condensed","variants":["regular","500","600","700"],"subset":["latin-ext","latin","vietnamese"]},{"id":"Gudea","text":"Gudea","variants":["regular","italic","700"],"subset":["latin-ext","latin"]},{"id":"Jura","text":"Jura","variants":["300","regular","500","600","700"],"subset":["greek","cyrillic-ext","latin-ext","cyrillic","latin","vietnamese","greek-ext"]},{"id":"Bangers","text":"Bangers","variants":["regular"],"subset":["latin-ext","latin","vietnamese"]}]';


?>