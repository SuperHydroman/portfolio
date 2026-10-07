<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import SiteNavigation from "@/components/SiteNavigation.vue";
import Projects from '@/components/sections/Projects.vue';
import Introduction from "@/components/sections/Introduction.vue";
import AboutMe from "@/components/sections/AboutMe.vue";
import Contact from "@/components/sections/Contact.vue";
import Footer from "@/components/Footer.vue";
import BackgroundBlobs from "@/components/BackgroundBlobs.vue";
</script>

<template>
    <Head title="Home" />

    <div class="relative isolate min-h-screen bg-primary text-heading">
        <BackgroundBlobs />
        <SiteNavigation />

        <main>
            <Introduction />

            <Projects />

            <AboutMe />
            <Contact />
            <Footer />
        </main>
    </div>
</template>
