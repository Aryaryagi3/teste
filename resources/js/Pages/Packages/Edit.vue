<template>
    <layout>
            <div class="flex my-5 p-5 rounded-2xl bg-white">
                <div class="w-full">
                    <h1 class="text-4xl">Editar Pacote</h1>
                    <br>
                    <div class="w-full">
                        <PackageForm :pack = "pack"/>
                    </div>
                </div>
            </div>
    </layout>
</template>

<script>
    import Layout from "../../Layout.vue";
    import PackageForm from '../../components/PackageForm.vue';

    export default {
        props: {
            'pack': Object
        },
        components: {
            Layout,
            PackageForm
        },
    }
</script>
<style>
</style>