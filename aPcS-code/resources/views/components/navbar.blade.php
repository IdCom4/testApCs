<div id="navbar">
    <a href="{{ url('/') }}"><h2>Au Petit Chez Soi</h2><!--img src="images/logo.png" alt="logo" /--></a>
    <ul id="nav-links">
      <li><a href="{{ url('/') }}" class="{{ $activeTab == 'accueil' ? 'active' : '' }}">Accueil</a></li>
      <li><a href="{{ url('/menus-carte') }}" class="{{ $activeTab == 'menus-carte' ? 'active' : '' }}">Menus/Carte</a></li>
      <li><a href="{{ url('/a-emporter') }}" class="{{ $activeTab == 'a-emporter' ? 'active' : '' }}">À Emporter</a></li>
      <li><a href="{{ url('/reservation-contact') }}" class="{{ $activeTab == 'reservation-contact' ? 'active' : '' }}">Réservation/Contact</a></li>
    </ul>
    <div id="burger" onclick="deployNav()">
      <span class="slice"></span>
      <span class="slice"></span>
      <span class="slice"></span>
    </div>
</div>
<div id="navbar-placeholder"></div>

<script>
  function deployNav() {
    const ul = document.getElementById("nav-links");
    ul.classList.toggle("deployed");
  }
</script>