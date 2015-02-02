<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-29 11:25:42
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Resume/Tpl/Resume/searchResume.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73401053754c9a8361c75a0-54697555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '872d73b754f8b7d51d25d5ba8583898310f69529' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Resume/Tpl/Resume/searchResume.tpl',
      1 => 1422337503,
    ),
  ),
  'nocache_hash' => '73401053754c9a8361c75a0-54697555',
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

<body style=" background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/body-bg.jpg');">
    <section>
        <div style=" min-height: 35em; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border: solid 1px #ccc;width: 1170px; margin: 0 auto; margin-top: 10px;">

            <article class="wrapSearch">
                <!--  <section class="sectionLeft">01</section> -->
                <section class="sectionRight">

                </section>

            </article>

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

        </div>
    </section>
</body>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
