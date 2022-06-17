<template>
    <layout>
        <div>
            <div>
                <h1>Pacotes cadastrados por {{ userName }}</h1>
            </div>
            <div>
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
            packages: Array,
            userName: String
        }
    };
</script>

<style>
</style>