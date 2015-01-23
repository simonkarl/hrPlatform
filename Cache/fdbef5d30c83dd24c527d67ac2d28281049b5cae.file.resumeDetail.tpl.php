<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-23 11:25:26
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Resume/Tpl/Resume/resumeDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47987131854c1bf26ae2311-85423995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdbef5d30c83dd24c527d67ac2d28281049b5cae' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Resume/Tpl/Resume/resumeDetail.tpl',
      1 => 1421983524,
    ),
  ),
  'nocache_hash' => '47987131854c1bf26ae2311-85423995',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<style>
.companyDetailwrap{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.companyDetailSectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
    /*background-color: yellow;*/
    /*width: 100%;*/
    background-color: #ccc;
    
}
.companyDetailSectionLeft{
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    width: 100%;;
    font-size: 14px;
}

/*.companyDetailSectionLeft table{
    border:solid 1px rgb(221,221,221);
}

.companyDetailSectionLeft table tr{
    height: 40px;
    line-height: 40px;
}
.companyDetailSectionLeft table tr td{
     border:solid 1px rgb(221,221,221);
}
.resumeTitle{
    font-size: 18px;
    font-weight: bold;
}



.resumeContentTable{
    width: 100%;
}

.hintTd{
    width: 85px;
    padding-right: 10px;

        text-align:justify;
      text-justify:distribute-all-lines;
      text-align-last:justify;
      -moz-text-align-last:justify;
      -webkit-text-align-last:justify;

      color: rgb(76,76,76);
      font-weight: bold;

}

.hintTd span{ display: inline-block; padding-left: 100%; }*/


.resumeWarp{
    margin-top: 10px;
    width: 820px;
    min-height: 30em;
    border:solid 2px rgb(56,117,185);
    margin: 0 auto;
    margin-top: 30px;
}
.personInfo{

    width: 98%;
    border: solid 1px rgb(56,117,185);
    margin: 0 auto;
    margin-top: 10px;
    padding: 10px;
}
.personInfo .name{
font-size: 24px;
font-weight: bold;
border-bottom: dashed 1px rgb(56,117,185);
height: 50px;
line-height: 50px;
padding-left: 10px;
}
.ageExperience b{
    color: rgb(56,117,185);
    margin-left: 15px;
    height: 40px;
    line-height: 40px;
    font-size: 14px;
}

.privacyInfo{
padding-left: 15px;
}
.privacyInfo span{

}

.addressStyle{
    height: 30px;
line-height: 30px;
    padding-left: 15px;

}
.contentSpan{
    padding-left: 20px;
}


.workRecently{
    width:98%;
    margin: 0 auto;
    height:200px;
    display:-moz-box;
    display:-webkit-box;
    display:box;

}
.recentlyCompanyInfo{
     /*background:orange;*/
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
width: 50%;
padding: 10px;
}
.recentlyEducationInfo{
    /*background:purple;*/
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    width: 50%;
    padding: 10px;
}

.catroyTitle{
    color: rgb(56,117,185);
    margin-left: 15px;
    height: 40px;
    line-height: 40px;
    font-size: 16px;
    font-weight: bold;
}
.catroyTitle b{
    font-size: 14px;
    color: rgb(96,96,96);
    margin-left: 10px;
}

.resumeTitle{
    border-bottom: solid 1px rgb(56,117,185);;
width: 98%;
margin: 0 auto;
font-size: 16px;
font-weight: bold;
padding-left: 25px;
height: 40px;
line-height: 40px;
color: rgb(56,117,185);

}
.ziwopingjia{
    width: 98%;
    margin: 0 auto;
    padding-left: 25px;
    margin-top: 10px;
}
.workDescribe{
    padding-left: 15px;
    width: 98%;
    margin: 0 auto;
}
.toolStyle{
    height: 80px;
    margin-bottom: 20px;
    text-align: center;
    background-color: rgb(241,241,241);

}

</style>

<body style=" background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/body-bg.jpg');">
<section>
<div style="  min-height: 35em; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border: solid 1px #bbb;width: 1170px; margin: 0 auto; margin-top: 10px;">

<article class="companyDetailwrap">
    <section class="companyDetailSectionLeft">
    <div class="toolStyle">
            <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-print"></span>  打印
            </button>
            <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-star"></span> 收藏
            </button>
            <button type="button" class="btn btn-info btn-lg">
              HireLib评测报告
            </button>
            <button type="button" class="btn btn-primary btn-lg">
              购买此简历
            </button>

    </div>

    <div class="resumeWarp">
        <div class="personInfo">
            <div class="name">ID:<?php echo $_smarty_tpl->getVariable('resume_id')->value;?>
</div>
            <div class="ageExperience">
                <b><?php echo $_smarty_tpl->getVariable('gongzuojingyan')->value;?>
</b><b><?php echo $_smarty_tpl->getVariable('xingbei')->value;?>
</b><b><?php echo $_smarty_tpl->getVariable('birth')->value;?>
</b>
            </div>
<!--             <table class="personInfoTable">
                <tr><td>居住地：</td><td>上海浦东</td><td>户口：</td><td>湖南</td></tr>
                <tr><td>电话：</td><td></td><td>Email：</td><td></td></tr>
            </table> -->

            <div class='addressStyle'>
                <span class="titleSpan">居住地:</span>
                <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('juzhudi')->value;?>
</span>
                <span class="titleSpan" style=" margin-left: 30%;">户口:</span> 
                <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('hukou')->value;?>
