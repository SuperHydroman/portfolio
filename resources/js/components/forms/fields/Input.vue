<script setup lang="ts">
type Props = {
    name: string,
    label: string,
    placeholder: string,
    type?: string,
    error?: string
}

const props = withDefaults(defineProps<Props>(), {
    type: 'text'
});

const model = defineModel<string>({ required: true });
</script>

<template>
    <label :for="props.name">{{ props.label }}</label>
    <input
        v-model="model"
        :id="props.name"
        :name="props.name"
        :placeholder="props.placeholder"
        :type="props.type"
        :class="{ 'border-error!': Boolean(props.error) }"
        :aria-invalid="Boolean(props.error)"
        :aria-describedby="props.error ? `${props.name}-error` : undefined" >
</template>
