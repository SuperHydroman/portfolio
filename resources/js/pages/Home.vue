<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import SiteNavigation from "@/components/SiteNavigation.vue";
import Projects from '@/components/sections/Projects.vue';
import Introduction from "@/components/sections/Introduction.vue";
import BackgroundBloom from "@/components/ui/BackgroundBloom.vue";
</script>

<template>
    <Head title="Home" />

    <div class="min-h-screen bg-primary text-heading">
        <SiteNavigation />

        <div class="relative isolate overflow-hidden">
            <BackgroundBloom class="top-1/2 right-0 -z-10 -translate-y-1/2"/>
            <Introduction />
        </div>
    </div>
</template>
