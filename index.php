<?php

if($_GET['ios_conf']==1){
    ios_conf();
}elseif ($_GET['name'] == "") {
   show_form();
} else {
   show_passport();
}

function ios_conf(){
    //ios配置文件生成 2021年05月18日
    $conf_file_data = file_get_contents("template/shadowrocket.conf");
    $url = "https://neu.roy233.com/?name=".urlencode($_GET['name'])."&id=".urlencode($_GET['id'])."&entrance=".urlencode($_GET['entrance']);
    if($_GET['c_color'] !='' or $_GET['b_icon'] !=''){
        $url = $url."&c_color=".$_GET['c_color']."&b_icon=".$_GET['b_icon'];
    }
    $conf_file_data = str_replace('{{url_replace}}',$url,$conf_file_data);
    header('content-disposition: attachment; filename='.$_GET['name']."_".$_GET['entrance'].".conf");
    header('content-type: application/octet-stream; charset=utf-8');
    echo $conf_file_data;
}
function show_form(){
    echo file_get_contents("template/form.tpl");
}
function show_passport(){
    $tpl = file_get_contents("template/passport.tpl");
    
    $name ="李子維";
    $entrance="";
    if($_GET['name']!=''){
        $name=explode('/',$_GET['name']);
        $name=$name[0];
    }
    if($_GET['entrance']!=''){
        $entrance=explode('/',$_GET['entrance']);
        $entrance=$entrance[0];
        
        $entrance=explode(':',$entrance);
        $entrance=$entrance[0];
    }

    $tpl = str_replace('{{time}}',date('Y-m-d H:i:s', time()),$tpl);
    $tpl = str_replace('{{name}}',htmlspecialchars($name),$tpl);
    $tpl = str_replace('{{id}}',htmlspecialchars($_GET['id']),$tpl);
    $tpl = str_replace('{{entrance}}',htmlspecialchars($entrance),$tpl);

    if($_GET['c_color'] =='' or $_GET['b_icon']==''){
        $tpl = str_replace('{{color}}','006633',$tpl);
        $tpl = str_replace('{{icon}}','arrow-circle-up',$tpl);
    }else{
        $icon=explode('/',$_GET['b_icon']);
        $icon=$icon[0];
        $icon=explode(':',$icon);
        $icon=$icon[0];
        $tpl = str_replace('{{color}}',htmlspecialchars($_GET['c_color']),$tpl);
        $tpl = str_replace('{{icon}}',htmlspecialchars($icon),$tpl);
    }
    echo $tpl;
}
?>

