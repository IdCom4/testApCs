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
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/reservation.css') }}" rel="stylesheet">
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        <link href="{{ asset('css/saint-valentin.css') }}" rel="stylesheet">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
    </head>
    <body class="antialiased">
        <x-navbar activeTab="accueil" />
        <section id="titre">
          <div class="background-teint">
            <h1>Au Petit Chez Soi</h1>
            <h3>Le bonheur vient en mangeant</h3>
          </div>
        </section>
        <section id="infos">
          <p>NOUS VOUS ACCUEILLERONS AVEC GRAND PLAISIR DÈS LE 1ER SEPTEMBRE POUR VOUS FAIRE DÉCOUVRIR NOTRE NOUVELLE CARTE.</p>
        </section>
        <section id="presentation">
          <div id="a-propos">
            
            <!--h3>AU PETIT CHEZ SOI,<br />RÉVEILLON DU 31 DÉCEMBRE ET DÉJEUNER DU NOUVEL AN</h3>
            <p>Venez inaugurer chaleureusement l’an 2022 avec gourmandise.</p>
            <p>En responsabilité au regard du contexte sanitaire et des protocoles induits, notre désir est de toujours vous mener à avoir le goût de moments précieux et gourmands, quoi qu’il arrive.</p>
            <p>Retrouvez nos menus spécial Réveillon sur <a href="{{ url('/menus-carte') }}">notre carte</a>.</p-->
            
            <h2>La cuisine qui séduit vos papilles</h2>  
            <h3>dans un cadre authentique et rénové</h3>
            <p>Nous avons mis à profit les premiers mois de l'année 2021 pour embellir ce bijou de restaurant dans son écrin du bourg médiéval de La Celle Saint-Cloud, à 20 minutes de Paris, de Versailles et de Saint-Germain en Laye.</p>
            <p>Le dynamisme de notre équipe en salle soutient le talent d’une brigade expérimentée et ambitieuse en cuisine.</p>
            <p>La marque Au Petit Chez Soi, c’est la saisonnalité avec une carte qui change tous les trois mois, hormis les incontournables.</p>
            <p>Nous sommes attachés à vous accueillir avec des plats faits maison de l’entrée au dessert.</p>
            <p>Parfois, notre Chef vous fera voyager à travers des saveurs du monde.</p>
            <p>Pour vos événements familiaux, professionnels ou sportifs, notre salle au 1er étage d’une capacité de 50 personnes avec video projecteur et écran géant est à votre disposition avec la même qualité de service et de plats.</p>
            <p>Notre démarche est généreuse, elle vise à partager avec vous le goût d'une bonne table et du bonheur de l'instant présent.</p>
            <p>Au Petit Chez Soi n'est pas seulement une enseigne ou une adresse, c'est un accueil et un savoir faire qui mènent à ressentir que vous êtes au petit chez vous.</p>
          </div>
          <div id="horaires-map">
            <x-horaires />
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d168018.5397285033!2d2.0033751618703093!3d48.85268620896051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67cd634c26207%3A0x3b81fb36ecee4881!2sAu%20Petit%20chez%20Soi!5e0!3m2!1sfr!2sfr!4v1620659369162!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </section>
        <x-footer />
    </body>
</html>
