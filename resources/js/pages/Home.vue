<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import SiteNavigation from "@/components/SiteNavigation.vue";
import Projects from '@/components/sections/Projects.vue';
import Introduction from "@/components/sections/Introduction.vue";
</script>

<template>
    <Head title="Home" />

    <div class="min-h-screen bg-primary text-heading">
        <SiteNavigation />

        <div class="relative isolate overflow-hidden">
            <Introduction />
        </div>
    </div>
</template>
