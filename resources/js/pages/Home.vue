<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import SiteNavigation from "@/components/SiteNavigation.vue";
import Projects from '@/components/sections/Projects.vue';
import Introduction from "@/components/sections/Introduction.vue";
import AboutMe from "@/components/sections/AboutMe.vue";
import Contact from "@/components/sections/Contact.vue";
import Footer from "@/components/Footer.vue";
</script>

<template>
    <Head title="Home" />

    <div class="min-h-screen bg-primary text-heading">
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
