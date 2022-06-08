<template>
    <div v-if="$page.props.auth">
        <div>
            <a href="/">Seus Pacotes</a>
            <a href="/register">Cadastrar Pacote</a>
        </div>
        <div>
            <form action="/logout" method="POST" class="">
                <input type="hidden" name="_token" :value="csrf">
                <a href="/logout"
                class="dropdown-item"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                    Sair
                </a>
            </form>
        </div>
    </div>
    <div v-else>
        <a href="/login">Entrar</a>
        <a href="/register">Criar Conta</a>
    </div>

</template>

<script>
    export default {
        name: "Header",

        data() { return { csrfToken: null }},

        mounted() {
            this.csrfToken = document.querySelector('meta[name="csrf-token"]').content
        }
    }
</script>

<style>
</style>