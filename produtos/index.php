<?php
include '../includes/conexao.php';
$sql = "select * from produtos";

$resultado = $conexao->query($sql);
mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
</head>

<body>
    <h1 class="text-center titulo text-white">Sistema de Cadastro</h1> <br>
    <div class="container"> 
        <div class="row">
            <?php include '../includes/menu.php'; ?>
            <div class="col-9 dados">
                <h3 class="text-center">Lista de produtos</h3>
                <a href="adicionar.php" class="btn btn-success btn-smv ">Adicionar</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">categoria</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($item = mysqli_fetch_object($resultado)) { ?>
                            <tr>
                                <th scope="row"><?php echo $item->id; ?> </th>
                                <td><?php echo $item->nome; ?> </td>
                                <td><?php echo $item->categoria; ?> </td>
                                <td><?php echo $item->preco; ?> </td>
                                <td>
                                    <a href="" class="btn btn-secondary btn-sm">Editar</a>
                                    <a href="" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>