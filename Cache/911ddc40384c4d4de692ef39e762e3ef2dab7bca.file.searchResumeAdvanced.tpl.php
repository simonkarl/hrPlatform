<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-27 13:25:31
         compiled from "/web/www/hrPlatform/Lib/Resume/Tpl/Resume/searchResumeAdvanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90079306254c7214bb6d749-38420127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911ddc40384c4d4de692ef39e762e3ef2dab7bca' => 
    array (
      0 => '/web/www/hrPlatform/Lib/Resume/Tpl/Resume/searchResumeAdvanced.tpl',
      1 => 1422336321,
    ),
  ),
  'nocache_hash' => '90079306254c7214bb6d749-38420127',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="">

    <div class="contentTableHeader">简历关键字搜索列表</div>
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

            <tr class="tableContentTrTag" onclick='window.location.href = "<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/resume/resumeDetail/?id=<?php echo $_smarty_tpl->tpl_vars['results']->value['resume_id'];?>
"'>
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


</div>

<div style="text-align: center; margin-top: 30px; font-size: 16px;">

    <?php echo $_smarty_tpl->getVariable('fenye')->value;?>

</div>