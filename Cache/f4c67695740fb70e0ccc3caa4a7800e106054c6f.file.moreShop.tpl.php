<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-20 16:42:22
         compiled from "/web/www/AMC/Lib/Home/Tpl/Home/moreShop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18641798795444caeeaedcb4-87541736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4c67695740fb70e0ccc3caa4a7800e106054c6f' => 
    array (
      0 => '/web/www/AMC/Lib/Home/Tpl/Home/moreShop.tpl',
      1 => 1413782449,
    ),
  ),
  'nocache_hash' => '18641798795444caeeaedcb4-87541736',
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
    margin-top: -54.5%;
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
                    <div class="leftProduce">
                 <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/amc/baozhen.jpg" alt=""/>
                                
                                <h2></h2>
                                <div class="price">RMB 288</div>
                                <div>艺术家李军作品《宠物狗系列》</div>
                                <div>尺寸：39x39cm</div>
                                <div>材质：棉麻面料</div>
                                <a class="btn btn-qubico"href="javascript:void(0)" onclick="addShopingCart('1')">加入购物车</a>
                    </div>

                    <div class="rightProduce">

                             <img class="img-responsive img-center" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/amc/shoujike.jpg" alt=""/>
                                <h2></h2>
                                <div class="price">RMB 78</div>
                                <div>艺术家李军作品《宠物狗系列</div>
                                <div>尺寸：11.7x6cm</div>
                                <div>材质：树脂</div>
                                <a class="btn btn-qubico" href="javascript:void(0)"onclick="addShopingCart('2')">加入购物车</a>
                    </div>


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

