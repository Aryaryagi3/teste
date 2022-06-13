<template>
    <div>
        <Header />
        <div style="display: flex; min-height: 86.1vh; flex-direction: column; max-width: 1024px;" class="container mx-auto">
            <slot />
        </div>
        <Footer />
    </div>
</template>

<script>
    import Header from './components/Header.vue';
    import Footer from './components/Footer.vue';
    export default {
        components: {
            Header,
            Footer
        }
    }
</script>

<style>
</style>