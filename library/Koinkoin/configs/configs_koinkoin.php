<?php
$kkslibrary = new \Zend_Session_Namespace ( 'kks_library' );
$kksmaquettes = new \Zend_Session_Namespace ( 'kks_maquettes' );
$kksurls = new \Zend_Session_Namespace ( 'kks_urls' );
$kksxpath = new \Zend_Session_Namespace ( 'kks_xpath' );
$kksregex = new \Zend_Session_Namespace ( 'kks_regex' );
$kksscripts = new \Zend_Session_Namespace ( 'kks_scripts' );
$kkstidy = new \Zend_Session_Namespace ( 'kks_tidy' );
$kksnotes = new \Zend_Session_Namespace ( 'kks_notes' );

$kksmaquettes->maquette1 = array ();
$kksmaquettes->maquette1 [0] = new stdClass ();
$kksmaquettes->maquette1 [0]->titre = "Maquette xpath";
$kksmaquettes->maquette1 [0]->zend_view = "maquette1";
$kksmaquettes->maquette1 [0]->objectif = array ();
$kksmaquettes->maquette1 [0]->objectif [0] = new stdClass ();
$kksmaquettes->maquette1 [0]->objectif [0]->fr = "Maquette qui scrape une
URL_HTTPS avec un filtre XPATH pour obtenir un TEXTE";
$kksmaquettes->maquette1 [0]->objectif [0]->usa = "Scale a URL_HTTPS with an
XPATH filter to get a TEXT";
$kksmaquettes->maquette1 [1] = new stdClass ();
$kksmaquettes->maquette1 [1]->titre = "Maquette xpath avec premier tableau de
plusieurs cellules (cells)";
$kksmaquettes->maquette1 [1]->zend_view = "premiertableauxpath";
$kksmaquettes->maquette1 [1]->objectif = array ();
$kksmaquettes->maquette1 [1]->objectif [0] = new stdClass ();
$kksmaquettes->maquette1 [1]->objectif [0]->fr = "Maquette qui scrape plusieurs
pages pour constituer un tableau avec les valeurs des resultats xpath";
$kksmaquettes->maquette1 [1]->objectif [0]->usa = "A model that scraps several
pages to form a table with values of xpath values";
$kksmaquettes->maquette2 = array ();
$kksmaquettes->maquette2 [0] = new stdClass ();
$kksmaquettes->maquette2 [0]->titre = "Maquette regex";
$kksmaquettes->maquette2 [0]->zend_view = "maquetteregex";
$kksmaquettes->maquette2 [0]->objectif = new stdClass ();
$kksmaquettes->maquette2 [0]->objectif->fr = "Maquette regex qui affiche un tableau
avec le titre des nouveaux articles de blogs, emanant de plusieurs sources";
$kksmaquettes->maquette2 [0]->objectif->usa = "A regex template that displays a
table with the title of the new blog articles, emanating from several
sources";

$kksurls->url2depart = array ();
$kksurls->url2depart [0] = new stdClass ();
$kksurls->url2depart [0]->titre = new stdClass ();
$kksurls->url2depart [0]->titre->fr = "Page au hasard sur le site de
leboncoin";
$kksurls->url2depart [0]->titre->usa = "Random page on leboncoin's website";
$kksurls->url2depart [0]->url = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
$kksurls->url2depart [0]->notes = array ();
$kksurls->url2depart [0]->notes [0] = "1";
$kksurls->url2depart [0]->kktest = new stdClass ();
$kksurls->url2depart [0]->kktest = array ();
$kksurls->url2depart [0]->kktest [0] = "12";
$kksurls->url2depart [0]->kktest [1] = "10";
$kksurls->url2depart [0]->kktest [2] = "7";
$kksurls->url2depart [0]->kktest [3] = "8";
$kksurls->urls2depart = array ();
$kksurls->urls2depart [0] = new stdClass ();
$kksurls->urls2depart [0]->titre = new stdClass ();
$kksurls->urls2depart [0]->titre->fr = "Petite liste de pages de leboncoin,
pour le jeu de mots (sur la fin des urls)";
$kksurls->urls2depart [0]->titre->usa = "Small list of pages of leboncoin, for
the play on words (on the end of the urls)";
$kksurls->urls2depart [0]->urls = array ();
$kksurls->urls2depart [0]->urls [0] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
$kksurls->urls2depart [0]->urls [1] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&tarrot=0";
$kksurls->urls2depart [0]->urls [2] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&poirot=0";
$kksurls->urls2depart [0]->urls [3] = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&mot=0";
$kksurls->urls2depart [0]->notes = array (); // KKSCRAP #28
$kksurls->urls2depart [0]->notes [0] = "-1";
$kksurls->urls2depart [0]->kktest = new stdClass (); // KKSCRAP #46
$kksurls->urls2depart [0]->kktest = array ();
$kksurls->urls2depart [0]->kktest [0] = "0";
$kksurls->urls2depart [0]->kktest [1] = "11";
$kksurls->urls2depart [0]->kktest [2] = "45";
$kksurls->url2deplacement = array ();
$kksurls->urls2deplacement = array ();

