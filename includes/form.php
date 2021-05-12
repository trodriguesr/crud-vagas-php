<main>
  <section>
    <a href="index.php">
      <button class="waves-effect waves-light btn-small">Voltar</button>
    </a>
  </section>

  <h2 class="center"><?=TITLE?></h2>
  <div class="row">
    <form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s12">
          <label for="input_text">Título</label>
          <input id="input_text" type="text" name="titulo" value="<?= $vacancies->title ?>">

        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea2" class="materialize-textarea" name="descricao"<?= $vacancies->description ?>></textarea>
          <label for="textarea2">Descrição</label>
        </div>
      </div>

      <label for="status">Status</label>
      <div class="row">
        <label>
          <input class="with-gap col s6" name="ativo" value="s" type="radio" checked />
          <span>Ativo</span>
        </label>
        <label>
          <input type="radio" class="with-gap col s6" name="ativo" value="n" <?= $vacancies->status == 'n' ? 'checked' : '' ?> />
          <span>Inativo</span>
        </label>
      </div>
      <button class="btn waves-effect waves-light" type="submit">Enviar
        <i class="material-icons right">send</i>
      </button>

    </form>
  </div>
</main>