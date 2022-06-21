<template>
    <layout>
        <div class="my-5 p-5 rounded-2xl bg-white">
            <div>
                <h1 class="text-4xl">Pacotes cadastrados por {{ userName }}</h1>
            </div>
            <div class="w-full mt-5">
                <div v-for="pack in packs.data" :key="pack.id">
                    <div class="bg-amber-200 p-3 m-3 flex">
                        <div class="w-11/12">
                            <div><h1 class="text-2xl mb-2">{{ pack.name }}</h1></div>
                            <div>{{ pack.description }}</div>
                            <div>Situação: {{ pack.status }}</div>
                        </div>
                        <div class="w-1/12">
                            <Link class="bg-orange-600 hover:bg-orange-500 text-white pl-2 h-8 pr-2 pt-1 pb-1 text-md rounded" :href="'/packages/' + pack.id">Detalhes</Link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 ml-3">
                <Link
                v-for="link in packs.links"
                :href="link.url"
                v-html="link.label"
                class="bg-cyan-900 hover:bg-cyan-800 text-white pr-2 pl-2 pt-1 pb-1 mr-1 ml-1 rounded">
                </Link>
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
            userName: String,
            packs: Object
        }
    };
</script>

<style>
</style>