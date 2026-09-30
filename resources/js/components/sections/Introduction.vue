<script setup lang="ts">
import Button from "@/components/ui/Button.vue";
import Pill from "@/components/ui/Pill.vue";

const githubUrl = 'https://github.com/SuperHydroMan';

const technologies = [

    'HTML',
    'JavaScript',
    'TypeScript',
    'CSS',
    'Tailwind',
    'PHP',
    'WordPress',
    'Laravel',
    'Statamic',
    'MySQL',
    'Docker',
    'Linux',
    'Git',
]

const randomizedTechnologies = [...technologies].sort(
    () => Math.random() - 0.5);
</script>

<template>
    <header class="container py-24">
        <section id="home" class="grid grid-cols-12 gap-x-24">
            <div class="flex flex-col gap-y-6 col-span-5">
                <span class="font-mono uppercase text-accent">
                    // WELCOME TO MY PROFILE
                </span>

                <h1 class="text-6xl font-bold leading-12">
                    <span class="block">
                        Gideon
                    </span>
                    <span class="block">
                        van den Herik
                    </span>
                </h1>

                <p class="text-3xl">
                    <span class="block font-bold text-accent">Full-Stack Developer</span>
                    <span class="text-2xl block">DevOps Engineer & IT Admin</span>
                </p>

                <p class="text-xl text-body tracking-wide">
                    I enjoy building software and understanding the systems behind it.
                </p>

                <div class="flex gap-x-4">
                    <Button href="#projects">View my work -></Button>
                    <Button href="#contact" variant="secondary">Get in touch</Button>
                </div>

                <ul class="flex flex-wrap gap-4 mt-4" v-if="randomizedTechnologies.length > 0">
                    <li v-for="technology in randomizedTechnologies" :key="technology">
                        <Pill>{{ technology }}</Pill>
                    </li>
                </ul>





























<!--                <p class="mt-4 text-lg text-cyan-400">-->
<!--                    Full-Stack Developer & DevOps Engineer-->
<!--                </p>-->
<!--                <p class="mt-6 max-w-xl leading-relaxed text-slate-400">-->
<!--                    I enjoy building software and understanding the systems behind it.-->
<!--                </p>-->

<!--                <div class="mt-8 flex gap-4">-->
<!--                    <a href="#projects" class="rounded-md bg-cyan-400 px-5 py-3 font-medium text-slate-950">-->
<!--                        View my work-->
<!--                    </a>-->

<!--                    <a :href="githubUrl" target="_blank" rel="noopener noreferrer" class="rounded-md border border-slate-700 px-5 py-3">-->
<!--                        GitHub-->
<!--                    </a>-->
<!--                </div>-->
            </div>

            <div class="col-span-7">
                <img src="https://placehold.co/600x400/EEE/31343C" alt="Terminal introduction picture" class="w-full h-auto">
            </div>
        </section>
    </header>
</template>
