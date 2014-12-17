<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-21 09:17:51
         compiled from "/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/artShop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11470035835445b43f85da46-11090357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515108ac7c3b5052cb466b7f5f6b78cd24ec06c1' => 
    array (
      0 => '/Users/Lev/Sites/AMC/Lib/Home/Tpl/Home/artShop.tpl',
      1 => 1413854266,
    ),
  ),
  'nocache_hash' => '11470035835445b43f85da46-11090357',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <head>


         <?php $_template = new Smarty_Internal_Template('_jsCssStyle.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
        
        
    </head>
  
  <style>

.shopStyle{
    /*border: solid 1px red;*/
    width: 90%;
    margin: 0 auto;
    /*min-height: 300px;*/
}
.leftProduce{
    width: 40%;
   /* min-height: 200px;*/
    /*border: solid 1px red;*/
    margin-left: 5%;
    text-align: center;

}
.rightProduce{
    width: 40%;
    margin-top: -51.5%;
    /*border: solid 1px red;*/
    margin-left: 55%;
    text-align: center;
}

.price{
    color: red;
    font-weight: bold;
}


  </style>
    <body data-spy="scroll" data-target="#main-nav" data-offset="400">
 
        
        <?php $_template = new Smarty_Internal_Template('_header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        <section id="pricing" class="gray-bg padding-top-bottom">
        
            <div class="container" style="margin-top: 150px;">
            
                <h1 class="section-title">艺术商店</h1>
                <p class="section-description">你还可以购买以下艺术品</p>
                
                <div class="shopStyle">


                    <?php  $_smarty_tpl->tpl_vars['shops'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['shops']->key => $_smarty_tpl->tpl_vars['shops']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['shops']->key;
?>


                     <?php if (($_smarty_tpl->tpl_vars['k']->value+1)%2==1){?>

                      <div class="leftProduce">
                
                     <?php }else{ ?>


                      <div class="rightProduce">

                     <?php }?>


                      <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->tpl_vars['shops']->value['commodity_logo'];?>
" alt=""/>
                                
                                <h2></h2>
                                <div class="price">RMB <?php echo $_smarty_tpl->tpl_vars['shops']->value['commodity_cost'];?>
</div>
                                <div><?php echo $_smarty_tpl->tpl_vars['shops']->value['commodity_name'];?>
</div>
                               
                                <div>材质：<?php echo $_smarty_tpl->tpl_vars['shops']->value['texture'];?>
</div>
                                <a class="btn btn-qubico"href="javascript:void(0)" onclick="addShopingCart('<?php echo $_smarty_tpl->tpl_vars['shops']->value['commodity_id'];?>
')">加入购物车</a>
                    </div>


                    <?php }} ?>
                   
                </div>

                <div style="width: 980px;margin: 0 auto;
                    text-align: right; cursor: pointer">

                    <a style=" color:#000;" onclick='window.location.href="<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/moreShop"'>更多商品</a>
                </div>

            </div><!-- End container -->
            
        </section>

        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>


 <script>

        function addShopingCart(goodsId){


            //0未登录 1为登录

            var $able_login = '<?php echo $_smarty_tpl->getVariable('whether_login')->value;?>
';

           if ($able_login == 0) {

            alert("请先到个人中心进行登录");

           }else{

            $.ajax({
                 type: "post",
                 url: "<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/Commodity/addCart",
                 data: {

                    id:goodsId
                 },
                 success: function(res){
                    if (res ==1) {
                        alert("商品已经添加到购物车");
                    };
                 },
                 error: function(){
                  alert("网络异常");
                 }
             });
           }

        }

        </script>

