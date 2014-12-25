<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-23 11:24:33
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/User/Tpl/User/personRegister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1138029925498e0719909b8-99354350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cddd9478d0da8d38dc040fd4a5bfe67589cfa027' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/User/Tpl/User/personRegister.tpl',
      1 => 1419304957,
    ),
  ),
  'nocache_hash' => '1138029925498e0719909b8-99354350',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<style>
.personReWarp{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.personResectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;

    width: 100%;
    
}
.personResectionLeft{
    background:purple;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;

    width: 25.5%;
}
</style>

<section>
<div style=" min-height: 35em; border: solid 1px #ccc;width: 1170px; margin: 0 auto;">

<article class="personReWarp">
   <!--  <section class="personResectionLeft">01</section> -->
    <section class="personResectionRight">
                    个人注册
    </section>

</article>

<div style=" height: 30px;"></div>

</div>
</section>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
