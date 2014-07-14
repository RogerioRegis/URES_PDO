<?php
include './conect.php';

$res = pg_query("SELECT * from users order by login");
?>
<?php include_once './header.php'; ?>
<?php include_once './menu.php'; ?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            <tr>
                <td><?= $row->id; ?></td>
                <td><?= $row->login; ?></td>
                <td><?= $row->senha; ?></td>

                <td>
                    <a href="editar_usuario.php?id=<?= $row->id; ?> & login=<?= $row->login; ?> & senha=<?= $row->senha; ?>">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td><a href="deletar_usuario.php?id=<?= $row->id; ?>"
                       onclick="return confirm('Deseja Realmente Excluir?')"><i class="glyphicon glyphicon-trash danger"></i></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<a href="cadastro.php"><button class="btn btn-success " type="submit">Novo usuário <i class="glyphicon glyphicon-ok"></i> </button ></a>

<?php include_once './footer.php'; ?>