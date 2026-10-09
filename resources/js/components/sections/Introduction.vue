<script setup lang="ts">
import Button from "@/components/ui/Button.vue";
import Pill from "@/components/ui/Pill.vue";
import HeaderCodeTerminal from "@/components/ui/HeaderCodeTerminal.vue";
import SubHeader from "@/components/SubHeader.vue";
import {onMounted, ref} from "vue";
import TypewriterText from '@/components/ui/TypewriterText.vue';

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

const randomizedTechnologies = ref([...technologies]);

onMounted(() => {
    const shuffled = [...technologies];

    for (let i = shuffled.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));

        [shuffled[i], shuffled[j]] = [shuffled[j]!, shuffled[i]!];
    }

    randomizedTechnologies.value = shuffled;
});

const developmentSteps = [
    { label: 'Code', icon: 'fa-code' },
    { label: 'Build', icon: 'fa-cube' },
    { label: 'Deploy', icon: 'fa-cloud' },
];
</script>

<template>
    <section id="introduction">
        <header class="container grid grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-8">
            <div class="flex min-w-0 flex-col gap-6 lg:col-span-5">
                <SubHeader text="WELCOME TO MY PROFILE"/>

                <h1>
                    <span class="block">Gideon</span>
                    <span class="block">van den Herik</span>
                </h1>

                <p>
                    <span class="block text-xl font-bold text-accent sm:text-2xl lg:text-3xl">
                        Full-Stack Developer
                    </span>

                    <span class="block text-lg text-heading sm:text-xl lg:text-2xl">
                        DevOps Engineer & IT Admin
                    </span>
                </p>

                <TypewriterText />

                <div class="flex flex-col gap-3 sm:flex-row sm:flex-wrap sm:gap-4">
                    <Button href="#projects" target="_self">
                        View my work
                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </Button>

                    <Button href="#contact" target="_self" variant="secondary">
                        Get in touch
                    </Button>
                </div>

                <ul class="mt-4 flex flex-wrap gap-2 sm:gap-3" v-if="randomizedTechnologies.length > 0">
                    <li v-for="technology in randomizedTechnologies" :key="technology">
                        <Pill>{{ technology }}</Pill>
                    </li>
                </ul>
            </div>

            <div class="min-w-0 lg:col-span-6 lg:col-start-7">
                <HeaderCodeTerminal />

                <ol aria-label="Development workflow" class="relative z-10 -mt-4 flex items-center justify-center gap-2 sm:mx-4 sm:-mt-6 sm:gap-3 xl:justify-end">
                    <li v-for="(step, index) in developmentSteps" :key="step.label" class="flex items-center gap-2 sm:gap-3">
                        <div class="flex h-16 w-16 shrink-0 flex-col items-center justify-center gap-2 rounded-xl border border-accent/30 bg-primary shadow-lg sm:h-20 sm:w-20 xl:h-24 xl:w-24">
                            <i :class="['fa-solid', step.icon]" class="text-lg text-accent sm:text-2xl" aria-hidden="true"></i>
                            <span class="text-xs text-heading sm:text-sm">{{ step.label }}</span>
                        </div>

                        <i v-if="index < developmentSteps.length - 1" class="fa-solid fa-arrow-right shrink-0 text-xs text-accent sm:text-base" aria-hidden="true"></i>
                    </li>
                </ol>
            </div>
        </header>
    </section>
</template>
