<?php
$form = "

<!DOCTYPE html>
<html lang='zh-cmn-Hans'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no'/>
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
  <meta name='renderer' content='webkit'>
  <meta http-equiv='Cache-Control' content='no-siteapp'/>
  <title>生成通行许可</title>
  <link rel='stylesheet' href='css/mdui.min.css?v=0.4.3'/>
  <link rel='icon' href='favicon.ico' type='image/x-icon'>
  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
  <link rel='stylesheet' href='css/docs.css?v=20170815'/>
  <script src='js/clipboard.min.js'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-88818678-1');
</script>

</head>
<body class='mdui-appbar-with-toolbar  mdui-theme-primary-indigo mdui-theme-accent-pink'>
  
  
<header class='mdui-appbar mdui-appbar-fixed'>
  <div class='mdui-toolbar mdui-color-theme'>
    <a href='' class='mdui-typo-title'>生成通行许可&nbsp;<span style='font-size: 1.5em;'>🥺</span></a>
    <div class='mdui-toolbar-spacer'></div>
  </div>
</header>

<div class='mdui-container doc-container doc-no-cover'>
  <div class='mdui-container'>
 <p>此页面仅供研究学习，请勿滥用！</p>
<!--        作者:Roy      -->
<!-- https://t.me/rroy233 -->
<form action='' method='GET'>
<div class='mdui-textfield mdui-textfield-floating-label'>
  <label class='mdui-textfield-label'>姓名</label>
  <input class='mdui-textfield-input' type='text' name='name' value='小猪佩奇' id='f_name' required/>
</div>

<div class='mdui-textfield mdui-textfield-floating-label'>
  <label class='mdui-textfield-label'>学号</label>
  <input class='mdui-textfield-input' type='text' name='id' pattern='[1-9]\d*' value='1970250' id='f_id' required/>
  <div class='mdui-textfield-error'>学号格式错误</div>
</div>

<div class='mdui-textfield mdui-textfield-floating-label'>
  <label class='mdui-textfield-label'>入口名(格式:xx校区xx门)</label>
  <input class='mdui-textfield-input' type='text' name='entrance' value='浑南校区西门' id='f_entrance' required/>
</div>

<br>

<div class='mdui-col'>
    <button class='mdui-btn mdui-ripple' id='pro_btn' onclick='show()' type='button'><i class='mdui-icon material-icons'>&#xe86f;</i>启用高级选项</button>
</div>

