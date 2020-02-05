<?php


namespace Cuveen\Model;


class User extends Model
{
    public function all()
    {
        $this->db->get('users');
    }
}