
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Framastart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Framasoft">

    <!-- Le styles -->
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="./bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./bootstrap/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" media="all">
		.thumbnail {
			border: none !important;
		}

		.hero-unit {
			background-color: #DDF;
		}

		#listesofts .span12 {margin-top:3em;}
		#listesofts .fonction {font-weight: bold;}
		#listesofts .description {margin-bottom:1em;}
		#listesofts .endcat { clear:both; margin-bottom:6em;}

	</style>


  </head>

  <body>
	<a name="top"></a>

 	   <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">

          <a class="brand" href="#top">Framastart</a>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li><a href="#about" data-toggle="modal" >À propos</a></li>

            </ul>

			<ul class="nav">

	              <li><a href="#internet"><i class="icon-globe"></i> Internet</a></li>
	              <li><a href="#bureautique"><i class="icon-align-left"></i> Bureautique</a></li>
	              <li><a href="#graphisme"><i class="icon-picture"></i> Graphisme</a></li>
	              <li><a href="#sonvideo"><i class="icon-film"></i> Son et vidéo</a></li>
	              <li><a href="#utilitaires"><i class="icon-wrench"></i> Utilitaires</a></li>
	              <li><a href="#education"><i class="icon-pencil"></i> Éducation supérieure</a></li>
				  <li><a href="#oslibre"><i class="icon-pencil"></i> Passez au libre !</a></li>
			</ul>

          </div>
        </div>
      </div>
    </div>


    <div class="container">
     	<div style="float:right;"><a href="http://unpidf.univ-paris1.fr/"><img src="logos/logo_UNR.jpg" alt="UNR Paris Île-de-France"/></a></div>
      <div class="hero-unit">

        <h1>Logiciels libres</h1>
        <p>Découvrez les nombreux avantages des logiciels libres, ainsi que les logiciels phares pour vos usages les plus courants.</p>
        <p style="font-size: 90%; color: #666">Ce site a été conçu pour les étudiants et personnels des Universités d'Île-de-France, en partenariat avec <a href="#about" data-toggle="modal" >Framasoft</a>.</p>
      </div>

      <div class="row">
        <div class="span4">
          <h2> Qu'est-ce qu'un logiciel libre ?</h2>
           <p>Un logiciel est dit "libre" lorsqu'il vous permet d'étudier son fonctionnement, vous autorise à apporter des améliorations, et encourage sa diffusion par le partage des copies.</p>
          <p><a class="btn" data-toggle="modal" href="#definition" >En savoir plus &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Avantages du "libre"</h2>
           <p>Fiabilité, sécurité, pérennité, indépendance, respect des standards et - souvent - gratuité. Découvrez les nombreux avantages du logiciel libre.</p>
          <p><a class="btn" data-toggle="modal" href="#avantages">En savoir plus &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Pour aller plus loin</h2>
          <p>La sélection ci-dessous ne représente qu'une infime partie des logiciels libres existants. De plus l'univers du "libre" ne s'arrête pas au seul domaine logiciel.</p>
          <p><a class="btn" data-toggle="modal" href="#libre">En savoir plus &raquo;</a></p>
        </div>
      </div>

	<hr/>

	<div class="alert alert-success"><strong>Astuce Windows : </strong> vous pouvez aussi utiliser notre service <em><a href="http://framapack.org">Framapack</a></em> afin de télécharger plusieurs de ces applications facilement en une seule fois, plutôt que de passer par chaque site individuellement.</div>
		<a name="internet"></a>
	<div id="listesofts">


		<h2>Internet</h2>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/firefox_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Firefox</h3>
			    <div class="fonction">Navigateur web</div>
			    <div class="description">Rapide, sûr, fiable, extensible... Firefox est tout simplement le meilleur navigateur libre.</div>
			    <div class="complements">
			    	<a class="btn btn-success btn-large" href="http://www.mozilla.org/fr/firefox/new/">Site officiel</a>
			    </div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/thunderbird_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Thunderbird</h3>
			    <div class="fonction">Client mail</div>
			    <div class="description">Le client mail libre par excellence. Thunderbird est une application de messagerie facile à configurer et à personnaliser.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.mozilla.org/fr/thunderbird/">Site officiel</a></div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/pidgin_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Pidgin</h3>
			    <div class="fonction">Messagerie instantanée</div>
			    <div class="description">Messagerie instantanée (tchat) multiprotocole (compatible MSN, Yahoo!, Google Talk, IRC, etc)</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.pidgin.im/">Site officiel</a>
			    	<span class="alert alert-info"><strong>Utilisateurs Mac.</strong> Alternative recommandée : <a href="http://adium.im/">Adium</a></span>
			    </div>
			  </div>
		</div>

		<div class="endcat"><a name="bureautique">&nbsp;</a></div>
		<h2>Bureautique</h2>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/libreoffice_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>LibreOffice</h3>
			    <div class="fonction">Suite Bureautique</div>
			    <div class="description">La suite bureautique qui succède à OpenOffice.org. Traitement de texte, tableur, création de diaporama, etc. : profitez d'une suite complète en un seul logiciel.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://fr.libreoffice.org/">Site officiel</a></div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/scribus_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Scribus</h3>
			    <div class="fonction">Publication Assistée par Ordinateur</div>
			    <div class="description">Logiciel de P.A.O. avancé, Scribus est idéal pour réaliser un journal ou une plaquette d'informations.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.scribus.net/canvas/Scribus">Site officiel</a></div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/sumatrapdf_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>SumatraPDF</h3>
			    <div class="fonction">Lecteur PDF</div>
			    <div class="description">Visualisez rapidement vos fichiers PDF avec ce lecteur PDF très léger et réactif.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://blog.kowalczyk.info/software/sumatrapdf/free-pdf-reader.html">Site officiel</a>
			    	<span class="alert alert-info"><strong>Utilisateurs Mac.</strong> Alternative recommandée : <a href="http://okular.kde.org/">Okular</a> ou <a href="http://skim-app.sourceforge.net/">Skim</a></span>

			    </div>
			  </div>
		</div>

		<div class="endcat"><a name="graphisme">&nbsp;</a></div>
		<h2>Graphisme</h2>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/Gimp.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Gimp</h3>
			    <div class="fonction">Editeur d'images (bitmap)</div>
			    <div class="description">Le roi des éditeurs d’images du monde du Libre. Retouchez facilement vos photos, faites vos propres montages, etc.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.gimp.org/">Site officiel</a>
			    	<span class="alert alert-info">Vous pouvez aussi utiliser <a href="http://pinta-project.com/">Pinta</a>, beaucoup plus limité, mais plus simple à prendre en main.</span>
			    </div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/inkscape_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Inkscape</h3>
			    <div class="fonction">Editeur d'images (vectorielles)</div>
			    <div class="description">Inkscape est l'outil rêvé pour créer vos logos, bandes dessinées, plans, etc.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://inkscape.org/?lang=fr">Site officiel</a></div>
			  </div>
		</div>

		<div class="endcat"><a name="sonvideo">&nbsp;</a></div>
		<h2>Son et vidéo</h2>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/vlc_icon.gif" alt="">
			  </div>
			  <div class="span10">
			  	<h3>VLC</h3>
			    <div class="fonction">Lecteur audio et vidéo</div>
			    <div class="description">Le 4x4 des lecteurs vidéos. VLC peut lire la quasi-totalité des formats vidéo, sait lire de nombreux formats de sous-titre, etc.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.videolan.org/vlc/">Site officiel</a></div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/audacity_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Audacity</h3>
			    <div class="fonction">Editeur de fichiers son</div>
			    <div class="description">La boîte à outil sonore. Avec Audacity, vous pouvez bien entendu vous enregistrer, mais vous pouvez surtout retoucher, découper, manipuler vos fichiers audio.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://audacity.sourceforge.net/?lang=fr">Site officiel</a></div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/nightingale_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Nightingale</h3>
			    <div class="fonction">Lecteur audio</div>
			    <div class="description">Nightingale est un logiciel de gestion de bibliothèque musicale.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://getnightingale.com/">Site officiel</a></div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/avidemux_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Avidemux</h3>
			    <div class="fonction">Montage et conversion de vidéos</div>
			    <div class="description">Coupez, montez et remontez vos vidéos avec Avidemux. Puis convertissez-les dans le format de votre choix.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://fixounet.free.fr/avidemux/">Site officiel</a></div>
			  </div>
		</div>


		<div class="endcat"><a name="utilitaires">&nbsp;</a></div>
		<h2>Utilitaires</h2>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/peazip_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Peazip</h3>
			    <div class="fonction">Compression et décompression de fichiers</div>
			    <div class="description">Compressez vos fichiers et dossiers afin qu'ils occupent moins d'espace. Peazip sait bien évidemment extraire un grand nombre de fichiers compressés (ZIP, TAR.GZ, ACE, ARJ, CAB, DMG, ISO, LHA, RAR, etc.)</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://peazip.sourceforge.net/">Site officiel</a>
			    	<span class="alert alert-success"><strong>Astuce : </strong>vous pouvez télécharger <a href="http://sourceforge.net/projects/peazip/files/4.6.1/peazip-plain-4.6.1.WINDOWS.exe/download">la version sans publicité</a>.</span>
			    	<span class="alert alert-info"><strong>Utilisateurs Mac.</strong> Alternative recommandée : <a href="http://www.kekaosx.com/fr/">Keka</a></span>

			    </div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/notepadplusplus_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Notepad++</h3>
			    <div class="fonction">Editeur de texte</div>
			    <div class="description">Un éditeur de texte léger mais très puissant pouvant aussi servir comme environnement de développement (C, C++, HTML, PHP, JS, etc)</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://notepad-plus-plus.org/fr/">Site officiel</a>
			    	<span class="alert alert-info"><strong>Utilisateurs Mac.</strong> Alternative recommandée : <a href="http://projects.gnome.org/gedit/">gEdit</a>.</span>
			    </div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/ccPDFconverter_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>CC PDF Converter</h3>
			    <div class="fonction">Création de PDF</div>
			    <div class="description">Transformez n'importe quel document en fichier PDF. CC PDF Converter ajoute une imprimante virtuelle à votre système Windows. Tout ce que vous y "imprimerez" sortira sous la forme d'un document PDF. Il permet également d'ajouter une licence <a href="http://fr.wikipedia.org/wiki/Creative_Commons">Creative Commons</a> à votre document.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.cogniview.com/cc-free-pdf-converter/">Site officiel</a>
			    	<span class="alert alert-info"><strong>Utilisateurs Mac.</strong> Pas d'alternative grand public dans le monde libre, malheureusement.</span>
			    </div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/infrarecorder_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>InfraRecorder</h3>
			    <div class="fonction">Gravure de CD & DVD</div>
			    <div class="description">Gravez simplement et rapidement vos fichiers. InfraRecorder permet aussi la duplication/copie de CD ou DVD.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://infrarecorder.org/">Site officiel</a>
			    	<span class="alert alert-info"><strong>Utilisateurs Mac.</strong> Alternative recommandée : <a href="http://burn-osx.sourceforge.net/Pages/English/home.html">Burn</a></span>
			    </div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/filezilla_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Filezilla</h3>
			    <div class="fonction">Client FTP</div>
			    <div class="description">Envoyez et récupérez des fichiers sur des machines distantes.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://filezilla-project.org/">Site officiel</a></div>
			  </div>
		</div>

		<div class="endcat"><a name="education">&nbsp;</a></div>
		<h2>Éducation supérieure</h2>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/r_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>R</h3>
			    <div class="fonction">Outil d’analyse statistique et graphique avancé.</div>
			    <div class="description"></div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.r-project.org/">Site officiel</a>
			    	<span class="alert alert-success"><strong>Astuce : </strong>vous pouvez utiliser <a href="http://rstudio.org/">RStudio</a> pour une plus grande facilité d'utilisation.</span>
			    </div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/qgis_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>QGIS</h3>
			    <div class="fonction">Système d'information géographique</div>
			    <div class="description"></div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.qgis.org/">Site officiel</a></div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/zotero_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Zotero</h3>
			    <div class="fonction">Gestion bibliographique</div>
			    <div class="description"></div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.zotero.org/">Site officiel</a>
			    	<span class="alert alert-success"><strong>Astuce : </strong>Zotero existe aussi en tant qu'<a href="https://www.zotero.org/download/" alt="extension Zotero pour navigateurs">extension pour navigateurs</a>.</span>
			    </div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/graphviz_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>Graphviz</h3>
			    <div class="fonction">Logiciel de visualisation de graphes</div>
			    <div class="description"></div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.graphviz.org/">Site officiel</a></div>
			  </div>
		</div>

		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/scilab_logo.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>SciLab</h3>
			    <div class="fonction">Calcul numérique avancé</div>
			    <div class="description">Scilab est un logiciel open source gratuit de calcul numérique qui fournit un puissant environnement de développement pour les applications scientifiques et l’ingénierie.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.scilab.org/fr/">Site officiel</a></div>
			  </div>
		</div>


		<div class="span12">
			<div class="thumbnails span2">
			      <img src="./logos/latex_icon.png" alt="">
			  </div>
			  <div class="span10">
			  	<h3>LaTeX</h3>
			    <div class="fonction">Composition de documents</div>
			    <div class="description">LaTeX est un langage qui permet d'obtenir des documents complexes de grande qualité (formules mathématiques, respect des règles typographiques, gestion des références bibliographiques, etc.). Idéal pour la rédaction d'une thèse.</div>
			    <div class="complements"><a class="btn btn-success btn-large" href="http://www.latex-project.org/">Site officiel</a>
			    	<span class="alert alert-success"><strong>Astuce : </strong>Vous pouvez consulter l'ouvrage libre <a href="https://framabook.org/tout-sur-latex/" alt="Framabook LaTeX">"Tout (...) sur LaTeX"</a> dans la collection Framabook.</span>

			    </div>
			  </div>
		</div>

		<div class="endcat">&nbsp;</div>
	</div> <!-- /listesoft -->

	<hr />
	<a name="oslibre"></a>
	<div class="oslibre well">
		<h2>Et si vous passiez à GNU/Linux ?</h2>

			<p>Le mot Linux vous évoque peut-être des programmeurs barbus tapant du code obscur sur un écran noir. Bonne nouvelle ! Les choses ont changé.</p>


			<h3>Le principe</h3>

			<p>

			Linux est un <em>système d'exploitation</em>, un logiciel important qui contrôle un ordinateur. Il est semblable à Microsoft Windows, mais il est entièrement libre. Le vrai nom est <em>GNU/Linux</em>, mais "Linux" convient aussi.</p>

			<p>Linux n'est pas le produit d'une seule entreprise, mais plutôt de groupes d'entreprises et de particuliers qui collaborent ensemble. En fait, le système d'exploitation GNU/Linux est en quelque sorte une version générique, qui peut être déclinée en différents produits. Ces produits sont appellés <strong>des distributions</strong>.</p>

			<p>Ces distributions changent entièrement l'aspect et la fonction de Linux. Elles s'étendent du système complet (développé par des entreprises), pour des ordinateurs personnels ou des serveurs, à des systèmes légers (souvent développés par des volontaires) qui s'installent sur une clé mémoire USB ou sur de vieux ordinateurs.<br>
			Une distribution performante et conviviale pour passer à Linux est <a href="http://ubuntu-fr.org/">Ubuntu</a>.</p>

			<h3>Utiliser Linux</h3>


			Linux n'est pas plus difficile à utiliser que Windows, et a beaucoup plus de possibilités. Il ne faut qu'une dizaine de minutes pour se familiariser à une distribution comme <a href="http://www.ubuntu-fr.org/" title="Ubuntu, La distribution GNU/Linux la plus facile d'accès">Ubuntu</a> ou <a href="http://www.fedora-fr.org/" title="Fedora, une distribution GNU/Linux un peu plus avancée">Fedora</a>, qui comportent beaucoup de programmes pré-installés.</p>

			<p>Si vous avez besoin de logiciels libres et gratuits pour éditer du texte, tableur, internet, réseau ou dessin et graphiques, tout y est. Vous en voulez plus ? Linux est à la hauteur. Il existe des centaines d'applications que vous pouvez installer et désinstaller de manière facile, sûre et ordonnée.</p>

			<p>Cependant, il ne faut pas penser que Linux est un clone de Windows. Pour savoir à quoi vous attendre, lisez la section <a href="http://www.getgnulinux.org/fr/switch_to_linux/">Migrer sous Linux</a> du site GetGnuLinux.org.</p>

