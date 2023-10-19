<!doctype html>
<html>
  <head>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
  <link rel="stylesheet" href=".page-centree {.css">
    <style>
        .bouton {
            background-color: rgb(56, 37, 36);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .page-centree {
        width: 100%; 
        max-width: 1200px; 
        margin: 0 auto; 
        background-color: #c0c4c7; 
        padding: 20px; 
        }
        body {
        font-family: 'Open Sans', sans-serif;
        }
        h1 {
        text-align: center;
        }
    </style> 
      <title>Document</title>
  </head>
  <body>

    <div class="page-centree">
            <br></br>
            <h1 >CONTRAT DE PARTENARIAT COMMERCIAL</h1>
            <br></br><br></br>           
                Ce contrat est fait ce jour, le <?php echo $_POST['date1']?> en <?php echo $_POST['nombre1']?> copies originales, entre
                  
                <?php 
				for ($i = 0; $i < count($_POST['texte11']); $i++)
				{
					print($_POST['texte11'][$i]);
                    print(' ;  ');
				}
				
				?>    
                <br></br>                
                <h2>
                    1. NOM DU PARTENARIAT ET ACTIVITE
                </h2>
                <h3>
                    1.1 Nature des activit&eacute;s:
                </h3>
                Les Partenaires cit&eacute;s ci-dessus donnent leur accord d'&ecirc;tre consid&eacute;r&eacute;s comme des partenaires commerciaux pour les fins suivantes :
                <br></br>
                <?php echo $_POST['texte1']?>.
                <h3>
                    1.2 Nom:
                </h3>
                Les Partenaires cit&eacute;s ci-dessus donnent leur accord, pour que le patenariat commercial soit exerc&eacute; sous le nom de <?php echo $_POST['texte2']?>.
                <br></br>  
                    <h3>
                    1.3 Adresse officielle:
                </h3>
                Les Partenaires cit&eacute;s ci-dessus donnent leur accord pour que le si&egrave;ge du partenariat commercial soit [<?php echo $_POST['texte3']?>] [<?php echo $_POST['texte13']?>] [<?php echo $_POST['texte14']?>] [<?php echo $_POST['texte15']?>].
                    <br></br>
                <h2>
                    2. TERMES
                </h2>
                2.1 Le partenariat commence le <?php echo $_POST['date2']?> et continue juqu'&agrave; la fin de cet accord.
                <br></br>
                <h2>
                    3. CONTRIBUTION AU PATENARIAT
                </h2>
                
                3.1 La contribution de chaque partenaire au captital list&eacute;e ci-dessous se compose des &eacute;l&eacute;ments suivants:
                <br></br>
                <?php echo $_POST['texte10']?>.
                <h2>
                    4. REPARATION DES BENEFICES ET DES PERTES
                </h2>
                4.1 Les Partenaires se partageront les profits et les pertes de partenariat commercial de la mani&egrave;re suivante:
                <br></br>
                <?php echo $_POST['texte4']?>
                    <h2>
                    5. PARTENAIRES ADDITIONNELS
                </h2>
                5.1 Aucune personne ne peut &ecirc;tre ajout&eacute;e en tant que partenaire et aucune autre activit&eacute; ne peut &ecirc;tre men&eacute;e par le partenariat sans le consentement &eacute;crit de tous les partenaires.
                <h2>
                    
                    6. MODALITES BANCAIRES ET TERMES FINANCIERS
                </h2>
                6.1 Les Partenaires doivent avoir un compte bancaire au nom du partenariat sur lequel les ch&egrave;ques doivent &ecirc;tre sign&eacute; par au moins <?php echo $_POST['texte5']?> des Partenaires.
                <br></br>
                6.2 Les Partenaires doivent tenir une comptabilit&eacute; compl&egrave;te du partenariat et la rendre disponible &agrave; tous le Partenaires &agrave; tout moment.
                <br></br>
                <h2>
                    7. GESTION DES ACTIVITES DE PARTENARIAT
                </h2>
                7.1 Chaque partenaire peut prendre part dans la gestion du partenariat.
                <br></br>
                7.2 Tout d&eacute;saccord qui intervient dans l'exploitation du partenariat, sera r&eacute;gl&eacute; par lespartenaires d&eacute;tenant la majorit&eacute; des parts du partenariat.
                <br></br>
                <h2>
                    8. DEPART D'UN PARTENAIRE COMMERCIAL
                </h2>
                8.1 Si un partenaire se retire du partenariat commercial pour une raison quelconque, y compris le d&eacute;c&egrave;s, les autres partenaires peuvent continuer &agrave; exploiter le partenariat sous le m&ecirc;me nom.
                <br></br>
                8.2 Le partenaire qui se retire est tenu de donner un pr&eacute;avis &eacute;crit d'au moins soixante jours de son intention de se retirer et est tenu de vendre ses parts du partenariat commercial.
                <br></br>
                8.2 Le partenaire qui se retire est tenu de donner un pr&eacute;avis &eacute;crit d'au moins soixante jours de son intention de se retirer et est tenu de vendre ses parts du partenariat commercial.
                <br></br>
                8.3 Aucun partenaire ne doit c&eacute;der ses actions dans le partenariat commercial &agrave; une autre partie sans le consentement &eacute;crit des autres partenaires.
                <br></br>
                8.4 Le ou les partenaires restants paieront au partenaire qui se retire, ou au repr&eacute;sentant l&eacute;gal
                du partenaire d&eacute;c&eacute;d&eacute; ou handicap&eacute;, la valeur de ses parts dans le partenariat, ou (a) la somme
                de son capital, (b) des emprunts impay&eacute;s qui lui sont dus, (c) sa quote-part des b&eacute;n&eacute;fices nets
                cumul&eacute;s non distribu&eacute;s dans son compte, et (d) son int&eacute;r&ecirc;t dans toute plus-value
                pr&eacute;alablement convenue de la valeur du partenariat par rapport &agrave; sa valeur comptable.
                Aucune valeur de bonne volont&eacute; ne doit &ecirc;tre incluse dans la d&eacute;termination de la valeur des
                parts du partenaire.
                <br></br>
                <h2>
                    9. CLAUSE DE NON CONCURERENCE
                </h2>
                9.1 Un partenaire qui se retire du partenariat ne doit pas s'engager directement ou
                indirectement dans une entreprise qui est ou serait en concurrence avec la nature des activit&eacute;s
                actuelles ou futures du partenariat pendant <?php echo $_POST['texte6']?>.
                <h2>
                    10. MODIFICATION DE L'ACCORD DE PARTENARIAT
                </h2>
                10. 1 Ce contrat de partenariat commercial ne peut &ecirc;tre modifi&eacute; sans le consentement &eacute;crit de
                tous les partenaires.
                <h2>
                    11. DIVERS
                </h2>
                11.1 Si une disposition ou une partie d'une disposition de la pr&eacute;sente convention de
                partenariat commercial est non applicable pour une quelconque raison, elle sera dissoci&eacute;e
                sans affecter la validit&eacute; du reste de la convention.
                <br></br>
                11.2 Cet accord de partenariat commercial lie les partenaires commerciaux et pourra servir &agrave;
                leurs h&eacute;ritiers, ex&eacute;cuteurs testamentaires, administrateurs, repr&eacute;sentants personnels,
                successeurs et ayants droit respectifs.
                <h2>
                    12. JURIDICTION
                </h2>
                12.1 Le pr&eacute;sent contrat de partenariat commercial est r&eacute;gi par les lois de l'&eacute;tat de <?php echo $_POST['texte7']?>.
                <br></br><br></br><br></br><br></br>
                Solennellement affirm&eacute; &agrave; <?php echo $_POST['texte8']?>.
                <br></br>
                Dat&eacute; de ce jour le <?php echo $_POST['date1']?>.
                    <br></br><br></br>
                Sign&eacute;, valid&eacute; et livr&eacute; en pr&eacute;sence de: 
                
                <?php 
				for ($i = 0; $i < count($_POST['texte12']); $i++)
				{
					print($_POST['texte12'][$i]);
                    print(' ; ');
				}
				
				?>
                <br></br>
                Par <?php echo $_POST['texte9']?>.
                <br></br><br></br>
                <style type="text/css">
            @media print {
                #printbtn {
                    display :  none;
                }
            }
            @page { size: auto;  margin: 5mm; }
            </style>
            <input class="bouton" id ="printbtn" type="button" value="Imprimer / Enregistrer en PDF" onclick="window.print();" >
  </div>
  </body>
</html>