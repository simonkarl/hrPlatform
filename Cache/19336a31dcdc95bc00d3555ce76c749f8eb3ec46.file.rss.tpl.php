<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-18 17:11:02
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/rss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154108949154929a2601bf18-09183504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19336a31dcdc95bc00d3555ce76c749f8eb3ec46' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/rss.tpl',
      1 => 1418893859,
    ),
  ),
  'nocache_hash' => '154108949154929a2601bf18-09183504',
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

</style>


<section>
<div style=" min-height: 30em;width: 1170px; margin: 0 auto; border: solid 1px #ccc;">


  <div class="rssTitle">订阅服务</div>

  <div>
      <form class="form-horizontal" role="form">
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">接收邮箱:</label>
    <div class="col-sm-3">
      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
    </div>
  </div>
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">职位关键字:</label>
    <div class="col-sm-3">
      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="如：(PHP,移动产品经理)">
    </div>
  </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
    </form>
  </div>




	<div style=" height: 20px;"></div>
</div>
</section>


<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
