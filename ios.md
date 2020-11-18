#URL改写教程（iOS）

**目录 **

[TOC]




##实现思路
使用手机上的网络调试工具，利用其HTTPS解密+URL改写，将某一网站强行重定向至自己制定的网站。

##获取软件
需要使用的软件是Shadowrocket（付费软件，以下简称`小火箭`），此软件仅在iOS平台。
说明：其他类似的软件也可实现本文所说的效果，但本文仅以Shadowrocket作说明。
####（1）自行购买
适合有非国区Apple ID，充钱可找某宝。
使用美区（其他海外区或许也许吧）Apple ID在App Store搜索`Shadowrocket`，支付US$2.99，下载安装。

####（2）找身边的会翻墙的iOS用户
小火箭是iOS平台上著名的代理工具，iOS翻墙用户可能会用到，找身边的人问问。

####（3）其他平台购买
火箭少女小卖部：https://www.rocketgirls.space/product/2.html
其他

##配置
####填写信息
建议进入镜像站https://neu.roy233.com 填写并拷贝，否则微信会弹窗。
![](https://i.loli.net/2020/11/17/K5T8R2sWmqMD3xl.jpg)
填写完后点击拷贝链接
粘贴的链接为https://neu.roy233.com 开的(图片和视频中的未改)

####配置URL重写
打开小火箭。
> 新版本的小火箭默认关闭了第三方键盘的使用和剪贴板检测，需前往小火箭的设置里找到这两项然后开启

进入【配置页面】
![](https://i.loli.net/2020/11/17/4skC6UnyVNxdpuj.jpg)
点击红圈的位置->再点击编辑配置，进入下图的页面
![3.JPEG](https://i.loli.net/2020/11/17/vCyeGrpEbwmkNA3.jpg)
首先进入URL重写，点击加号
![4.jpg](https://i.loli.net/2020/11/17/RoyYgKONm6Bzxv1.jpg)
进入编辑页面后，进行配置(共**2个域名**)，以后要改也是改这里（也要修改**2个域名**的）
> URL项：`^https?://e-report.neu.edu.cn`
TO项：（填上一步复制的链接）
类型：`302`

> URL项：`^https?://apps.neu.edu.cn`
TO项：（填上一步复制的链接）
类型：`302`
如下图

![](https://i.loli.net/2020/11/17/6HPDRU9dzAhxia3.jpg)

配置完后点保存。回到下面这个页面。
![3.JPEG](https://i.loli.net/2020/11/17/vCyeGrpEbwmkNA3.jpg)

####配置HTTPS解密（重要）
点击URL重写下面的HTTPS解密，点击开关，如下图
![6.JPEG](https://i.loli.net/2020/11/17/jh79lzuYbiNASkt.jpg)
这时会让你安装证书，照下图操作
![7.JPEG](https://i.loli.net/2020/11/17/rVmaioHuR4yscXC.jpg)
点击安装证书
![8.JPEG](https://i.loli.net/2020/11/17/XFq4dz1A7Zm8uBG.jpg)
点击允许
![9.JPEG](https://i.loli.net/2020/11/17/EgfZISyxHJuzaTW.jpg)
这时需要打开手机的【设置】，飞行模式上面会多出个“已下载的描述文件”，点击进入，点击安装
![10.JPEG](https://i.loli.net/2020/11/17/5WBo3GifTLytXnN.jpg)
输入手机密码，再点击安装，安装。显示“已安装描述文件”时还没完，进入【设置】->【通用】->【关于本机】->【证书信任设置】，把刚才安装的证书勾上。

回到小火箭，这时如果是下面的页面，说明成功了。
![11.JPEG](https://i.loli.net/2020/11/17/WzR8SfcrmPkOsGo.jpg)
在域名一项里输入：
`e-report.neu.edu.cn,apps.neu.edu.cn`
然后按左上角的对号保存。
![12.JPEG](https://i.loli.net/2020/11/17/gdSyrC9tUDi1pAs.jpg)

回到小火箭的首页，全局路由选择“配置”，可点击上面的开关进行开启，这时系统就能够将那个域名重定向到通行许可的地址了。
![13.JPEG](https://i.loli.net/2020/11/17/4ygKrI1BZPsavtR.jpg)

##测试效果
在已开启VPN的条件下，点开
测试项1：https://e-report.neu.edu.cn/incoming/register2?actual_vehicle=0&entrance_id=75
测试项2：http://apps.neu.edu.cn:8000/personal-health/incoming/register?entrance_id=75

##使用方法
1.将生成通行许可拷贝的链接，粘贴到小火箭的URL重写设置项里(更改同理，见上文)。
2.全局路由选配置，点开上面的开关（即开启VPN）。
3.使用微信或智慧东大测试一下
4.~~正面刚门卫大叔~~

