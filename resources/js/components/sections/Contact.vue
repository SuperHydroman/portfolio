<script setup lang="ts">
import Button from "@/components/ui/Button.vue";
import SectionReveal from "@/components/ui/SectionReveal.vue";
import SubHeader from "@/components/SubHeader.vue";
import ContactForm from "@/components/forms/ContactForm.vue";
</script>

<template>
    <section id="contact">
        <SectionReveal>
            <div class="container grid grid-cols-1 gap-x-8 gap-y-6 lg:grid-cols-12 lg:gap-y-4">
                <SubHeader text="GET IN TOUCH" class="lg:col-span-12" />

                <div class="flex min-w-0 flex-col gap-y-6 lg:col-span-6">
                    <h2>Let's work together</h2>

                    <h3>Have a project in mind?</h3>

                    <p>
                        I'm always open to discussing new opportunities, creative ideas,
                        or just having a chat about technology.
                    </p>

                    <div class="flex flex-wrap gap-x-8 gap-y-3">
                        <Button href="https://github.com/SuperHydroMan" variant="ghost">GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i></Button>
                        <Button href="https://linkedin.com/in/gideon-van-den-herik/" variant="ghost">LinkedIn <i class="fa-solid fa-arrow-up-right-from-square"></i></Button>
                    </div>
                </div>

                <div class="min-w-0 lg:col-span-6">
                    <ContactForm />
                </div>
            </div>
        </SectionReveal>
    </section>
</template>

