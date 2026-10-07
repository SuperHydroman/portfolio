<script setup lang="ts">
import { useForm } from "@inertiajs/vue3";
import Input from "@/components/forms/fields/Input.vue";
import Textarea from "@/components/forms/fields/Textarea.vue";
import Button from "@/components/ui/Button.vue";

const form = useForm({
    name: '',
    email: '',
    message: ''
})

function submit() {
    form.post('/submit-contact-form', {
        preserveScroll: true,
        onSuccess: () => form.reset()
    })
}
</script>

<template>
    <form @submit.prevent="submit" class="flex min-w-0 flex-col gap-4 rounded-lg border border-outline bg-secondary p-4 sm:p-6">
        <div class="flex flex-col gap-2">
            <Input v-model="form.name" name="name" label="Name" placeholder="Your name" :error="form.errors.name" />
            <p v-if="form.errors.name" id="name-error" class="mt-2 text-sm text-error">
                {{ form.errors.name }}
            </p>
        </div>

        <div class="flex flex-col gap-2">
            <Input v-model="form.email" name="email" label="E-mail" placeholder="Your email" type="email" :error="form.errors.email" />
            <p v-if="form.errors.email" id="email-error" class="mt-2 text-sm text-error">
                {{ form.errors.email }}
            </p>
        </div>

        <div class="flex flex-col gap-2">
            <Textarea v-model="form.message" name="message" label="Message" placeholder="Tell me about your project..." :error="form.errors.message" />
            <p v-if="form.errors.message" id="message-error" class="mt-2 text-sm text-error">
                {{ form.errors.message }}
            </p>
        </div>

        <p v-if="form.wasSuccessful" role="status" class="text-sm text-accent">
            Your message has been sent. I will get back to you as soon as possible.
        </p>

        <Button type="submit"
                :disabled="form.processing"
                :aria-disabled="form.processing"
                variant="primary"
                class="text-xl font-medium">{{ form.processing ? 'Sending...' : 'Send message' }}<i class="fa-solid fa-arrow-right" aria-hidden="true"></i></Button>
    </form>
</template>

<style scoped>

</style>
