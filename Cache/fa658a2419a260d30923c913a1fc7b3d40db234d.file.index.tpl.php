<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-20 13:23:35
         compiled from "/web/www/AMC/Lib/Home/Tpl/Home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198288925754446fd65aed38-17244710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa658a2419a260d30923c913a1fc7b3d40db234d' => 
    array (
      0 => '/web/www/AMC/Lib/Home/Tpl/Home/index.tpl',
      1 => 1413782449,
    ),
  ),
  'nocache_hash' => '198288925754446fd65aed38-17244710',
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
    
    <body data-spy="scroll" data-target="#main-nav" data-offset="400">
 
        
        <?php $_template = new Smarty_Internal_Template('_header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

        <!-- ==============================================
        HEADER
        =============================================== -->
        
        <!-- ==============================================
        FEATURES
        =============================================== -->
        
        <!-- ==============================================
        SERVICES
        =============================================== -->
        
        <!-- ==============================================
        TEAM
        =============================================== -->

        
        <!-- ==============================================
        PORTFOLIO
        =============================================== -->
 
        

        
        <!-- ==============================================
        PRICES
        =============================================== -->
        
        <!-- ==============================================
        FOOTER
        =============================================== --> 
        <div style=" margin-top: 50px;"></div>
    
         <?php $_template = new Smarty_Internal_Template('_main.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
       



        <?php $_template = new Smarty_Internal_Template('_footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
        


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
        
    </body>
    
</html>
