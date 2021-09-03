
let form = document.querySelector('#projeto');
var id;
var sec; 

function sendForm(event){
    event.preventDefault();
    let ajax = new XMLHttpRequest();
    let formData = new FormData(form);
    let btn = document.querySelector('#btn');
    // let progressBar = document.getElementById('progress');
    ajax.responseType = "blob";
    ajax.open('POST', 'publicador_develop.php');

    ajax.onloadstart = function(){
        btn.value = "Baixando zip";
        proBar();
        getComments();
       
        
    }

    ajax.upload.onprogress = function(event){
        if(event.lengthComputable){
           console.log(event);
           load = document.getElementById("load");
           load.style.display = "flex";
          
           
        }
    }
    ajax.onloadend = function(){
        btn.value = 'Enviar';
        //document.getElementById("success").style.display = "success.mp4";
        document.getElementById("pIm").textContent = "Concluido";
        document.getElementById('progress').style.display = "none";
        $('#valor').html('Donwload completo');
        clearInterval(id);    
        clearInterval(sec);
        location.href = 'republicador.php';
    }
    ajax.send(formData);
   
   function getComments() {
    id = setInterval(frame, 1000);
        function frame(){
            $.ajax({
                url: 'fileSize.php',
                method: 'get',
                dataType: 'json'
            }).done(function(result){
                
                console.log(result);
                var aux = (result / (1024*1024)).toFixed(2);
                $('#valor').html('Baixado...:'+aux + 'MB');
                
            });
           
        }
    } 
    function proBar(){
        sec = setInterval(tempo, 100);
        let contador = 0; 
        let bar = document.getElementById('progressBarD');

        function tempo(){

            if(contador == 150){
                clearInterval(sec);
                proBar();
            }
            else{
                contador = contador + 25;
                bar.style.width = contador;
                
                 }
            }
        }
}
form.addEventListener('submit', sendForm, false);