</span>
            </div>
            <div class="privacyInfo">
                <div style=" height: 30px;line-height: 30px;">
                    <span class="titleSpan">电&nbsp;&nbsp;&nbsp;&nbsp;话:</span> 
                    <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('phone')->value;?>
--</span>
                </div>
                <div style=" height: 30px;line-height: 30px;">
                    <span class="titleSpan">邮&nbsp;&nbsp;&nbsp;&nbsp;箱:</span> 
                    <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('email')->value;?>
--</span>
                </div>
            </div>
        </div>

            <article class="workRecently">
                <section class="recentlyCompanyInfo">
                    <div class="catroyTitle">最近工作<b>[3年10个月]</b></div>
                    <div class="addressStyle">
                        <span class="titleSpan">公司:</span>
                        <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('company')->value;?>
</span>
                    </div>
                    <div class="addressStyle">
                        <span class="titleSpan">行业:</span>
                        <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('hangye')->value;?>
</span>
                    </div>
                    <div class="addressStyle">
                        <span class="titleSpan">职位:</span>
                        <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('zhiwei')->value;?>
</span>
                    </div>
                    <div class="addressStyle">
                        <span class="titleSpan">年薪:</span>
                        <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('annual')->value;?>
</span>
                    </div>
                </section>
                <section class="recentlyEducationInfo">

                    <div class="catroyTitle">最高学历</div>
                    <div class="addressStyle">
                        <span class="titleSpan">学历:</span>
                        <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('xueli')->value;?>
</span>
                    </div>
                    <div class="addressStyle">
                        <span class="titleSpan">专业:</span>
                        <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('zhuanye')->value;?>
</span>
                    </div>
                    <div class="addressStyle">
                        <span class="titleSpan">学校:</span>
                        <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('school')->value;?>
</span>
                    </div>

                </section>
            </article>

            <div class="resumeTitle">自我评价</div>
            <div class="ziwopingjia"><?php echo $_smarty_tpl->getVariable('ziwopingjia')->value;?>
</div>

            <div class="resumeTitle">求职意向</div>
            <div style=" padding: 10px; padding-left: 25px;">
                <div class="addressStyle">
                    <span class="titleSpan">期望薪资:</span>
                    <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('qiwangyuexin')->value;?>
面议</span>
                </div>
                <div class="addressStyle">
                    <span class="titleSpan">期望行业:</span>
                    <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('xiwanghangye')->value;?>
</span>
                </div>
                <div class="addressStyle">
                    <span class="titleSpan">目标地点:</span>
                    <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('mubiaodidian')->value;?>
</span>
                </div>
                <div class="addressStyle">
                    <span class="titleSpan">到岗时间:</span>
                    <span class="contentSpan"><?php echo $_smarty_tpl->getVariable('daogangshijian')->value;?>
</span>
                </div>
            </div>


            <div class="resumeTitle">工作经历</div>
        <div style=" padding: 10px;">
            <?php  $_smarty_tpl->tpl_vars['results'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('work_experiencesArray')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['results']->key => $_smarty_tpl->tpl_vars['results']->value){
?>
            <div style="padding-left: 25px;height: 40px;line-height: 40px;">
                <span><b><?php echo $_smarty_tpl->tpl_vars['results']->value['company_work_data'];?>
</b></span>
                <span style=" margin-left: 10px;"> <?php echo $_smarty_tpl->tpl_vars['results']->value['company'];?>
 </span>
                <span style=" margin-left: 10px;"> 少于50人 </span>
                <span style=" margin-left: 10px;"> [<?php echo $_smarty_tpl->tpl_vars['results']->value['company_work_time'];?>
]</span>
             </div>
            <div class="addressStyle">
                <span class="titleSpan" style=" padding-left: 10px;">所属行业:</span>
                <span class="contentSpan" style=" padding-left: 10px;"><?php echo $_smarty_tpl->tpl_vars['results']->value['hangye'];?>
</span>
            </div>
            <div class="addressStyle">
                <span class="titleSpan" style=" padding-left: 10px;"><b><?php echo $_smarty_tpl->tpl_vars['results']->value['bumen'];?>
</b></span>
                <span class="contentSpan" style=" padding-left: 10px;"><b><?php echo $_smarty_tpl->tpl_vars['results']->value['zhiwei'];?>
</b></span>
            </div>
            <div class="workDescribe"><?php echo $_smarty_tpl->tpl_vars['results']->value['gongzuojieshao'];?>
</div>
            <?php }} ?>
        </div>



            <div class="resumeTitle">教育经历</div>
            <div style=" height: 40px; line-height: 40px;">
                <span style=" padding-left: 35px;">
                    <?php echo $_smarty_tpl->getVariable('studyTime')->value;?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('school')->value;?>
</span>
               <span style=" padding-left: 25px;"><?php echo $_smarty_tpl->getVariable('xueli')->value;?>
</span>
               <span style=" padding-left: 25px;"><?php echo $_smarty_tpl->getVariable('zhuanye')->value;?>
</span>
            </div>

    </div>

    <div style=" height: 30px;"></div>
    <div class="toolStyle">
            <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-print"></span>  打印
            </button>
            <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-star"></span> 收藏
            </button>
            <button type="button" class="btn btn-info btn-lg">
              HireLib评测报告
            </button>
            <button type="button" class="btn btn-primary btn-lg">
              购买此简历
            </button>

    </div>
    </section>

    <section class="companyDetailSectionRight">

    </section>

</article>

</div>
</section>

</body>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
