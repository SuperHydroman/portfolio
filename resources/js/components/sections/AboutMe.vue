<script setup lang="ts">
import Button from "@/components/ui/Button.vue";
import SectionReveal from "@/components/SectionReveal.vue";
import SubHeader from "@/components/SubHeader.vue";

type Experience = {
    id: string;
    period: string;
    role: string;
    organization: string;
    description: string;
}

// Example content. Replace this with your actual experience.
const experiences: Experience[] = [
    {
        id: 'current-role',
        period: 'feb 2025 to present',
        role: 'Junior Software Developer / System Admin / DevOps Engineer',
        organization: 'GMS Digitaliseert',
        description: 'I maintain and update servers, assemble hardware, and contribute to internal software that helps speed up the digitization process at GMS.',
    },
    {
        id: 'wadm-role',
        period: 'dec 2023 to jan 2026',
        role: 'Junior Back-end Ontwikkelaar',
        organization: 'WADM',
        description: 'I developed and maintained the back end of various websites, ensuring stable, secure, and scalable solutions.',
    },
    {
        id: 'mcdonalds-role',
        period: 'okt 2019 - nov 2023',
        role: 'All-round Fast Food Server',
        organization: 'McDonalds',
        description: 'I worked across different areas of the restaurant, from preparing burgers to taking drive-through orders and helping customers place their orders in the restaurant.',
    },
];

</script>

<template>
    <section id="about-me" class="py-28">
        <SectionReveal>
            <div class="container grid grid-cols-12 gap-8">
                <div class="flex flex-col gap-y-4 col-span-5">
                    <SubHeader text="ABOUT ME" />

                    <h3 class="text-5xl font-bold leading-12">
                        Curiosity keeps me building.
                    </h3>

                    <p class="text-xl text-body tracking-wide">
                        I enjoy working across software development and infrastructure. Personal projects give me room to experiment and learn.
                    </p>

                    <div>
                        <Button href="https://linkedin.com/in/gideon-van-den-herik/" variant="ghost">LinkedIn <i class="fa-solid fa-arrow-up-right-from-square"></i></Button>
                    </div>
                </div>

                <div class="flex flex-col gap-y-4 col-span-6 col-start-7 w-full h-full">
                    <span class="font-mono uppercase text-muted font-medium">
                        EXPERIENCE
                    </span>

                    <ol class="ml-1 border-l border-outline">
                        <li v-for="experience in experiences" :key="experience.id" class="relative pb-8 pl-6 last:pb-0">
                            <span aria-hidden="true" class="absolute top-1.5 -left-px h-2 w-2 -translate-x-1/2 rounded-full bg-accent"></span>

                            <p class="font-mono text-sm text-accent">
                                {{ experience.period }}
                            </p>

                            <h4 class="mt-1 text-base font-semibold text-heading">
                                {{ experience.role }}
                            </h4>

                            <p class="mt-1 text-sm text-body">
                                {{ experience.organization }}
                            </p>

                            <p class="mt-2 text-sm leading-relaxed text-muted">
                                {{ experience.description }}
                            </p>
                        </li>

                        <li class="relative pl-6">
                            <span aria-hidden="true" class="absolute top-1.5 -left-px h-2 w-2 -translate-x-1/2 rounded-full bg-accent"></span>

                            <h4 class="font-semibold text-heading">
                                More about my experience
                            </h4>

                            <p class="mt-2 text-sm text-body">
                                Want to learn more about my experience, background, and skills?
                            </p>

                            <Button href="https://www.linkedin.com/in/gideon-van-den-herik/" variant="ghost">
                                View my LinkedIn profile <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </Button>
                        </li>
                    </ol>
                </div>
            </div>
        </SectionReveal>
    </section>
</template>
