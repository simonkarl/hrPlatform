
{include file="$path/_header.tpl"}

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


{include file="$path/_footer.tpl"}
