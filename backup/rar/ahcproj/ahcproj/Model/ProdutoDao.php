<?php

class ProdutoDao {

    public function create(Produto $p) {

        $sql = 'INSERT INTO Produtos (produto_infor1,produto_infor2,produto_infor3,produto_infor4,produto_imgs) VALUES (?,?,?,?,?)';
        
        // usando '::' pois getConn() é estático.
        $insert = Conexao::getConn()->prepare($sql);

        // associando valores do objeto aos binds(interrogações no codigo sql acima)
        $insert->bindValue(1, $p->getInfor1());
        $insert->bindValue(2, $p->getInfor2());
        $insert->bindValue(3, $p->getInfor3());
        $insert->bindValue(4, $p->getInfor4());
        $insert->bindValue(5, $p->getImgs());

        $insert->execute();
    }

    // tentei deixar o CRUD mais ou menos encaminhado, mas só testei o create.
    public function read() {
       
        $sql = 'SELECT * FROM Produtos';

        // pelo que eu entedi stmt == statement
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt-> execute();

        if($stmt->rowCount() > 0) {// verifica se algum elemento foi retornado.
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC); //retorna um array com todos os elementos.
            return $resultado;
        } 
        else return [];

    }

    public function update(Produto $p) {
        $sql = 'UPDATE produtos SET produto_infor1 = ?, produto_infor2 = ?, produto_infor3 = ?, produto_infor4 = ?, produto_imgs = ?';

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $p->getInfor1());
        $stmt->bindValue(2, $p->getInfor2());
        $stmt->bindValue(3, $p->getInfor3());
        $stmt->bindValue(4, $p->getInfor4());
        $stmt->bindValue(5, $p->getImgs());

        $stmt->execute();
    }

    public function delete($id) {
        $sql = 'DELETE FROM produtos WHERE id = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }

}