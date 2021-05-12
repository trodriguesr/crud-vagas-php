<?php

$mensage = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensage = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;

        case 'error':
            $mensage = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
    }
}

$results = '';
foreach ($vacancies as $vacancy) {
    $results .= '<tr>
                      <td>' . $vacancy->id . '</td>
                      <td>' . $vacancy->title . '</td>
                      <td>' . $vacancy->description . '</td>
                      <td>' . ($vacancy->status == 's' ? 'Ativo' : 'Inativo') . '</td>
                      <td>' . date('d/m/Y à\s H:i:s', strtotime($vacancy->date)) . '</td>
                      <td>
                        <a href="editing.php?id=' . $vacancy->id . '">
                          <button type="button">Editar</button>
                        </a>
                        <a href="delete.php?id=' . $vacancy->id . '">
                          <button type="button">Excluir</button>
                        </a>
                      </td>
                    </tr>';
}

$results = strlen($results) ? $results : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma vaga encontrada
                                                       </td>
                                                    </tr>';

?>
<main>
    <?= $mensage ?>
    <section>
        <a href="register.php">
            <button class="waves-effect waves-light btn-small">Cadastrar</button>
        </a>
    </section>
    <section>
        <table class="striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?= $results ?>
            </tbody>
        </table>
    </section>
</main>