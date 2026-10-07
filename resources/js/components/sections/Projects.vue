<script setup lang="ts">
import Card from "@/components/ui/Card.vue";
import SectionReveal from "@/components/SectionReveal.vue";
import SubHeader from "@/components/SubHeader.vue";

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
    <section id="projects" class="py-28">
        <SectionReveal>
            <div class="container grid grid-cols-12 gap-8">
                <div class="flex flex-col gap-y-4 col-span-12">
                    <SubHeader text="SELECTED WORK" />

                    <h3 class="text-5xl font-bold leading-12">
                        Projects I've built
                    </h3>

                    <p class="text-xl text-body tracking-wide">
                        A few things I've enjoyed working on.
                    </p>
                </div>
                <div class="col-span-12 grid grid-cols-4 gap-4">
                    <Card v-for="project in projects"
                        :title="project.name"
                        :description="project.description"
                        :url="project.url"
                        :labels="project.technologies"
                        :imageUrl="'https://placehold.co/300x200/EEE/31343C'" />
                </div>
            </div>
        </SectionReveal>
    </section>
</template>
