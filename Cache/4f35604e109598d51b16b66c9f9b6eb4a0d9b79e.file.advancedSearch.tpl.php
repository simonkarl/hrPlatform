<?php /* Smarty version Smarty-3.0-RC2, created on 2015-02-11 18:30:18
         compiled from "/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/advancedSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102675793654db2f3a2ada40-77221638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f35604e109598d51b16b66c9f9b6eb4a0d9b79e' => 
    array (
      0 => '/Users/Lev/Sites/hrPlatform/Lib/Home/Tpl/Home/advancedSearch.tpl',
      1 => 1423650600,
    ),
  ),
  'nocache_hash' => '102675793654db2f3a2ada40-77221638',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<script src="<?php echo $_smarty_tpl->getVariable('WebSiteUrlPublic')->value;?>
/js/changeArea.js"></script>

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
                            <div style=" border-bottom: solid 1px rgb(204,204,204);">

                            <span class="">职位职级:
                                <select class="select1">  
                                    <option value ="">--请选择--</option>
                                    <option value ="总裁">总裁</option>    
                                    <option value ="执行副总裁">执行副总裁</option>  
                                    <option value="高级副总裁">高级副总裁</option>  
                                    <option value ="副总裁">副总裁</option>  
                                    <option value="执行总监">执行总监</option>  
                                    <option value="高级总监">高级总监</option>  
                                    <option value="总监">总监</option>  
                                    <option value="高级经理">高级经理</option>  
                                    <option value="经理">经理</option>  
                                    <option value="高级主管">高级主管</option>  
                                    <option value="主管">主管</option> 
                                    <option value="高级职员/专员/工程师/分析师">高级职员/专员/工程师/分析师</option>  
                                    <option value="职员/专员/工程师/分析师">职员/专员/工程师/分析师</option> 
                                    <option value="助理职员/专员/工程师/分析师">助理职员/专员/工程师/分析师</option>  
                                </select> 
                            </span>


                            <span class="">职能描述:
                                <select class="select1">  
                                    <option value ="">--请选择--</option>
                                    <option value ="计算机与网络">计算机与网络</option>
                                    <option value ="通信">通信</option>  
                                    <option value="电子">电子</option>  
                                    <option value ="金融">金融</option>  
                                </select> 
                            </span>



                            </div>
                              
                            <span class="" style="margin-left: 24px;">学历:
                                <select class="select1">  
                                    <option value ="">--请选择--</option>
                                    <option value ="中专">中专</option>    
                                    <option value ="大专">大专</option>  
                                    <option value="本科">本科</option>  
                                    <option value ="研究生">研究生</option>  
                                    <option value="博士">博士</option>  
                                    <option value="0">不限</option>  
                                </select> 
                            </span>

                            <span class="">经验年资:
                                <select class="select2">  
                                    <option value ="">--请选择--</option>  
                                    <option value ="应届毕业生">应届毕业生</option>  
                                    <option value="1年">1年</option>  
                                    <option value="2年">2年</option>  
                                    <option value="3-4年">3-4年</option>  
                                    <option value="5-7年">5-7年</option>  
                                    <option value="8-9年">8-9年</option>  
                                    <option value="0">不限</option>   
                                </select> 
                            </span>

                            <span class="">目标地:
                                <select class="select3" onchange="changeArray(this.value)">  
                                    <option value ="">--请选择--</option>
                                    <option value ="上海" >上海</option> 
                                    <option value ="北京" >北京</option>  
                                    <option value="广州" >广州</option>  
                                </select> 
                            </span>
                            <select class="select4" style="display:none">  
                                <option value ="">--请选择--</option>
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
                                        <option value ="">--请选择--</option>
                                        <option value ="男">男</option> 
                                        <option value ="女">女</option>  
                                        <option value="">不限</option>  
                                    </select> 
                                </span>

                                <span class="">年龄:
                                    <select class="select5">  
                                        <option value ="">--请选择--</option>
                                        <option value ="">18-24岁</option> 
                                        <option value ="">25-29岁</option>  
                                        <option value ="">30-34岁</option>  
                                        <option value ="">35-39岁</option>  
                                        <option value ="">40-44岁</option> 
                                        <option value ="">45+</option>  
                                        <option value="">不限</option>  
                                    </select> 
                                </span>

                                <span class="">婚育:
                                    <select class="select5">  
                                        <option value ="">--请选择--</option>
                                        <option value ="">未婚/单身</option> 
                                        <option value ="">已婚未育</option>  
                                        <option value ="">已婚已育</option>   
                                    </select> 
                                </span>

                                <span class="">工作性质:
                                    <select class="select5">  
                                        <option value ="">--请选择--</option>
                                        <option value ="">全职</option> 
                                        <option value ="">兼职</option>  
                                        <option value ="">实习</option>   
                                    </select> 
                                </span>

                                <span class="">是否出差:
                                    <select class="select5">  
                                        <option value ="">--请选择--</option>
                                        <option value ="">是</option> 
                                        <option value ="">否</option>    
                                    </select> 
                                </span>


                                <span class="">语言要求:
                                    <select class="select6">  
                                        <option value ="">--请选择--</option>
                                        <option value ="">英语</option> 
                                        <option value ="">德语</option> 
                                        <option value ="">法语</option>  
                                        <option value ="">日语</option>  
                                        <option value ="">韩语</option>  
                                        <option value ="">俄语</option>  
                                        <option value ="">西班牙语</option>  
                                        <option value ="">葡萄牙语</option>  
                                        <option value ="">粤语</option>
                                        <option value ="">闽南语</option> 
                                        <option value ="">其他</option>  
                                        <option value="">不限</option>  
                                    </select> 
                                </span>


                            </div>


                        </div>



                        <div style=" margin-top: 20px;">

                            <div style=" width: 1170px;">
 
                                <div class="panel-body" style="">
<div style="text-align: center;
min-height: 150px;
line-height: 150px;">
根据不同条件来筛选您所需要的信息,注意 关键字不能为空哦～
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

    $(function () {

        $("#searchStar").click(function () {

            searchResume(1)


        })


        //隐藏  显示效果
        $(".addKeyword").mouseover(function () {
            $(this).css('color', 'rgb(255,153,51)');
        })
        $(".addKeyword").mouseout(function () {
            $(this).css('color', 'rgb(51,51,51)');
        })

        $(".addKeyword").click(function () {
            $(".keywordTwo").show();
            $(".addKeyword").hide();

        })

        $(".showMoreCondition").click(function () {
            $(".moreCondition").toggle();

        })

    })


    function ajaxPage(source,page) {
        
        searchResume(page)

    }


    function searchResume(page) {


        var xueli = $(".select1  option:selected").val();


        var gongzuojingyan = $(".select2  option:selected").val();


        var chengshi = $(".select3  option:selected").val();


        var qu = $(".select4  option:selected").val();


        var xingbie = $(".select5  option:selected").val();


        var yingyushuiping = $(".select6  option:selected").val();


        var key1 = $("#key1").val();
        var key2 = $("#key2").val();


        address = ''

        if (qu !== '') {

            address = chengshi + '-' + qu

        } else {

            address = chengshi
        }



        if (key1 != '' || key2 != '') {

            keyword = key1 + ',' + key2

            $.ajax({
                url: domain + '/resume/advancedSearch',
                data: {
                    education: xueli,
                    work_experience: gongzuojingyan,
                    work_place: address,
                    sex: xingbie,
                    english_level: yingyushuiping,
                    keyword: keyword,
                    page:page

                },
                type: 'post',
                cache: false,
                success: function (res) {


                    // alert(res)

                    $('.panel-body').html(res)
                },
                error: function () {
                    alert("网络异常！");
                }
            });


        } else {

            alert('请最少输入一个关键字')
        }

    }


</script>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('path')->value)."/_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
