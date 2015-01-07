<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-25 18:33:53
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Company/Tpl/Company/searchCompany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:463183374549be81187f912-09464548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ad3c0742fa8b369a9eda96ae9120f404d563f5c' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Company/Tpl/Company/searchCompany.tpl',
      1 => 1419502638,
    ),
  ),
  'nocache_hash' => '463183374549be81187f912-09464548',
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
    width: 70%;
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
font-weight: bold;

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

    <div class="contentTableHeader">相关公司名称</div>
        <table class="tableContent">

            <?php  $_smarty_tpl->tpl_vars['results'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['results']->key => $_smarty_tpl->tpl_vars['results']->value){
?>

             <tr class="tableContentTrTag">
                <td class="ContentNameTd"><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/company/companyDetail/?id=<?php echo $_smarty_tpl->tpl_vars['results']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['results']->value['company_name'];?>
</a></td>
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
