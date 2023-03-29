$.ajaxSetup({
   headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
   }
});

 var old_content = $('.content-reverse').html();
$(document).on('keyup','#inputSearch',function (){

    var search_content = $(this).val();
    if (search_content != ''){
        $.ajax({
            url:'/blog/search',
            method:'GET',
            data:{search_content},
            data_type:'json',
            success:function (data){
                $('.allData').html(data.row_result);
            }
        })
    }else{
        $('.content-reverse').html(old_content);

    }
});
