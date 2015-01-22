<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-22 11:04:12
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/advancedSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86762399254c068ac27f790-65058861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f35604e109598d51b16b66c9f9b6eb4a0d9b79e' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/advancedSearch.tpl',
      1 => 1421895849,
    ),
  ),
  'nocache_hash' => '86762399254c068ac27f790-65058861',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<style>
.advSearchWarp{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.advSectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;

    width: 263%;
    
}
.advSectionLeft{
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
line-height: 2em;
text-align: center;
text-align: center;
font-size: 1.6em;

}

.filter{
font-size: 14px;
font-weight: bold;
text-indent: 10px;
height: 40px;
line-height: 40px;
}
.chooseCat{
    font-weight: normal;
padding-left: 90px;
font-size: 14px;
}
.cancel{
    margin-left: 87%;
    cursor: pointer;
    display: none;
    color: rgb(211,47,38);
}
.confim{
    margin-top: -30px;
text-align: right;
margin-right: 30px;
cursor: pointer;
font-weight: bold;
color: rgb(71,135,191);
display: none;
}
</style>

<section>
<div style=" min-height: 30em;width: 1170px; margin: 0 auto; border: solid 1px #ccc; border-radius: 5px;-webkit-border-radius: 5px;-moz-border-radius: 5px;margin-top: 10px;">

<article class="advSearchWarp">

    <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/advancedSearch' method="get" id='formAdvanced' name='formAdvanced'>


   <!--  <section class="sectionLeft">01</section> -->
    <section class="advSectionRight">

        <div style=" margin-top: 20px;">


            <div class="panel panel-info" style=" width: 1170px;">
              <div class="panel-heading">
                <h3 class="panel-title" style=" text-align: center">高级搜索数据列表</h3>
              </div>
              <div class="panel-body">

                    <table class="tableContent" style=" margin-top: 20px;">
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

            <div style=" text-align: center; margin-top: 20px;"><?php echo $_smarty_tpl->getVariable('fenye')->value;?>
</div>

          </div>
        </div>

        </div>

    </div>

    </section>

</form>

</article>

<div style=" height: 30px;"></div>

</section>

<script>


</script>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
