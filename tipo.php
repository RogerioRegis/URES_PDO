<?php
include './conect.php';

$res = pg_query("SELECT * FROM tipo");
?>
<?php include_once './header.php'; ?>
<?php include_once './menu.php'; ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Tipo</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            <tr>
                <td><?= $row->id; ?></td>
                <td><?= $row->tipo; ?></td>
                <td>
                    <a href="editar_tipo.php?id=<?= $row->id; ?>&tipo=<?= $row->tipo; ?>">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td><a href="deletar_tipo.php?id=<?= $row->id; ?>"onclick="return confirm('Deseja Realmente Excluir?')"><i class="glyphicon glyphicon-trash danger"></i></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<a href="inserir_tipo.php"><button class="btn btn-success " type="submit">Inserir Novo <i class="glyphicon glyphicon-ok"></i> </button ></a>

<?php include_once './footer.php'; ?>
