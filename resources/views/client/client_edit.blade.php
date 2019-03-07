<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">添加菜单</h4>
        </div>
        <form action="{{route('admin.client.update')}}" method="post" class="form-horizontal">
            <div class="modal-body">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{$client->id}}">
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户姓:</label>
                    <div class="col-sm-9">
                        <input type="text" name="surname" id="form-field-1" value="{{$client->surname}}"  class="col-xs-10 col-sm-10">
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户名:</label>
                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" value="{{$client->name}}" name="name"  class="col-xs-10 col-sm-10">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email:</label>
                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" value="{{$client->email}}" name="email"  class="col-xs-10 col-sm-10">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户角色:</label>
                    <div class="col-sm-9">
                        <input type="text" id="form-field-1" name="client_role" value="{{$client->client_role}}"  class="col-xs-10 col-sm-10">
                    </div>
                </div>
            </div>
            <div class="modal-footer" >
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </form>
    </div>
</div>