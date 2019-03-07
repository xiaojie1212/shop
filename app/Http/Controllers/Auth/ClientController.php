<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 2019/3/6
 * Time: 16:45
 */

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\ClientRole;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //客户列表
    public function client_list()
    {
        return view('client.client_list')->withClient(Client::paginate(15));
    }
    //客户添加
    public function add_client(Client $client,Request $request)
    {
        $client->addClient($request->all());
        return redirect('admin/client')->withClientRole(ClientRole::get());
    }
    //编辑客户视图
    public function client_edit(Client $client,$id)
    {
        if(!$id) return false;
        return view('client.client_edit')->withClient($client->find($id))->withClients(Client::get());
    }


    //删除菜单
    public function client_delete(Client $client,$id){
        if(!$id) return false;
        $client->destroy($id);
        return redirect('admin/client');
    }
}