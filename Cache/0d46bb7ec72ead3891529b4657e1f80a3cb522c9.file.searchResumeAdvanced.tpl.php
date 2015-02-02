<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-27 14:15:08
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Resume/Tpl/Resume/searchResumeAdvanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207210021354c72cec60e342-78861137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d46bb7ec72ead3891529b4657e1f80a3cb522c9' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Resume/Tpl/Resume/searchResumeAdvanced.tpl',
      1 => 1422339297,
    ),
  ),
  'nocache_hash' => '207210021354c72cec60e342-78861137',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<style>
    .tableContentTr{
        text-indent: 20px;
        height: 2.5em;
        line-height: 2.5em;
        border: solid 1px #ccc;
    }

.tableContentTrTag{
    cursor: pointer;

}

.tableContentTrTag:hover{
    cursor: pointer;
    background-color: rgb(241,241,241);

}
</style>

<div style="">
    <?php if ($_smarty_tpl->getVariable('result')->value==''){?>
    <div style=" width: 1170px; min-height: 150x; margin-top: 40px; text-align: center">
        没有符合条件的信息

    </div>

    <?php }else{ ?>
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
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['results']->key => $_smarty_tpl->tpl_vars['results']->value){
?>

                    <tr class="tableContentTrTag" onclick='window.open("<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/resume/resumeDetail/?id=<?php echo $_smarty_tpl->tpl_vars['results']->value['resume_id'];?>
")'>
                        <td><?php echo $_smarty_tpl->tpl_vars['results']->value['sex'];?>
</td>  
                        <td><?php echo $_smarty_tpl->tpl_vars['results']->value['age'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['results']->value['major'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['results']->value['education'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['results']->value['work_year'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['results']->value['address'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['results']->value['update_time'];?>
</td>
                    </tr>
                <?php }} ?>

            </table>

    <?php }?>


</div>

    <div style="text-align: center; margin-top: 30px; font-size: 16px;">
    <?php echo $_smarty_tpl->getVariable('fenye')->value;?>

    </div>

  
