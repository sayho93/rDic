/**
 * Created by PhpStorm.
 * User: sayho
 * Date: 2017-10-31
 * Time: 오후 5:38
 */

class AjaxSender {
    constructor(url, asyncOption, dataType, map) {
        this.url=url;
        this.asyncOption = asyncOption;
        this.dataType = dataType;
        this.map = map;
    }
    send(callback){
        $.ajax({
            url: this.url,
            async: this.asyncOption,
            cache: false,
            dataType: this.dataType,
            data: this.map,
            success: function (data){
                callback(data);
            }
        });
    }
}




