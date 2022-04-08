function validarFormulario(formulario) {
    if(formulario.nome_cliente.value === "" || formulario.nome_cliente.value === null) {
        alert("O campo nome deve ser preenchido.");
        formulario.nome_cliente.focus();
        return false;
    }
    
    if(formulario.cpf_cliente.value.length !== 11) {
        alert("O campo CPF deve ter 11 caracteres.");
        formulario.cpf_cliente.focus();
        return false;
    }

    if(formulario.email_cliente.value.indexOf("@") === -1 || formulario.email_cliente.value.indexOf(".") === -1) {
        alert("Endereço de E-mail inválido.");
        formulario.email_cliente.focus();
        return false;
    }

    if(formulario.data_nascimento_cliente.value === "" || formulario.data_nascimento_cliente.value === null) {
        alert("O campo Data de Nascimento deve ser preenchido.");
        formulario.data_nascimento_cliente.focus();
        return false
    }
}