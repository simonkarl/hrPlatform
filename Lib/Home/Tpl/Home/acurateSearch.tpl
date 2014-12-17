
{include file="$path/_header.tpl"}


<style>
.wrapSearch{
    display:-moz-box;
    display:-webkit-box;
    display:box;

    font-size: 1.1em;
}
.sectionRight{
    -moz-box-flex:2;
    -webkit-box-flex:2;
    box-flex:2;

    width: 100%;
    
}
.sectionLeft{
    background:purple;
    -moz-box-flex:1;
    -webkit-box-flex:1;
    box-flex:1;

    width: 25.5%;
}

.tableTag{
/*	border: solid 1px #ccc;*/
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
	height: 2.5em;
	line-height: 2.5em;
	font-weight: bold;
	text-indent: 5px;
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
    border: solid 1px #ccc;
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

</style>

<section>
<div style=" min-height: 35em; border: solid 1px #ccc;width: 1170px; margin: 0 auto;">

<article class="wrapSearch">
   <!--  <section class="sectionLeft">01</section> -->
    <section class="sectionRight">
    	<table class="tableTag">

    		<div class="titleDiv">信息筛选:</div>
    		<tr class="trTag">
    			<td class="tagNameTd">行业:</td>
    			<td><a>IT</a></td>
    			<td><a>互联网</a></td>
    			<td><a>通信</a></td>
    			<td><a>电子</a></td>
    			<td><a>金融</a></td>
    			<td><a>制造业</a></td>
    		</tr>
    		<tr class="trTag">
    			<td class="tagNameTd">职位:</td>
    			<td><a>UI设计师</a></td>
    			<td><a>IOS工程师</a></td>
    			<td><a>微电子工程师</a></td>
    			<td><a>金融咨询师</a></td>
    			<td><a>投资顾问</a></td>
    			<td><a>数控高级技工</a></td>
    		</tr>

    	</table>

    </section>

</article>

<div style=" height: 30px;"></div>
<div style="">

    <div class="contentTableHeader">职位名称数据分析</div>
        <table class="tableContent">
            <tr class="tableContentTrTag">
                <td class="ContentNameTd">职位名称</td>
                <td class="ContentNameTd">公司名称</td>
                <td class="ContentNameTd">招聘人数</td>
                <td class="ContentNameTd">主要招聘地区</td>
                <td class="ContentNameTd">更新日期</td>
            </tr>
            <tr class="tableContentTrTag">
                <td class="ContentNameTd">UI设计师</td>
                <td></td>
                <td>5</td>
                <td>上海</td>
                <td>2014-12-7</td>
            </tr>
            <tr class="tableContentTrTag">
                <td class="ContentNameTd">IOS工程师</td>
                <td></td>
                <td>2</td>
                <td>上海</td>
                <td>2014-12-7</td>
            </tr>
            <tr class="tableContentTrTag">
                <td class="ContentNameTd">金融分析师</td>
                <td></td>
                <td>6</td>
                <td>北京</td>
                <td>2014-12-7</td>
            </tr>
            <tr class="tableContentTrTag">
                <td class="ContentNameTd">投资顾问</td>
                <td></td>
                <td>4</td>
                <td>北京</td>
                <td>2014-12-7</td>
            </tr>
            <tr class="tableContentTrTag">
                <td class="ContentNameTd">数控高级技工</td>
                <td></td>
                <td>2</td>
                <td>广州</td>
                <td>2014-12-7</td>
            </tr>

        </table>


</div>

</div>
</section>
{include file="$path/_footer.tpl"}
