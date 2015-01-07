
{include file="$path/_header.tpl"}

<style>

.rssTitle{
  margin: 0 auto;
  height: 70px;
  line-height: 70px;
  font-size: 24px;
  font-weight: bold;
  border-bottom: solid 1px rgb(221,221,221);  
}

.control-label{
  font-size: 16px;
}


.planTable{
   width: 100%

}
.planTable tr td{
  text-align: center;
  color: #ccc;
}

.planTable tr td img{
  height: 50px;
width: 100px;
}
</style>


<section>
<div style=" min-height: 30em;width: 1170px; margin: 0 auto; border: solid 1px #ccc;     -webkit-border-radius: 5px;
   -moz-border-radius: 5px;
   margin-top: 10px;">


  <div class="rssTitle">
              <table class="planTable">
            <tr>
              <td>服务介绍</td>
              <td><img src="{$WebSiteUrlPublic}/images/right.jpg"></td>
              <td style="color: rgb(44,62,80);">确认信息</td>
              <td><img src="{$WebSiteUrlPublic}/images/right.jpg"></td>
              <td>完成支付</td>
              <td><img src="{$WebSiteUrlPublic}/images/right.jpg"></td>
              <td>订阅成功</td>
            </tr>
          </table>
  </div>

  <div style=" margin-top: 30px;">
      <form class="form-horizontal" role="form">
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">接收邮箱:</label>
    <div class="col-sm-3">
      <input class="form-control" style="height: 45px;" type="text" id="formGroupInputLarge" placeholder="接收邮箱" value='{$userInfo.user_email}'>
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

        <img style=" height: 35px;padding-left: 20px;margin-top: 7px;" src="{$WebSiteUrlPublic}/images/alipay.jpg">
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

<script>
  $(function(){
    $("input[type=radio]").click(function(){
         var nameTime=  $(':radio[name="time"]:checked').val();
         var nameCost=  $(':radio[name="cost"]:checked').val();
         var nameBill=  $(':radio[name="bill"]:checked').val();

     });
  })


</script>


{include file="$path/_footer.tpl"}
