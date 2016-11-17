$('document').ready(function(){
    /*
     * 生成级联菜单
     */
    var i=1917;
    var date = new Date();
    // year = date.getFullYear();//获取当前年份
    year = $('#year').val();//获取年份
    // console.log(year);
    var dropList;
    for(i;i<2017;i++){
        if(i == year){
            dropList = dropList + "<option value='"+i+"' selected>"+i+"</option>";
        }else{
            dropList = dropList + "<option value='"+i+"'>"+i+"</option>";
        }
    }
    $('select[name=year]').html(dropList);//生成年份下拉菜单

    mon = $('#mon').val();//获取月份
    // console.log(mon);
    var monthly;
    for(month=1;month<13;month++){
        if(month == mon){
            monthly = monthly + "<option value='"+month+"' selected>"+month+"</option>";
        }else{
            monthly = monthly + "<option value='"+month+"'>"+month+"</option>";
        }
   }
    $('select[name=month]').html(monthly);//生成月份下拉菜单

    date = $('#date').val();//获取日
    var dayly;
    for(day=1;day<=31;day++){
        if(day == date){
            dayly=dayly+"<option value='"+day+"' selected>"+day+"</option>";
        }else{
            dayly = dayly + "<option value='"+day+"'>"+day+"</option>"; 
        }
        
    }
    $('select[name=day]').html(dayly);//生成天数下拉菜单
    /*
     * 处理每个月有多少天---联动
     */
    $('select[name=month]').change(function(){
        var currentDay;
        var Flag = $('select[name=year]').val();
        var currentMonth = $('select[name=month]').val();
        switch(currentMonth){
            case "1" :
            case "3" :
            case "5" :
            case "7" :
            case "8" :
            case "10" :
            case "12" :total = 31;break;
            case "4" :
            case "6" :
            case "9" :
            case "11" :total = 30;break;
            case "2" :
                if((Flag%4 == 0 && Flag%100 != 0) || Flag%400 == 0){
                    total = 29;
                }else{
                    total = 28;
                }
            default:break;
        }
        for(day=1;day <= total;day++){
            currentDay = currentDay + "<option value='"+day+"'>"+day+"</option>";
        }
        $('select[name=day]').html(currentDay);//生成日期下拉菜单
        })
})