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
            <h2>Au&nbsp;Petit&nbsp;Chez&nbsp;Soi<br class="responsive-only" /> - <br class="responsive-only" />Menu</h2>
            <p>*Tous nos plats sont faits maison et à la demande</p>

            <!-- CHRISTMAS -->
            <!--h3>Menus Réveillon</h3>
            <h4>Menu 99€</h4>
            <table>
              <tr><td class="ta-center">coupe de champage réserve pour l'apéritif</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">un verre de vin pour l'entrée, un pour le plat</td></tr>

              <tr><td colspan="2" class="ta-center bold menu-title">Entrées</td></tr>
              <tr><td class="ta-center">Foie gras de canard maison, chutney aux figues</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Oeuf doré à la crème de truffe, poêlée de champignons de Paris</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Assiette aux deux saumons, fumé et gravlax</td></tr>

              <tr><td colspan="2" class="ta-center bold menu-title">Plats</td></tr>
              <tr><td class="ta-center">Noix de St-Jacques poêlées, risotto crémeux aux asperges, sauce champagne</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Tournedos de sanglier, fagot d'haricots verts, pommes de terre fondantes, sauce myrtille</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Assiette de fromages</td></tr>

              <tr><td colspan="2" class="ta-center bold menu-title">Desserts</td></tr>
              <tr><td class="ta-center">Parfait poire-chocolat, crème anglaise à l'ancienne</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Ananas flambé et son coulis passion, boule de glace vanille</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Pour accompagner le dessert:</td></tr>
              <tr><td class="ta-center">Flûte de champagne blanc de noir</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Digestif maison</td></tr>
            </table>

            <h4>Menu 120€</h4>
            <table>
              <tr><td class="ta-center">coupe de champage prestige pour l'apéritif</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">un verre de vin pour l'entrée, un pour le plat</td></tr>

              <tr><td colspan="2" class="ta-center bold menu-title">Entrées</td></tr>
              <tr><td class="ta-center">Foie gras de canard maison aux petites épices douces, chutney aux figues</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Oeuf doré à la crème de truffe, poêlée de pleurotes</td></tr>

              <tr><td colspan="2" class="ta-center bold menu-title">Plats</td></tr>
              <tr><td class="ta-center">Lotte grillées aux trois purées (céleri, carottes et pommes de terre)</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Filet de boeuf Rossini, risotto d'épeautre crémeux, sauce poivre</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Homard flambé, duo d'asperges grillées beurre blanc citronné</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Assiette de fromages</td></tr>

              <tr><td colspan="2" class="ta-center bold menu-title">Desserts</td></tr>
              <tr><td class="ta-center">Pavlova Royal aux fruits rouges</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Bûche de Noël chocolat praliné à la vanille</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Pour accompagner le dessert:</td></tr>
              <tr><td class="ta-center">Flûte de champagne blanc de noir</td></tr>
              <tr><td class="ta-center">****</td></tr>
              <tr><td class="ta-center">Digestif maison</td></tr>
            </table-->

            <!-- REGULAR -->

            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Nos Entrées</td>
              </tr>
              <tr>
                <td class="ta-center">Demi-camembert AOP au lait cru pané <span class="bold">12,50€</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>(Toasts grillés, salade romaine, tomates cerises)</small></td>
              </tr>
              
              <tr>
                <td class="ta-center">Velouté du moment <span class="bold">8,50€</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>(assortiment de légumes de saison, croûtons aux herbes)</small></td>
              </tr>

              <tr>
                <td class="ta-center">Œuf doré à la crème de truffe <span class="bold">15,50€</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>(œuf mollet pané, poêlée de champignons, crème à la truffe)</small></td>
              </tr>

              <tr>
                <td class="ta-center">Escargots de Bourgogne</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>6 pièces – 10,00€ / 12 pièces – 18,00€</small></td>
              </tr>

              <tr>
                <td class="ta-center">Assiette de charcuterie <span class="bold">18,80€</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>(Coppa, bresaola, saucisson sec de porc, saucisson pimenté, pâté de campagne, cornichons et câpres, salade romaine)</small></td>
              </tr>

              <tr>
                <td class="ta-center">Huîtres spéciales de Saint-Vaast « Grands Crus en Cotentin »</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>6 pièces – 14,00€ / 9 pièces – 21,00€ 12 pièces – 28,00€</small></td>
              </tr>
            </table>

            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Menu Enfant</td>
              </tr>
              <tr>
                <td class="ta-center">Sirop au choix</td>
              </tr>
              <tr>
                <td class="ta-center">Steak haché, nuggets de poulet ou poisson, frites maison ou purée,</td>
              </tr>
              <tr>
                <td class="ta-center">une crème glacée au choix <span class="bold">15,00€</span></td>
              </tr>
            </table>


            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Formule déjeuner en semaine</td>
              </tr>
              <tr>
                <td class="ta-center">Plat du jour / Pâtes du jour – Dessert à la carte <span class="bold">21,00€</span></td>
              </tr>
              
              <tr>
                <td class="ta-center">Entrée à la carte – Plat du jour / Pâtes du jour <span class="bold">25,00€</span></td>
              </tr>
              
              <tr>
                <td class="ta-center">Entrée à la carte – Plat du jour / Pâtes du jour – Dessert à la carte <span class="bold">32,00€</span></td>
              </tr>
            </table>

            <h3>Nos Plats</h3>
            
            <table>
              <tr>
                <td class="ta-center">Salade de chèvre chaud <span class="bold">15,50€</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>(croûtons maison, toasts de chèvre, herbes de Provence, salade romaine, tomates)</small></td>
              </tr>
            </table>
        
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Nos Poissons</td>
              </tr>
              <tr>
                <td class="ta-center">Noix de Saint Jacques flambées au Cognac, endives braisées, crème de corail au zeste d’orange <span class="bold">27,50€</span></td>
              </tr>
              <tr>
                <td class="ta-center">Filet de bar grillé, purée de pommes de terre maison, huile d’olive aux herbes aromatiques <span class="bold">23,80€</span></td>
              </tr>
            </table>

            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Nos Viandes</td>
              </tr>

              <tr>
                <td class="ta-center">Escalope de volaille, poêlée d’haricots verts et pois gourmands, sauce forestière <span class="bold">18,60€</span></td>
              </tr>

              <tr>
                <td class="ta-center">Entrecôte française (250g) / (350g), purée à la truffe, sauce poivre <span class="bold">27,80€ / 37,80€</span></td>
              </tr>

              <tr>
                <td class="ta-center">Tartare de bœuf préparé, frites maison ou salade <span class="bold">16,80€</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>(Câpres, cornichons, persil, oignons, sauce cocktail)</small></td>
              </tr>

              
              <tr>
                <td class="ta-center">Burger du P’tit Chess, frites maison et salade <span class="bold">19,80€</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>(Pain brioché, steak haché frais, Taleggio, comté 14 mois, sauce maison, oignons, tomate)</small></td>
              </tr>

              <tr>
                <td class="ta-center">Côte de veau française et sa poêlée de pommes de terre grenailles, champignons de saison, crème à l’estragon <span class="bold">32,50€</span></td>
              </tr>

              <tr><td></td></tr>
              <tr>
                <td class="ta-center italic"><small>*Tout changement de garniture : 2,50€</small></td>
              </tr>
            </table>

            <table>
              <tr>
                <td class="ta-center italic">Assortiment de notre maître artisan fromager <span class="bold">14,50€</span></td>
              </tr>
            </table>

            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Nos Desserts</td>
              </tr>
              <tr>
                <td class="ta-center">Panna cotta à la vanille et son explosion de fruits exotiques <span class="bold">9,00€</span></td>
              </tr>
              <tr>
                <td class="ta-center">Tarte du moment, boule de crème glacée au choix <span class="bold">9,00€</span></td>
              </tr>
              <tr>
                <td class="ta-center">Crème brûlée à la pistache, brochette de fruits frais <span class="bold">9,00€</span></td>
              </tr>
              <tr>
                <td class="ta-center">Café gourmand <span class="bold">10,00€</span></td>
              </tr>
              <tr>
                <td class="ta-center">Thé gourmand <span class="bold">12,00€</span></td>
              </tr>
              <tr>
                <td class="ta-center">Champagne gourmand <span class="bold">18,00€</span></td>
              </tr>
              <tr>
                <td class="ta-center">1-2-3 boule(s) de crème glacée artisanale <span class="bold">3,00€-6,00€-8,50€</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center italic"><small>(Chocolat, café, vanille, fraise, caramel au beurre salé, pistache / Sorbet: poire, cassis, citron, mangue, pêche de vignes)</small></td>
              </tr>
            </table>


            <!-- OLD -->
            <!--table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Nos Entrées</td>
              </tr>
              <tr>
                <td>Foie gras de canard maison et son chutney aux figues, toasts grillés</td>
                <td class="bold">19,50€</td>
              </tr>
              <tr>
                <td>Œuf doré truffé</td>
                <td class="bold">12,50€</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-left italic"><small>(œuf pané, poêlée de champignons, sauce à la crème de truffe)</small></td>
              </tr>
              <tr>
                <td>Salade de poulpe, sauce moutarde à l’ancienne</td>
                <td class="bold">15,80€</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-left italic"><small>( pommes de terre, tomates cerises, câpres à queue, et ses condiments )</small></td>
              </tr>
              <tr>
                <td>Escargots de Bourgogne </td>
                <td class="bold"><small class="italic">(6)</small>&nbsp;10,00€ - <small class="italic">(12)</small>&nbsp;18,00€</td>
              </tr>
              <tr>
                <td>Assiette de charcuterie</td>
                <td class="bold">15,00€</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-left italic"><small>( mortadelle, coppa, bresaola, pâté de campagne, saucisson sec de porc, saucisson pimenté italien, cornichons et câpres à queue )</small></td>
              </tr>
            </table>
            <table id="huitres">
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Nos Huîtres</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center bold sub-title">Dégustation d’huîtres « <span class="bold">Grand crus en Cotentin</span> » ( Pleine mer, St Vaast, Utah Beach )</td>
              </tr>
              <tr>
                <td class="ta-center">par 6 - <span class="bold">18€</span></td>
              </tr>
              <tr>
                <td class="ta-center">par 8 - <span class="bold">27€</span></td>
              </tr>
              <tr>
                <td class="ta-center">par 12 - <span class="bold">36€</span></td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Nos Salades</td>
              </tr>
              <tr>
                <td>Salade aux trois fromages</td>
                <td class="bold">15,80€</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-left italic"><small>( salade et tomates cerises, conté, toast au chèvre et miel, emmental )</small></td>
              </tr>
              <tr>
                <td>Salade Océane</td>
                <td class="bold">19,80€</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-left italic"><small>( crevettes, saumon fumé, moules, chair de crabe, œuf, maïs, carottes râpées, cœur d’artichaud, tomates, concombres )</small></td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Menu Enfant</td>
              </tr>
              <tr>
                <td>Sirop à l'eau</td>
              </tr>
              <tr>
                <td>Steak haché, nuggets de poulet ou poisson, frites maison ou purée,</td>
              </tr>
              <tr>
                <td>une boule de glace au choix</td>
                <td class="bold">15€</td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Pâtes du Jour</td>
              </tr>
              <tr>
                <td class="italic">Selon l'humeur du chef</td>
                <td class="bold">14,90€</td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Nos Poissons</td>
              </tr>
              <tr>
                <td>Pavé de saumon grillé ( 220g ), poêlée de légumes, sauce vierge</td>
                <td class="bold">23€</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-left italic"><small>( poivrons rouges et jaunes, aubergines, courgettes et tomates cerises )</small></td>
              </tr>
              <tr>
                <td>Dos cabillaud ( 220g ), poêlée d’haricots verts, pois gourmands et tomates cerises, crème de moutarde à l’ancienne</td>
                <td class="bold">24€</td>
              </tr>
              <tr>
                <td>Pavé de thon ( 220g ) rouge grillé, riz à l’indienne </td>
                <td class="bold">25€</td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Nos Viandes</td>
              </tr>
              <tr>
                <td>Burger à l’américaine, frites maisons ou salade verte</td>
                <td class="bold">19€</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-left italic"><small>( pain brioché, steak haché 180g, conté et emmental fondu, tranches de bacon et lard fumé, pickles d’oignons rouges, cornichons, salade tomates, sauce samouraï )</small></td>
              </tr>
              <tr>
                <td>Tartare de bœuf préparé ( 180g ), frites maisons ou salade verte</td>
                <td class="bold">16,80€</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-left italic"><small>( cornichons, câpres, oignons blancs, sauce revisitée )</small></td>
              </tr>
              <tr>
                <td>Cœur de rumsteak charolais ( 220 g ) sauce poivre, frites maison ou salade verte</td>
                <td class="bold">24€</td>
              </tr>
              <tr>
                <td>Entrecôte limousine ( 300g ), purée à la truffe maison, sauce foie gras</td>
                <td class="bold">30€</td>
              </tr>
              <tr>
                <td>Côte de Veau française ( 250g ), caviar d’aubergine, pommes de terre fondantes et sa poêlée de girolles fraîche, jus de veau corsé</td>
                <td class="bold">28€</td>
              </tr>
              <tr>
                <td>Médaillon de volaille à la Thaï</td>
                <td class="bold">22,80€</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-left italic"><small>( nouilles chinoises, pousses de soja, chou bok choy, lamelles de carottes et courgettes, chou chinois, concassé de cacahuètes, déglacé à la sauce soja sucrée-salée )</small></td>
              </tr>
              <tr>
                <td>Côte de bœuf limousine à la demande ( à partir de 800g ) </td>
                <td class="bold">80€</td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Nos Desserts</td>
              </tr>
              <tr>
                <td>Tiramisu selon l’humeur du chef</td>
                <td class="bold">9€</td>
              </tr>
              <tr>
                <td>Tarte aux poires, crème d’amandes</td>
                <td class="bold">9€</td>
              </tr>
              <tr>
                <td>Mousse au chocolat</td>
                <td class="bold">9€</td>
              </tr>
              <tr>
                <td>Crème caramel et son palais noisette</td>
                <td class="bold">9€</td>
              </tr>
              <tr>
                <td>Café gourmand</td>
                <td class="bold">10€</td>
              </tr>
              <tr>
                <td>Champagne gourmand</td>
                <td class="bold">18€</td>
              </tr>
              <tr>
                <td>2 Boule de glace(s) artisanales au choix</td>
                <td class="bold">5€</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-left italic"><small>( Chocolat, café, vanille, fraise, caramel au beurre salé, sorbet abricot, sorbet poire, sorbet cassis, sorbet citron )
</small></td>
              </tr>
            </table-->
          </div>
        </section>
        <x-footer />
    </body>
</html>