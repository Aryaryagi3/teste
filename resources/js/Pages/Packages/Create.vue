<template>
    <layout>
        <div>
            <div class="flex my-5 p-5 rounded-2xl bg-white">
                <div>
                    <h1 class="text-2xl">Cadastrar Pacote</h1>
                    <br>
                    <div>
                        <form>
                            <PackageForm />
                        </form>
                    </div>
                </div>
                <div>
                    <img src="/img/hero.jpg" class="object-center" alt="Hero" width="1500">
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from "../../Layout.vue";
    import { PackageForm } from '../../components/PackageForm.vue';

    export default {
        components: { Layout, PackageForm}
    };
</script>

<style>
</style>