
{include file="$path/_header.tpl"}


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

.tableTag{
/*  border: solid 1px #ccc;*/
    /*width: 100%;*/
    width: 1168px;
}

.tableTag tr{
    height: 2.5em;
    line-height: 2.5em;
}
.trTag{
    border: dashed 1px #ccc;
}
.trTag td{
    padding-left: 30px;
    cursor: pointer;
}
.trTag td a{
    color: rgb(0,90,160);
    font-size: 0.8em;
}
.trTag td a:hover{
    color: red;
    font-size: 0.8em;
    text-decoration: none;
}
.tagNameTd{
    font-weight: bold;
}
.titleDiv{
background-color: rgb(240,240,240);
font-weight: bold;
text-indent: 10px;
height: 46px;
line-height: 4;
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
height: 40px;
line-height: 40px;
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
</style>

<section>
<div style=" min-height: 35em; border: solid 1px #ccc;width: 1170px; margin: 0 auto;">

<article class="advSearchWarp">

    <form action='{$websiteUrl}/home/advancedSearch' method="get" id='formAdvanced' name='formAdvanced'>


   <!--  <section class="sectionLeft">01</section> -->
    <section class="advSectionRight">
        <table class="tableTag">
        <div style=" height: 140px;background-color: rgb(240,240,240);">
            <div class="titleDiv">
                信息筛器: <span class="cancel">[撤销]</span>
            </div>
            <div class="filter">尚未选择相关分类...</div>
            <div class="confim">[确定]</div>

            <input type='hidden' class='typesvalue' name='industry' value='{$info.industry}' id='type_1'>

            <input type='hidden'class='typesvalue' name='position' value='{$info.position}' id='type_2'>

            <input type='hidden' class='typesvalue' name='work_experience' value='{$info.work_experience}' id='type_3'>

            <input type='hidden' class='typesvalue' name='salary' value='{$info.salary}' id='type_4'>
            <div>
                <span class="chooseCat" style='display:none'>
                    
                    <span class='type_1 types' style='color:red'></span>

                    <span class='type_2 types' style='color:red'></span>

                    <span class='type_3 types' style='color:red'></span>

                    <span class='type_4 types' style='color:red'></span>

                </span>
            </div>
        </div>
            <tr class="trTag">
                <td class="tagNameTd">行业:</td>
                <td><a class="subFilter" onclick='selectType("1",this);'>IT</a></td>
                <td><a class="subFilter" onclick='selectType("1",this);'>互联网</a></td>
                <td><a class="subFilter" onclick='selectType("1",this);'>通信</a></td>
                <td><a class="subFilter" onclick='selectType("1",this);'>电子</a></td>
                <td><a class="subFilter" onclick='selectType("1",this);'>金融</a></td>
                <td><a class="subFilter" onclick='selectType("1",this);'>制造业</a></td>
                <td><a class="subFilter" onclick='selectType("1",this);'></a></td>
            </tr>
            <tr class="trTag">
                <td class="tagNameTd">职位:</td>
                <td><a class="subFilter" onclick='selectType("2",this);'>UI设计师</a></td>
                <td><a class="subFilter" onclick='selectType("2",this);'>IOS工程师</a></td>
                <td><a class="subFilter" onclick='selectType("2",this);'>项目经理</a></td>
                <td><a class="subFilter" onclick='selectType("2",this);'>交互设计</a></td>
                <td><a class="subFilter" onclick='selectType("2",this);'>投资顾问</a></td>
                <td><a class="subFilter" onclick='selectType("2",this);'>UE设计</a></td>
                <td><a class="subFilter" onclick='selectType("2",this);'>产品经理</a></td>
            </tr>
            <tr class="trTag">
                <td class="tagNameTd">工作经验:</td>
                <td><a class="subFilter" onclick='selectType("3",this);'>应届毕业生</a></td>
                <td><a class="subFilter" onclick='selectType("3",this);'>1年</a></td>
                <td><a class="subFilter" onclick='selectType("3",this);'>2年</a></td>
                <td><a class="subFilter" onclick='selectType("3",this);'>3-4年</a></td>
                <td><a class="subFilter" onclick='selectType("3",this);'>5-7年</a></td>
                <td><a class="subFilter" onclick='selectType("3",this);'>8-9年</a></td>
                <td><a class="subFilter" onclick='selectType("3",this);'>10年以上</a></td>
            </tr>
            <tr class="trTag">
                <td class="tagNameTd">薪资范围:</td>
                <td><a class="subFilter" onclick='selectType("4",this);'>面议</a></td>
                <td><a class="subFilter" onclick='selectType("4",this);'>3000-4499K</a></td>
                <td><a class="subFilter" onclick='selectType("4",this);'>4500-5999K</a></td>
                <td><a class="subFilter" onclick='selectType("4",this);'>6000-79999</a></td>
                <td><a class="subFilter" onclick='selectType("4",this);'>8000-10000</a></td>
                <td><a class="subFilter" onclick='selectType("4",this);'>10000-14999</a></td>
                <td><a class="subFilter" onclick='selectType("4",this);'>15000-19999</a></td>
            </tr>

        </table>



        <div style=" margin-top: 20px;">

            <div class="contentTableHeader">高级搜索数据列表</div>
                <table class="tableContent" style=" margin-top: 20px;">
                    <tr class="tableContentTrTag">
                        <td class="ContentNameTd">职位名称</td>
                        <td class="ContentNameTd">公司名称</td>
                        <td class="ContentNameTd">招聘人数</td>
                        <td class="ContentNameTd">主要招聘地区</td>
                        <td class="ContentNameTd">更新日期</td>
                    </tr>

                    {foreach from=$result item=results}

                     <tr class="tableContentTrTag">
                        <td class="ContentNameTd"><a href='{$websiteUrl}/position/positionDetail/?id={$results.id}'>{$results.position_name}</a></td>
                        <td><a href='{$websiteUrl}/company/companyDetail/?id={$results.company_id}'>{$results.company_name}</a></td>
                        <td>{$results.hiring}</td>
                        <td>{$results.working_place}</td>
                        <td>{$results.update_time}</td>
                    </tr>

                    {/foreach}

                </table>

         <div style=" text-align: center; margin-top: 20px;">{$fenye}</div>

        </div>

    </div>

    </section>

</form>

</article>

<div style=" height: 30px;"></div>

</section>

<script>
    $(document).ready(function() {


        var infos = eval("("+'{$request}'+")"); 


        if(infos['industry']!=''){

            selectTypeHtml('1',infos['industry'])

        }

        if(infos['position']!=''){

            selectTypeHtml('2',infos['position'])

        }

        if(infos['work_experience']!=''){

            selectTypeHtml('3',infos['work_experience'])

        }

        if(infos['salary']!=''){

            selectTypeHtml('4',infos['salary'])

        }


        $(".cancel").click(function(event) {
            /* Act on the event */

            $(".types").html('');

            $(".typesvalue").val('');

             $('.chooseCat').css('display','none')
            $(".filter").html('尚未选择相关分类...');
        });

        $(".confim").click(function(event) {


            /* Act on the event */
            $('#formAdvanced').submit();
        });


    });


    function selectTypeHtml(type,text){


            divhtml = '';

        htmls = text;

        $(".cancel").show();
        $(".confim").show();
        $(".filter").html('已选择:');

        $('.chooseCat').css('display','block')

        switch(type){

            case '1':

            $('.type_1').html(htmls)


            $('#type_1').val(htmls)

        
            break;

            case '2':

             $('.type_2').html(htmls)

             $('#type_2').val(htmls)

            break;

            case '3':

            $('.type_3').html(htmls)

            $('#type_3').val(htmls)


            break;

            case '4':

            $('.type_4').html(htmls)

            $('#type_4').val(htmls)

            

            break;

        }
    }


    function selectType(type,obj){

        divhtml = '';

        htmls = $(obj).html();

        $(".cancel").show();
        $(".confim").show();
        $(".filter").html('已选择:');

        $('.chooseCat').css('display','block')

        switch(type){

            case '1':

            $('.type_1').html(htmls)


            $('#type_1').val(htmls)

        
            break;

            case '2':

             $('.type_2').html(htmls)

             $('#type_2').val(htmls)

            break;

            case '3':

            $('.type_3').html(htmls)

            $('#type_3').val(htmls)


            break;

            case '4':

            $('.type_4').html(htmls)

            $('#type_4').val(htmls)

            

            break;

        }

    }

</script>

{include file="$path/_footer.tpl"}
