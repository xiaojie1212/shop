@extends('layouts.app')

@section('content')

    <div class="page-content">
        <div class="page-header">
            <h1>
                客户管理
                <small>
                    <i class="icon-double-angle-right"></i>
                     客户列表
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <a class="btn btn-primary pull-right" data-toggle="modal" data-target="#addUser" style="margin-bottom: 10px">添加新客户</a>

                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <span class="lbl">序号</span>
                                        </label>
                                    </th>
                                    <th>全名</th>
                                    <th>邮箱</th>
                                    <th>客户角色</th>
                                    <th>
                                        创建时间
                                    </th>
                                    <th class="hidden-480">状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($client as $k=>$v)
                                    <tr class="">
                                        <td class="center">
                                            <label>
                                                <span class="lbl">{{$k+1}}</span>
                                            </label>
                                        </td>

                                        <td>
                                            {{$v->name}}
                                        </td>
                                        <td>{{$v->email}}</td>
                                        <td>{{$v->client_role}}</td>
                                        <td class="hidden-480">{{$v->created_at}}</td>
                                        <td class="hidden-480">
                                            @if($v->status==1)
                                            已启用
                                                @else
                                            未启用
                                                @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a data-toggle="modal"  data-target="#mmmm" class="btn btn-xs btn-info" href="{{url('admin/client/edit',['id'=>$v->id])}}">
                                                    <i class="icon-edit bigger-120">编辑</i>
                                                </a>
                                                <a class="btn btn-xs btn-danger" data-toggle="modal"  data-target="#confirm-delete" data-href="{{url('admin/client/delete',['id'=>$v->id])}}">
                                                        <i class="icon-trash bigger-120">删除</i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /span -->
                </div><!-- /row -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">添加客户</h4>
                </div>
                <form action="{{route('admin.client')}}" method="post" class="form-horizontal">
                    <div class="modal-body">
                        <div class="modal-body">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户姓:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="surname" id="form-field-1"  class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户名:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" id="form-field-1"  class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 密码:</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" id="form-field-1"  class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" id="form-field-1" name="email"  class="col-xs-10 col-sm-10">
                                </div>
                            </div>
                            <div class="space-4"></div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal edit远程数据-->
    <div class="modal fade" tabindex="-1" role="dialog" id="mmmm" aria-labelledby="myModalLabel">
    </div>
    <!-- Modal 远程数据-->
@endsection
@section('script')
    <script>
        $("#mmmm").on("hidden.bs.modal", function() {
            $(this).removeData("bs.modal");
        });
    </script>
@endsection