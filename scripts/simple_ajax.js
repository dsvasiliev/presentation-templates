function ajax(location, data, func) {
    $.ajax({
        url: location,
        dataType: 'json',
        data: data,
        type: 'post',
        success: function(answer){
            console.log(answer)
            if(answer.success) func(answer.message)
            else {
                return newWarn.open(answer.message, 4000) 
            }
        },
        error:function(xhr, status, errorThrown) { 
            newWarn.open('Ошибка сервера', 4000) 
       }    
    });
}