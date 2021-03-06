<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Au Petit Chez Soi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menus.css') }}" rel="stylesheet">
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
    </head>
    <body class="antialiased">
        <x-navbar activeTab="menus-carte" />
        <section id="main">
          <div id="carte">
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Les Entr??es</td>
              </tr>
              <tr>
                <td>Tartare de saumon parfum?? au citron vert et basilic, cr??me chantilly</td>
                <td class="bold">17,50???</td>
              </tr>
              <tr>
                <td>Escargots de Bourgogne </td>
                <td class="bold"><small class="italic">(6)</small>&nbsp;10,00??? - <small class="italic">(12)</small>&nbsp;18,00???</td>
              </tr>
              <tr>
                <td>Burrata cr??meuse et tomates en salade roquette, crumble au parmesan, sauce pistou</td>
                <td class="bold">17,50???</td>
              </tr>
              <tr>
                <td>Foie gras de canard maison et son chutney aux figues, toasts grill??s</td>
                <td class="bold">19,50???</td>
              </tr>
            </table>
            <table id="huitres">
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Les Hu??tres</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center bold sub-title">Hu??tres du Cotentin n??3</td>
              </tr>
              <tr>
                <td>Pleine mer</td>
                <td><span class="bold">14???</span> <small class="italic">les&nbsp;6</span></td>
              </tr>
              <tr>
                <td>Saint-Vaast</td>
                <td><span class="bold">18???</span> <small class="italic">les&nbsp;6</span></td>
              </tr>
              <tr>
                <td>Utah Beach</td>
                <td><span class="bold">22???</span> <small class="italic">les&nbsp;6</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center bold">Formule D??couverte</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic sub-title">(assortiment de chaque vari??t??)</td>
              </tr>
              <tr>
                <td>6 hu??tres</td>
                <td class="bold">18???</td>
              </tr>
              <tr>
                <td>9 hu??tres</td>
                <td class="bold">27???</td>
              </tr>
              <tr>
                <td>12 hu??tres</td>
                <td class="bold">36???</td>
              </tr>
              <tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Les Salades</td>
              </tr>
              <tr>
                <td>Power Bowl nature ou poulet</td>
                <td class="bold">17,90???</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>(avocat, grenades, tomates cerise, radis, concombre, choux rouge, patate douce)</small></td>
              </tr>
              <tr>
                <td>Salade nicoise</td>
                <td class="bold">19,90???</td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">P??tes du Jour</td>
              </tr>
              <tr>
                <td class="italic">Selon l'humeur du chef</td>
                <td class="bold">16,50???</td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Les Viandes</td>
              </tr>
              <tr>
                <td>C??ur de rumsteak charolais (220 gr.), po??l??e de pomme de terre grenaille, champignons, sauce b??arnaise</td>
                <td class="bold">24???</td>
              </tr>
              <tr>
                <td>Entrec??te de Salers grill??e (300 gr.), frites maison, sauce au poivre</td>
                <td class="bold">27???</td>
              </tr>
              <tr>
                <td>Trio de c??tes d???agneau, caviar d???aubergines, jus d???agneau cors??</td>
                <td class="bold">23???</td>
              </tr>
              <tr>
                <td>Burger maison (180gr.) au comt?? et cheddar, salade de tomates et oignons rouges, frites, sauce barbecue</td>
                <td class="bold">19???</td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Les Poissons</td>
              </tr>
              <tr>
                <td>Pav?? de saumon grill??, duo d???asperges, sauce vierge</td>
                <td class="bold">23???</td>
              </tr>
              <tr>
                <td>Dos de cabillaud et son risotto cr??meux au parmesan??et ses copeaux d???asperges</td>
                <td class="bold">24???</td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Menu Enfant <small class="italic">(jusqu'?? 12 ans)</small></td>
              </tr>
              <tr>
                <td>Nuggets poulet ou poisson, frites, Glace</td>
                <td class="bold">15???</td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Les Desserts Maison</td>
              </tr>
              <tr>
                <td>Tarte aux pommes, cr??me glac??e ?? la vanille</td>
                <td class="bold">9???</td>
              </tr>
              <tr>
                <td>Charlotte aux fruits rouges</td>
                <td class="bold">9???</td>
              </tr>
              <tr>
                <td>Cr??me caramel</td>
                <td class="bold">9???</td>
              </tr>
              <tr>
                <td>Mousse au chocolat</td>
                <td class="bold">9???</td>
              </tr>
              <tr>
                <td>Caf?? ou th?? gourmand</td>
                <td class="bold">12???</td>
              </tr>
              <tr>
                <td>Champagne gourmand</td>
                <td class="bold">18???</td>
              </tr>
            </table>
          </div>
          <!--div id="waiter">
            <h2>Menus et Carte</h2>
            <p>Il nous tarde de vous pr??senter notre nouvelle carte??!</p>
            <p>?? partir du <span class="bold underline">9 juin</span>, vous y trouverez une cuisine traditionnelle fran??aise revisit??e, ??labor??e ?? partir de produits vari??s et de saison</p>
          </div-->
          
          <!-- div id="menus">
            <h2>Menus</h2>
            <table>
              <tr>
                <td class="bold menu-title" style="padding-top: 0">Menu Carte (hors&nbsp;boisson)</td>
                <td><span class="bold menu-title">43???<br /></span><small>(+&nbsp;Sup.&nbsp;selon&nbsp;votre&nbsp;choix)</small></td>
              </tr>
              <tr>
                <td class="ta-center">A choisir ?? la carte</td>
              </tr>
              <tr>
                <td>Entr??e - Plat - Fromage<span class="bold">&nbsp;ou&nbsp;</span>Dessert</td>
              </tr>
              <tr>
                <td class="bold menu-title" colspan="2">D??jeuner ?? l'ardoise - Formule Bistrot (hors&nbsp;boisson)</td>
              </tr>
              <tr>
                <td class="ta-center"><small>Mercredi, jeudi et vendredi<br />(Hors jours f??ri??s)</small></td>
              </tr>
              <tr>
                <td>Entr??e - Plat - Dessert</td>
                <td class="ta-center bold">24,50???</td>
              </tr>
              <tr>
                <td>Plat du Jour seul</td>
                <td class="ta-center bold">19???</td>
              </tr>
              <tr>
                <td class="bold menu-title">Menu Pitchoun (hors&nbsp;boisson)</td>
                <td class="bold menu-title">15???</td>
              </tr>
              <tr>
                <td class="ta-center" colspan="2"><small>(jusqu'??&nbsp;10&nbsp;ans)</small></td>
              </tr>
              <tr>
                <td class="ta-center underline" colspan="2">1 menu Pitchoun achet?? = 1 menu Pitchoun offert</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">Beignets de poisson - Tagliatelles</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">ou</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">Croustillants de poulet - Pur??e</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">+</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">Glace ou sorbet <small>(2 boules)</small></td>
              </tr>
              <tr>
                <td colspan="2" class="menu-title"><span class="bold underline">Cin??-Diner ?? la Celle Saint-Cloud</span> -&nbsp;<small>R??servation&nbsp;recommand??e</small></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">-10% pour la s??ance du samedi soir sur pr??sentation du ticket</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center"><small>(Hors boisson et jours f??ri??s)</small></td>
              </tr>
            </table>
            <p><small>
              Selon le march??, certains produits peuvent manquer<br />
              Produits allerg??nes - Voir liste ?? la caisse<br />
              Nos prix sont nets TTC - service compris
          </small></p>
          </div>
          <div id="carte">
            <h2>Carte</h2>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Entr??es</td>
              </tr>
              <tr>
                <td>Hu??tres Sp??ciales de "Utah Beach"<br /><small>(Selon&nbsp;arrivage&nbsp;en&nbsp;direct&nbsp;du&nbsp;producteur)</small></td>
                <td><span class="bold">22???</span> <small>(Sup.&nbsp;8)</small></td>
              </tr>
              <tr>
                <td>Nage ravioles aux truffes et aux c??pes (5)</td>
                <td><span class="bold">14???</span></td>
              </tr>
              <tr>
                <td>Croustillants de Gambas</td>
                <td><span class="bold">16???</span></td>
              </tr>
              <tr>
                <td>Foie gras du "Petit Chez Soi" et son service</td>
                <td><span class="bold">18???</span> <small>(Sup.&nbsp;3)</small></td>
              </tr>
              <tr>
                <td>Escargots de bourgogne (12)</td>
                <td><span class="bold">15???</span></td>
              </tr>
              <tr>
                <td>"Coeur" de saumon aux agrumes</td>
                <td><span class="bold">17???</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Plats</td>
              </tr>
              <tr>
                <td>Nage ravioles aux truffes et aux c??pes (9)</td>
                <td><span class="bold">25???</span></td>
              </tr>
              <tr>
                <td>Po??l??e de Saint-Jaques - Fondue de poireaux</td>
                <td><span class="bold">29???</span> <small>(Sup.&nbsp;4)</small></td>
              </tr>
              <tr>
                <td>Poisson du march?? - <small>voir le tableau</small></td>
              </tr>
              <tr>
                <td>Gambas de flamb??es au whisky - Tagliatelles</td>
                <td><span class="bold">258???</span></td>
              </tr>
              <tr>
                <td>Pluma de pata negra - pur??e "Maison"</td>
                <td><span class="bold">35???</span> <small>(Sup.&nbsp;10)</small></td>
              </tr>
              <tr>
                <td>Rumsteack, sauce aux poivres</td>
                <td><span class="bold">28???</span></td>
              </tr>
              <tr>
                <td>Ris de veau, sauce foresti??re - Tagliatelles</td>
                <td><span class="bold">39???</span> <small>(Sup.&nbsp;13)</small></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Fromages et Desserts</td>
              </tr>
              <tr>
                <td class="bold">Assiette de fromages fermiers</td>
                <td><span class="bold">10,50???</span></td>
              </tr>
              <tr>
                <td><span class="bold">Desserts</span> <small>(?? choisir en d??but de repas)</small></td>
                <td><span class="bold">10,50???</span></td>
              </tr>
              <tr>
                <td>Moelleux au chocolat <small>(9 minutes de temps de cuisson)</small></td>
              </tr>
              <tr>
                <td>Pana Cota ?? la vanille de Bourbon et son coulis de fruits rouges</td>
              </tr>
              <tr>
                <td>Saveur de Lot et Garonne</td>
              </tr>
              <tr>
                <td>Caf?? Li??geois</td>
              </tr>
              <tr>
                <td>Glaces ou Sorbets arros??s ou non</td>
              </tr>
              <tr>
                <td>Caf?? ou Th?? gourmand</td>
              </tr>
            </table>
          </div -->
        </section>
        <x-footer />
    </body>
</html>