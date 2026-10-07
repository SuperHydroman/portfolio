<script setup lang="ts">
import Card from "@/components/ui/Card.vue";
import SectionReveal from "@/components/ui/SectionReveal.vue";
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
    <section id="projects">
        <SectionReveal>
            <div class="container space-y-8">
                <div class="flex flex-col gap-4">
                    <SubHeader text="SELECTED WORK" />

                    <h2>Projects I've built</h2>

                    <p>A few things I've enjoyed working on.</p>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <Card v-for="project in projects"
                        :key="project.url"
                        :title="project.name"
                        :description="project.description"
                        :url="project.url"
                        :labels="project.technologies"
                        imageUrl="https://placehold.co/300x200/071115/182226"
                        class="w-full max-w-sm justify-self-center"
                    />
                </div>
            </div>
        </SectionReveal>
    </section>
</template>
