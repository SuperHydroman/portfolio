<script setup lang="ts">
import logoSource from '@images/logo.svg?raw';
import Button from "@/components/ui/Button.vue";
import ThemeToggle from "@/components/ui/ThemeToggle.vue";

const logoMarkup = logoSource
    .replaceAll('#EAEAEA', 'var(--color-heading)')
    .replaceAll('#00DDEA', 'var(--color-accent)');

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
            <a href="#home" aria-label="Gideon van den Herik, home" class="shrink-0">
               <span aria-hidden="true" class="block [&>svg]:h-8 [&>svg]:w-auto" v-html="logoMarkup" />
            </a>

            <div class="order-last flex w-full flex-wrap items-center justify-center gap-x-5 gap-y-2 sm:order-none sm:ml-auto sm:w-auto sm:gap-x-6">
                <Button v-for="link in links" :key="link.href" :href="link.href" variant="ghost" target="_self" class="group min-h-11 text-heading! hover:text-accent! after:hidden sm:text-base">
                    <span class="relative after:pointer-events-none after:absolute after:left-0 after:-bottom-[3px] after:h-px after:w-full after:bg-accent after:origin-left after:scale-x-0 after:transition-transform after:duration-300 after:ease-out after:content-[''] group-hover:after:scale-x-100 group-focus-visible:after:scale-x-100">
                        {{ link.label }}
                    </span>
                </Button>
            </div>

            <ThemeToggle />
        </nav>
    </div>
</template>
