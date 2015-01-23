<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-22 15:22:13
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/rss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107181824554c0a52546eff5-61816385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19336a31dcdc95bc00d3555ce76c749f8eb3ec46' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/rss.tpl',
      1 => 1421911331,
    ),
  ),
  'nocache_hash' => '107181824554c0a52546eff5-61816385',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<style>

.rssTitle{
  margin: 0 auto;
  height: 70px;
  line-height: 70px;
  font-size: 24px;
  font-weight: bold;
  border-bottom: solid 1px rgb(221,221,221);  
  background: #fff;
}

.control-label{
  font-size: 16px;
}


.planTable{
   width: 83%;
   margin: 0 auto;

}
.planTable tr td{
  text-align: center;
  color: #ccc;
}

.planTable tr td img{
  height: 20px;
width: 160px;
}
</style>

<body style=" background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/body-bg.jpg');">
<section>
<div style=" min-height: 30em;width: 1170px; margin: 0 auto; border: solid 1px #ccc;     -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   margin-top: 10px;">


  <div class="rssTitle">
              <table class="planTable">
            <tr>
              <td style="color: rgb(44,62,80);">服务介绍</td>
              <td><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/right1.png"></td>
              <td style="color: rgb(44,62,80);">确认信息</td>
              <td><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/right2.png"></td>
              <td>完成支付</td>
              <td><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/right2.png"></td>
              <td>订阅成功</td>
            </tr>
          </table>
  </div>

  <div style=" margin-top: 30px;">
      <form class="form-horizontal" role="form">
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">接收邮箱:</label>
    <div class="col-sm-3">
      <input class="form-control" style="height: 45px;" type="text" id="formGroupInputLarge" placeholder="接收邮箱" value='<?php echo $_smarty_tpl->getVariable('userInfo')->value['user_email'];?>
'>
    </div>
  </div>

<!--   <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">职位关键字:</label>
    <div class="col-sm-3">
      <div>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox1" value="option1"> PHP
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox2" value="option2"> 产品经理
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox3" value="option3"> Java
        </label>
      </div>

      <div>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox1" value="option1"> UI设计师
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox2" value="option2"> Ruby
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox3" value="option3"> 架构师
        </label>
      </div>
    </div>
  </div> -->



 <div class="form-group form-group-lg"></div>

<!--    <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">工作地点:</label>

      <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 上海
      </label>
      <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 北京
      </label>
      <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 广州
      </label>
    </div> -->

      <div class="form-group form-group-lg">
        <label class="col-sm-2 control-label" for="formGroupInputLarge">邮件频率</label>

          <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
          <input type="radio" name="time" id="time" checked="checked" value="option1"> 每天一次
          </label>
          <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
            <input type="radio" name="time" id="time" value="option2"> 每周一次
          </label>
      </div>


      <div class="form-group form-group-lg">
        <label class="col-sm-2 control-label" for="formGroupInputLarge">资费模式</label>

          <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
          <input type="radio" name="cost" id="cost" checked="checked" value="option3"> 99RMB/月
          </label>
          <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
            <input type="radio" name="cost" id="cost" value="option4"> 999RMB/年
          </label>
      </div>

      <div class="form-group form-group-lg">
        <label class="col-sm-2 control-label" for="formGroupInputLarge">支付方式</label>

          <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
            <input type="radio" name="payWay" id="payWay" checked="checked" value="option7">
            <img style=" height: 35px;margin-top: -7px;" src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/alipay.jpg">

          </label>

      </div>

      <div class="form-group form-group-lg">
        <label class="col-sm-2 control-label" for="formGroupInputLarge">开具发票</label>
          <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
          <input type="radio" name="bill" checked="checked" id="bill" value="option5"> 否
          </label>
          <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
            <input type="radio" name="bill" id="bill" value="option6"> 是
          </label>
  
      </div>


      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary" onclick="javascrit:alert('订阅成功! 明日开始定制发送邮件')">下一步</button>
        </div>
      </div>
    </form>

  </div>

  <div style=" height: 30px;"></div>

</div>

	<div style=" height: 20px;"></div>

</section>
</body>
<script>
  $(function(){
    $("input[type=radio]").click(function(){
         var nameTime=  $(':radio[name="time"]:checked').val();
         var nameCost=  $(':radio[name="cost"]:checked').val();
         var nameBill=  $(':radio[name="bill"]:checked').val();

     });
  })


</script>


<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