<div style='display: none;' id='pro_func'>
    <br>
    <div class='mdui-typo-headline'>高级选项</div>
    <div class='mdui-typo-body-1'>此时预览或拷贝链接前往的页面样式将被指定按这两个参数来生成！请您务必知道其可能带来的后果，若不知道，请刷新页面并不要开启高级选项！</div>
    <div class='mdui-textfield mdui-textfield-floating-label' id='color_div'>
      <label class='mdui-textfield-label'>颜色(HEX颜色代码)</label>
      <input class='mdui-textfield-input' type='text' name='n_color' value='006633' id='f_color' disabled='disabled' pattern='^((?!#).)*$' required/>
        <div class='mdui-textfield-error'>格式错误(不含#)</div>
    </div>
    
    
    <div class='mdui-textfield mdui-textfield-floating-label' id='icon_div'>
      <label class='mdui-textfield-label'>图标名(前往fontawesome图标库拷贝icon name)</label>
      <input class='mdui-textfield-input' type='text' name='n_icon' value='arrow-circle-up' id='f_icon' disabled='disabled'required/>
    </div>

</div>

<br>
<div class='mdui-col'>
    <button class='mdui-btn mdui-btn-block mdui-color-pink-accent mdui-ripple' type='submit'>预览</button>
</div>
</form>

<br><div class='mdui-divider'></div><br>

<div class='mdui-col'>
    <button class='mdui-btn mdui-btn-block mdui-color-blue-200' id='c_btn' onclick='copy()' type='button'><i class='mdui-icon material-icons'>&#xe14d;</i>拷贝链接</button>
</div>




 </div>
 
</div>



<script src='js/mdui.min.js?v=0.4.3'></script>
<script>
  function copy(){
    var name = document.getElementById('f_name').value;
    var id = document.getElementById('f_id').value;
    var entrance = document.getElementById('f_entrance').value;
    var copy_btn = document.getElementById('c_btn');
    var pro_func = document.getElementById('pro_func');
    var text = '已拷贝至剪切板';
    copy_btn.removeAttribute('onclick');
    
    
    
    if(pro_func.style.display=='none'){
        copy_btn.setAttribute('data-clipboard-text',document.URL+'?name='+encodeURI(name)+'&id='+encodeURI(id)+'&entrance='+encodeURI(entrance));
    }else{
        var color = document.getElementById('f_color').value;
        var icon = document.getElementById('f_icon').value;
        copy_btn.setAttribute('data-clipboard-text',document.URL+'?name='+encodeURI(name)+'&id='+encodeURI(id)+'&entrance='+encodeURI(entrance)+'&n_color='+encodeURI(color)+'&n_icon='+encodeURI(icon));
        text = '拷贝成功！当样式更新时请勿再使用此链接！！';
    }
    
    new ClipboardJS('#c_btn');
    copy_btn.innerHTML = text;
    
    
    document.getElementById('c_btn').click();
    
    if(pro_func.style.display=='none'){
        copy_btn.setAttribute('class','mdui-btn mdui-btn-block mdui-color-blue-50');
        copy_btn.setAttribute('disabled','disabled');
    }else{
        copy_btn.setAttribute('class','mdui-btn mdui-btn-block mdui-color-red-900');
    }
    
  }
  
  function show(){
    var pro_func = document.getElementById('pro_func');
    var color_input = document.getElementById('f_color');
    var icon_input = document.getElementById('f_icon');
    
    pro_func.setAttribute('style','');
    
    color_input.removeAttribute('disabled');
    icon_input.removeAttribute('disabled');
    
    var color_div = document.getElementById('color_div');
    var icon_div = document.getElementById('icon_div');
    color_div.setAttribute('class','mdui-textfield mdui-textfield-floating-label mdui-textfield-not-empty');
    icon_div.setAttribute('class','mdui-textfield mdui-textfield-floating-label mdui-textfield-not-empty');
    
    var pro_btn = document.getElementById('pro_btn');
    pro_btn.setAttribute('disabled','disabled');
    pro_btn.innerHTML='已启用高级选项';
    
  }
</script>
<script>var $$ = mdui.JQ;</script>
";



$name ="小猪佩奇";
$entrance="";
if($_GET['name']!=''){
    $name=explode('/',$_GET['name']);
    $name=$name[0];
}
if($_GET['entrance']!=''){
    $entrance=explode('/',$_GET['entrance']);
    $entrance=$entrance[0];
}

$code = '
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="MajEeDolbsAEd7y6ck04VoHAUeicLYuATEB8dRmG">
    <title>东北大学测温验证平台</title>
    <link href="visitor.css?id=e292e3fdbf052c4098f0" rel="stylesheet">
    <style>
        @-webkit-keyframes pulse {
            50% {
                -webkit-transform: scale3d(1.2, 1.2, 1.2);
                transform: scale3d(1.2, 1.2, 1.2);
            }
        }
        @keyframes  pulse {
            50% {
                -webkit-transform: scale3d(1.2, 1.2, 1.2);
                transform: scale3d(1.2, 1.2, 1.2);
            }
        }
        .list-group {
            padding: 1em;
        }
        .list-group-item {
            font-size: 1.4em;
            padding: 0.1em;
            border: 0px;
        }
    </style>
</head>
<body>

<div id="app">
    <div class="card border-0 text-center" style="color: #{color}">
        <div class="card-body">
            <h2 class="card-title p-2">东北大学通行验证</h2>
            <!--        作者:Roy      -->
            <!-- https://t.me/rroy233 -->
            <div class="animated infinite pulse p-2">
                <i class="fas fa-{icon}" style="font-size: 14em;"></i>
            </div>

            <p class="card-text p-2" style="font-size: 1.3em;">
                时间：'.date('Y-m-d H:i:s', time()).'
            </p>
        </div>
    </div>

    <ul class="list-group list-group-flush" style="background-color: #{color}">
        <li class="list-group-item bg-transparent text-white d-flex">
            <div style="min-width: 4em; text-align-last: justify;">学工号</div>：<div>'.htmlspecialchars($_GET['id']).'</div>
        </li>
        <li class="list-group-item bg-transparent text-white d-flex">
            <div style="min-width: 4em; text-align-last: justify;">姓名</div>：<div>'.htmlspecialchars($name).'</div>
        </li>
        <li class="list-group-item bg-transparent text-white d-flex">
            <div style="min-width: 4em; text-align-last: justify;">验证位置</div>：<div>'.htmlspecialchars($entrance).'</div>
        </li>
        <li class="list-group-item bg-transparent text-white d-flex">
            <div style="min-width: 4em; text-align-last: justify;">进出状态</div>：<div>进入</div>
        </li>
            </ul>
</div>
</body>
</html>
';

if($_GET['n_color'] =='' or $_GET['n_icon']==''){
    $code = str_replace('{color}','006633',$code);
    $code = str_replace('{icon}','arrow-circle-up',$code);
}else{
    $code = str_replace('{color}',htmlspecialchars($_GET['n_color']),$code);
    $code = str_replace('{icon}',htmlspecialchars($_GET['n_icon']),$code);
}



if ($_GET['name'] == "") {
   echo $form;
} else {
   echo $code;
}


?>

