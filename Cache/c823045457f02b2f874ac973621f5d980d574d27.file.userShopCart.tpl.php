<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-21 10:08:52
         compiled from "/Users/Lev/Sites/AMC/Lib/User/Tpl/User/userShopCart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12591221445445c0342bebe3-11094022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c823045457f02b2f874ac973621f5d980d574d27' => 
    array (
      0 => '/Users/Lev/Sites/AMC/Lib/User/Tpl/User/userShopCart.tpl',
      1 => 1413788172,
    ),
  ),
  'nocache_hash' => '12591221445445c0342bebe3-11094022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<style>
.tableStyle{
	border: solid 1px #ccc;
	width: 101%;
	margin-top: 40px;
}
th{
	height: 45px;
	line-height: 45px;
	padding-left: 10px;
	background-color: #eee;
}
tr{
	height: 35px;
	line-height: 35px;
}
td{
	padding-left: 10px;
}

</style>

<table border="1" class="tableStyle">
	  <tr>
    <th>名称</th>
    <th>价格</th>
    <th>材质</th>
    <th>数量</th>
    <th>删除</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['userShops'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userShop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['userShops']->key => $_smarty_tpl->tpl_vars['userShops']->value){
?>

  <tr>
  	<td><?php echo $_smarty_tpl->tpl_vars['userShops']->value['commodity_name'];?>
</td>
  	<td><?php echo $_smarty_tpl->tpl_vars['userShops']->value['texture'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['userShops']->value['commodity_cost'];?>
</td>
  	<td><?php echo $_smarty_tpl->tpl_vars['userShops']->value['commodity_number'];?>
</td>
  	<!-- <td><?php echo $_smarty_tpl->tpl_vars['userShops']->value['shop_cart_id'];?>
</td> -->
    <td>删除</td>
  </tr>

<?php }} ?>
</table>