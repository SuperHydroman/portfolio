<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import SiteNavigation from "@/components/SiteNavigation.vue";
import Projects from '@/components/sections/Projects.vue';
import Introduction from "@/components/sections/Introduction.vue";
</script>

<template>
    <Head title="Home" />

    <div class="min-h-screen bg-slate-950 px-6 py-16 text-slate-100">
        <header class="mx-auto max-w-5xl px-6 py-6">
            <SiteNavigation />
        </header>

        <main class="mx-auto max-w-5xl px-6 py-16">
            <Introduction />
            <Projects />
        </main>
    </div>
</template>
