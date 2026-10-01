<script setup lang="ts">
import Button from "@/components/ui/Button.vue";

type Project = {
    name: string;
    description: string;
    url: string;
    technologies: string[];
}

const projects: Project[] = [
    {
        name: 'Platformer Game',
        description: 'A platformer project built with lua.',
        url: 'https://github.com/SuperHydroMan/Platformer-Game',
        technologies: ['LUA']
    },
    {
        name: 'JavaScript Fighter',
        description: 'A fighting game built for fun and learning.',
        url: 'https://github.com/SuperHydroMan/JS_fighter_game',
        technologies: ['JavaScript'],
    },
    {
        name: 'TopDown Shooter',
        description: 'A top-down shooter project built with Lua.',
        url: 'https://github.com/SuperHydroMan/TopDown-Shooter-Game',
        technologies: ['LUA'],
    },
    {
        name: 'RPGBattle',
        description: 'A console-based RPG battle game built with C#.',
        url: 'https://github.com/SuperHydroMan/RPGBattle',
        technologies: ['C#'],
    }
]
</script>

<template>
    <div class="container py-24">
        <section id="home" class="grid grid-cols-12 gap-8">
            <div class="flex flex-col gap-y-4 col-span-12">
                <span class="font-mono uppercase text-accent">
                    // SELECTED WORK
                </span>

                <h1 class="text-5xl font-bold leading-12">
                    Projects I've built
                </h1>

                <p class="text-xl text-body tracking-wide">
                    A few things I've enjoyed working on.
                </p>
            </div>
            <div class="col-span-12 grid grid-cols-4 gap-4">
                <article v-for="project in projects" :key="project.url" class="flex flex-col rounded-lg border border-outline bg-secondary p-6 gap-4">
                    <div>
                        <img src="https://placehold.co/300x200/EEE/31343C" alt="Terminal introduction picture" class="w-full h-auto">
                    </div>

                    <span class="text-xl font-bold">{{ project.name }}</span>

                    <span class="text-body">{{ project.description }}</span>

                    <div class="flex items-center justify-between">
                        <span v-for="technology in project.technologies" :key="technology" class="rounded bg-slate-800 px-2 py-1 text-sm">
                            {{ technology }}
                        </span>

                        <Button href="{{ project.url }}" variant="ghost">
                            View on GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </Button>
                    </div>
                </article>
            </div>
        </section>
    </div>
</template>
