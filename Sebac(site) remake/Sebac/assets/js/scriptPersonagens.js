const personagens = document.getElementById("personagens");

personagens.addEventListener('click', function(){

    if(personagens.style.height == '90%'){
        personagens.style.height = '100%';
    }
    else{
        personagens.style.height = '90%';
    }

})