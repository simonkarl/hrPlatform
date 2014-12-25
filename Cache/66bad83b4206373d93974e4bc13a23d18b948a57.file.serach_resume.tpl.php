<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-25 15:24:52
         compiled from "/web/www/hrPlatform/Lib/Home/Tpl/Home/serach_resume.tpl" */ ?>
<?php /*%%SmartyHeaderCode:961150505549bbbc47f6fd3-63160776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66bad83b4206373d93974e4bc13a23d18b948a57' => 
    array (
      0 => '/web/www/hrPlatform/Lib/Home/Tpl/Home/serach_resume.tpl',
      1 => 1419492170,
    ),
  ),
  'nocache_hash' => '961150505549bbbc47f6fd3-63160776',
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

    width: 100%;
    
}
.sectionLeft{
    background:purple;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;

    width: 25.5%;
}
/*
----------*/

.tableContent{
    width: 90%;
    margin: 0 auto;
    margin-top: 20px;
}
.tableContentTrTag{
    height: 2.5em;
    line-height: 2.5em;
    border: solid 1px #ccc;
}
.tableContentTrTag td{
 /*   border: solid 1px #ccc;*/
    text-indent: 20px;
}
.ContentNameTd{
    font-weight: bold;
}
.tableContent th{
    border: solid 1px #ccc;
}
.contentTableHeader{
    width: 90%;
margin: 0 auto;
height: 2em;
margin-top: 40px;
line-height: 2em;
text-align: center;
text-align: center;
font-size: 1.6em;

}

</style>

<section>
<div style=" min-height: 35em; border: solid 1px #ccc;width: 1170px; margin: 0 auto;">

<article class="wrapSearch">
   <!--  <section class="sectionLeft">01</section> -->
    <section class="sectionRight">

    </section>

</article>

<div style="">

    <div class="contentTableHeader">职位名称数据分析</div>
        <table class="tableContent">
            <tr class="tableContentTrTag">
                <td class="ContentNameTd">职位名称</td>
                <td class="ContentNameTd">公司名称</td>
                <td class="ContentNameTd">招聘人数</td>
                <td class="ContentNameTd">主要招聘地区</td>
                <td class="ContentNameTd">更新日期</td>
            </tr>

            <?php  $_smarty_tpl->tpl_vars['results'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['results']->key => $_smarty_tpl->tpl_vars['results']->value){
?>

             <tr class="tableContentTrTag">
                <td class="ContentNameTd"><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/position/positionDetail/?id=<?php echo $_smarty_tpl->tpl_vars['results']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['results']->value['position_name'];?>
</a></td>
                <td><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/company/companyDetail/?id=<?php echo $_smarty_tpl->tpl_vars['results']->value['company_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['results']->value['company_name'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['results']->value['hiring'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['results']->value['working_place'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['results']->value['update_time'];?>
</td>
            </tr>

            <?php }} ?>

        </table>


</div>

 <div style="text-align: center; margin-top: 30px; font-size: 16px;">

  <?php echo $_smarty_tpl->getVariable('fenye')->value;?>

</div>

</div>
</section>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
