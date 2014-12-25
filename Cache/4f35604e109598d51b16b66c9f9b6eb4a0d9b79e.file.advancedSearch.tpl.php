<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-25 16:16:51
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/advancedSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230298176549bc7f37164a5-32060809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f35604e109598d51b16b66c9f9b6eb4a0d9b79e' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/advancedSearch.tpl',
      1 => 1419493018,
    ),
  ),
  'nocache_hash' => '230298176549bc7f37164a5-32060809',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<style>
.advSearchWarp{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.advSectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;

    width: 100%;
    
}
.advSectionLeft{
    background:purple;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;

    width: 25.5%;
}

.tableTag{
/*  border: solid 1px #ccc;*/
    /*width: 100%;*/
    width: 1168px;
}

.tableTag tr{
    height: 2.5em;
    line-height: 2.5em;
}
.trTag{
    border: dashed 1px #ccc;
}
.trTag td{
    padding-left: 30px;
    cursor: pointer;
}
.trTag td a{
    color: rgb(0,90,160);
    font-size: 0.8em;
}
.trTag td a:hover{
    color: red;
    font-size: 0.8em;
    text-decoration: none;
}
.tagNameTd{
    font-weight: bold;
}
.titleDiv{
background-color: rgb(240,240,240);
font-weight: bold;
text-indent: 10px;
height: 46px;
line-height: 4;
}
/*
----------*/

.tableContent{
    width: 90%;
    margin: 0 auto;
}
.tableContentTrTag{
    height: 2.5em;
    line-height: 2.5em;
    border: solid 1px #ccc;
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
line-height: 2em;
text-align: center;
text-align: center;
font-size: 1.6em;

}

.filter{
font-size: 14px;
font-weight: bold;
text-indent: 10px;
height: 40px;
line-height: 40px;
}
.chooseCat{
    font-weight: normal;
padding-left: 90px;
font-size: 14px;
}
.cancel{
    margin-left: 87%;
    cursor: pointer;
    display: none;
    color: rgb(211,47,38);
}
.confim{
    margin-top: -30px;
text-align: right;
margin-right: 30px;
cursor: pointer;
font-weight: bold;
color: rgb(71,135,191);
display: none;
}
</style>

<section>
<div style=" min-height: 35em; border: solid 1px #ccc;width: 1170px; margin: 0 auto;">

<article class="advSearchWarp">
   <!--  <section class="sectionLeft">01</section> -->
    <section class="advSectionRight">
        <table class="tableTag">
        <div style=" height: 140px;background-color: rgb(240,240,240);">
            <div class="titleDiv">
                信息筛器: <span class="cancel">[撤销]</span>
            </div>
            <div class="filter">尚未选择相关分类...</div>
            <div class="confim">[确定]</div>
            <div>
                <span class="chooseCat"></span>
            </div>
        </div>
            <tr class="trTag">
                <td class="tagNameTd">行业:</td>
                <td><a class="subFilter">IT</a></td>
                <td><a class="subFilter">互联网</a></td>
                <td><a class="subFilter">通信</a></td>
                <td><a class="subFilter">电子</a></td>
                <td><a class="subFilter">金融</a></td>
                <td><a class="subFilter">制造业</a></td>
                <td><a class="subFilter"></a></td>
            </tr>
            <tr class="trTag">
                <td class="tagNameTd">职位:</td>
                <td><a class="subFilter">UI设计师</a></td>
                <td><a class="subFilter">IOS工程师</a></td>
                <td><a class="subFilter">微电子工程师</a></td>
                <td><a class="subFilter">交互设计</a></td>
                <td><a class="subFilter">投资顾问</a></td>
                <td><a class="subFilter">UE设计</a></td>
                <td><a class="subFilter">产品经理</a></td>
            </tr>
            <tr class="trTag">
                <td class="tagNameTd">工作经验:</td>
                <td><a class="subFilter">实习生</a></td>
                <td><a class="subFilter">0～1年</a></td>
                <td><a class="subFilter">1～3年</a></td>
                <td><a class="subFilter">3～5年</a></td>
                <td><a class="subFilter">5～8年</a></td>
                <td><a class="subFilter">8～10年</a></td>
                <td><a class="subFilter">10年以上</a></td>
            </tr>
            <tr class="trTag">
                <td class="tagNameTd">薪资范围:</td>
                <td><a class="subFilter">2～3K</a></td>
                <td><a class="subFilter">3～5K</a></td>
                <td><a class="subFilter">5～8K</a></td>
                <td><a class="subFilter">8～10K</a></td>
                <td><a class="subFilter">10～15K</a></td>
                <td><a class="subFilter">15～25K</a></td>
                <td><a class="subFilter">25K以上</a></td>
            </tr>

        </table>

    </section>

</article>

<div style=" height: 30px;"></div>

</div>
</section>

<script>
    $(document).ready(function() {
        $(".subFilter").click(function(event) {
            /* Act on the event */
            var chooseSub = $(this).html();

            $(".cancel").show();
            $(".confim").show();
            $(".filter").html('已选择:');


            $(".chooseCat").css("border","1px solid red");
            $(".chooseCat").append(chooseSub);
            $(".chooseCat").append(",");
        });

        $(".cancel").click(function(event) {
            /* Act on the event */

            $(".chooseCat").html('');
            $(".filter").html('尚未选择相关分类...');
        });

    });

</script>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
