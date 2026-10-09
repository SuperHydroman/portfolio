<script setup lang="ts">
type Props = {
    href?: string;
    variant?: 'primary' | 'secondary' | 'ghost';
    type?: 'button' | 'submit' | 'reset';
    target?: '_blank' | '_self' | '_parent' | '_top';
}

const props = withDefaults(defineProps<Props>(), {
    variant: 'primary',
    type: 'button',
    target: '_blank'
})

const variants = {
    primary: 'border-accent bg-accent text-on-accent hover:bg-accent-hover hover:border-accent-hover px-5 py-3',
    secondary: 'border-outline bg-transparent text-heading hover:border-accent hover:text-accent px-5 py-3',
    ghost: 'button-ghost relative w-fit max-w-full border-0 bg-transparent text-accent hover:text-accent-hover'
}
</script>

<template>
    <component
        :is="props.href ? 'a' : 'button'"
        :href="props.href"
        :target="props.target"
        :type="props.type"
        :class="variants[props.variant]"
        class="inline-flex items-center justify-center gap-2 rounded-md border text-sm font-medium transition-colors focus-visible:outline-2 focus-visible:outline-offset-4 focus:outline-accent"
    >
        <slot />
    </component>
</template>

<style scoped>
.button-ghost::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: currentColor;

    transform: scaleX(0);
    transform-origin: left;
    transition: transform 250ms ease;
}

.button-ghost:not(:disabled):hover::after,
.button-ghost:focus-visible::after {
    transform: scaleX(1);
}
</style>
