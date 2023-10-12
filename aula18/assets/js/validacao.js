document.addEventListener("DOMContentLoaded", function() {
    // Selecionar a tag <form> pelo seu ID
    var formulario = document.querySelector("#formCliente");

    // Verificar se o formulário foi encontrado
    if (formulario) {
        // Fazer algo com o formulário, por exemplo, adicionar um evento de envio
        formulario.addEventListener("submit", function(event) {
            let erroValidacao = false;

            const inputNome = document.querySelector("#nome");
            if( inputNome.value == "" ){
                erroValidacao = true;
                inputNome.parentNode.className += "has-danger";
                inputNome.className += "is-invalid";
                inputNome.parentNode.querySelector(".invalid-feedback").innerHTML = "O nome não pode ser vazio";
                inputNome.focus();
            }

            const inputEmail = document.querySelector("#email");
            const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if( inputEmail.value != "" && !regexEmail.test(inputEmail.value)){
                erroValidacao = true;
                inputEmail.parentNode.className += "has-danger";
                inputEmail.className += "is-invalid";
                inputEmail.parentNode.querySelector(".invalid-feedback").innerHTML = `Email inválido (${inputEmail.value})`;
                inputEmail.focus();
            }

            if(erroValidacao){
                document.querySelector(".alert.alert-dismissible.alert-primary").style.display = 'block';
                event.preventDefault();
            }
        });
    }
});