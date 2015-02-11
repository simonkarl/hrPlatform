/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function changeArray(type) {


    beijingArray = new Array('东城区', '西城区', '朝阳区', '海淀区', '石景山区', '丰台区', '顺义区', '怀柔区', '密云县', '延庆县', '昌平区', '平谷区', '门头沟区', '房山区', '通州区')

    shanghaiArray = new Array('黄浦区', '浦东新区', '徐汇区', '长宁区', '静安区', '普陀区', '闸北区', '虹口区', '杨浦区', '闵行区', '宝山区', '嘉定区', '金山区', '松江区', '青浦区', '奉贤区', '崇明县')

    gouzhouArrary = new Array('越秀区', '荔湾区', '海珠区', '天河区', '白云区', '黄埔区', '番禺区', '花都区', '南沙区', '增城区', '从化区')


    switch (type) {

        case '上海':

            areaArray = shanghaiArray

            break;

        case '北京':

            areaArray = beijingArray

            break;


        case '广州':

            areaArray = gouzhouArrary

            break;
    }


    optionhtml = '<option value ="">--请选择--</option>  '

    if (areaArray != '') {
        
        $('.select4').show();
        $('.select4').html('')

        for (var i = 0; i < areaArray.length; i++) {

            optionhtml += '<option value="' + areaArray[i] + '">' + areaArray[i] + '</option>'

        }

        $('.select4').html(optionhtml)


    }





}