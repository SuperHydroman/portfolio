<script setup lang="ts">
const links = [
    { label: 'Home', href: '#home' },
    { label: 'Projects', href: '#projects' },
    { label: 'About', href: '#about' },
    { label: 'Contact', href: '#contact' }
];
</script>

<template>
    <nav aria-label="Main navigation" class="flex gap-6">
        <a v-for="link in links" :key="link.href" :href="link.href" class="text-slate-400 transition-colors hover:text-cyan-400">
            {{ link.label }}
        </a>
    </nav>
</template>
