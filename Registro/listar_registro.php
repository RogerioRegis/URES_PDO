<?php
include '../connect.php';

$res = pg_query("SELECT * from registrotipo order by name");

include_once '../header.php';
include_once '../menu.php';
?>

<title>SICAES</title>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Tipo</th>
            <?php if ($_SESSION['permissao'] == 2): ?>
                <th>Editar</th>
                <th>Excluir</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            <tr>
                <td><?= $row->id; ?></td>
                <td><?= $row->name; ?></td>
                <td><?= $row->tipo; ?></td>
                <td> 
                    <?php if ($_SESSION['permissao'] == 2): ?>
                        <a href="editar_registro.php?id=<?= $row->id; ?> & name=<?= $row->name; ?> & tipo_id<?= $row->tipo_id; ?>">
                            <i class="glyphicon glyphicon-edit"></i>
                        </a>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if ($_SESSION['permissao'] == 2): ?>
                        <a href="deletar_registro.php?id=<?= $row->id; ?>"
                           onclick="return confirm('Deseja Realmente Excluir?')"><i class="glyphicon glyphicon-trash danger"></i>
                        </a> <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<?php if ($_SESSION['permissao'] == 2): ?>
    <a href="inserir_registro.php"><button class="btn btn-success " type="submit">Inserir Novo <i class="glyphicon glyphicon-ok"></i> </button ></a>
<?php endif; ?>

<?php
include_once '../footer.php';
