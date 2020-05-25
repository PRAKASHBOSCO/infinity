<?php
namespace Models;

use Models\BaseModel;

class User extends BaseModel
{

    protected $primaryKey = 'id';

    protected $table = 'user';

    const CREATED_AT = null;
    const UPDATED_AT = null;
}
?>