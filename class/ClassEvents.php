<?php
namespace Classes;

use Models\ModelConect;

class ClassEvents extends ModelConect
{
    #Traz os eventos do BD
    public function getEvents()
    {
        $b=$this->conectDB()->prepare("select * from events");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }

    #Criar evento e inserir no banco
    public function createEvent($id,$nome,$telefone,$email,$start,$end,$servico,$title,$description,$color)
    {
        $b=$this->conectDB()->prepare("insert into events values (?,?,?,?,?,?,?,?,?,?)");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->bindParam(2, $nome, \PDO::PARAM_STR);
        $b->bindParam(3, $telefone, \PDO::PARAM_STR);
        $b->bindParam(4, $email, \PDO::PARAM_STR);
        $b->bindParam(5, $start, \PDO::PARAM_STR);
        $b->bindParam(6, $end, \PDO::PARAM_STR);
        $b->bindParam(7, $servico, \PDO::PARAM_STR);
        $b->bindParam(8, $title, \PDO::PARAM_STR);
        $b->bindParam(9, $description, \PDO::PARAM_STR);
        $b->bindParam(10, $color, \PDO::PARAM_STR);
        $b->execute();
    }

    #Buscar eventos pelo id
    public function getEventsById($id)
    {
        $b=$this->conectDB()->prepare("select * from events where id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->execute();
        return $f=$b->fetch(\PDO::FETCH_ASSOC);
    }

    #Listar eventos
    public function readEvents($parametros)
    {
        $crud;
        $b=$this->conectDB()->prepare("select * from events order by start asc limit 100");
        $b->execute();
        $this->crud = $b;
        return $this->crud;
    }

    #Update no banco de dados
    public function updateEvent($id,$nome,$telefone,$email,$start,$end,$servico,$title,$description,$color)
    {
        $b=$this->conectDB()->prepare("update events set nome=?, telefone=?, email=?, start=?, end=?, servico=?, title=?, description=?, color=? where id=?");
        $b->bindParam(1, $nome, \PDO::PARAM_STR);
        $b->bindParam(2, $telefone, \PDO::PARAM_STR);
        $b->bindParam(3, $email, \PDO::PARAM_STR);
        $b->bindParam(4, $start, \PDO::PARAM_STR);
        $b->bindParam(5, $end, \PDO::PARAM_STR);
        $b->bindParam(6, $servico, \PDO::PARAM_STR);
        $b->bindParam(7, $title, \PDO::PARAM_STR);
        $b->bindParam(8, $description, \PDO::PARAM_STR);
        $b->bindParam(9, $color, \PDO::PARAM_STR);
        $b->bindParam(10, $id, \PDO::PARAM_INT);
        $b->execute();
    }
    #Deletar no banco de dados
    public function deleteEvent($id)
    {
        $b=$this->conectDB()->prepare("delete from events where id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->execute();
    }
}

