<template>
    <layout>
        <div class="my-5 p-5 rounded-2xl bg-white">
            <div>
                <h1 class="text-4xl">Pacotes cadastrados por {{ userName }}</h1>
            </div>
            <div class="w-full mt-5">
                <table class="table-auto">
                    <tbody>
                        <div>
                            <tr v-for="pack in packs" :key="pack.id">
                                <div class="bg-amber-200 p-1 m-1">
                                    <td class="w-3/12">{{ pack.name }}</td>
                                    <td class="w-8/12">{{ pack.description }}</td>
                                    <td class="w-1/12"><Link :href="'/packages/${pack.id}/edit'" >Editar</Link></td>
                                </div>
                            </tr>
                        </div>
                    </tbody>
                </table>
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
            packs: Array
        }
    };
</script>

<style>
</style>