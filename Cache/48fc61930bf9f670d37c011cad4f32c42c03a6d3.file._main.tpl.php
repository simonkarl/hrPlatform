<?php /* Smarty version Smarty-3.0-RC2, created on 2014-10-18 12:35:33
         compiled from "/web/www/amc/Lib/Home/Tpl/Home/_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:597555355441ee15c56ee0-33748852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48fc61930bf9f670d37c011cad4f32c42c03a6d3' => 
    array (
      0 => '/web/www/amc/Lib/Home/Tpl/Home/_main.tpl',
      1 => 1412998221,
    ),
  ),
  'nocache_hash' => '597555355441ee15c56ee0-33748852',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


 


  <style>



/*幻灯片*/
.sliderStyle{
  width: 100%;
  height: 305px;
  margin-top: 20px;

  position: relative;
}
/*三段 艺术空间 新闻发布等*/
.home_main{
  margin: 40px auto 0px;
  width: 1000px;
}
.home_zs{
  width: 315px;
  height: 130px;
  border-bottom: 1px solid #AAA;
  border-top: 1px solid #AAA;
}
.home_zs p{
  font-size: 12px;
  line-height: 24px;
  margin: 0px;
  padding: 0px;
}
.mqbox{
  width: 315px;
  height: 130px;
  overflow: hidden;
  position: relative;
  border-bottom: 1px solid #AAA;
  border-top: 1px solid #AAA;
  float: left;
  margin-left: 28px;
}

.prevs{
  left: 270px;
  top: 20px;
  background: url(images/prev.jpg) center center no-repeat;
}
.nexts{
  position: absolute;
  background: #fff;
  z-index: 3;
  width: 10px;
  height: 10px;
  top: 0px;
  text-indent: 100em;
}

.newsTitle{
font-size: 14px;
font-weight: bold;
}
.starAddress{
  font-size: 14px;
  font-weight: bold;
}

/*bottom*/
.bottom{
  width: 1000px;
  margin: 0px auto;
  padding-top: 40px;
}
.bot_copy{
  width: 400px;
  float: left;
  color: #828282;
  text-align: left;
  font-size: 14px;
}
.bot_links{
  width: 400px;
  float: right;
  color: #828282;
  text-align: right;
  font-size: 12px;
  color: #ccc;
}

.prev{

    position: absolute;
top: 127px;
left: 0px;
width: 60px;
height: 59px;
display: block;
z-index: 99999;
}

.next{

        position: absolute;
top: 127px;
left: 940px;
width: 60px;
height: 59px;
display: block;
z-index: 99999999;

}

        ul  li {
            list-style: none;
        }
        #slides li,#slides_ li {
            display: block;
            width: 546px;
            height: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
        }
</style>


<div style='height: 100px;'>&nbsp;</div>

<div style='width: 1000px; margin: 0 auto;'>            

<div class="sliderStyle">

    <div>

       <ul id="slides" style="z-index: 99; margin: 0; padding: 0;">

          <li style=" cursor: pointer; background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/1.jpg'); z-index: 900; display:block;background-position: 50% 0%; background-repeat: no-repeat;" > </li>

          <li style=" cursor: pointer; background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/2.jpg'); z-index: 900; display:none;background-position: 50% 0%; background-repeat: no-repeat;" > </li>

          <li style=" cursor: pointer; background-image: url('<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/5.jpg'); z-index: 900; display:none;background-position: 50% 0%; background-repeat: no-repeat;" > </li>

              
        </ul>

    </div>

    <a href="javascript:void(0)"  onclick="slidesChange(1)"  class="prev"><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/arrow-prev.png" width="60" height="59" alt="Arrow Prev"></a>

    <a href="javascript:void(0)"  onclick="slidesChange(2)" class="next"><img src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/assets/arrow-next.png" width="60" height="59" alt="Arrow Next"></a>

</div>
<div class="home_main">
    <div class="home_zs" style="float: left;background: url(http://www.yuhengart.com/Cn/images/kjpic.jpg) right top no-repeat;">
        <h3>
            <a>艺术空间</a>
        </h3>
    </div>
    <div class="mqbox">
        <a class="prevs"></a> <a class="nexts"></a>
        <div style="420px;">
            <p class="newsTitle">
                双瞳记—党震个展·上海 正在展出
            </p>
            <div style="font-size: 13px">
                开幕：<span class="openStar">开幕时间：2014.07.26 16:00</span>
            </div>
            <div style="font-size: 13px">
                展期：<span class="rootElement">2014年6月7日至2014年7月30日</span>
            </div>
            <div class="starAddress">
                上海莫干山路50号6号楼101
            </div>
        </div>
    </div>
    <div class="home_zs" style="float:right; background: url(http://www.yuhengart.com/Cn/images/yhwhpic.jpg) 180px 5px no-repeat;">
        <h3>
            <a>新闻发布</a>
        </h3>
        <p>
            <a>【玉衡 · 展览进行时】“</a>
        </p>
        <p>
            <a>本墨志——青年新水墨推</a>
        </p>
        <p>
            <a>介展（第一回）”开幕现场回放</a>
        </p>
    </div>
</div>
<div style="clear:both"></div>

</div>

<div style='height: 40px;'>&nbsp;</div>