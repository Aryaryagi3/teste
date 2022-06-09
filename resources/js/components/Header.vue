<template>
    <div class="bg-cyan-900 p-2 flex justify-between">
        <h1 class="text-2xl text-slate-200">Let's Delivery</h1>
        <div>
            <div v-if="$page.props.auth">
                <div class="text-slate-200 text-lg">
                    <Link class="hover:text-orange-700" href="/">Seus Pacotes</Link>
                    <Link class="ml-1" href="/register">Cadastrar Pacote</Link>
                </div>
                <div  class="text-slate-200 text-lg">
                    <Link href="/logout" method="post">Sair</Link>
                </div>
            </div>
            <div  class="text-slate-200 text-lg" v-else>
                <Link href="/login">Entrar</Link>
                <Link class="ml-1 hover:text-orange-400	" href="/register">Criar Conta</Link>
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