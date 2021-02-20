<?php

namespace Homework\model;

class Vendedor extends \Homework\inc\DB
{
    public function select()
    {
        return $this->getCon()
            ->query('SELECT * FROM vendedor')
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectOne($id)
    {
        return $this->getCon()
            ->query("SELECT * FROM vendedor WHERE id = $id")
            ->fetch();
    }

    public function insert($nome, $email)
    {
        return $this->getCon()
            ->prepare('INSERT INTO vendedor (nome, email) VALUES (?, ?)')
            ->execute([$nome, $email]);
    }

    public function update($nome, $email, $id)
    {
        return $this->getCon()
            ->prepare('UPDATE vendedor SET nome = ?, email = ? WHERE id = ?')
            ->execute([$nome, $email, $id]);
    }

    public function delete($id)
    {
        return $this->getCon()
            ->prepare('DELETE FROM vendedor WHERE id = ?')
            ->execute([$id]);
    }
}
