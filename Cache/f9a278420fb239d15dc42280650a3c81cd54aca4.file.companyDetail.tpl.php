<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-22 11:23:51
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Company/Tpl/Company/companyDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185945318554c06d470cb2e1-15729820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a278420fb239d15dc42280650a3c81cd54aca4' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Company/Tpl/Company/companyDetail.tpl',
      1 => 1421400732,
    ),
  ),
  'nocache_hash' => '185945318554c06d470cb2e1-15729820',
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

    width: 1170px; 
     margin: 0 auto; 
     border: solid 1px #ccc;
     border-radius: 5px;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     margin-top: 10px;
}
.companyDetailSectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;
    /*background-color: yellow;*/
    /*width: 100%;*/
    padding-left: 20px;
    
}
.companyDetailSectionLeft{
    background:#fff;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;
    border-right: solid 1px #ccc;
    width: 65%;
    padding-left: 30px;
}

.companyDetailOtherDiv{
    height: 45px;
    line-height: 45px;
    overflow: hidden;
}

.companyTitle{
    /*border: solid 1px red;*/
font-size: 24px;
height: 100px;
line-height: 100px;
}
.companyTitle b{
    /*border-bottom: solid 5px rgb(71,135,191);*/
}

.companyInfo{
   /* border: solid 1px red;*/
}
.companyPosition{
    /*border: solid 1px red;*/
}
.companyPosition b{
    /*border-bottom: solid 3px rgb(71,135,191);*/
    font-size: 18px;
}
.companyOtherPositionTable{
    margin-top: 15px;
   /* border: solid 1px red;*/
    width: 100%;
}
.companyOtherPositionTable tr{
    border: solid 1px #ccc;
    border-right: none;
}
.companyOtherPositionTable tr:hover{
    cursor: pointer;
    background-color: rgb(246,246,246);
}

.companyOtherPositionTable tr td{

    border-left: none;
    font-size: 16px;
    height: 40px;
    line-height: 40px;
}


</style>

<section>

<article class="companyDetailwrap">
    <section class="companyDetailSectionLeft">
    
    <div class="companyTitle">
       <b><?php echo $_smarty_tpl->getVariable('company_name')->value;?>
</b>
    </div>

    <div class="companyInfo">
        <?php echo $_smarty_tpl->getVariable('company_info')->value;?>

    </div>
    <div class="companyPosition">
        <b>本公司热招职位:</b>
        <table class="companyOtherPositionTable">

            <?php  $_smarty_tpl->tpl_vars['otherPositionLists'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('otherPositionList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['otherPositionLists']->key => $_smarty_tpl->tpl_vars['otherPositionLists']->value){
?>
            <tr onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/position/positionDetail/?id=<?php echo $_smarty_tpl->tpl_vars['otherPositionLists']->value['id'];?>
"'>
                <td style="text-indent: 10px;width: 75%;"><?php echo $_smarty_tpl->tpl_vars['otherPositionLists']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['otherPositionLists']->value['company_update_time'];?>
</td>
            </tr>
            <?php }} ?>

        </table>

    </div>

    <div style=" height: 50px;"></div>


    </section>

    <section class="companyDetailSectionRight">
        <div style=" height: 50px;"></div>

        <div class="companyDetailOtherDiv">
            <b>所属领域:</b>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('company_industry')->value;?>

        </div>
        <div class="companyDetailOtherDiv">
            <b>企业规模:</b>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('company_scale')->value;?>

        </div>
        <div class="companyDetailOtherDiv">
            <b>企业性质:</b>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('company_nature')->value;?>

        </div>

    </section>

</article>

</section>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
