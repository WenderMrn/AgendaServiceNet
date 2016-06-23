function clear_filds() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
}

function update_inputs_form(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('street').value=(conteudo.logradouro);
            document.getElementById('district').value=(conteudo.bairro);
            document.getElementById('city').value=(conteudo.localidade);
            document.getElementById('state').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            clear_filds();
            alert("CEP não encontrado.");
        }
}

function searchCEP(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('street').value="...";
                document.getElementById('district').value="...";
                document.getElementById('city').value="...";
                document.getElementById('state').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=update_inputs_form';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                clear_filds();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            clear_filds();
        }
};
function CreateOptionsState(){
    var state_select = document.getElementById('state');
    estados.forEach(function(state){
            /*optionsEstados += "<option value='"+estado.sigla+"'>"+estado.nome+"</option>";*/
            var option = document.createElement("option");
            option.text = state.sigla;
            var attr= document.createAttribute("value");
            attr.value =state.sigla;
            option.setAttributeNode(attr);
            state_select.appendChild(option);
    });
}
CreateOptionsState();
jQuery(function($){
   $("#date").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
   $("#phone").mask("(99) 9999-9999");
   $("#cep").mask("99.999-999");
   $("#ssn").mask("999-99-9999");
});