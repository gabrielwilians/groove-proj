<?php
require '../Model/Conexao.php';
require '../Model/Produto.php';
require '../Model/ProdutoDao.php';

if(isset($_POST['submit'])) {
    $file = $_FILES['img'];

    if($file['error'] == 0) {
        $fileNameAndExt = explode('.', $file['name']);
        $fileExt = strtolower(end($fileNameAndExt));

        $allowed = array('jpg','jpeg','png');

        if(in_array($fileExt, $allowed)) {
            $produto = new Produto();
            $produtoDao = new ProdutoDao();

            $fileNewID = uniqid('', true).".".$fileExt;
            $fileDestination = "../Public/imagens/".$fileNewID;
            
            $produto->setInfor1($_POST['infor1']);
            $produto->setInfor2($_POST['infor2']);
            $produto->setInfor3($_POST['infor3']);
            $produto->setInfor4($_POST['infor4']);
            $produto->setImgs($fileDestination);
            
            $produtoDao->create($produto);
            move_uploaded_file($file['tmp_name'], $fileDestination);
            
            header("location: ../View/Home.php?Success");

        } else header("Location: ../View/pageError.php?imgFormat");

    } else header("Location: ../View/pageError.php?upload");
    
}