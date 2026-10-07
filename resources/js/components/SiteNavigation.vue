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
        <nav aria-label="Main navigation" class="flex flex-wrap items-center justify-between gap-x-6 gap-y-3 py-4">
            <a href="#home" aria-label="Go to home" class="shrink-0">
                <img :src="logoImage" alt="Gideon van den Herik" class="h-8" />
            </a>

            <div class="order-last flex w-full flex-wrap items-center justify-center gap-x-5 gap-y-2 text-sm sm:order-none sm:ml-auto sm:w-auto sm:gap-x-6 sm:text-base">
                <a v-for="link in links" :key="link.href" :href="link.href"
                   class="py-3 transition-colors hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                    {{ link.label }}
                </a>
            </div>

            <button type="button" aria-label="Toggle color theme"
                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-muted bg-transparent hover:bg-secondary">
                <i class="fa-solid fa-moon" aria-hidden="true"></i>
            </button>
        </nav>
    </div>
</template>
