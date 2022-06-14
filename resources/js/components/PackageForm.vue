<template>
    <div>
    <div class="flex">
        <div class="w-5/12">
            <h1 class="block uppercase tracking-wide text-cyan-900 text-xl font-bold">Detalhes do Pacote</h1>
            <br>
            <div class="mb-4">
                <label>Nome do pacote</label>
                <input type="text" id="name" name="name" v-model="name" placeholder="Nome do pacote" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
            </div>
            <div class="mb-4">
                <label>Descrição</label><br>
                <textarea  type="text" id="description" name="description" v-model="description" placeholder="Informações sobre o pacote" rows="7" class="w-11/12 resize-none appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" />
            </div>
        </div>
        <div class="w-7/12">
            <h1 class="block uppercase tracking-wide text-cyan-900 text-xl font-bold">Endereço de Entrega</h1>
            <br>
            <div class="flex">
                <div class="w-2/3">
                    <label>CEP</label><br>
                    <input type="number" id="cep" name="cep" v-model="cep" placeholder="CEP do endereço" maxlength="8" class="w-5/6 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    <p><small class="text-stone-500">O CEP só será válido sem o uso de '-' e contendo 8 caracteres.</small></p>
                </div>
                <div class="w-1/3">
                    <button type="button" onclick="checkCep()" class="bg-orange-600 hover:bg-orange-500 text-white text-lg py-1 px-3 rounded mt-6">Verificar CEP</button>
                </div>
            </div>
            <br>
            <div>
                <div class="flex">
                    <div class="w-1/2">
                        <label>Logradouro</label><br>
                        <input type="text" id="street" name="street" v-model="street" placeholder="Logradouro" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                    <div class="w-1/2">
                        <label>Número</label><br>
                        <input type="number" id="number" name="number" v-model="number" placeholder="Número" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                </div>
                <div class="flex">
                    <div class="w-1/2">
                        <label>Complemento</label><br>
                        <input type="text" id="complement" name="complement" v-model="complement" placeholder="Complemento" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                    <div class="w-1/2">
                        <label>Bairro</label><br>
                        <input type="text" id="neighbourhood" name="neighbourhood" v-model="neighbourhood" placeholder="Bairro" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                </div>
                <div class="flex">
                    <div class="w-1/2">
                        <label>Cidade</label><br>
                        <input type="text" id="city" name="city" v-model="city" placeholder="Cidade" class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                    <div class="w-1/2">
                        <label>Estado</label><br>
                        <input type="text" id="state" name="state" v-model="state" placeholder="Estado"  class="w-11/12 appearance-none block bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <button class="bg-cyan-900 hover:bg-cyan-800 text-white text-lg py-2 px-4 rounded ml-3 mt-3">Cadastrar</button>
    </div>
</template>

<script>
    export default {
        name: "PackageForm"
    }
</script>
<style>
</style>
