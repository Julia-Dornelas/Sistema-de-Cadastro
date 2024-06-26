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
                <h3>Lista de clientes</h3>
                <a href="adicionar.php" class="btn btn-success btn-smv ">Adicionar</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Júlia</td>
                            <td>julia@gmail.com</td>
                            <td>
                                <a href="" class="btn btn-secondary btn-sm">Editar</a>
                                <a href="" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Júlia</td>
                            <td>julia@gmail.com</td>
                            <td>
                                <a href="" class="btn btn-secondary btn-sm">Editar</a>
                                <a href="" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Júlia</td>
                            <td>julia@gmail.com</td>
                            <td>
                                <a href="" class="btn btn-secondary btn-sm">Editar</a>
                                <a href="" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


    </div>



    <?php include '../includes/js.php'; ?>
</body>

</html>