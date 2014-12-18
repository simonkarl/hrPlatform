<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-18 12:00:22
         compiled from "/Users/Lev/Sites/hrPlatform/Public/html//_slide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10430857335492515699aa94-83170487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20dfe9405e457f93bb77415fd966eab7866ca26a' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Public/html//_slide.tpl',
      1 => 1418875220,
    ),
  ),
  'nocache_hash' => '10430857335492515699aa94-83170487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<style>
.sliderStyle{
  width: 100%;
  height: 417px;
  position: relative;
}
ul  li {
            list-style: none;
        }
#slides li,#slides_ li {
            display: block;
            width: 711px;
            height: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
        }

.prev{

    position: absolute;
top: 127px;
left:218px;
width: 60px;
height: 59px;
display: block;
z-index: 1000;
}

.next{

position: absolute;
top: 127px;
left: 869px;
width: 60px;
height: 59px;
display: block;
z-index: 1000;

}
</style>

<div class="sliderStyle">
    <div>

       <ul id="slides" style="z-index: 0; margin-left: 219px; margin-top: -11px; padding: 0;">
          <li style=" cursor: pointer; background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/slide/s1.jpg'); z-index: 0; display:block; background-repeat: no-repeat;" > </li>

          <li style=" cursor: pointer; background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/slide/s2.jpg'); z-index: 0; display:none; background-repeat: no-repeat;" > </li>

          <li style=" cursor: pointer; background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/slide/s3.jpg'); z-index: 0; display:none;background-repeat: no-repeat;" > </li>
        </ul>

    </div>

    <a href="javascript:void(0)"  onclick="slidesChange(1)"  class="prev"><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/slide/arrow-prev.png" width="60" height="59" alt="Arrow Prev"></a>

    <a href="javascript:void(0)"  onclick="slidesChange(2)" class="next"><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/images/slide/arrow-next.png" width="60" height="59" alt="Arrow Next"></a>

</div>