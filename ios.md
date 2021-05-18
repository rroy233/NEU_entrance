#URL改写教程（iOS）

**目录 **

[TOC]




##实现思路
使用手机上的网络调试工具，利用其HTTPS解密+URL改写，将某一网站强行重定向至自己制定的网站。最终效果为无论是在微信扫码还是智慧东大扫码，都会强制跳转到假码地址。

##获取软件
需要使用的软件是Shadowrocket（付费软件，以下简称`小火箭`），此软件仅在iOS平台。
说明：其他类似的软件也可实现本文所说的效果，但本文仅以Shadowrocket作说明。
####（1）自行购买
适合有非国区 ID，充钱可找某宝。
使用美区（其他海外区或许也许吧） ID在App Store搜索`Shadowrocket`，支付US$2.99，下载安装。

####（2）找身边的会翻墙的iOS用户
小火箭是iOS平台上著名的代理工具，iOS翻墙用户可能会用到，找身边的人问问。

####（3）其他平台购买
火箭少女小卖部：https://www.rocketgirls.space/product/2.html
其他

##配置
####填写信息
进入https://neu.roy233.com 完整填写信息

填写完后点击“拷贝shadowrocket配置”
![IMG_8886](https://i.loli.net/2021/05/18/fXCug8zibyFtvPp.jpg)



####配置URL重写
打开小火箭。
> 新版本的小火箭默认关闭了第三方键盘的使用和剪贴板检测，需前往小火箭的设置里找到这两项然后开启

进入【配置页面】
点击右上角的➕，将刚才拷贝的地址粘贴进去。
![IMG_8898](https://i.loli.net/2021/05/18/NivJPncmAKZOLWC.jpg)

点击“下载”后，地址就添加到了“远程文件”列表中，点击地址，选择“使用配置”。这时本地文件就会多出一个“test.conf”，这就是我们所需要的配置文件，里面已经包含了的假码生成的地址。

点击“test.conf”，如图操作
![IMG_8899](https://i.loli.net/2021/05/18/HztuVAnG24bYBJI.jpg)


####配置HTTPS解密（重要）
进入到配置的编辑页面，点击URL重写下面的HTTPS解密，点击开关，如下图
![IMG_8900](https://i.loli.net/2021/05/18/mT8UJ9v4hsNp32a.jpg)
![IMG_8901](https://i.loli.net/2021/05/18/uS78gQ3cbhW4sKi.jpg)

这时会让你安装证书，照下图操作
![IMG_8902](https://i.loli.net/2021/05/18/FEBT8ceu3vxAy1j.jpg)

点击允许
![IMG_8903](https://i.loli.net/2021/05/18/Hi9KwfgoOezhIv7.jpg)

这时需要打开手机的【设置】，飞行模式上面会多出个“已下载的描述文件”，点击进入，点击安装
![IMG_8904](https://i.loli.net/2021/05/18/1C7orqNKTBltcFb.jpg)

输入手机密码，再点击安装，安装。显示“已安装描述文件”时还没完，进入【设置】->【通用】->【关于本机】->【证书信任设置】，把刚才安装的证书勾上。

回到小火箭，这时如果是下面的页面，说明成功了。
![IMG_8905](https://i.loli.net/2021/05/18/WNZfew72V1idcP4.jpg)


然后按左上角的对号保存。

回到小火箭的首页，全局路由选择“配置”，可点击上面的开关进行开启，这时系统就能够将那个域名重定向到通行许可的地址了。
![13.JPEG](https://i.loli.net/2020/11/17/4ygKrI1BZPsavtR.jpg)

**注意：完成以上操作后如果需要进行修改假码生成的信息或重新导入配置等操作，HTTPS解密的证书可能会被清除，请务必重复上面所有的步骤，确保HTTPS解密的证书为“系统已信任”状态！**

##测试效果
在已开启VPN的条件下，点开
测试项1(南湖操场)：https://e-report.neu.edu.cn/incoming/register2?actual_vehicle=0&entrance_id=75
测试项2(南湖操场)：http://apps.neu.edu.cn:8000/personal-health/incoming/register?entrance_id=75
测试项3(南湖南门)：https://e-report.neu.edu.cn/incoming/register?entrance_id=2&actual_vehicle=0

##使用方法
1.将生成通行许可拷贝的链接，粘贴到小火箭的URL重写设置项里(更改同理，见上文)。
2.全局路由选配置，点开上面的开关（即开启VPN）。
3.使用微信或智慧东大测试一下
4.~~正面刚门卫大叔~~
