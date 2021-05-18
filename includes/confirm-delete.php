<main>

  <h2 class="mt-3">Excluir vaga</h2>

  <form method="post">

    <div class="form-group">
      <p>Você deseja realmente excluir a vaga <strong><?=$vacancies->title?></strong>?</p>
    </div>

    <div class="form-group">
      <a href="index.php">
        <button type="button" class="btn-small teal">Cancelar</button>
      </a>

      <button type="submit" name="delete" class="btn-small red darken-2">Excluir</button>
    </div>

  </form>

</main>