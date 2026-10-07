<script setup lang="ts">
type Props = {
    text: string
}

const props = defineProps<Props>()
</script>

<template>
    <span class="subheader">
        // {{ props.text }}
    </span>
</template>
