<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-27 10:20:49
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/advancedSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45160192454c6f601918438-18721984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f35604e109598d51b16b66c9f9b6eb4a0d9b79e' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/advancedSearch.tpl',
      1 => 1422324236,
    ),
  ),
  'nocache_hash' => '45160192454c6f601918438-18721984',
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
min-height: 50px;
line-height: 50px;
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

.filter{
    /*border: solid 1px red;*/
    margin-top: 10px;
    border-bottom: solid 1px #ccc;
}

.filter span{
    margin-left: 10px;
}

.form-control {
display: inline;
width: 12%;
height: 28px;
padding: 6px 12px;
font-size: 14px;
line-height: 1.42857143;
color: #555;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}


.keywordTwo{
  display: none;
}

.moreCondition{
  height: 60px;
border-top: solid 1px #ccc;
line-height: 60px;
display: none;
}

</style>

<section>
<body style=" background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/body-bg.jpg');">    
<div style=" min-height: 30em;width: 1170px; margin: 0 auto; border: solid 1px #ccc; border-radius: 5px;-webkit-border-radius: 5px;-moz-border-radius: 5px;margin-top: 10px;">



<article class="advSearchWarp">

    <form action='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/home/advancedSearch' method="get" id='formAdvanced' name='formAdvanced'>


   <!--  <section class="sectionLeft">01</section> -->
    <section class="advSectionRight">

    <div class="filter">
        <span class="">学历:
            <select class="select1">  
              <option value ="1">--请选择--</option>
              <option value ="2">中专</option>    
              <option value ="2">大专</option>  
              <option value="3">本科</option>  
              <option value ="4">研究生</option>  
              <option value="5">博士</option>  
               <option value="5">不限</option>  
            </select> 
        </span>

        <span class="">工作经验:
            <select class="select2">  
              <option value ="1">--请选择--</option>  
              <option value ="2">应届毕业生</option>  
              <option value="3">1年</option>  
              <option value="3">2年</option>  
              <option value="3">3-4年</option>  
              <option value="3">5-7年</option>  
              <option value="3">8-9年</option>  
              <option value="3">不限</option>   
            </select> 
        </span>

        <span class="">目标地:
        <select class="select3">  
              <option value ="1">--请选择--</option>
                <option value ="2">上海</option> 
              <option value ="2">北京</option>  
              <option value="3">广州</option>  
            </select> 
        </span>
        <select class="select4">  
              <option value ="1">--请选择--</option>  
              <option value ="2">黄浦区</option>  
              <option value="3">闸北区</option>  
              <option value="3">浦东新区</option>  
              <option value="3">闵行区</option>  
              <option value="3">嘉定区</option>  
              <option value="3">松江区</option>  
              <option value="3">宝山区</option>  
              <option value="3">长宁区</option>  
              <option value="3">杨浦区</option>  
              <option value="3">奉贤区</option>  
        </select> 

        <span>
            关键字1:
        <input type="text" id="key1" class="form-control" placeholder="关键字1">
        </span>
        <span class="keywordTwo">
            关键字2:
        <input type="text" id="key2" class="form-control" placeholder="关键字2">
        </span>

          <span class="addKeyword">
          <span style="margin-left: -15px; cursor:pointer; font-size: 16px;" class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
          </span>


          <span style=" float: right;">
            <button type="button" style="margin-top: -2px;font-size: 12px;height: 28px;" class="showMoreCondition btn btn-info">更多条件</button>
              <button type="button" id="searchStar" style="margin-top: -2px; margin-right: 10px; "
               class="btn btn-primary">搜&nbsp;&nbsp;索</button>

          </span>

        <div class="moreCondition">

          <span class="">性别:
          <select class="select5">  
                <option value ="1">--请选择--</option>
                  <option value ="2">男</option> 
                <option value ="2">女</option>  
                <option value="3">不限</option>  
              </select> 
          </span>

          <span class="">英语水平:
          <select class="select6">  
                <option value ="1">--请选择--</option>
                  <option value ="2">四级</option> 
                <option value ="2">六级</option> 
                <option value ="2">八级</option>  
                <option value="3">不限</option>  
              </select> 
          </span>


        </div>


    </div>



        <div style=" margin-top: 20px;">

            <div class="panel panel-info" style=" width: 1170px;">
              <div class="panel-heading">
                <h3 class="panel-title" style=" text-align: center">高级搜索数据列表</h3>
              </div>
              <div class="panel-body">

                    <table class="tableContent" style=" margin-top: 20px;">
                    <tr class="tableContentTrTag">
                        <td class="ContentNameTd">职位名称</td>
                        <td class="ContentNameTd">公司名称</td>
                        <td class="ContentNameTd">招聘人数</td>
                        <td class="ContentNameTd">主要招聘地区</td>
                        <td class="ContentNameTd">更新日期</td>
                    </tr>

                    <?php  $_smarty_tpl->tpl_vars['results'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('result')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['results']->key => $_smarty_tpl->tpl_vars['results']->value){
?>

                     <tr class="tableContentTrTag">
                        <td class="ContentNameTd"><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/position/positionDetail/?id=<?php echo $_smarty_tpl->tpl_vars['results']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['results']->value['position_name'];?>
</a></td>
                        <td><a href='<?php echo $_smarty_tpl->getVariable('websiteUrl')->value;?>
/company/companyDetail/?id=<?php echo $_smarty_tpl->tpl_vars['results']->value['company_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['results']->value['company_name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['results']->value['hiring'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['results']->value['working_place'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['results']->value['update_time'];?>
</td>
                    </tr>

                    <?php }} ?>
                </table>

            <div style=" text-align: center; margin-top: 20px;"><?php echo $_smarty_tpl->getVariable('fenye')->value;?>
</div>

          </div>
        </div>

        </div>

    </div>

    </section>

</form>

</article>

<div style=" height: 30px;"></div>

</section>

</body>
<script>

  $(function(){

    $("#searchStar").click(function(){

      var xueli = $(".select1  option:selected").text();
      var xueliR = filter(xueli);

      var gongzuojingyan = $(".select2  option:selected").text();
      var gongzuojingyanR = filter(gongzuojingyan);

      var chengshi = $(".select3  option:selected").text();
      var chengshiR = filter(chengshi);

      var qu = $(".select4  option:selected").text();
      var quR = filter(qu);

      var xingbie = $(".select5  option:selected").text();
      var xingbieR = filter(xingbie);

      var yingyushuiping = $(".select6  option:selected").text();
      var yingyushuipingR = filter(yingyushuiping);

      var key1 = $("#key1").val();
      var key2 = $("#key2").val();


      if(key1 == ''){

        alert(关键字不能为空);

      }else if(key2!=''){

        var key=key1 + ","+ key2;

      }else{

        var key=key1;

      }


    })


    //隐藏  显示效果
    $(".addKeyword").mouseover(function(){
      $(this).css('color','rgb(255,153,51)');
    })
    $(".addKeyword").mouseout(function(){
      $(this).css('color','rgb(51,51,51)');
    })

    $(".addKeyword").click(function(){
      $(".keywordTwo").show();
      $(".addKeyword").hide();

    })

    $(".showMoreCondition").click(function(){
      $(".moreCondition").toggle();

    })

  })

  function filter(key){
    if(key = "--请选择--"){
      key = '';
      return key;
    }


  }

</script>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
