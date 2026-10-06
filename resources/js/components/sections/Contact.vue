<script setup lang="ts">

import Button from "@/components/ui/Button.vue";
import SectionReveal from "@/components/SectionReveal.vue";
import SubHeader from "@/components/SubHeader.vue";
</script>

<template>
    <section id="projects" class="py-28">
        <SectionReveal>
            <div class="container grid grid-cols-12 gap-x-8 gap-y-4">
                <SubHeader text="GET IN TOUCH" class="col-span-12"/>

                <div class="flex flex-col gap-y-6 col-span-6">
                    <h3 class="text-5xl font-bold leading-12">
                        Let's work together
                    </h3>

                    <h4 class="text-3xl font-bold">
                        Have a project in mind?
                    </h4>

                    <p class="text-xl text-body tracking-wide">
                        I'm always open to discussing new opportunities,<br> creative ideas, or just having a chat about technology.
                    </p>

                    <div class="flex gap-8">
                        <Button href="https://linkedin.com/in/gideon-van-den-herik/" variant="ghost">GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i></Button>
                        <Button href="https://linkedin.com/in/gideon-van-den-herik/" variant="ghost">LinkedIn <i class="fa-solid fa-arrow-up-right-from-square"></i></Button>
                    </div>
                </div>

                <div class="col-span-6 gap-4">
                    <div class="flex flex-col rounded-lg border border-outline bg-secondary p-6 gap-4">
                        <div class="flex flex-col gap-2">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" aria-label="name" placeholder="Your name">
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" aria-label="email" placeholder="Your email">
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="message">Message</label>
                            <textarea type="message" name="message" id="message" aria-label="message" placeholder="Tell me about your project..." rows="6" />
                        </div>

                        <Button type="submit" variant="primary" class="text-xl font-medium">Send message <i class="fa-solid fa-arrow-right"></i></Button>
                    </div>
                </div>
            </div>
        </SectionReveal>
    </section>
</template>