$kksxpath->xpath2texte = array ();
$kksxpath->xpath2texte [0] = new stdClass ();
// .//*[@id='listingAds']/section/section/ul/li[1]/a/section/h2 2017
$kksxpath->xpath2texte [0]->pattern = ".//*[@id='all']/ul[3]/li[1]/h2";
$kksxpath->xpath2texte [0]->url = "https://www.leboncoin.fr/telephonie/offres/ile_de_france/?th=1&q=ip&parrot=0";
$kksxpath->xpath2texte [0]->kktest = array ();
$kksxpath->xpath2texte [0]->kktest [0] = "0";

$kksregex->regex2texte = array ();
$kksregex->regex2url = array ();

$kksscripts->script2texte = array ();
$kksscripts->script2url = array ();

$kkstidy->txt2xhtml = array ();
$kkstidy->txt2xhtml [0] = new stdClass ();
$kkstidy->txt2xhtml [0]->titre = new stdClass ();
$kkstidy->txt2xhtml [0]->titre->fr = "Le tidy convertit du code html4 non conforme en code xhtml, en reparant toute trace de tags casses";
$kkstidy->txt2xhtml [0]->titre->usa = "The tidy converts non-conforming html4 code to xhtml code, by repairing the break tags";
// $kkstidy->txt2xhtml [0]->notes = array ();
// $kkstidy->txt2xhtml [0]->notes [0] = "0";
$kkstidy->txt2xhtml [0]->kktest = new stdClass ();
$kkstidy->txt2xhtml [0]->kktest = array ();
$kkstidy->txt2xhtml [0]->kktest [0] = "21";

// $kksnotes->maquettes = array (); // KKSCRAP #77
// $kksnotes->maquettes [0] = new stdClass ();
// $kksnotes->maquettes [0]->fr = "Cette maquette est un exemple concret de
// l'utilisation d'un filtre XPATH sur une page web (unique)";
// $kksnotes->maquettes [0]->usa = "This model is a concrete example of the use
// of an XPATH filter on a web page (unique)";
// $kksnotes->maquettes [1] = new stdClass ();
// $kksnotes->maquettes [1]->fr = "Cette maquette scrape une page du site de
// petites annonces de LEBONCOIN, pour extraire le premier element de la liste
// principale (qui contient les titres des peites annonces)";
// $kksnotes->maquettes [1]->usa = "This mock-up scrapes a page from LEBONCOIN's
// site, to extract the first item from the main list (which contains the titles
// of the small ads)";
// $kksnotes->maquettes [2] = new stdClass ();
// $kksnotes->maquettes [2]->fr = "Maquette qui se charge de récupérer le code
// source de 1 page web https de leboncoin, pour lui appliquer 1 filtre xpath";
// $kksnotes->maquettes [2]->usa = "A model that takes care of recovering the
// source code of 1 web page https of leboncoin, to apply to him 1 filter
// xpath";

