<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-18 18:08:03
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/rss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:431865745492a78323b849-49182455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19336a31dcdc95bc00d3555ce76c749f8eb3ec46' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/rss.tpl',
      1 => 1418897280,
    ),
  ),
  'nocache_hash' => '431865745492a78323b849-49182455',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<style>

.rssTitle{
  border-bottom: solid 1px #CCc;
  width: 95%;
  margin: 0 auto;
  height: 55px;
  line-height: 60px;
  font-size: 20px;
  font-weight: bold;
}
.control-label{
  font-size: 16px;
}
</style>


<section>
<div style=" min-height: 30em;width: 1170px; margin: 0 auto; border: solid 1px #ccc;">


  <div class="rssTitle">订阅服务</div>

  <div style=" margin-top: 30px;">
      <form class="form-horizontal" role="form">
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">接收邮箱:</label>
    <div class="col-sm-3">
      <input class="form-control" style="height: 40px;" type="text" id="formGroupInputLarge" placeholder="接收邮箱">
    </div>
  </div>

  <div class="form-group form-group-lg">
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
  </div>



 <div class="form-group form-group-lg"></div>

   <div class="form-group form-group-lg">
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
    </div>

      <div class="form-group form-group-lg">
        <label class="col-sm-2 control-label" for="formGroupInputLarge">邮件频率</label>

          <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 每天一次
          </label>
          <label class="radio-inline" style=" margin-top: 10px; margin-left: 18px;">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 每周一次
          </label>
      </div>
  



      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">确认订阅</button>
        </div>
      </div>
    </form>
  </div>

</div>


	<div style=" height: 20px;"></div>

</section>


<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
