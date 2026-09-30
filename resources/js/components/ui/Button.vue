<script setup lang="ts">
type Props = {
    href?: string;
    variant?: 'primary' | 'secondary';
    type?: 'button' | 'submit' | 'reset';
}

const props = withDefaults(defineProps<Props>(), {
    variant: 'primary',
    type: 'button',
})

const variants = {
    primary: 'border-accent bg-accent text-primary hover:bg-accent-hover hover:border-accent-hover',
    secondary: 'border-outline bg-transparent text-heading hover:border-accent hover:text-accent'
}
</script>

<template>
    <component
        :is="props.href ? 'a' : 'button'"
        :href="props.href"
        :type="props.type"
        :class="variants[props.variant]"
        class="inline-flex items-center justify-center gap-2 rounded-md border px-5 py-3 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-4 focus:outline-accent"
    >
        <slot />
    </component>
</template>
