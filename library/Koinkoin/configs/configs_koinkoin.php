<?php
$kksession = new \Zend_Session_Namespace ( 'koinkoin314' );

$kksession->projet_config = new stdClass ();
$kksession->projet_config->nom = 'koinkoin314';
$kksession->projet_config->descriptif = new stdClass ();
$kksession->projet_config->descriptif->fr = "Koinkoin est un projet php/zend qui permet(tra) d'extraire du contenu textuel sur le web, pour le récupérer dans un fichier csv ou json, ou encore un array (etc..). Les contenus sont extraits à l'aide de filtres XPATH ou REGEX.";
$kksession->projet_config->descriptif->usa = "Koinkoin is a php/zend scripts for extract you text contents on web - and put if into csv or json files with regex or xpath filters";

$kksession->maquettes_configs = new stdClass ();
$kksession->maquettes_configs->maquette = array ();
$kksession->maquettes_configs->maquette [0] = new stdClass ();
$kksession->maquettes_configs->maquette [0]->titre = new stdClass ();
$kksession->maquettes_configs->maquette [0]->titre->fr = "Maquette qui scrape une URL_HTTPS avec un filtre XPATH pour obtenir un TEXTE";
$kksession->maquettes_configs->maquette [0]->titre->usa = "Scale a URL_HTTPS with an XPATH filter to get a TEXT";
$kksession->maquettes_configs->maquette [0]->description = array ();
$kksession->maquettes_configs->maquette [0]->description [0] = new stdClass();
$kksession->maquettes_configs->maquette [0]->description [0]->fr = "Cette maquette est un exemple concret de l'utilisation d'un filtre XPATH sur une page web (unique)";
$kksession->maquettes_configs->maquette [0]->description [0]->usa = "This model is a concrete example of the use of an XPATH filter on a web page (unique)";
$kksession->maquettes_configs->maquette [0]->description [1] = new stdClass();
$kksession->maquettes_configs->maquette [0]->description [1]->fr = "Cette maquette scrape une page du site de petites annonces de LEBONCOIN, pour extraire le premier element de la liste principale (qui contient les titres des peites annonces)";
$kksession->maquettes_configs->maquette [0]->description [1]->usa = "This mock-up scrapes a page from LEBONCOIN's site, to extract the first item from the main list (which contains the titles of the small ads)";
$kksession->maquettes_configs->maquette [0]->description [2] = new stdClass();
$kksession->maquettes_configs->maquette [0]->description [2]->fr = "Maquette qui se charge de récupérer le code source de 1 page web https de leboncoin, pour lui appliquer 1 filtre xpath";
$kksession->maquettes_configs->maquette [0]->description [2]->usa = "A model that takes care of recovering the source code of 1 web page https of leboncoin, to apply to him 1 filter xpath";

$kksession->filtres_configs = new stdClass ();
$kksession->filtres_configs->filtres_xpath = array ();
$kksession->filtres_configs->filtres_xpath [0] = new stdClass ();
$kksession->filtres_configs->filtres_xpath [0]->date_creation = "20170317";
$kksession->filtres_configs->filtres_xpath [0]->type = "texte";
$kksession->filtres_configs->filtres_xpath [0]->tidy = "1";
$kksession->filtres_configs->filtres_xpath [0]->patterns = array ();
$kksession->filtres_configs->filtres_xpath [0]->patterns [0] = ".//*[@id='all']/ul[3]/li[1]/h2";
$kksession->filtres_configs->filtres_xpath [0]->urls_de_depart = array ();
$kksession->filtres_configs->filtres_xpath [0]->urls_de_depart [0] = new stdClass ();
$kksession->filtres_configs->filtres_xpath [0]->urls_de_depart [0]->url = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
$kksession->filtres_configs->filtres_xpath [0]->urls_de_depart [0]->description = array ();
$kksession->filtres_configs->filtres_xpath [0]->urls_de_depart [0]->description [0] = new stdClass ();
$kksession->filtres_configs->filtres_xpath [0]->urls_de_depart [0]->description [0]->fr = "Page au hasard sur le site de leboncoin";
$kksession->filtres_configs->filtres_xpath [0]->urls_de_depart [0]->description [0]->usa = "Random page on leboncoin's website";
$kksession->filtres_configs->filtres_xpath [0]->urls_de_depart [0]->description [1] = new stdClass ();
$kksession->filtres_configs->filtres_xpath [0]->urls_de_depart [0]->description [1]->fr = "La page ne renvoie pas d'arbre dom propre";
$kksession->filtres_configs->filtres_xpath [0]->urls_de_depart [0]->description [1]->usa = "Page dom not clean";
$kksession->filtres_configs->filtres_xpath [0]->descriptions = array ();
$kksession->filtres_configs->filtres_xpath [0]->descriptions [0] = new stdClass ();
$kksession->filtres_configs->filtres_xpath [0]->descriptions [0]->fr = "Petit filtre qui extrait le premier element d'une liste (1 seul) sur le bon coin";
$kksession->filtres_configs->filtres_xpath [0]->descriptions [0]->usa = "Small filter that extracts the first element from a list (1 only) on the right corner";
$kksession->filtres_configs->filtres_xpath [0]->descriptions [1] = new stdClass ();
$kksession->filtres_configs->filtres_xpath [0]->descriptions [1]->fr = "Le filtre permet de récupérer le titre de la 1ere petite annonce qui se présente dans la liste";
$kksession->filtres_configs->filtres_xpath [0]->descriptions [1]->usa = "The filter allows to retrieve the title of the first  that appears in the list";
$kksession->filtres_configs->filtres_xpath [0]->descriptions [2] = new stdClass ();
$kksession->filtres_configs->filtres_xpath [0]->descriptions [2]->fr = "Le titre de la premiere annonce est derriere la balise h2";
$kksession->filtres_configs->filtres_xpath [0]->descriptions [2]->usa = "The title of the first announcement is behind the tag h2";
$kksession->filtres_configs->filtres_xpath [0]->descriptions [3] = new stdClass ();
$kksession->filtres_configs->filtres_xpath [0]->descriptions [3]->fr = "Le filtre ne recupere que le titre de la premiere annonce de la liste";
$kksession->filtres_configs->filtres_xpath [0]->descriptions [3]->usa = "The filter only retrieves the title of the first ad from the list";
$kksession->filtres_configs->filtres_xpath [0]->resultat = $kksession->library->curl_kkcurl->get_curl_1_page_ssl ( $kksession->filtres_configs->filtres_xpath [0]->urls_de_depart [0]->url );
$kksession->filtres_configs->filtres_xpath [0]->resultat = $kksession->library->xpath_kkxpath->get_xpath_1_filtre_sur_1_html ( $kksession->filtres_configs->filtres_xpath [0]->resultat, $kksession->filtres_configs->filtres_xpath [0]->patterns [0], $kksession->filtres_configs->filtres_xpath [0]->tidy );
$kksession->filtres_configs->filtres_xpath [0]->verificator = new stdClass ();
$kksession->filtres_configs->filtres_xpath [0]->verificator->type = gettype ( $kksession->filtres_configs->filtres_xpath [0]->resultat );
$kksession->filtres_configs->filtres_xpath [0]->verificator->vide = empty ( $kksession->filtres_configs->filtres_xpath [0]->resultat );

?>