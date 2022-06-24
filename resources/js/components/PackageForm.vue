<template>
    <div class="w-full bg-white px-8 pt-6 pb-8 mb-4">
        <form @submit.prevent="validate" id="form">
        <div class="flex">
        <div class="w-5/12">
            <h1 class="block uppercase tracking-wide text-cyan-900 text-xl font-bold">Detalhes do Pacote</h1>
            <br>
            <div class="mb-4">
                <label>Nome do pacote</label>
                <input type="text" id="name" name="name" v-model="form.name" placeholder="Nome do pacote" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
            </div>
            <div class="mb-4">
                <label>Descrição</label><br>
                <textarea  type="text" id="description" name="description" v-model="form.description" placeholder="Informações sobre o pacote" rows="7" class="w-11/12 resize-none appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" />
            </div>
            <div >
                <select v-if="pack" v-model="form.status" name="status">
                    <option value="Aguardando recebimento na transportadora">Aguardando recebimento na transportadora</option>
                    <option value="Encaminhado">Encaminhado</option>
                    <option value="Saiu para entrega">Saiu para entrega</option>
                    <option value="Entregue">Entregue</option>
                </select>
            </div>
        </div>
        <div class="w-7/12">
            <h1 class="block uppercase tracking-wide text-cyan-900 text-xl font-bold">Endereço de Entrega</h1>
            <br>
            <div class="flex">
                <div class="w-2/3">
                    <label>CEP</label><br>
                    <input type="text" id="cep" name="cep" v-model="form.cep" placeholder="CEP do endereço" maxlength="8" class="w-5/6 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <p><small class="text-stone-500">O CEP só será válido sem o uso de '-' e contendo 8 caracteres.</small></p>
                </div>
                <div class="w-1/3">
                    <button type="button" @click="checkCep" class="bg-orange-600 hover:bg-orange-500 text-white text-lg py-1 px-3 rounded mt-6">Verificar CEP</button>
                </div>
            </div>
            <br>
            <div>
                <div class="flex">
                    <div class="w-1/2">
                        <label>Logradouro</label><br>
                        <input type="text" id="street" name="street" v-model="form.street" placeholder="Logradouro" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                    <div class="w-1/2">
                        <label>Número</label><br>
                        <input type="text" id="number" name="number" v-model="form.number" placeholder="Número" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                </div>
                <div class="flex">
                    <div class="w-1/2">
                        <label>Complemento</label><br>
                        <input type="text" id="complement" name="complement" v-model="form.complement" placeholder="Complemento" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                    <div class="w-1/2">
                        <label>Bairro</label><br>
                        <input type="text" id="neighborhood" name="neighborhood" v-model="form.neighborhood" placeholder="Bairro" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                </div>
                <div class="flex">
                    <div class="w-1/2">
                        <label>Cidade</label><br>
                        <input type="text" id="city" name="city" v-model="form.city" placeholder="Cidade" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                    <div class="w-1/2">
                        <label>Estado</label><br>
                        <input type="text" id="state" name="state" v-model="form.state" placeholder="Estado"  class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <button type="submit" class="bg-cyan-900 hover:bg-cyan-800 text-white text-lg py-2 px-4 rounded ml-3 mt-3">Enviar</button>
        </form>
        <button v-if="pack" v-on:click="remove" class="bg-red-700 hover:bg-red-600 text-white text-lg py-2 px-4 rounded ml-3 mt-3">Deletar Pacote</button>
    </div>
</template>


<script setup>
    import { reactive } from "vue";

    import { Inertia } from "@inertiajs/inertia";

    const props = defineProps({
        pack: Object
    })
    let form;

    if (typeof props.pack === 'undefined') {
        form = reactive({
            name: '',
            description: '',
            cep: '',
            street: '',
            number: '',
            status: '',
            complement: '',
            neighborhood: '',
            city: '',
            state: '',
        });
    } else {
        form = reactive({
            name: props.pack.name,
            description: props.pack.description,
            cep: props.pack.cep,
            street: props.pack.street,
            number: props.pack.number,
            status: props.pack.status,
            complement: props.pack.complement,
            neighborhood: props.pack.neighborhood,
            city: props.pack.city,
            state: props.pack.state,
        });
    }

    let submit = () => {
        if (typeof props.pack === 'undefined') {
            Inertia.post('/packages', form);
        } else {
            Inertia.patch('/packages/' + props.pack.id, form);
        }
    };

    let remove = () => {
        Inertia.delete('/packages/' + props.pack.id);
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

    let validate = () => {
        let elements = document.getElementById("form").elements;
        let keyWords = ['nome do pacote', 'descrição', 'CEP', '', 'logradouro', 'número', 'complemento', 'bairro', 'cidade', 'estado']
        for (let i = 0; i < 10; i++) {
            if (elements[i].value == "") {
            alert("Por favor, preencha o campo " + keyWords[i]);
            return false;
            }
            if (i == 2) {
                i++;
            }
        }
        submit();
        if (typeof props.pack === 'undefined') {
            alert("Livro cadastrado com sucesso.");
        } else {
            alert("Livro editado com sucesso.");
        }
    };
</script>

<script>
    export default {
        props: {
            'pack': Object
        },
        name: "PackageForm",
    }
</script>
<style>
</style>
