<?php
include './conect.php';

$res = pg_query("SELECT * from registrotipo where tipo_id = 3");
?>

<?php include_once './header.php'; ?>
<?php include_once './menu.php'; ?>

<title>Secundarista</title>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            <tr>
                <td><?= $row->id; ?></td>
                <td><?= $row->name; ?></td>
                <td><?= $row->tipo; ?></td>
                <td><a href="editar_nome.php?id=<?= $row->id; ?>&name=<?= $row->name; ?>"><i class="glyphicon glyphicon-pencil"></i>
    <!--                        <button class="btn btn-info" type="submit">Editar<i class="glyphicon glyphicon-pencil"></i></button >-->
                    </a>
                </td>
                <td><a href="deletar_estud.php?id=<?= $row->id; ?>"

                       onclick="return confirm('Deseja Realmente Excluir?')"><i class="glyphicon glyphicon-trash danger"></i></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<a href="inserir.php"><button class="btn btn-success " type="submit">Inserir Novo <i class="glyphicon glyphicon-ok"></i> </button ></a>

<?php include_once './footer.php'; ?>