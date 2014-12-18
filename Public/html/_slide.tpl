
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
          <li style=" cursor: pointer; background-image: url('{$WebSiteUrlPublic}/images/slide/s1.jpg'); z-index: 0; display:block; background-repeat: no-repeat;" > </li>

          <li style=" cursor: pointer; background-image: url('{$WebSiteUrlPublic}/images/slide/s2.jpg'); z-index: 0; display:none; background-repeat: no-repeat;" > </li>

          <li style=" cursor: pointer; background-image: url('{$WebSiteUrlPublic}/images/slide/s3.jpg'); z-index: 0; display:none;background-repeat: no-repeat;" > </li>
        </ul>

    </div>

    <a href="javascript:void(0)"  onclick="slidesChange(1)"  class="prev"><img src="{$WebSiteUrlPublic}/images/slide/arrow-prev.png" width="60" height="59" alt="Arrow Prev"></a>

    <a href="javascript:void(0)"  onclick="slidesChange(2)" class="next"><img src="{$WebSiteUrlPublic}/images/slide/arrow-next.png" width="60" height="59" alt="Arrow Next"></a>

</div>