<script setup lang="ts">
import SiteNavigation from '@/components/SiteNavigation.vue';
import Projects from '@/components/sections/Projects.vue';
import Introduction from '@/components/sections/Introduction.vue';
import AboutMe from '@/components/sections/AboutMe.vue';
import Contact from '@/components/sections/Contact.vue';
import Footer from '@/components/Footer.vue';
import BackgroundBlobs from '@/components/ui/BackgroundBlobs.vue';
import SEOHead from '@/components/SEOHead.vue';
</script>

<template>
    <SEOHead />

    <div
        class="relative isolate min-h-screen bg-primary text-heading"
        id="home"
    >
        <!--

        TODO:
        - [x] Form validation (Contact form)
        - [x] Mobile responsiveness
        - [?] Project images
        - [?] Timeline animations? :P
        - [x] Make sure all styles are consistent throughout the webpage.
            - Padding, margin, spacing etc

        -->
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
