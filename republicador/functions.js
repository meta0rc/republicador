function onlypage(){
    $('.btn-opt').css("display", "none");
    $('#loading').css('display', "block");
    $.ajax({
        url: 'onlypage.php',
        method: 'post'
    })
    .done(function(){
        $('h2').html("Rrojeto republicado");
        alert("pronto");
        document.querySelectorAll('.btn-opt')[2].style.display = "block";
        document.querySelectorAll('.btn-opt')[2].style.display = "block";
        document.querySelectorAll('.btn-opt')[2].setAttribute('onclick', 'delold()')
        document.querySelectorAll('.btn-opt')[2].setAttribute('value', 'Apagar Old')
        $('#loading').css('display', "none");
        
    });
}
function pageandimg(){
    $('.btn-opt').css("display", "none");
    $('#loading').css('display', "block");
    $.ajax({
        url: 'pageandimg.php',
        method: 'post'
    })
    .done(function(){
        $('h2').html("Projeto republicado");
        alert("pronto");
        document.querySelectorAll('.btn-opt')[2].style.display = "block";
        document.querySelectorAll('.btn-opt')[2].setAttribute('onclick', 'delold()')
        document.querySelectorAll('.btn-opt')[2].setAttribute('value', 'Apagar Old')
        $('#loading').css('display', "none");
        
    });
}
function completo(){
    $('.btn-opt').css("display", "none");
    $('#loading').css('display', "block");
    $.ajax({
        url: 'completo.php',
        method: 'post'
    })
    .done(function(){
        $('h2').html("Projeto republicado");
        alert("pronto");
        document.querySelectorAll('.btn-opt')[2].style.display = "block";
        
        document.querySelectorAll('.btn-opt')[2].setAttribute('onclick', 'delold()')
        document.querySelectorAll('.btn-opt')[2].setAttribute('value', 'Apagar Old')
        $('#loading').css('display', "none");
        
    });
}
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
