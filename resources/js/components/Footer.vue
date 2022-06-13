<template>
    <footer class="text-center bg-cyan-900 p-2">
        <div class="text-slate-200 text-lg">
            © 2022 Copyright:
            <Link class="text-slate-200" href="/">Let's Delivery</Link>
        </div>
    </footer>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components: { Link },
        name: "Footer"
    }
</script>

<style>
</style>