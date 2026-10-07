<script setup lang="ts">
import logoImage from '@images/logo.svg';

const links = [
    { label: 'Home', href: '#home' },
    { label: 'Projects', href: '#projects' },
    { label: 'About', href: '#about-me' },
    { label: 'Contact', href: '#contact' }
];
</script>

<template>
    <div class="container">
        <nav aria-label="Main navigation" class="nav">
            <!-- Logo -->
            <a href="#home">
                <img :src="logoImage" alt="Logo" class="h-8" />
            </a>

            <!-- Navigation -->
            <div class="flex gap-8 items-center">
                <a v-for="link in links" :key="link.href" :href="link.href" class="">
                    {{ link.label }}
                </a>

                <!-- Theme switcher -->
                <span>
                    <button class="w-8 h-8 bg-transparent border border-muted rounded-full hover:bg-secondary">
                        <i class="fa-solid fa-moon" aria-hidden="true"></i>

                        <!-- Sun -->
<!--                        <i class="fa-solid fa-sun" aria-hidden="true"></i>-->
                    </button>
                </span>
            </div>
        </nav>
    </div>
</template>
