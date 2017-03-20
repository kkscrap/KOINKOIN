<?php

// ###############################

// MAQUETTES

// ###############################
$kksmaquettes = new \Zend_Session_Namespace ( 'kks_configs_maquettes' );
$kksmaquettes = array ();
$kksmaquettes [0] = new stdClass ();
$kksmaquettes [0]->titre = new stdClass ();
$kksmaquettes [0]->titre->fr = "Maquette qui scrape une URL_HTTPS avec un filtre XPATH pour obtenir un TEXTE";
$kksmaquettes [0]->titre->usa = "Scale a URL_HTTPS with an XPATH filter to get a TEXT";
$kksmaquettes [0]->descriptif = array ();
$kksmaquettes [0]->descriptif [0] = new stdClass ();
$kksmaquettes [0]->descriptif [0]->fr = "Cette maquette est un exemple concret de l'utilisation d'un filtre XPATH sur une page web (unique)";
$kksmaquettes [0]->descriptif [0]->usa = "This model is a concrete example of the use of an XPATH filter on a web page (unique)";
$kksmaquettes [0]->descriptif [1] = new stdClass ();
$kksmaquettes [0]->descriptif [1]->fr = "Cette maquette scrape une page du site de petites annonces de LEBONCOIN, pour extraire le premier element de la liste principale (qui contient les titres des peites annonces)";
$kksmaquettes [0]->descriptif [1]->usa = "This mock-up scrapes a page from LEBONCOIN's site, to extract the first item from the main list (which contains the titles of the small ads)";
$kksmaquettes [0]->descriptif [2] = new stdClass ();
$kksmaquettes [0]->descriptif [2]->fr = "Maquette qui se charge de récupérer le code source de 1 page web https de leboncoin, pour lui appliquer 1 filtre xpath";
$kksmaquettes [0]->descriptif [2]->usa = "A model that takes care of recovering the source code of 1 web page https of leboncoin, to apply to him 1 filter xpath";

// ###############################

// FILTRES

// ###############################

$kksfiltres = new \Zend_Session_Namespace ( 'kks_configs_filtres' );
$kksfiltres->filtres->xpath_texte = array ();
$kksfiltres->filtres->xpath_texte [0] = new stdClass ();
$kksfiltres->filtres->xpath_texte [0]->auteur = "kkscrap";
$kksfiltres->filtres->xpath_texte [0]->date = "20170317";
$kksfiltres->filtres->xpath_texte [0]->parent = "leboncoin";
$kksfiltres->filtres->xpath_texte [0]->tidy = "1";
$kksfiltres->filtres->xpath_texte [0]->pattern = ".//*[@id='all']/ul[3]/li[1]/h2";
$kksfiltres->filtres->xpath_texte [0]->url_secours = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
$kksfiltres->filtres->xpath_texte [0]->httrack_secours = "0";
$kksfiltres->filtres->xpath_texte [0]->urls = array ();
$kksfiltres->filtres->xpath_texte [0]->urls [0] = "0";
$kksfiltres->filtres->xpath_texte [0]->descriptif = array ();
$kksfiltres->filtres->xpath_texte [0]->descriptif [0] = new stdClass ();
$kksfiltres->filtres->xpath_texte [0]->descriptif [0]->fr = "Petit filtre qui extrait le premier element d'une liste (1 seul) sur le bon coin";
$kksfiltres->filtres->xpath_texte [0]->descriptif [0]->usa = "Small filter that extracts the first element from a list (1 only) on the right corner";
$kksfiltres->filtres->xpath_texte [0]->descriptif [1] = new stdClass ();
$kksfiltres->filtres->xpath_texte [0]->descriptif [1]->fr = "Le filtre permet de récupérer le titre de la 1ere petite annonce qui se présente dans la liste";
$kksfiltres->filtres->xpath_texte [0]->descriptif [1]->usa = "The filter allows to retrieve the title of the first  that appears in the list";
$kksfiltres->filtres->xpath_texte [0]->descriptif [2] = new stdClass ();
$kksfiltres->filtres->xpath_texte [0]->descriptif [2]->fr = "Le titre de la premiere annonce est derriere la balise h2";
$kksfiltres->filtres->xpath_texte [0]->descriptif [2]->usa = "The title of the first announcement is behind the tag h2";
$kksfiltres->filtres->xpath_texte [0]->descriptif [3] = new stdClass ();
$kksfiltres->filtres->xpath_texte [0]->descriptif [3]->fr = "Le filtre ne recupere que le titre de la premiere annonce de la liste";
$kksfiltres->filtres->xpath_texte [0]->descriptif [3]->usa = "The filter only retrieves the title of the first ad from the list";

// ###############################

// URLS

// ###############################

$kksurls = new \Zend_Session_Namespace ( 'kks_configs_urls' );
$kksurls->urls = array ();
$kksurls->urls [0] = new stdClass ();
$kksurls->urls [0]->url_de_depart = array ();
$kksurls->urls [0]->url_de_depart [0] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
$kksurls->urls [0]->descriptif = array ();
$kksurls->urls [0]->descriptif [0] = new stdClass ();
$kksurls->urls [0]->descriptif [0]->fr = "Page au hasard sur le site de leboncoin";
$kksurls->urls [0]->descriptif [0]->usa = "Random page on leboncoin's website";
$kksurls->urls [0]->descriptif [1] = new stdClass ();
$kksurls->urls [0]->descriptif [1]->fr = "La page ne renvoie pas d'arbre dom propre";
$kksurls->urls [0]->descriptif [1]->usa = "Page dom not clean";

// ###############################

// SCRAP

// ###############################

$kkslibrary = new \Zend_Session_Namespace ( 'kks_library' );
$kksfiltres->filtres->xpath_texte [0]->resultat = $kkslibrary->library->curl_koinkoin->get_curl_1_page_ssl ( $kksfiltres->filtres->xpath_texte [0]->url_secours );
$kksfiltres->filtres->xpath_texte [0]->resultat = $kkslibrary->library->xpath_koinkoin->get_xpath_1_filtre_sur_1_html ( $kksfiltres->filtres->xpath_texte [0]->resultat, $kksfiltres->filtres->xpath_texte [0]->pattern, $kksfiltres->filtres->xpath_texte [0]->tidy );
$kksfiltres->filtres->xpath_texte [0]->verificator = new stdClass ();
$kksfiltres->filtres->xpath_texte [0]->verificator->is_meme_type = "ok"; // SDE #49
$kksfiltres->filtres->xpath_texte [0]->verificator->is_non_vide = "ok"; // SDE #45
$kksfiltres->filtres->xpath_texte [0]->verificator->resultat = "ok"; // SDE #114

?>