<script setup lang="ts">
type Props = {
    text: string
}

const props = defineProps<Props>()
</script>

<template>
    <span class="font-mono uppercase text-accent font-medium tracking-wide">
        // {{ text }}
    </span>
</template>
