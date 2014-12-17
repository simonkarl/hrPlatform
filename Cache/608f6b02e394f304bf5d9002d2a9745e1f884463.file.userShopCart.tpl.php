<?php /* Smarty version Smarty-3.0-RC2, created on 2014-09-24 14:58:40
         compiled from "/web/www/AMC/Lib/User/Tpl/User/userShopCart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133704596754226ba00608d0-72744725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '608f6b02e394f304bf5d9002d2a9745e1f884463' => 
    array (
      0 => '/web/www/AMC/Lib/User/Tpl/User/userShopCart.tpl',
      1 => 1411541726,
    ),
  ),
  'nocache_hash' => '133704596754226ba00608d0-72744725',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['userShops'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userShop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['userShops']->key => $_smarty_tpl->tpl_vars['userShops']->value){
?>
	
	名称:<?php echo $_smarty_tpl->tpl_vars['userShops']->value['commodity_name'];?>
 <br />
	价格:<?php echo $_smarty_tpl->tpl_vars['userShops']->value['commodity_cost'];?>
 <br />
	材质:<?php echo $_smarty_tpl->tpl_vars['userShops']->value['texture'];?>
 <br />
	数量:<?php echo $_smarty_tpl->tpl_vars['userShops']->value['commodity_number'];?>
 <br />
	删除:<?php echo $_smarty_tpl->tpl_vars['userShops']->value['shop_cart_id'];?>
 <br />


<?php }} ?>