// $kksnotes->filtres [0] = new stdClass ();
// $kksnotes->filtres [0]->fr = "Extraction du premier element de la liste de la
// page de petite annonce du bon coin";
// $kksnotes->filtres [0]->usa = "Small filter that extracts the first element
// from a list (1 only) on the right corner";
// $kksnotes->filtres [1]->fr = "Le filtre permet de récupérer le titre de la
// 1ere petite annonce qui se présente dans la liste";
// $kksnotes->filtres [1]->usa = "The filter allows to retrieve the title of the
// first that appears in the list";
// $kksnotes->filtres [2]->fr = "Le titre de la premiere annonce est derriere la
// balise h2";
// $kksnotes->filtres [2]->usa = "The title of the first announcement is behind
// the tag h2";
// $kksnotes->filtres [3]->fr = "Le filtre ne recupere que le titre de la
// premiere annonce de la liste";
// $kksnotes->filtres [3]->usa = "The filter only retrieves the title of the
// first ad from the list";

// $kksnotes->urls = array ();
// $kksnotes->urls [0] = new stdClass ();
// $kksnotes->urls [0]->fr = "La page ne renvoie pas d'arbre dom propre";
// $kksnotes->urls [0]->usa = "Page dom not clean";
// $kksnotes->urls [1] = new stdClass ();
// $kksnotes->urls [1]->fr = "Page de leboncoin au pif";
// $kksnotes->urls [1]->usa = "Random page of leboncoin";

// $kksnotes->tidy = array (); // KKSCRAP #35
// $kksnotes->tidy [0] = new stdClass ();
// $kksnotes->tidy [0]->fr = "Ce tidy permet a la structure d'une page web html4
// de pouvoir rentrer dans un arbre dom";
// $kksnotes->tidy [0]->usa = "This tidy allows the structure of the web page
// html4 to be able to enter a tree dom";
// $kksnotes->tidy [1] = new stdClass ();
// $kksnotes->tidy [1]->fr = "Ce tidy peut etre utilise sur des petits bouts de
// texte avec des tags html en vrac";
// $kksnotes->tidy [1]->usa = "This tidy can be used on small pieces of text
// with bulk html tags";

// $kksxpath->xpath2texte [0]->kktest = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest = array ();
// $kksxpath->xpath2texte [0]->kktest [0] = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest [0]->titre = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest [0]->titre->fr = array ();
// $kksxpath->xpath2texte [0]->kktest [0]->titre->fr [0] = "Le filtre doit
// retourner un texte a partir d'une url";
// $kksxpath->xpath2texte [0]->kktest [0]->titre->fr [1] = "A partir d'un url on
// obtient un texte (en appliquant ce filtre)";
// $kksxpath->xpath2texte [0]->kktest [0]->titre->usa [0] = "Testing if the
// xpath filter applies to a url returns a text";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts = array ();
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [0] = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [0]->code = "404";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [0]->titre = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [0]->titre->fr = "l'url
// n'existe pas";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [0]->titre->usa = "Url does
// not exist";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [1] = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [1]->code = "-1";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [1]->titre = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [1]->titre->fr = "erreur dans
// le traitement de la requete pour joindre l'url";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [1]->titre->usa = "Error in
// the processing of the request to join the url";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [2] = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [2]->code = "0";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [2]->titre = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [2]->titre->fr = "...";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [2]->titre->usa = "..";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [3] = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [3]->code = "1";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [3]->titre = new stdClass ();
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [3]->titre->fr = "..";
// $kksxpath->xpath2texte [0]->kktest [0]->statuts [3]->titre->usa = "..";

