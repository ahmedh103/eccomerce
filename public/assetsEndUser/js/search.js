$.ajaxSetup({
   headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
   }
});

 var old_content = $('.content-reverse').html();
 var test_alert = $('.test').html();
$(document).on('keyup','#inputSearch',function (){

    var search_content = $(this).val();
    if (search_content != ''){
        $.ajax({
            url:'/blog/search',
            method:'GET',
            data:{search_content},
            data_type:'json',
            success:function (data){
                if(test_alert != '')
                {
                    $('.allData').html(data.row_result);
                }

                $('.allData').html(test_alert);

            }
        })
    }else{
        $('.content-reverse').html(old_content);

    }
});
