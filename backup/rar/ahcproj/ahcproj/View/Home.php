<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando</title>
</head>
<body>
    <form method="POST" action="../Controller/ctrl_Produto.php" enctype="multipart/form-data">
        <h2>Enviando arquivos para a base de dados</h2>

        <input type="text" name="infor1" placeholder="infor1">
        <input type="text" name="infor2" placeholder="infor2">
        <input type="text" name="infor3" placeholder="infor3">
        <input type="text" name="infor4" placeholder="infor4">
        <input type="file" name="img">

        <button type="submit" name="submit">Cadastrar</button>
    </form>
</body>
</html>