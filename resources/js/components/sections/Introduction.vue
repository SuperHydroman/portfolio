<script setup lang="ts">
import Button from "@/components/ui/Button.vue";
import Pill from "@/components/ui/Pill.vue";
import HeaderCodeTerminal from "@/components/ui/HeaderCodeTerminal.vue";
import SubHeader from "@/components/SubHeader.vue";

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
    'C#',
    'MySQL',
    'Docker',
    'Linux',
    'Git',
]

const randomizedTechnologies = [...technologies].sort(
    () => Math.random() - 0.5);

const developmentSteps = [
    { label: 'Code', icon: 'fa-code' },
    { label: 'Build', icon: 'fa-cube' },
    { label: 'Deploy', icon: 'fa-cloud' },
];
</script>

<template>
    <section class="py-28">
        <header class="container grid grid-cols-12 gap-8">
            <div class="flex flex-col gap-6 col-span-5">
                <SubHeader text="WELCOME TO MY PROFILE"/>

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
                    <Button href="#projects">View my work <i class="fa-solid fa-arrow-right"></i></Button>
                    <Button href="#contact" variant="secondary">Get in touch</Button>
                </div>

                <ul class="flex flex-wrap gap-4 mt-4" v-if="randomizedTechnologies.length > 0">
                    <li v-for="technology in randomizedTechnologies" :key="technology">
                        <Pill>{{ technology }}</Pill>
                    </li>
                </ul>
            </div>

            <div class="col-span-6 col-start-7">
                <HeaderCodeTerminal />

                <ol aria-label="Development workflow" class="relative z-10 mx-4 -mt-6 flex items-center justify-end gap-3">
                    <li v-for="(step, index) in developmentSteps" :key="step.label" class="flex items-center gap-3">
                        <div class="flex h-24 w-24 flex-col items-center justify-center gap-3 rounded-xl border border-accent/30 bg-primary shadow-lg">
                            <i :class="['fa-solid', step.icon]" class="text-2xl text-accent" aria-hidden="true"></i>
                            <span class="text-sm text-heading">{{ step.label }}</span>
                        </div>
                        <i v-if="index < developmentSteps.length - 1" class="fa-solid fa-arrow-right text-accent" aria-hidden="true"></i>
                    </li>
                </ol>
            </div>
        </header>
    </section>
</template>
