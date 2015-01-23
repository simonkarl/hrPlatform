<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-23 10:50:09
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/serach_position.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98969840454c1b6e1da8749-54785210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6083164775fb88bff7aacf86274a712256416e49' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/serach_position.tpl',
      1 => 1421981407,
    ),
  ),
  'nocache_hash' => '98969840454c1b6e1da8749-54785210',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>



<style>

.positionWarpDiv{
    width: 1170px;
    margin: 0 auto;
    border: solid 1px rgb(221,221,221);
         border-radius: 5px;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
}

.positionWrapContent{
    width:100%;
    display:-moz-box;
    display:-webkit-box;
    display:box;
}
.positionSectionOne{
    border-right: solid 1px rgb(221,221,221);
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
    width: 50%;
}
.positionSectionTwo{
    width: 50%;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
}
.contentTitle{
    font-size: 18px;
font-weight: bold;
height: 40px;
line-height: 40px;
padding-left: 30px;
}
.contentContent{
    padding-left: 30px;
    margin-top: 10px;
    line-height: 25px;
    cursor: pointer;
}
.contentContent div span{
    padding-left: 10px;
    color: rgb(143,159,171);
    font-weight: bold;
}   
.chartWarp{
    width: 100%;
    border: solid 1px rgb(221,221,221);
    border-left: none;
    border-right: none;
}
.topResume{
    width: 100%;
    border-bottom: solid 1px rgb(221,221,221);  
}
.topCompany{
    width: 100%;
}
.titleCenter{
        font-size: 18px;
font-weight: bold;
height: 40px;
text-align: center;
line-height: 40px;
}


.tableContent{
    width: 90%;
    margin: 0 auto;
    margin-top: 10px;
    margin-bottom: 20px;
}
.tableContentTr{
    text-indent: 20px;
    height: 2.5em;
    line-height: 2.5em;
    border: solid 1px #ccc;
}
.tableContentTrTag{
    height: 2.5em;
    line-height: 2.5em;
    border: solid 1px #ccc;
    cursor: pointer;
}
.tableContentTrTag:hover{
    height: 2.5em;
    line-height: 2.5em;
    border: solid 1px #ccc;
    cursor: pointer;
    background-color: rgb(241,241,241);
}

.tableContentTrTag td{
 /*   border: solid 1px #ccc;*/
    text-indent: 20px;
}
.ContentNameTd{
    font-weight: bold;
}
</style>

<body style=" background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/body-bg.jpg');">
<section>

    <div style="height: 50px;
line-height: 50px;
width: 1170px;
margin: 0 auto;
font-size: 20px;
font-weight: bold;
text-align: center;">关于<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
职位</div>
<div class="positionWarpDiv">
    <article class="positionWrapContent">
    <section class="positionSectionOne">
        <div class="contentTitle">资讯推送</div>
        <div style="padding-left: 30px; margin-top: 5px;">你可能对以下咨询或推送信息感兴趣...</div>
        <div class="contentContent">
            <div>
                <a onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfoDetail"'>1.茫茫人海中如何找到你的"Ta"</a>
            </div>
            <div>
                <a onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfoDetail"'>2.互联网行业近几年发展趋势图标分析</a>
            </div>
            <div style="margin-bottom: 5px;">
                <a onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/pushInfoDetail"'>3.互联网行业招聘"潜规则" 行业趋势以及图标分析</a>
            </div>
        </div>

    </section>
    <section class="positionSectionTwo">
        <div class="contentTitle">基本参考</div>
        <div class="contentContent" style=" margin-top: 0px;">
            <div>平均学历:<span><?php echo $_smarty_tpl->getVariable('education')->value;?>
</span></div>
            <div>平均薪资:<span><?php echo $_smarty_tpl->getVariable('compensation')->value;?>
</span></div>
            <div>平均工作年限:<span><?php echo $_smarty_tpl->getVariable('work_experience')->value;?>
</span></div>
            <div>
                面试及智能评分:&nbsp;&nbsp;<a>精选面试题目及答案</a>
            </div>
        </div>
    </section>
    </article>

    <div class="chartWarp">
        <div class="titleCenter">最来<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
