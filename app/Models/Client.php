<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 2019/3/6
 * Time: 16:47
 */

namespace App\Models;




use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
/**
 * 添加客户
 */
    public function addClient($array)
    {
        $this->name =$array['name'];
        $this->surname =$array['surname'];
        $this->password =md5($array['password']);
        $this->email =$array['email'];
        $this->client_role =$array['client_role'];
        $this->status = 1;
        $this->save();
    }
}