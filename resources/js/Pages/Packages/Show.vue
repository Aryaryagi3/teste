<template>
    <layout>
        <div class="my-5 p-5 rounded-2xl bg-white">
            <div class="flex">
                <div class="w-3/4">
                    <h1 class="text-4xl">{{ pack.name }}</h1>
                </div>
                <div class="w-1/4">
                    <p class="text-gray-600 text-lg" v-if="pack.status == 'Aguardando recebimento na transportadora'">{{pack.status}}</p>
                    <p class="text-yellow-600 text-lg" v-if="pack.status == 'Encaminhado'">{{pack.status}}</p>
                    <p class="text-amber-600 text-lg" v-if="pack.status == 'Saiu para entrega'">{{pack.status}}</p>
                    <p class="text-green-600 text-lg" v-if="pack.status == 'Entrega'">{{pack.status}}</p>
                </div>
            </div>
            <div class="bg-amber-200 p-3 mt-5">
                <h1 class="text-xl mb-3">Descrição</h1>
                <p>{{pack.description}}</p>
            </div>
            <div class="bg-amber-200 p-3 mt-5">
                <h1 class="text-xl mb-3">Endereço de entrega</h1>
                <div>
                    <h1>{{pack.street}}, {{pack.number}} - {{pack.neighborhood}}, {{pack.city}} - {{pack.state}}, {{pack.cep}}</h1>
                </div>
                <div>
                    <h1>Complemento: {{pack.complement}}</h1>
                </div>
            </div>
            <div>
                <Link href="/register"><button class="bg-orange-600 hover:bg-orange-500 text-white text-lg py-2 px-4 rounded mr-3">Editar</button></Link>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from "../../Layout.vue";
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components: { Layout, Link },
        props: {
            pack: Object,
            userName: String
        }
    };
</script>

<style>
</style>