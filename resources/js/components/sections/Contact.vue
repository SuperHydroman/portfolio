<script setup lang="ts">
import Button from "@/components/ui/Button.vue";
import SectionReveal from "@/components/ui/SectionReveal.vue";
import SubHeader from "@/components/SubHeader.vue";
import ContactForm from "@/components/forms/ContactForm.vue";
</script>

<template>
    <section id="contact" class="py-28">
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
                        <Button href="https://github.com/SuperHydroMan" variant="ghost">GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i></Button>
                        <Button href="https://linkedin.com/in/gideon-van-den-herik/" variant="ghost">LinkedIn <i class="fa-solid fa-arrow-up-right-from-square"></i></Button>
                    </div>
                </div>

                <div class="col-span-6 gap-4">
                    <ContactForm />
                </div>
            </div>
        </SectionReveal>
    </section>
</template>

