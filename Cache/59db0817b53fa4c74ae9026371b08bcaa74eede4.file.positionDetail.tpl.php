<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-15 11:00:33
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Position/Tpl/Position/positionDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125382569954b72d518f3c82-55674956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59db0817b53fa4c74ae9026371b08bcaa74eede4' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Position/Tpl/Position/positionDetail.tpl',
      1 => 1421290831,
    ),
  ),
  'nocache_hash' => '125382569954b72d518f3c82-55674956',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<style>
.wrapSearch{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.sectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
    /*background-color: yellow;*/
    /*width: 100%;*/
    padding-left: 20px;
    
}
.sectionLeft{
    background:#fff;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    /*background-color: rgb(250,250,250);*/
    width: 65%;;
    padding-left: 30px;

    border-right: solid 2px rgb(241,241,241);
}
.postionLabel{
    height: 50px;
    font-size: 22px;
    line-height: 50px;
    color: rgb(44,62,80);
    overflow: hidden;
}
.titleBorder{
    /*border-bottom: solid 5px rgb(71,135,191);*/
}
.otherBorder{
    /*border-bottom: solid 2px rgb(71,135,191);*/
    color: rgb(49,49,49);
    padding-right: 10px;
}   
.table{
    border: solid 1px rgb(221,221,221);
    margin-top: 30px;    
}
.table tr td {
        border: solid 1px rgb(221,221,221);
        color:rgb(44,62,80);
        
}
.job_description{
   /* border: solid 1px red;*/
}

.onlineResume{
     height: 60px; 
     line-height: 60px; 
     background-color: rgb(242,242,242); 
     font-weight: bold; 
     text-indent: 20px;
     margin-top: 20px;
}
.resumeBtn{
    height: 45px;
    width: 110px;
    border: none;
    font-weight: bold;
    color: #fff;
    font-size: 24px;
    background-color: rgb(71,135,191);
    margin-top: 50px;
}

.companyBorder{
    /*border-bottom: solid 3px rgb(71,135,191);*/
}
.companyDiv{
     height: 80px;
     line-height: 80px;
     font-size: 24px;
     text-align: center;
}
.companyOtherDiv{
    height: 45px;
    line-height: 45px;
    overflow: hidden;
}
.companyOtherDiv a{
    font-weight: normal;
}


</style>

<section>
<div style="min-height: 35em; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border: solid 1px #ccc;width: 1170px; margin: 0 auto; margin-top: 10px;">

<article class="wrapSearch">
    <section class="sectionLeft">
        <div style=" height: 45px;"></div>
        <div class="postionLabel"><b class="titleBorder">职位名称:</b>&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('job_name')->value;?>
</div>

            <table class="table">
                <tr>
                    <td><b class="otherBorder">薪资:</b><?php echo $_smarty_tpl->getVariable('salary_range')->value;?>
</td>
                    <td><b class="otherBorder">学历:</b><?php echo $_smarty_tpl->getVariable('formal_schooling')->value;?>
</td>
                </tr>
                <tr>
                    <td><b class="otherBorder">工作经验:</b><?php echo $_smarty_tpl->getVariable('work_year')->value;?>
</td>
                    <td><b class="otherBorder">工作地点:</b><?php echo $_smarty_tpl->getVariable('working_place')->value;?>
</td>
                </tr>
                <tr>
                    <td><b class="otherBorder">发布时间:</b><?php echo $_smarty_tpl->getVariable('created_at')->value;?>
</td>
                    <td><b class="otherBorder"></b></td>
                </tr>
            </table>

        <div class="job_description">
            <?php echo $_smarty_tpl->getVariable('job_description')->value;?>

        </div>

<!--         <div class="onlineResume">可在线投递简历</div>

        <div style="text-align: right;">
            <button type="button" class="resumeBtn">投简历</button>
        </div> -->
        <div style=" height: 40px;"></div>
    </section>

    <section class="sectionRight">
         <div style=" height: 50px;"></div>
        <div class="companyOtherDiv">
            <b>公司名称:</b>
            <a style="color: rgb(71,135,191); font-weight: bold;" href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/company/companyDetail/?id=<?php echo $_smarty_tpl->getVariable('company_id')->value;?>
'>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('company_name')->value;?>
</a>
        </div>

        <?php ob_start();?><?php echo $_smarty_tpl->getVariable('company_industry')->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>

            <div class="companyOtherDiv">
                <b>所属领域:</b>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('company_industry')->value;?>

            </div>

        <?php }else{ ?>

        <?php }?>

        <?php ob_start();?><?php echo $_smarty_tpl->getVariable('company_scale')->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>

            <div class="companyOtherDiv">
                <b>企业规模:</b>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('company_scale')->value;?>

            </div>

        <?php }else{ ?>

        <?php }?>


        <?php ob_start();?><?php echo $_smarty_tpl->getVariable('company_website')->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>

            <div class="companyOtherDiv">
                <b>公司网址:</b>&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="color: rgb(71,135,191);" href='<?php echo $_smarty_tpl->getVariable('company_website')->value;?>
'><?php echo $_smarty_tpl->getVariable('company_website')->value;?>
</a>

            </div>

        <?php }else{ ?>

        <?php }?>


        <?php ob_start();?><?php echo $_smarty_tpl->getVariable('company_nature')->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?>

            <div class="companyOtherDiv">
                <b>企业性质:</b>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('company_nature')->value;?>

            </div>

        <?php }else{ ?>

        <?php }?>



        <?php ob_start();?><?php echo $_smarty_tpl->getVariable('company_address')->value;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5){?>

            <div class="companyOtherDiv" style=" overflow: inherit">
                <b>公司地址:</b>&nbsp;&nbsp;&nbsp;&nbsp;<span style=" font-weight: normal"><?php echo $_smarty_tpl->getVariable('company_address')->value;?>
</span>
            </div>

        <?php }else{ ?>

        <?php }?>

    </section>

</article>

</div>
</section>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