<p><small><em>Texte issu du site <a href="http://www.getgnulinux.org/fr/switch_to_linux/">site getgnulinux.org</a>, licence CC-BY-SA version 2.0 ou ultérieure</em></small></p>

		<h2>Obtenir de l'aide</h2>

			<p>Le logiciel libre repose avant tout sur le partage d'information et l'entraide entre utilisateurs.</p>


			<h3>Acheter un ordinateur.</h3>

			<p>Vous n'êtes pas obligé d'acheter un ordinateur (fixe ou portable) avec Microsoft Windows ou Mac OS de préinstallés si vous n'en n'avez pas l'utilité. Certains revendeurs proposent du matériel sans système d'exploitation, ou avec GNU/Linux préinstallé. Voir par exemple le site <a href="http://bons-vendeurs-ordinateurs.info/">http://bons-vendeurs-ordinateurs.info/</a></p>

			<h3>Support</h3>
			<p>Vous pourrez facilement trouver de l'aide pour les différents logiciels cités ci-dessus. Par exemple sur les forums des sites des logiciels en question, ou sur le <a href="http://forum.framasoft.org/viewforum.php?f=17">forum de Framasoft</a>.</p>
			<p> Par ailleurs, si vous avez besoin d'aide à l'installation de GNU/Linux ou dans la prise en main des logiciels, sachez qu'il existe de nombreux <a href="http://aful.org/gul/" alt="liste des GUL">Groupes d'Utilisateurs de Logiciels Libres</a> (GULL) : .</p>
			<p>Enfin, sachez aussi que certains de ces GULL organisent organisent régulièrement des <em>install parties</em> ou des rendez-vous réguliers d'entraide où les utilisateurs les moins aguerris peuvent échanger <em>de visu</em> avec des utilisateurs plus avancés. Par exemple, vous pouvez participer aux <a href="http://ubuntu-party.org/" title="Ubuntu parties">Ubuntu parties</a> de l'association Ubuntu France, ou aux <a href="http://www.parinux.org/" title="Site Parinux">rencontres organisées par l'association Parinux</a> (les premiers samedis et troisièmes jeudis de chaque mois).</p>
	</div>






