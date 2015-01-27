<?php /* Smarty version Smarty-3.0-RC2, created on 2015-01-27 13:33:45
         compiled from "/web/www/hrPlatform/Lib/Home/Tpl/Home/advancedSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114700086954c72339d726e4-09771620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc8f5bd68212e89773229ef8c8fb7d2d1bee8ecb' => 
    array (
      0 => '/web/www/hrPlatform/Lib/Home/Tpl/Home/advancedSearch.tpl',
      1 => 1422336820,
    ),
  ),
  'nocache_hash' => '114700086954c72339d726e4-09771620',
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
                            <span class="">学历:
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

                            <span class="">工作经验:
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
                            <select class="select4">  

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

                                <span class="">英语水平:
                                    <select class="select6">  
                                        <option value ="">--请选择--</option>
                                        <option value ="四级">四级</option> 
                                        <option value ="六级">六级</option> 
                                        <option value ="八级">八级</option>  
                                        <option value="">不限</option>  
                                    </select> 
                                </span>


                            </div>


                        </div>



                        <div style=" margin-top: 20px;">

                            <div class="panel panel-info" style=" width: 1170px;">
                                <div class="panel-heading">
                                    <h3 class="panel-title" style=" text-align: center">高级搜索数据列表</h3>
                                </div>
                                <div class="panel-body">



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


                    alert(res)

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
