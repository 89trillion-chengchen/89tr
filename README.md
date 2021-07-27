# 1.整体思路
1.post获取算式  
2.校验post请求是否为空  
3.校验算式是否合法
4.按照加减乘除运算优先级进行算式的进栈出栈操作
5.得出结果
### 流程图

![Image text](https://raw.githubusercontent.com/89trillion-chengchen/89tr/master/%E6%B5%81%E7%A8%8B%E5%9B%BE.jpg)


# 2.存储设计
# 3.接口设计

## 输入算数表达式进行计算 
###请求方法  
```php 
HTTP POST
```
### 接口地址   
```php 
http://localhost:8000/ctrl/operation.php  
```
### 响应
```php 
1+5*3+2=18
```
# 逻辑分层
```php 
代码分为 ctrl层、report层、service层  
ctrl层为入口
report层为压力测试
service层为具体逻辑实现
```
# 4.运行
 ```php
部署apache端口为8000运行即可  
 ```
