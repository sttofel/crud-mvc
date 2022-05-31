<div class="row container">
  <div class="col s12">
    <h3 class="lite">Página de Edição de Registros</h3>
  </div>

  <div class="col s12">
    <form action="?router=Site/alterar/" method="post">
      <?php foreach ($consulta as $registro): ?>
        <input type="hidden" name="id", value="<?php echo $registro['id'] ?>">
      <div class="input-field col s12 m6">
        <input type="text" name="nome" id="nome" required value="<?= $registro['nome'] ?>">
        <label for="nome">Digite seu nome</label>
      </div>

      <div class="input-field col s12 m6">
        <input type="email" name="email" id="email" required value="<?= $registro['email'] ?>">
        <label for="email">Digite seu e-mail</label>
      </div>
      <?php endforeach; ?>

      <div class="input-field col s12 m6">
        <input type="submit" value="Salvar" class="btn-small">
        <input type="reset" value="Limpar" class="btn-small red">
      </div>
    </form>
  </div>
</div>