// // $kkresultats->filtres->xpath2texte [0]->resultat =
// $kkslibrary->curl_koinkoin->get_curl_1_page_ssl ( $kksfiltres->xpath2texte
// [0]->url_secours );
// // $kkresultats->filtres->xpath2texte [0]->resultat =
// $kkslibrary->xpath_koinkoin->get_xpath_1_filtre_sur_1_html (
// $kksfiltres->xpath2texte [0]->resultat, $kksfiltres->xpath2texte
// [0]->pattern, $kksfiltres->xpath2texte [0]->tidy );
// // $kkresultats->filtres->xpath2texte [0]->verificator = new stdClass ();
// // $kkresultats->filtres->xpath2texte [0]->verificator->is_meme_type = "ok";
// // KKSCRAP #49
// // $kkresultats->filtres->xpath2texte [0]->verificator->is_non_vide = "ok";
// // KKSCRAP #45
// // $kkresultats->filtres->xpath2texte [0]->verificator->resultat = "ok"; //
// KKSCRAP #114
// // $kksfiltres->xpath2texte [0]->auteur = "kkscrap";
// // $kksfiltres->xpath2texte [0]->date = "20170317";
// // $kksfiltres->xpath2texte [0]->parent = "leboncoin";
// // $kksfiltres->xpath2texte [0]->tidy = "tidy_dom_1";
// // $kksfiltres->xpath2texte [0]->tidy = "tidy_dom_1";
// $kksmaquettes->maquette2[1] = new stdClass();
// $kksmaquettes->maquette2[1]->titre = "";
// $kksmaquettes->maquette2[1]->objectif = new stdClass();
// $kksmaquettes->maquette2[1]->objectif->fr = "Maquette constituée de plusieurs
// urls, de plusieurs filtres, avec premiers screens pour le parametrage (du
// scrap)";
// $kksmaquettes->maquette2[1]->objectif->usa = "Model consisting of several
// urls, several filters, with first screens for parametrage (scrap)";

// $kksurls->url2depart[0]->kktest[0]->statuts_ok = array();
// $kksurls->url2depart[0]->kktest[0]->statuts_ok[0] = new stdClass();
// $kksurls->url2depart[0]->kktest[0]->statuts_ok[0]->code = "200";
// $kksurls->url2depart[0]->kktest[0]->statuts_ok[0]->titre = new stdClass();
// $kksurls->url2depart[0]->kktest[0]->statuts_ok[0]->titre->fr = "l'url est ok
// et la page a bien repondu etc";
// $kksurls->url2depart[0]->kktest[0]->statuts_ok[0]->titre->usa = "Url does not
// exist";
// $kksurls->url2depart[0]->kktest[0]->statuts_no = array();
// $kksurls->url2depart[0]->kktest[0]->statuts_no[0] = new stdClass();
// $kksurls->url2depart[0]->kktest[0]->statuts_no[0]->code = "404";
// $kksurls->url2depart[0]->kktest[0]->statuts_no[0]->titre = new stdClass();
// $kksurls->url2depart[0]->kktest[0]->statuts_no[0]->titre->fr = "l'url
// n'existe pas";
// $kksurls->url2depart[0]->kktest[0]->statuts_no[0]->titre->usa = "Url does not
// exist";
// $kksurls->url2depart[0]->kktest[0]->statuts_no[1] = new stdClass();
// $kksurls->url2depart[0]->kktest[0]->statuts_no[1]->code = "-1";
// $kksurls->url2depart[0]->kktest[0]->statuts_no[1]->titre = new stdClass();
// $kksurls->url2depart[0]->kktest[0]->statuts_no[1]->titre->fr = "erreur php :
// la requete ne peut pas joindre / initialiser l'url";
// $kksurls->url2depart[0]->kktest[0]->statuts_no[1]->titre->usa = "Error in the
// processing of the request to intialize/join the url";

// $kkstidy->txt2xhtml[0]->kktest[0]->code_validite[0]->titre->fr = array();
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [0]->titre->fr [0] =
// "erreur inconnue";
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [0]->titre->usa [0] =
// "unknown error";
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [1] = new stdClass ();
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [1]->code = "-1";
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [1]->titre = new
// stdClass ();
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [1]->titre->fr =
// "Erreur de variable vide ou nulle ou pas du bon type";
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [1]->titre->usa =
// "Error of variable empty or null or not of the right type";
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [2] = new stdClass ();
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [2]->code = "0";
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [2]->titre = new
// stdClass ();
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [2]->titre->fr = "Ok";
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [2]->titre->usa = "Ok";
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [3] = new stdClass ();
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [3]->code = "1";
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [3]->titre = new
// stdClass ();
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [3]->titre->fr = "Ok
// avec consolidation";
// // $kkstidy->txt2xhtml [0]->kktest [0]->code_validite [3]->titre->usa = "Ok
// with consolidation";

