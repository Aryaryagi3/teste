
    import { reactive } from "vue";

    import { Inertia } from "@inertiajs/inertia";

    let form = reactive({
        name: '',
        description: '',
        cep: '',
        street: '',
        number: '',
        complement: '',
        neighborhood: '',
        city: '',
        state: '',
    });

    let submit = () => {
        Inertia.post('/packages', form);
    };

    let checkCep = () => {
        let cep = document.querySelector('#cep').value;

        if (cep.length !== 8) {
            alert('O CEP inserido é inválido, leia atentamente o texto abaixo do campo CEP.')
            return;
        }
        let url = 'https://viacep.com.br/ws/' + cep + '/json/';


        fetch(url).then(function(response){
            response.json().then(function(data) {
                if (data.uf === undefined) {
                    alert('O CEP inserido não existe, por favor insira um CEP válido.')    
                    return;
                }
                
                showInfo(data);
            })
        });
    };

    let showInfo = (data) => {
        form.street = data.logradouro;
        form.complement = data.complemento;
        form.neighborhood = data.bairro;
        form.city = data.localidade;
        form.state = data.uf;
    }
