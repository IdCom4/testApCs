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
          <div id="menus">
            <h2>Menus</h2>
            <table>
              <tr>
                <td class="bold menu-title" style="padding-top: 0">Menu Carte (hors&nbsp;boisson)</td>
                <td><span class="bold menu-title">43€<br /></span><small>(+&nbsp;Sup.&nbsp;selon&nbsp;votre&nbsp;choix)</small></td>
              </tr>
              <tr>
                <td class="ta-center">A choisir à la carte</td>
              </tr>
              <tr>
                <td>Entrée - Plat - Fromage<span class="bold">&nbsp;ou&nbsp;</span>Dessert</td>
              </tr>
              <tr>
                <td class="bold menu-title" colspan="2">Déjeuner à l'ardoise - Formule Bistrot (hors&nbsp;boisson)</td>
              </tr>
              <tr>
                <td class="ta-center"><small>Mercredi, jeudi et vendredi<br />(Hors jours fériés)</small></td>
              </tr>
              <tr>
                <td>Entrée - Plat - Dessert</td>
                <td class="ta-center bold">24,50€</td>
              </tr>
              <tr>
                <td>Plat du Jour seul</td>
                <td class="ta-center bold">19€</td>
              </tr>
              <tr>
                <td class="bold menu-title">Menu Pitchoun (hors&nbsp;boisson)</td>
                <td class="bold menu-title">15€</td>
              </tr>
              <tr>
                <td class="ta-center" colspan="2"><small>(jusqu'à&nbsp;10&nbsp;ans)</small></td>
              </tr>
              <tr>
                <td class="ta-center underline" colspan="2">1 menu Pitchoun acheté = 1 menu Pitchoun offert</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">Beignets de poisson - Tagliatelles</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">ou</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">Croustillants de poulet - Purée</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">+</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">Glace ou sorbet <small>(2 boules)</small></td>
              </tr>
              <tr>
                <td colspan="2" class="menu-title"><span class="bold underline">Ciné-Diner à la Celle Saint-Cloud</span> -&nbsp;<small>Réservation&nbsp;recommandée</small></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center">-10% pour la séance du samedi soir sur présentation du ticket</td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center"><small>(Hors boisson et jours fériés)</small></td>
              </tr>
            </table>
            <p><small>
              Selon le marché, certains produits peuvent manquer<br />
              Produits allergènes - Voir liste à la caisse<br />
              Nos prix sont nets TTC - service compris
          </small></p>
          </div>
          <!-- div id="menus">
            <h2>Menus</h2>
            <table>
              <tr>
                <td class="bold menu-title">Menu Carte (hors&nbsp;boisson)</td>
                <td><span class="bold menu-title">43€&nbsp;</span><small>(+&nbsp;Sup.&nbsp;selon&nbsp;votre&nbsp;choix)</small></td>
              </tr>
              <tr>
                <td class="ta-center">A choisir à la carte</td>
              </tr>
              <tr>
                <td>Entrée - Plat - Fromage<span class="bold">&nbsp;ou&nbsp;</span>Dessert</td>
              </tr>
            </table>
            <table>
              <tr>
                <td class="bold menu-title" colspan="2">Déjeuné à l'ardoise - Formule Bistrot (hors&nbsp;boisson)</td>
              </tr>
              <tr>
                <td class="ta-center"><small>Mercredi, jeudi et vendredi<br />(Hors jours fériés)</small></td>
              </tr>
              <tr>
                <td>Entrée - Plat - Dessert</td>
                <td class="ta-center bold">24,50€</td>
              </tr>
              <tr>
                <td>Plat du Jour seul</td>
                <td class="ta-center bold">19€</td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2"><span class="bold menu-title">Menu Pitchoun (hors&nbsp;boisson)</span> <small>(jusqu'à&nbsp;10&nbsp;ans)</small> <span class="bold menu-title">15€</span></td>
              </tr>
              <tr>
                <td class="ta-center underline" colspan="2">1 menu Pitchoun acheté = 1 menu Pitchoun offet</td>
              </tr>
              <tr>
                <td class="ta-center">Beignets de poisson - Tagliatelles</td>
              </tr>
              <tr>
                <td class="ta-center">ou</td>
              </tr>
              <tr>
                <td class="ta-center">Croustillants de poulet - Purée</td>
              </tr>
              <tr>
                <td class="ta-center">+</td>
              </tr>
              <tr>
                <td class="ta-center">Glace ou sorbet <small>(2 boules)</small></td>
              </tr>
            </table>
            <table>
              <tr>
                <td colspan="2"><span class="bold underline menu-title">Ciné-Diner à la Celle Saint-Cloud</span> -&nbsp;<small>Réservation&nbsp;recommandée</small></td>
              </tr>
              <tr>
                <td>-10% pour la séance du samedi soir sur présentation du ticket</td>
              </tr>
              <tr>
                <td class="ta-center"><small>(Hors boisson et jours fériés)</small></td>
              </tr>
            </table>
            <p><small>
              Selon le marché, certains produits peuvent manquer<br />
              Produits allergènes - Voir liste à la caisse<br />
              Nos prix sont nets TTC - service compris
          </small></p>
          </div -->
          <div id="carte">
            <h2>Carte</h2>
            <table>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Entrées</td>
              </tr>
              <tr>
                <td>Huîtres Spéciales de "Utah Beach"<br /><small>(Selon&nbsp;arrivage&nbsp;en&nbsp;direct&nbsp;du&nbsp;producteur)</small></td>
                <td><span class="bold">22€</span> <small>(Sup.&nbsp;8)</small></td>
              </tr>
              <tr>
                <td>Nage ravioles aux truffes et aux cèpes (5)</td>
                <td><span class="bold">14€</span></td>
              </tr>
              <tr>
                <td>Croustillants de Gambas</td>
                <td><span class="bold">16€</span></td>
              </tr>
              <tr>
                <td>Foie gras du "Petit Chez Soi" et son service</td>
                <td><span class="bold">18€</span> <small>(Sup.&nbsp;3)</small></td>
              </tr>
              <tr>
                <td>Escargots de bourgogne (12)</td>
                <td><span class="bold">15€</span></td>
              </tr>
              <tr>
                <td>"Coeur" de saumon aux agrumes</td>
                <td><span class="bold">17€</span></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Plats</td>
              </tr>
              <tr>
                <td>Nage ravioles aux truffes et aux cèpes (9)</td>
                <td><span class="bold">25€</span></td>
              </tr>
              <tr>
                <td>Poêlée de Saint-Jaques - Fondue de poireaux</td>
                <td><span class="bold">29€</span> <small>(Sup.&nbsp;4)</small></td>
              </tr>
              <tr>
                <td>Poisson du marché - <small>voir le tableau</small></td>
              </tr>
              <tr>
                <td>Gambas de flambées au whisky - Tagliatelles</td>
                <td><span class="bold">258€</span></td>
              </tr>
              <tr>
                <td>Pluma de pata negra - purée "Maison"</td>
                <td><span class="bold">35€</span> <small>(Sup.&nbsp;10)</small></td>
              </tr>
              <tr>
                <td>Rumsteack, sauce aux poivres</td>
                <td><span class="bold">28€</span></td>
              </tr>
              <tr>
                <td>Ris de veau, sauce forestière - Tagliatelles</td>
                <td><span class="bold">39€</span> <small>(Sup.&nbsp;13)</small></td>
              </tr>
              <tr>
                <td colspan="2" class="ta-center bold menu-title">Fromages et Desserts</td>
              </tr>
              <tr>
                <td class="bold">Assiette de fromages fermiers</td>
                <td><span class="bold">10,50€</span></td>
              </tr>
              <tr>
                <td><span class="bold">Desserts</span> <small>(à choisir en début de repas)</small></td>
                <td><span class="bold">10,50€</span></td>
              </tr>
              <tr>
                <td>Moelleux au chocolat <small>(9 minutes de temps de cuisson)</small></td>
              </tr>
              <tr>
                <td>Pana Cota à la vanille de Bourbon et son coulis de fruits rouges</td>
              </tr>
              <tr>
                <td>Saveur de Lot et Garonne</td>
              </tr>
              <tr>
                <td>Café Liégeois</td>
              </tr>
              <tr>
                <td>Glaces ou Sorbets arrosés ou non</td>
              </tr>
              <tr>
                <td>Café ou Thé gourmand</td>
              </tr>
            </table>
          </div>
        </section>
        <x-footer />
    </body>
</html>