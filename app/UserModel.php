<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class UserModel extends Model  {

 protected $table = 'tbluser';

 protected $fillable = [ 'username', 'password', 'gender'];

 protected $primaryKey = 'id';

}
