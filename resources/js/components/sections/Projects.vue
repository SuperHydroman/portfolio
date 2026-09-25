<script setup lang="ts">
import { truncate } from "@/lib/utils";

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
        technologies: ['Lua']
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
        technologies: ['Lua'],
    }
]
</script>

<template>
    <section id="projects" class="py-16">
        <h2 class="text-3xl font-semibold">Projects</h2>

        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <article v-for="project in projects" :key="project.url" class="flex h-full flex-col rounded-lg border border-slate-800 p-6 max-h-64">
                <h3 class="text-xl font-semibold">
                    {{ project.name }}
                </h3>

                <p class="mt-3 text-slate-400">
                    {{ truncate(project.description) }}
                </p>

                <div class="mt-auto pt-6">
                    <ul class="flex flex-wrap gap-2">
                        <li v-for="technology in project.technologies" :key="technology" class="rounded bg-slate-800 px-2 py-1 text-sm">
                            {{ technology }}
                        </li>
                    </ul>

                    <a :href="project.url" target="_blank" rel="noopener noreferrer" class="mt-6 inline-block text-cyan-400">
                        View on GitHub ↗
                    </a>
                </div>
            </article>
        </div>
    </section>
</template>
