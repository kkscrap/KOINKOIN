<?php
$kks314 = new \Zend_Session_Namespace ( 'koinkoin314' );
$kksconfigs = new \Zend_Session_Namespace ( 'koinkoin314_configs' );

// ###############################

// PROJET

// ###############################

$kksconfigs->projet = new stdClass ();
$kksconfigs->projet->nom = 'koinkoin314';
$kksconfigs->projet->descriptif = new stdClass ();
$kksconfigs->projet->descriptif->fr = "Koinkoin est un projet php/zend qui permet(tra) d'extraire du contenu textuel sur le web, pour le récupérer dans un fichier csv ou json, ou encore un array (etc..). Les contenus sont extraits à l'aide de filtres XPATH ou REGEX.";
$kksconfigs->projet->descriptif->usa = "Koinkoin is a php/zend scripts for extract you text contents on web - and put if into csv or json files with regex or xpath filters";

// ###############################

// MAQUETTES

// ###############################

$kksconfigs->maquettes = array ();
$kksconfigs->maquettes [0] = new stdClass ();
$kksconfigs->maquettes [0]->titre = new stdClass ();
$kksconfigs->maquettes [0]->titre->fr = "Maquette qui scrape une URL_HTTPS avec un filtre XPATH pour obtenir un TEXTE";
$kksconfigs->maquettes [0]->titre->usa = "Scale a URL_HTTPS with an XPATH filter to get a TEXT";
$kksconfigs->maquettes [0]->descriptif = array ();
$kksconfigs->maquettes [0]->descriptif [0] = new stdClass ();
$kksconfigs->maquettes [0]->descriptif [0]->fr = "Cette maquette est un exemple concret de l'utilisation d'un filtre XPATH sur une page web (unique)";
$kksconfigs->maquettes [0]->descriptif [0]->usa = "This model is a concrete example of the use of an XPATH filter on a web page (unique)";
$kksconfigs->maquettes [0]->descriptif [1] = new stdClass ();
$kksconfigs->maquettes [0]->descriptif [1]->fr = "Cette maquette scrape une page du site de petites annonces de LEBONCOIN, pour extraire le premier element de la liste principale (qui contient les titres des peites annonces)";
$kksconfigs->maquettes [0]->descriptif [1]->usa = "This mock-up scrapes a page from LEBONCOIN's site, to extract the first item from the main list (which contains the titles of the small ads)";
$kksconfigs->maquettes [0]->descriptif [2] = new stdClass ();
$kksconfigs->maquettes [0]->descriptif [2]->fr = "Maquette qui se charge de récupérer le code source de 1 page web https de leboncoin, pour lui appliquer 1 filtre xpath";
$kksconfigs->maquettes [0]->descriptif [2]->usa = "A model that takes care of recovering the source code of 1 web page https of leboncoin, to apply to him 1 filter xpath";

// ###############################

// FILTRES

// ###############################

$kksconfigs->filtres = new stdClass ();
$kksconfigs->filtres->xpath_texte = array ();
$kksconfigs->filtres->xpath_texte [0] = new stdClass ();
$kksconfigs->filtres->xpath_texte [0]->auteur = "kkscrap";
$kksconfigs->filtres->xpath_texte [0]->date = "20170317";
$kksconfigs->filtres->xpath_texte [0]->parent = "leboncoin";
$kksconfigs->filtres->xpath_texte [0]->tidy = "1";
$kksconfigs->filtres->xpath_texte [0]->pattern = ".//*[@id='all']/ul[3]/li[1]/h2";
$kksconfigs->filtres->xpath_texte [0]->url_secours = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
$kksconfigs->filtres->xpath_texte [0]->httrack_secours = "0";
$kksconfigs->filtres->xpath_texte [0]->urls = array ();
$kksconfigs->filtres->xpath_texte [0]->urls [0] = "0";
$kksconfigs->filtres->xpath_texte [0]->descriptif = array ();
$kksconfigs->filtres->xpath_texte [0]->descriptif [0] = new stdClass ();
$kksconfigs->filtres->xpath_texte [0]->descriptif [0]->fr = "Petit filtre qui extrait le premier element d'une liste (1 seul) sur le bon coin";
$kksconfigs->filtres->xpath_texte [0]->descriptif [0]->usa = "Small filter that extracts the first element from a list (1 only) on the right corner";
$kksconfigs->filtres->xpath_texte [0]->descriptif [1] = new stdClass ();
$kksconfigs->filtres->xpath_texte [0]->descriptif [1]->fr = "Le filtre permet de récupérer le titre de la 1ere petite annonce qui se présente dans la liste";
$kksconfigs->filtres->xpath_texte [0]->descriptif [1]->usa = "The filter allows to retrieve the title of the first  that appears in the list";
$kksconfigs->filtres->xpath_texte [0]->descriptif [2] = new stdClass ();
$kksconfigs->filtres->xpath_texte [0]->descriptif [2]->fr = "Le titre de la premiere annonce est derriere la balise h2";
$kksconfigs->filtres->xpath_texte [0]->descriptif [2]->usa = "The title of the first announcement is behind the tag h2";
$kksconfigs->filtres->xpath_texte [0]->descriptif [3] = new stdClass ();
$kksconfigs->filtres->xpath_texte [0]->descriptif [3]->fr = "Le filtre ne recupere que le titre de la premiere annonce de la liste";
$kksconfigs->filtres->xpath_texte [0]->descriptif [3]->usa = "The filter only retrieves the title of the first ad from the list";
$kksconfigs->filtres->xpath_texte [0]->resultat = $kks314->library->curl_kkcurl->get_curl_1_page_ssl ( $kksconfigs->filtres->xpath_texte [0]->urls [0]->url );
$kksconfigs->filtres->xpath_texte [0]->resultat = $kks314->library->xpath_kkxpath->get_xpath_1_filtre_sur_1_html ( $kksconfigs->filtres->xpath_texte [0]->resultat, $kksconfigs->filtres->xpath_texte [0]->pattern, $kksconfigs->filtres->xpath_texte [0]->tidy );
$kksconfigs->filtres->xpath_texte [0]->verificator = new stdClass ();
$kksconfigs->filtres->xpath_texte [0]->verificator->is_meme_type = "ok"; // SDE #49
$kksconfigs->filtres->xpath_texte [0]->verificator->is_non_vide = "ok"; // SDE #45
$kksconfigs->filtres->xpath_texte [0]->verificator->resultat = "ok"; // SDE #114
                                                                     
// ###############################
                                                                     
// URLS
                                                                     
// ###############################

$kksconfigs->filtres->xpath_texte [0]->urls = array ();
$kksconfigs->filtres->xpath_texte [0]->urls [0] = new stdClass ();
$kksconfigs->filtres->xpath_texte [0]->urls [0]->url = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
$kksconfigs->filtres->xpath_texte [0]->urls [0]->descriptif = array ();
$kksconfigs->filtres->xpath_texte [0]->urls [0]->descriptif [0] = new stdClass ();
$kksconfigs->filtres->xpath_texte [0]->urls [0]->descriptif [0]->fr = "Page au hasard sur le site de leboncoin";
$kksconfigs->filtres->xpath_texte [0]->urls [0]->descriptif [0]->usa = "Random page on leboncoin's website";
$kksconfigs->filtres->xpath_texte [0]->urls [0]->descriptif [1] = new stdClass ();
$kksconfigs->filtres->xpath_texte [0]->urls [0]->descriptif [1]->fr = "La page ne renvoie pas d'arbre dom propre";
$kksconfigs->filtres->xpath_texte [0]->urls [0]->descriptif [1]->usa = "Page dom not clean";

?>