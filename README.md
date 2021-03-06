# oneblog

#使用环境要求

基于tp5。1开发，所以环境要求和tp5.1的一致，

>- PHP >= 5.6.0
>- PDO PHP Extension
>- MBstring PHP Extension



# 目录结构如下：



~~~

├─application           应用目录
│  ├─common             公共模块目录（可以更改）
│  ├─index              前台模块目录
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图目录
│  │  └─ ...            更多类库目录
│  ├─backend            后台模块目录
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
│  │  ├─model           模型目录
│  │  ├─view            视图目录
│  │  └─ ...            更多类库目录
│  │
│  ├─command.php        命令行定义文件
│  ├─common.php         公共函数文件
│  └─tags.php           应用行为扩展定义文件
│
├─config                应用配置目录
│  ├─index              前台模块配置目录
│  │  ├─database.php    数据库配置
│  │  ├─cache           缓存配置
│  │  └─ ...  
│  ├─backend            后台模块配置目录
│  │  ├─database.php    数据库配置
│  │  ├─cache           缓存配置
│  │  └─ ...          
│  │
│  ├─app.php            应用配置
│  ├─cache.php          缓存配置
│  ├─cookie.php         Cookie配置
│  ├─database.php       数据库配置
│  ├─log.php            日志配置
│  ├─session.php        Session配置
│  ├─template.php       模板引擎配置
│  └─trace.php          Trace配置
│
├─route                 路由定义目录
│  ├─route.php          路由定义
│  └─...                更多
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Think类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
│
├─extend                扩展类库目录
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
~~~


#开始使用

## 1.建数据库

~~~
Database Name  oneblog
Database Encoding utf-8 unicode(utf8mb4)
Database Collation  utf8mb4_general_ci 
~~~


## 2.获取源码

从github上下载源代码

~~~

https://github.com/ionecc/oneblog.git

~~~

## 3.使用composer安装依赖

进入项目目录

~~~

composer install

~~~

## 4.生成env配置文件

~~~

APP_DEBUG =  true
APP_TRACE =  true


[DATABASE]
TYPE     =  mysql
HOSTNAME =  127.0.0.1
DATABASE =  oneblog
USERNAME =  root
PASSWORD =  root
HOSTPORT =  3306

~~~

## 5.数据迁移

这里是使用了tp5的数据迁移，不是很理解的线看看官方的文档

~~~



~~~
