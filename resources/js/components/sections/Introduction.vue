<script setup lang="ts">
const name = 'Gideon van den Herik';
const githubUrl = 'https://github.com/SuperHydroMan';
</script>

<template>
    <section id="home">
        <h1 class="text-4xl font-bold">
            {{ name }}
        </h1>

        <p class="mt-4 text-lg text-cyan-400">
            Full-Stack Developer & DevOps Engineer
        </p>
        <p class="mt-6 max-w-xl leading-relaxed text-slate-400">
            I enjoy building software and understanding the systems behind it.
        </p>

        <div class="mt-8 flex gap-4">
            <a href="#projects" class="rounded-md bg-cyan-400 px-5 py-3 font-medium text-slate-950">
                View my work
            </a>

            <a :href="githubUrl" target="_blank" rel="noopener noreferrer" class="rounded-md border border-slate-700 px-5 py-3">
                GitHub
            </a>
        </div>
    </section>
</template>
