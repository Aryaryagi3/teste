<template>
    <div class="bg-cyan-900 p-2 flex justify-between">
        <h1 class="text-2xl text-slate-200">Let's Delivery</h1>
        <div>
            <div v-if="$page.props.auth">
                <div class="text-slate-200 text-lg">
                    <Link class="ml-2 hover:text-orange-600 " href="packages/create">Cadastrar Pacote</Link>
                    <Link class="ml-2 hover:text-orange-600" href="packages/index">Seus Pacotes</Link>
                </div>
                <div  class="text-slate-200 text-lg">
                    <Link href="/logout" method="post">Sair</Link>
                </div>
            </div>
            <div  class="text-slate-200 text-lg" v-else>
                <Link class="ml-2 hover:text-orange-400" href="/login">Entrar</Link>
                <Link class="ml-2 hover:text-orange-400" href="/register">Criar Conta</Link>
            </div>
        </div>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';
    export default {
        components: { Link },
        name: "Header",
    }
</script>

<style>
</style>