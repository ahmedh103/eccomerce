$.ajaxSetup({
   headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
   }
});
$('#search').on('keyup',function (){
    $value = $(this).val();
    if($value == false){
        $('.allData').show();
        $('showData').hide();
    }else {
        $.ajax({
            method: 'post',
            url: 'search',
            data: JSON.stringify({
                search: $inputSearch
            }),
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json'
            },
            success: function (data) {
                var searchResultAjax ='';
                data = JSON.parse(data);
                $('.allData').hide();
                $('showData').show();
                for (let i = 0 ; i<data.length;i++){
                    searchResultAjax +=`
                        <h1>karim</h1>
                    `;
                }
                $('.showData').html(searchResultAjax)

            }
        })
    }
})
