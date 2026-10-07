<script setup lang="ts">
import Input from "@/components/forms/fields/Input.vue";

type Props = {
    name: string,
    label: string,
    placeholder: string,
    rows?: number,
    error?: string
}

const props = withDefaults(defineProps<Props>(), {
    rows: 6
})

const model = defineModel<string>({ required: true })
</script>

<template>
    <label :for="props.name">{{ props.label }}</label>
    <textarea
        v-model="model"
        :id="props.name"
        :name="props.name"
        :placeholder="props.placeholder"
        :rows="props.rows"
        :class="{ 'border-error!': Boolean(props.error) }"
        :aria-invalid="Boolean(props.error)"
        :aria-describedby="props.error ? `${props.name}-error` : undefined"
        class="w-full min-w-0 resize-y text-base" />
</template>
