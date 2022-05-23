$(document).ready(function(){
    console.log('hhahah');
    $('.search-box-action input[type="text"]').on("keyup input", function(){
        var inputVal= $(this).val();
        var resultDropdown= $(".search-results");
        if(inputVal.length){
           
            $.get("Views/backend-search.php", {term: inputVal}).done(function(data){
                resultDropdown.html(data);
                
            });
        }else{
            resultDropdown.empty();
        }
    });
    $(document).on("click", ".search-results p", function(){
        $(this).parents(".search-box-action").find('input[type="text"]').val($(this).text());
        $(this).parent(".search-results").empty();
    });
});

////// cate to view type
$(document).ready(function(){
$('#MaDM').change(function(){
    var idcate = $(this).val();
    $.ajax({
        url: "Models/ajax/ajax_action.php",
        method: "POST",
        data:{idcate:idcate},
        success:function(data){
            $('#MaLSP').html(data);
        }
    })
})
 }) ;
$(document).ready(function(){
window.onload = function(){
        var idcate = $('#MaDM').val();
        var idtype = $('#idtype').val();
        $.ajax({
        url: "Models/ajax/ajax_action.php",
        method: "POST",
        data:{idcate:idcate,idtype:idtype},
        success:function(data){
            $('#MaLSP').html(data);
        }
    })
}
 });
