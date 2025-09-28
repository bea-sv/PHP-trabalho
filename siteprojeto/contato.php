<?php include __DIR__ . '/header.php'; ?>

<h2>Contato</h2>
<div class="row">
      <div class="col s12">Onde nos encontrar:</div>
      <div class="col s6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3442674218372!2d-34.96583262499208!3d-8.066323691961502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1be5b258dc45%3A0xcba66c54ffed227a!2sInstituto%20Ricardo%20Brennand!5e0!3m2!1spt-BR!2sbr!4v1758800765605!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      <div class="col s6"> 
        
        <div class="row">
        <div class="input-field col s8">
            <input id="icon_prefix" type="text" class="validate">
          <label for="first_name">Nome</label>
          
        </div>
        <div class="input-field col s8">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Sobrenome</label>
        </div>
      </div>
<div class="row">
        <div class="input-field col s8">
          <input id="email" type="email" class="validate">
          <label for="email">E-mail</label>
          <span class="helper-text" data-error="Digite um e-mail valido." data-success="E-mail valido.">O email deve conter @ e deve ser legítimo</span>
        </div>
      </div>

      </div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right"></i>
  </button>
    </div>

<?php include __DIR__ . '/footer.php'; ?>