职位需求人数趋势</div>

        <?php ob_start();?><?php echo $_smarty_tpl->getVariable('xArray')->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==''){?>

            <div style=" font-size: 18px; text-align: center; margin-top: 30px;margin-bottom: 30px; height:45px;line-height: 45px; background-color: rgb(241,241,241); ">暂无数据</div>
        <?php }else{ ?>

            <div style=" width: 70%; margin: 0 auto; margin-bottom: 20px;">
            <canvas id="canvas" height="100" width="300"></canvas>
            </div>

        <?php }?>

    </div>


    <div class="topResume">
        <div class="titleCenter">精选<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
TOP5简历</div>

        <?php if ($_smarty_tpl->getVariable('top_resumeArray')->value!=''){?>
        <table class="tableContent">
            <tr class="tableContentTr">
                <td class="ContentNameTd">性别</td>
                <td class="ContentNameTd">年龄</td>
                <td class="ContentNameTd">专业</td>
                <td class="ContentNameTd">学历</td>
                <td class="ContentNameTd">工作经验</td>
                <td class="ContentNameTd">居住地</td>
                <td class="ContentNameTd">更新日期</td>
            </tr>

            <?php  $_smarty_tpl->tpl_vars['results'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('top_resumeArray')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['results']->key => $_smarty_tpl->tpl_vars['results']->value){
?>

             <tr class="tableContentTrTag" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/resume/resumeDetail/?id=<?php echo $_smarty_tpl->tpl_vars['results']->value['resume_id'];?>
"'>
                    <td><?php echo $_smarty_tpl->tpl_vars['results']->value['sex'];?>
</td>  
                    <td><?php echo $_smarty_tpl->tpl_vars['results']->value['age'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['results']->value['zhuanye'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['results']->value['xueli'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['results']->value['gongzuonianxian'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['results']->value['juzhudi'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['results']->value['gengxinshijian'];?>
</td>
               
            </tr>
            <?php }} ?>
        </table>

        <?php }else{ ?>

            <div style=" font-size: 18px; text-align: center; margin-top: 30px;margin-bottom: 30px; height:45px;line-height: 45px; background-color: rgb(241,241,241); ">暂无数据</div>

        <?php }?>

    </div>


    <div class="topCompany">
        <div class="titleCenter">热招<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
的TOP5公司</div>

        <?php if ($_smarty_tpl->getVariable('top_companyArray')->value!=''){?>
        <table class="tableContent">

            <tr class="tableContentTr">
                <td class="ContentNameTd">公司名称</td>
                <td class="ContentNameTd">学历要求</td>
                <td class="ContentNameTd">薪资待遇</td>
            </tr>


            <?php  $_smarty_tpl->tpl_vars['results'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('top_companyArray')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['results']->key => $_smarty_tpl->tpl_vars['results']->value){
?>


             <tr class="tableContentTrTag" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/company/companyDetail/?id=<?php echo $_smarty_tpl->tpl_vars['results']->value['id'];?>
"'>
                <td class="ContentNameTd"><?php echo $_smarty_tpl->tpl_vars['results']->value['company_name'];?>
</td>
                <td class="ContentNameTd">本科</td>
                <td class="ContentNameTd">面议</td>
            </tr>

            <?php }} ?>

        </table>

        <?php }else{ ?>

            <div style=" font-size: 18px; text-align: center; margin-top: 30px;margin-bottom: 30px; height:45px;line-height: 45px; background-color: rgb(241,241,241); ">暂无数据</div>

        <?php }?>

    </div>
</div>

<script>

var  xArray = eval('<?php echo $_smarty_tpl->getVariable('xArray')->value;?>
')

var  yArray = eval('<?php echo $_smarty_tpl->getVariable('yArray')->value;?>
')

    $(function(){

        var lineChartData = {
            labels : xArray,
            datasets : [
                {
                    label: "My First dataset",
                    fillColor : "rgba(220,220,220,0.2)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    pointHighlightFill : "#fff",
                    pointHighlightStroke : "rgba(151,187,205,1)",
                    data :  yArray
                }
            ]

        }

    window.onload = function(){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = new Chart(ctx).Line(lineChartData, {
            responsive:  true
        });
    }

    })

    </script>

</section>
</body>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

