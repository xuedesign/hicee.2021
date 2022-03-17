$(function(){
	var carArr=[];
	$('.cart_table tbody').empty();
    $('.cart_table tbody tr').each(function(num){
        console.log(num)
        var main=$('.cart_table tbody tr').eq(num);
        var obj={}
        obj.imgURL=main.find('td').eq(0).find('img').attr('src');
        obj.name=main.find('td').eq(1).html();
        obj.id=main.find('td').eq(6).find('span').attr('p_key_id');
        var pData={};
        pData.size=main.find('td').eq(2).html();
        pData.price=main.find('td').eq(3).html();
        pData.quantity=main.find('td').eq(4).html();
        pData.amt=main.find('td').eq(5).html();
        if(carArr.length!=0){
            var breakBool=false;
            var maxNum=carArr.length;
            for(var i=0;i<maxNum;i++){
                if(breakBool)return;
                if(carArr[i].id==obj.id){
                    if(breakBool)return;
                    breakBool=true;
                    carArr[i].list.push(pData);
                    return;
                }else if(i==carArr.length-1){
                    if(breakBool)return;
                    obj.list=[];
                    obj.list.push(pData);
                    carArr.push(obj);
                }
            }
        }else{
            obj.list=[];
            obj.list.push(pData);
            carArr.push(obj);
        }
    })
    for(var i=0;i<carArr.length;i++){
    	
    	var proBox=$("<tr><td class=\"text-center hidden-xs\"><img src=\"\" class=\"img-responsive\"></td><td></td><td class=\"text-center\"></td><td class=\"text-center\"></td><td class=\"text-center\"></td><td class=\"text-center hidden-xs hidden-sm sub_amt\"></td><td class=\"text-center hidden-xs\"></td></tr>");
    	proBox.find('td').eq(0).find('img').attr('src',carArr[i].imgURL);
    	proBox.find('td').eq(1).html(carArr[i].name);
    	for(var j=0;j<carArr[i].list.length;j++){
    		$("<span>").appendTo(proBox.find('td').eq(2)).html(carArr[i].list[j].size);
    		$("<span>").appendTo(proBox.find('td').eq(3)).html(carArr[i].list[j].price);
    		$("<span>").appendTo(proBox.find('td').eq(4)).html(carArr[i].list[j].quantity);
    		$("<span>").appendTo(proBox.find('td').eq(5)).html(carArr[i].list[j].amt);
    		$("<span class='glyphicon glyphicon-remove cart_remove' aria-hidden='true'>").attr('p_key_id',carArr[i].id).attr('ps_name',carArr[i].size).appendTo(proBox.find('td').eq(6));

    	}
    	proBox.appendTo($('.cart_table tbody'));
    	
    }
})