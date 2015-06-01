文件夹及文件名说明
admin     管理员目录
	->addAdmin.php        添加管理员
	->addArticle.php      添加文章
	->addCate.php         添加分类
	->addUser.php         添加用户
	->doAdminAction.php   后台提交处理文件
	->doLogin.php         登录处理文件
	->editAdmin.php       编辑管理员
	->editArticle.php     编辑文章
	->editCate.php        编辑分类
	->editUser.php        编辑用户    
	->footer.php          后台页面底部文件
	->getCaptcha.php      获取验证码
	->header.php          后台页面头部文件
	->index.php           后台首页
	->listAdmin.php       管理员列表
	->listArticle.php     文章列表
	->listCate.php        分类列表
	->listUser.php        用户列表
	->login.php           登录页面
	->manager.php         网站管理页面
configs   配置文件目录
	->configs             配置文件
core      核心处理目录
	->admin.inc.php       管理员处理文件
	->article.inc.php     文章处理文件
	->cate.inc.php 	      分类处理文件
	->comment.inc.php     评论处理文件
	->user.inc.php 	      用户处理文件
css       css目录
data      数据库目录
fonts     字体目录
images    图片目录
js        javascript目录
lib       函数库目录
	->common.func.php     公共函数库
	->image.func.php      图片函数库
	->mysql.func.php      数据库操作函数库
	->page.func.php       分页函数库
	->string.func.php     字符串函数库
	->upload.func.php     文件上传函数库
plugins   插件目录



其他说明：

/admin
默认管理员账号：admin
默认管理员密码：admin

/configs/configs.php
默认数据库账号：root
默认数据库密码:125478

存在的漏洞：1.验证码无法存在session中
	    2.md5()无法加密，所以取消了
