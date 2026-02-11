<template>
    <headers/>
    <RouterView />
    <footers/>
</template>

<script setup>

    import footers from './footers.vue';
    import headers from './headers.vue';
    import { Script } from '../../plugins/script';
    import { onMounted, watch, ref, nextTick, onUnmounted } from 'vue';
    import { useRoute } from "vue-router";

    const route = useRoute()

    onMounted(()=>{
        setTimeout(()=>{
            Script();
        },0)
    })

    watch(route, async () => {
        await nextTick(); // attendre que le DOM se mette à jour
        Script();
    });

    onUnmounted(() => {
        $(window).off('scroll.headerStyle');
    });

</script>

<style>

</style>