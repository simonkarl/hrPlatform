

domain = ''

function setPublic(url) {

    domain = url

}


function webSiteAjaxRequst(url, parames, method) {

    var status = '';

    $.ajax({
        async:false,
        type: method,
        url: url,
        data: parames,
        success: function (res) {

            status = res;
           
        }
    });

    return status;
}