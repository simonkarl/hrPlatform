<?php /* Smarty version Smarty-3.0-RC2, created on 2014-12-25 11:40:04
         compiled from "/web/www/hrPlatform/Public/html//_slide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1636836601549b8714d80f47-41618401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f092aaf506d0cef8b0b68cf49c270b62e418a29' => 
    array (
      0 => '/web/www/hrPlatform/Public/html//_slide.tpl',
      1 => 1419408608,
    ),
  ),
  'nocache_hash' => '1636836601549b8714d80f47-41618401',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<style>
.sliderStyle{
width: 710px;
height: 417px;
position: relative;
margin-left: 6px;
/* z-index: -1; */
margin-left: 220px;
}
 #slides  li {
            list-style: none;
        }
#slides li,#slides_ li {
            display: block;
            width: 705px;
            height: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
        }

.prev{

    position: absolute;
top: 127px;
left:5px;
width: 60px;
height: 59px;
display: block;
z-index: 800;
}

.next{

position: absolute;
top: 127px;
left: 650px;
width: 60px;
height: 59px;
display: block;
z-index: 800;

}
</style>

<div class="sliderStyle">
    <div>

       <ul id="slides" style="z-index: 0; margin-left: 5px; margin-top: -11px; padding: 0;">
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