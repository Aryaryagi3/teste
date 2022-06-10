<template>
    <layout>
        <div>
            <div class="flex my-5 p-5 rounded-2xl bg-white">
                <div>
                    <h1 class="text-4xl my-10">Cadastre e gerencie seus pacotes para delivery de forma fácil e rápida!</h1>
                    <br>
                    <h1 class="text-2xl">Basta cadastrar sua conta no site!</h1>
                    <br>
                    <div class="flex">
                    <Link href="/register"><button class="bg-orange-600 hover:bg-orange-500 text-white text-lg py-2 px-4 rounded mr-3">Criar conta</button></Link>
                    <Link href="/login"><button class="bg-cyan-900 hover:bg-cyan-800 text-white text-lg py-2 px-4 rounded">Entrar</button></Link>
                </div>
                </div>
                <img src="/img/hero.jpg" class="object-center" alt="Hero" width="600" height="400">
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from "../Layout.vue";
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components: { Layout, Link }
    };
</script>

<style>
</style>