function delold(){
    $('.btn-opt').css("display", "none");
    $('#loading').css('display', "block");
    $.ajax({
        url: 'del.php',
        method: 'post'
    }).done(function(){
        alert("Pasta apagada");
        document.querySelectorAll('.btn-opt')[2].style.display = "block";
        $('#loading').css('display', "none");
    });
}