<!-- ---------------------- Fenêtres modales ------------------------------------------ -->

    <div class="modal hide" id="definition">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal">×</button>
	    <h3>Qu'est-ce qu'un logiciel libre ?</h3>
	  </div>
	  <div class="modal-body">
		<p>Imaginez que vous vous trouviez dans un restaurant et que vous mangiez un excellent repas. Peut-être aurez vous l'envie de le cuisiner le lendemain chez vous pour vos amis ?</p>
		<p>C'est impossible, car vous n'avez pas la recette du plat. Vous pouvez toujours le manger dans le restaurant, mais même si vous connaissez le goût, vous ne savez pas comment le reproduire.</p>
		<p>En informatique, c'est la même chose avec un logiciel. La plupart des logiciels sont distribués sans leur recette, et il est interdit d'essayer de comprendre leur fonctionnement (on parle dans ce cas d'un logiciel propriétaire). Il est interdit de les partager avec vos amis, et il est interdit d'essayer de les modifier pour les adapter à vos besoins.</p>
		<p>En revanche, un <i>logiciel libre</i> vous garantit plusieurs libertés&nbsp;:</p>
		<ul>
			<li>la liberté d'utiliser le logiciel, pour quelque usage que ce soit (liberté 0)</li>
			<li>la liberté d'étudier le fonctionnement du programme, et de l'adapter à vos propres besoins (liberté 1). L'accès au code source est une condition pour tout ceci  </li>
			<li>la liberté de redistribuer des copies de façon à pouvoir aider votre voisin (liberté 2)  </li>
			<li>la liberté d'améliorer le programme, et de diffuser vos améliorations au public, de façon à ce que l'ensemble de la communauté en tire avantage (liberté 3). L'accès au code source est une condition pour tout ceci  </li>
		</ul>
		<p>Avec un logiciel libre, vous avez le plat, la recette, le droit de redistribuer (ou de vendre) le plat, la recette, et même de la modifier.</p>
	    <p><small><em>Texte issu du <a href="http://www.april.org/articles/intro/ll.html">site de l'April</a>, licence LAL version 1.3 ou ultérieure, CC-BY-SA version 2.0 ou ultérieure et GNU FDL version 1.3 ou ultérieure.</em></small></p>
	  </div>
	  <div class="modal-footer">
	    <a href="http://fr.wikipedia.org/wiki/Logiciel_libre" class="btn btn-primary">Définition sur Wikipédia</a>
	    <a href="#" class="btn" data-dismiss="modal">Fermer</a>
	  </div>
	</div>

    <div class="modal hide" id="avantages">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal">×</button>
	    <h3>Avantages du logiciel libre</h3>
	  </div>
	  <div class="modal-body">
	  	<p> Les logiciels libres, par le fait qu'ils mettent à disposition leur code source (= leur "recette de cuisine"), peuvent avoir de nombreux avantages :
		<ul>

			<li><strong>Sécurité</strong> : le code pouvant être relu par tous, les failles peuvent être découvertes, et corrigées, plus vite.</li>
			<li><strong>Interopérabilité</strong> : les logiciels libres s'appuient sur des standards ouverts, ce qui permet par exemple à un logiciel de pouvoir facilement ouvrir un fichier d'un autre logiciel, ou d'enregistrer vos données dans différents formats.</li>
			<li><strong>Pérennité</strong> : la "recette" du logiciel étant publique, il est bien plus simple de pouvoir ouvrir à nouveau vos fichiers dans plusieurs années, ou de faire une nouvelle version du logiciel fonctionnanat sur de nouvelles plateformes.</li>
			<li><strong>Indépendance</strong> : les logiciels libres ne sont pas dépendants d'un éditeur (qui peut faire faillite demain).</li>
			<li><strong>Libre concurrence</strong> : grâce aux libertés de modifier et de redistribuer les logiciels sous licences libres, le logiciel arrive rarement dans une "impasse" technique : si un développeur à une meilleure idée, il peut la mettre en oeuvre.</li>
			<li><strong>Innovation</strong> : chacun pouvant participer à leur développement, les innovations sont rapides (avec parfois, il est vrai, un trop grand foisonnement de fonctionnalités)</li>
			<li><strong>Transparence</strong> : de par la publication de leur code source, les logiciels libres peuvent inspirer plus confiance que des logiciels dont l'utilisateur ne peut savoir s'il n'a pas de fonctionnalités cachées.</li>
			<li><strong>Support</strong> : le support est souvent fait par la communauté (voir le développeur lui-même), ce qui peut permettre (pas toujours, il est vrai) une bien plus grande réactivité.</li>
			<li><strong>Du sur mesure</strong> : le logiciel libre autorise explicitement les adaptations pour votre besoin, quel qu'il soit, sans devoir dépendre du bon vouloir d'un éditeur. </li>
			<li><strong>Prix</strong> : les logiciels libres sont - dans leur immense majorité - gratuits. Evidemment, il faut prendre en compte d'éventuels coûts de formation. Mais au moins, vous n'avez pas à racheter systématiquement le logiciel lors de la sortie de nouvelles versions où lorsque vous changez de machine.</li>
			<li><strong>Liberté</strong> : sans doute l'avantage principal, les logiciels libres ne vous contraignent pas. Vous pouvez les utiliser sans conditions, les modifier ou les redistribuer comme bon vous semble, tant que vous respectez les licences.</li>
		</ul>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Fermer</a>
	  </div>
	</div>

    <div class="modal hide" id="framasoft">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal">×</button>
	    <h3>Le réseau Framasoft [TODO]</h3>
	  </div>
	  <div class="modal-body">
	  	<p>Ce site a été réalisé en destination pour les étudiants et personnels des Universités d'Île-de-France.</p>
	  	<p>Cette sélection de logiciels libres vous est proposée par Framasoft, un réseau de sites web collaboratifs qui vise à faire découvrir les multiples facettes du monde du "libre" au plus large public.</p>
Issu du monde éducatif, <strong>Framasoft</strong> est un réseau de sites web collaboratifs à géométrie variable dont le dénominateur commun est le logiciel libre, sa culture et son état d'esprit. Il vise à diffuser le logiciel libre et à le faire connaître auprès du plus large public.</p>
<p>Lieu d'orientation, d'informations, d'actualités, d'échanges et de projets, Framasoft, de par la diversité et le dynamisme de son réseau, est aujourd'hui l'une des principales portes d'entrée francophones du logiciel libre. Sa communauté d'utilisateurs est créatrice de ressources et apporte assistance et conseil à ceux qui découvrent et font leur premiers pas avec les logiciels libres. Elle accompagne ceux qui désirent remplacer leurs <a href="/wiki/Logiciel_propri%C3%A9taire" title="Logiciel propriétaire">logiciels propriétaires</a> par des logiciels libres en attachant une attention toute particulière au processus de migration du système d'exploitation Microsoft Windows vers GNU/Linux.</p>
<p>Tout ce qui est produit est placé sous licence libre, favorisant ainsi la participation et garantissant que le travail effectué demeurera sans appropriation au bénéfice de tous.</p>
</p>
	</div>
	  <div class="modal-footer">
	   	<a href="#" class="btn btn-primary">Site Framasoft</a>
	    <a href="#" class="btn" data-dismiss="modal">Fermer</a>
	  </div>
	</div>



    <div class="modal hide fade" id="about">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal">×</button>
	    <h3>A propos</h3>
	  </div>
	  <div class="modal-body">
	  	<p>Cette sélection de logiciels libres vous est proposée, sur l'impulsion de <a href="http://unpidf.univ-paris1.fr/">l'Université Numérique Régionale Paris Île-de-France</a> en partenariat avec l'association <a href="http://framasoft.org">Framasoft</a>.</p>
Issu du monde éducatif, <strong>Framasoft</strong> est un réseau de sites web collaboratifs à géométrie variable dont le dénominateur commun est le logiciel libre, sa culture et son état d'esprit. Il vise à diffuser le logiciel libre et à le faire connaître auprès du plus large public.</p>
<p>Lieu d'orientation, d'informations, d'actualités, d'échanges et de projets, Framasoft, de par la diversité et le dynamisme de son réseau, est aujourd'hui l'une des principales portes d'entrée francophones du logiciel libre. Sa communauté d'utilisateurs est créatrice de ressources et apporte assistance et conseil à ceux qui découvrent et font leur premiers pas avec les logiciels libres. Elle accompagne ceux qui désirent remplacer leurs logiciels propriétaires par des logiciels libres en attachant une attention toute particulière au processus de migration du système d'exploitation Microsoft Windows vers GNU/Linux.</p>
<p>Tout ce qui est produit est placé sous licence libre, favorisant ainsi la participation et garantissant que le travail effectué demeurera sans appropriation au bénéfice de tous.</p>
<p><small><em>Texte issu de  <a href="http://fr.wikipedia.org/wiki/Framasoft">l'article Framasoft de Wikipédia</a>,  sous licence Creative Commons paternité partage à l’identique (CC BY-SA)</em></small></p>
	</div>
	  <div class="modal-footer">
	   	<a href="http://framasoft.org" class="btn btn-primary">Site Framasoft</a>
	   	<a href="http://fr.wikipedia.org/wiki/Framasoft" class="btn btn-primary">Framasoft sur Wikipédia</a>
	    <a href="#" class="btn" data-dismiss="modal">Fermer</a>
	  </div>
	</div>



    <div class="modal hide fade" id="libre">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal">×</button>
	    <h3>Pour aller plus loin...</h3>
	  </div>
	  <div class="modal-body">
	  	<p>Il existe plusieurs milliers de logiciels libres, couvrant quasiment tous les usages. Vous pouvez en trouver des sélections plus complètes que sur ce site, par exemple sur :
	  		<ul>
	  			<li>L'annuaire Framasoft (plutôt orienté grand public)</li>
	  			<li>Le site PLUME (plutôt orienté universités et recherche)</li>
	  			<li>Les forges logicielles Sourceforge ou GitHub (en anglais)</li>
	  		</ul>
	  	</p>

	  	<p>Le mouvement du logiciel libre est constitué de nombreuses institutions (essentiellement des fondations, associations ou groupement d'entreprises), chacune avec ses spécificités. Il est parfois difficile de s'y retrouver, c'est pourquoi nous vous en communiquons une liste non-exhaustive :
	  		<ul>
	  			<li><a href="http://april.org" alt="site web">April</a> (promotion et défense du logiciel libre)</li>
	  			<li><a href="http://aful.org" alt="site web">AFUL</a> (association Française des utilisateurs de logiciels libres)</li>
	  			<li><a href="http://dogmazic.net" alt="site web">Dogmazic</a> (promotion de la musique libre)</li>
	  			<li><a href="http://framablog.org" alt="site web">Framablog</a> (site d'information sur le mouvement du logiciel libre, et ce qu'il change dans la société actuelle)</li>
	  			<li><a href="http://fsf.org" alt="site web">FSF</a> (Free Software Foundation, en anglais)</li>
	  			<li><a href="http://formats-ouverts.org" alt="site web">Formats-ouverts</a> (site d'informations sur la problématique des formats ouverts)</li>
	  			<li><a href="http://linuxfr.org" alt="site web">Linuxfr</a> (site d'information - parfois technique - autour de GNU/Linux et du logiciel libre)</li>
	  			<li><a href="http://libreacces.org" alt="site web">Libre Accès</a> (promotion de la Culture libre)</li>
	  			<li><a href="http://laquadrature.net" alt="site web">La Quadrature du Net</a> (information et défense sur le sujet des libertés - numériques, mais pas seulement)</li>
	  			<li><a href="http://wikimedia.fr" alt="site web">Wikimédia France</a> (chapitre français de la Wikimédia Foundation, qui structure notamment le projet d'enclyclopédie Wikipédia)</li>
	  		</ul>
	  	</p>
	  	<p>Par ailleurs, il existe près d'une centaine de <a href="http://aful.org/gul/" alt="liste des GUL">"Groupes d'utilisateurs de Logiciels Libres"</a> (GULL), en France (métropole, DOM-TOM).</p>

	  	<p>Pour en apprendre plus sur ce mouvement social, et non seulement technique, vous pouvez vous référer au <a href="http://framabook.org/richard-stallman-et-la-revolution-du-logiciel-libre" alt="Framabook RMS">Framabook "Richard Stallman et la révolution du logiciel libre"</a>.<br />
	  		Vous pouvez aussi consulter les guides de l'April : <a href="http://www.april.org/Catalogue_Libre">26 logiciels libres à découvrir</a> et <a href="http://www.april.org/publication-du-guide-libre-association">"Guide Libre Association" </a>.
	  	</p>
	  	</p>
	</div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Fermer</a>
	  </div>
	</div>

	<div class="fade modal hide" id="Credits">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Crédits</h3>
		</div>
		<div class="modal-body">
		<p>Pour toute question concernant Framastart, vous pouvez envoyer utiliser le site <strong><a href="http://contact.framasoft.org">http://contact.framasoft.org</a></strong></p>
		<p>&nbsp;</p>
		<p>Framastart est un site web référençant les logiciels libres les plus courants.<br/>
		<p>Framastart est placé sous licence libre <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons BY-SA 3.0</a></p>
		<p>Framastart utilise le framework libre Boostrap ainsi que la librairie jQuery.</p>
				</div>
		<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Fermer</a>
		</div>
	</div>

	<div class="modal hide fade" id="Mentions">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Mentions légales</h3>
		</div>
		<div class="modal-body">


			<h2>Editeur</h2>
			<h3>Framasoft</h3>
			<p>Association loi 1901 déclarée en sous-préfecture d’Arles le 2
			décembre 2003 sous le n° 0132007842 </p>
			<p>N° Siret : 500 715 776 00018</p>
			<h3>Siège social</h3>
			<p>Association Framasoft<br />
			Pierre-Yves Gosset<br />
			c/o Locaux Motiv<br />
			10 bis, rue Jangot<br />
			69007 LYON</p>
			<p>Pour nous contacter : http://contact.framasoft.org</p>
			<h3>Directeur de la publication</h3>
			<p>Monsieur Christophe MASUTTI, Président</p>
			<h3>Hébergeur</h3>
			<p>OVH</p>
			<p>SAS au capital de 10 000 000 € RCS Roubaix – Tourcoing 424 761 419
			00045 </p>
			<p>Code APE 6202A - N° TVA : FR 22 424 761 419</p>
			<p>Siège social : 2 rue Kellermann 59100 Roubaix - France.</p>
			<h1>INFORMATIQUE ET LIBERTES</h1>
			<h2>Informations personnelles collectées</h2>
			<p>En France, les données personnelles sont notamment protégées par la
			loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004,
			l’article L. 226-13 du Code pénal et la Directive Européenne du 24
			octobre 1995.</p>
			<p>En tout état de cause Framasoft ne collecte des informations
			personnelles relatives à l’utilisateur (nom, adresse électronique,
			coordonnées téléphoniques) que pour le besoin des services proposés par
			les sites du réseau Framasoft, notamment pour l’inscription à des
			espaces de discussion par le biais de formulaires en ligne ou pour des
			traitements statistiques. L’utilisateur fournit ces informations en
			toute connaissance de cause, notamment lorsqu’il procède par lui-même à
			leur saisie. Il est alors précisé à l’utilisateur des sites du réseau
			Framasoft le caractère obligatoire ou non des informations qu’il serait
			amené à fournir.</p>
			<h2>Rectification des informations nominatives collectées</h2>
			<p>Conformément aux dispositions de l’article 34 de la loi n° 48-87 du
			6 janvier 1978, l’utilisateur dispose d’un droit de modification des
			données nominatives collectées le concernant. Pour ce faire,
			l’utilisateur envoie à Framasoft : </p>
			<p>° un courrier électronique en utilisant le formulaire de contact </p>
			<p>° un courrier à l’adresse du siège de l’association (indiquée
			ci-dessus) en indiquant son nom ou sa raison sociale, ses coordonnées
			physiques et/ou électroniques, ainsi que le cas échéant la référence
			dont il disposerait en tant qu’utilisateur du site Framasoft.</p>
			<p>La modification interviendra dans des délais raisonnables à compter
			de la réception de la demande de l’utilisateur.</p>
			<h1>LIMITATION DE RESPONSABILITE</h1>
			<p>Ce ste comporte des informations mises à disposition par des
			sociétés externes ou des liens hypertextes vers d’autres sites qui
			n’ont pas été développés par le Framasoft. Le contenu mis à disposition
			sur le Site est fourni à titre informatif. L’existence d’un lien de ce
			Site vers un autre site ne constitue pas une validation de ce site ou
			de son contenu. Il appartient à l’internaute d’utiliser ces
			informations avec discernement et esprit critique. La responsabilité de
			Framasoft ne saurait être engagée du fait aux informations, opinions et
			recommandations formulées par des tiers.</p>
			<p>Framasoft ne pourra être tenue responsable des dommages directs et
			indirects causés au matériel de l’utilisateur, lors de l’accès au site
			, et résultant soit de l’utilisation d’un matériel ne répondant pas aux
			spécifications techniques requises, soit de l’apparition d’un bug ou
			d’une incompatibilité.</p>
			<p>Framasoft ne pourra également être tenue responsable des dommages
			indirects (tels par exemple qu’une perte de marché ou perte d’une
			chance) consécutifs à l’utilisation du site.</p>
			<p>Des espaces interactifs (possibilité de poser des questions dans
			l’espace contact) sont à la disposition des utilisateurs sur le site
			Framasoft http://forum.framasoft.org. Framasoft se réserve le droit de
			supprimer, sans mise en demeure préalable, tout contenu déposé dans cet
			espace qui contreviendrait à la législation applicable en France, en
			particulier aux dispositions relatives à la protection des données. Le
			cas échéant, Framasoft se réserve également la possibilité de mettre en
			cause la responsabilité civile et/ou pénale de l’utilisateur, notamment
			en cas de message à caractère raciste, injurieux, diffamant, ou
			pornographique, quel que soit le support utilisé (texte, photographie…).</p>
			<h2>Limitations contractuelles sur les données techniques.</h2>
			<p>Framasoft ne pourra être tenue responsable de dommages matériels
			liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à
			accéder au site en utilisant un matériel récent, ne contenant pas de
			virus et avec un navigateur de dernière génération mis-à-jour</p>
			<h2>Propriété intellectuelle.</h2>
			<p>Les contenus sont publiés sous la responsabilité des utilisateurs.</p>




		</div>
		<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Fermer</a>
		</div>
	</div>


<!-- ---------------------- Fin Fenêtres modales ------------------------------------------ -->
      <hr>

      <footer>
		<p>Framastart est un service libre et gratuit proposé par l'association Framasoft. <a class="btn" data-toggle="modal" href="#Credits" >Contact &amp; Crédits</a> <a class="btn" data-toggle="modal" href="#Mentions" >A propos</a></p>
        <p>Copyleft Framasoft 2012 - Sauf mention contraire, les textes sont placés sous licence Creative Commons BY-SA. </p>
      </footer>

    </div> <!-- /container -->




    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./bootstrap/js/jquery.js"></script>
    <script src="./bootstrap/js/bootstrap-transition.js"></script>
    <script src="./bootstrap/js/bootstrap-alert.js"></script>
    <script src="./bootstrap/js/bootstrap-modal.js"></script>
    <script src="./bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="./bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="./bootstrap/js/bootstrap-tab.js"></script>
    <script src="./bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="./bootstrap/js/bootstrap-popover.js"></script>
    <script src="./bootstrap/js/bootstrap-button.js"></script>
    <script src="./bootstrap/js/bootstrap-collapse.js"></script>
    <script src="./bootstrap/js/bootstrap-carousel.js"></script>
    <script src="./bootstrap/js/bootstrap-typeahead.js"></script>
	<script src="./bootstrap/js/bootstrap-typeahead.js"></script>
	<script src="./js/jquery.localscroll-min.js"></script>
	<script src="./js/jquery.scrollTo-min.js"></script>

		<script type="text/javascript">

		$(document).ready(function() {
		  $.localScroll();
		});

	</script>
<script type="text/javascript">

/** Piwik **/
var _paq = _paq || [];
_paq.push(["trackPageView"]);
_paq.push(["enableLinkTracking"]);

(function() {
	  var u=(("https:" == document.location.protocol) ? "https" : "http") + "://stats.framasoft.org/";
	    _paq.push(["setTrackerUrl", u+"piwik.php"]);
	    _paq.push(["setSiteId", "23"]);
	      var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
	      g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
})();
/** Fin Piwik **/
</script>

  </body>
</html>
