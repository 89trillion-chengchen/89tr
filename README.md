# 1.整体思路
1.post获取算式  
2.校验post请求是否为空  
3.校验算式是否合法
4.按照加减乘除运算优先级进行算式的进栈出栈操作
5.得出结果
### 流程图

![Image text](https://raw.githubusercontent.com/89trillion-chengchen/job2/master/images/job2.jpg)


# 2.接口设计

## 输入算数表达式进行计算 
###请求方法  
```php 
HTTP POST
```
### 接口地址   
```php 
http://89tr.chengchen.com/Operation/operation
```
### 响应
```php 
{"status":200,
"msg":"ok",
"data":"1+2+3*3=12"}
```
# 3.目录结构

```php 
.
├── README.md
├── classes
│   ├── ctrl
│   │   ├── CtrlBase.php
│   │   └── OperationCtrl.php
│   ├── entity
│   ├── service
│   │   ├── AnswerService.php
│   │   ├── BaseService.php
│   │   └── OperationService.php
│   ├── unitTest
│   │   ├── OperationServiceTest.php
├── images
│   └── job2.jpg
├── report
│   ├── __pycache__
│   │   └── locustfile.cpython-39.pyc
│   └── locustfile.py
└── webroot
    └── index.php
```
## 3.1 逻辑分层
  ```php
    json文件夹是json文件

    classes/ctrl是请求控制层

    classes/service是业务控制层

    classes/unitTest是测试层

    webroot/index.php是入口
  ```
## 4.运行和测试
### 4.1 如何部署运行服务
  ```php
使用docker运行容器，容器包含 nginx、php、php-fpm

配置文件根目录为项目根目录webroot，运行端口为8000
  ```
### 4.2 如何测试接口
  ```php
  终端进入 report 目录
  运行 locust 
  ```