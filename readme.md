##预览
![ss](public/1.png)
![ss](public/2.png)

##功能概述
- 完善的权限管理,每个url权限管理,RBAC模式
- 与代码生成器结合,几乎不用修改代码就可以完成类似一个表情管理功能
- 使用bootstrp为基础的ace模板,美观!
- 数据库iseed逆向生成数据
- 其它开发中

##使用
1. composer install
2. 生成.env文件
3. php artisan migrate --seeder
4. happy enjoy!

##说明
###代码生成器的使用
1. 脚手架生成器:php artisan infyom:scaffold Post
如果要让生成的模型类支持软删除，可以配置config/infyom/laravel_generator.php，开启options.softDelete => true
2. API&脚手架生成器:hp artisan infyom:api_scaffold Post
附录
下面是完整的字段HTML输入类型列表：
- text：htmlType - text
- email：htmlType - email
- number：htmlType - number
- date：htmlType - date
- file：htmlType - file
- password：htmlType - password
- select：htmlType - select：Option 1，Option 2，Option 3
- radio：htmlType - radio：Male，Female
- checkbox：htmlType - checkbox：value
- textarea：htmlType - textarea


###后台开发说明
1. 开发流程:添加权限->添加url->添加菜单(绑定权限)->生成代码->修改逻辑
2. 数据库备份表数据说明:php artisan iseed users
3. 权限名字应用菜单url相同,菜单的(菜单active_url)应为路有前面加/