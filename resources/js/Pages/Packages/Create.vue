<template>
    <layout>
            <div class="flex my-5 p-5 rounded-2xl bg-white">
                <div class="w-full">
                    <h1 class="text-4xl">Cadastrar Pacote</h1>
                    <br>
                    <div class="w-full">
                        <PackageForm />
                    </div>
                </div>
            </div>
    </layout>
</template>

<script>
    import Layout from "../../Layout.vue";
    import PackageForm from '../../components/PackageForm.vue';

    export default {
        components: {
            Layout,
            PackageForm
        },
    }
</script>
<style>
</style>