// // $kkstidy->txt2xhtml [1] = new stdClass ();
// // $kkstidy->txt2xhtml [1]->titre = new stdClass ();
// // $kkstidy->txt2xhtml [1]->titre->fr = "Le tidy convertit du code html4 non
// conforme en code xhtml, en retirant toute trace de tags casses";
// // $kkstidy->txt2xhtml [1]->titre->usa = "The tidy converts non-conforming
// html4 code to xhtml code, by deleting the break tags";
// // $kkstidy->txt2xhtml [1]->notes = array ();
// // $kkstidy->txt2xhtml [1]->notes [0] = "0";
// // $kkstidy->txt2xhtml [1]->notes [1] = "1";
// // $kkstidy->txt2xhtml [1]->kktest = new stdClass ();
// // $kkstidy->txt2xhtml [1]->kktest = array ();
// // $kkstidy->txt2xhtml [1]->kktest [0] = new stdClass ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->source = "<span id='koinkoin'
// class='koinkoin'>KOINKOIN</span></div>";
// // $kkstidy->txt2xhtml [1]->kktest [0]->resultat = "<span id='koinkoin'
// class='koinkoin'>KOINKOIN</span>";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite = array ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [0] = new stdClass ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [0]->code = "-2";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [0]->titre = new
// stdClass ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [0]->titre->fr = array
// ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [0]->titre->fr [0] =
// "erreur inconnue";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [0]->titre->usa [0] =
// "unknown error";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [1] = new stdClass ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [1]->code = "-1";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [1]->titre = new
// stdClass ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [1]->titre->fr =
// "Erreur de variable vide ou nulle ou pas du bon type";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [1]->titre->usa =
// "Error of variable empty or null or not of the right type";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [2] = new stdClass ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [2]->code = "0";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [2]->titre = new
// stdClass ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [2]->titre->fr = "Ok";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [2]->titre->usa = "Ok";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [3] = new stdClass ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [3]->code = "1";
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [3]->titre = new
// stdClass ();
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [3]->titre->fr = "Ok
// avec consolidation"; // KKSCRAP #107
// // $kkstidy->txt2xhtml [1]->kktest [0]->code_validite [3]->titre->usa = "Ok
// with consolidation";

// // $kkstidy->txt2texte [0] = new stdClass ();
// // $kkstidy->txt2texte [0]->titre = new stdClass ();
// // $kkstidy->txt2texte [0]->titre->fr = "Le tidy nettoie le texte et enleve
// toute trace de tag html";
// // $kkstidy->txt2texte [0]->titre->usa = "The tidy cleans the text and
// removes any trace of html tag";
// // $kkstidy->txt2texte [0]->notes = array ();
// // $kkstidy->txt2texte [0]->notes [0] = "-1"; // KKSCRAP #84
// // $kkstidy->txt2texte [0]->kktest = new stdClass ();
// // $kkstidy->txt2texte [0]->kktest = array ();
// // $kkstidy->txt2texte [0]->kktest [0] = new stdClass ();
// // $kkstidy->txt2texte [0]->kktest [0]->source = "<span id='koinkoin'
// class='koinkoin'>KOINKOIN</span></div>";
// // $kkstidy->txt2texte [0]->kktest [0]->resultat = "KOINKOIN";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite = array ();
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [0] = new stdClass ();
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [0]->code = "-2";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [0]->titre = new
// stdClass ();
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [0]->titre->fr = array
// ();
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [0]->titre->fr [0] =
// "erreur inconnue";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [0]->titre->usa [0] =
// "unknown error";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [1] = new stdClass ();
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [1]->code = "-1";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [1]->titre = new
// stdClass ();
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [1]->titre->fr =
// "Erreur de variable vide ou nulle ou pas du bon type";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [1]->titre->usa =
// "Error of variable empty or null or not of the right type";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [2] = new stdClass ();
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [2]->code = "0";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [2]->titre = new
// stdClass ();
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [2]->titre->fr = "Ok";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [2]->titre->usa = "Ok";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [3] = new stdClass ();
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [3]->code = "1";
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [3]->titre = new
// stdClass ();
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [3]->titre->fr = "Ok
// avec consolidation"; // KKSCRAP #107
// // $kkstidy->txt2texte [0]->kktest [0]->code_validite [3]->titre->usa = "Ok
// with consolidation";

// // $kkstidy->file2texte = array ();
// // $kkstidy->url2texte = array ();
// // $kkstidy->url2path = array ();

// // ?>