<p><small class="label">De:</small><br /><span class="data">{{ $data["nom"] }}</span></p>
<p><small class="label">Adresse Mail:</small> <br /><span class="data">{{ $data["mail"] }}</span></p>
<p><small class="label">Numéro de Téléphone:</small> <br /><span class="data">{{ $data["tel"] }}</span></p>
<br />
<p>{{ $data["message"] }}</p>
<br />
<small>Envoyé depuis le formulaire de contact</small>

<style type="text/css">
  .label {
    text-decoration: underline;
    font-style: italic;
  }
  .data {
    font-weight: bold;
  }
</style>