<script setup lang="ts">
import { onMounted, onUnmounted, ref } from 'vue';

const element = ref<HTMLElement | null>(null);
const isVisible = ref(true);

let observer: IntersectionObserver | null = null;

function revealSection () {
    isVisible.value = true;
    observer?.disconnect();
}

onMounted(() => {
    const target = element.value;

    if (!target) return;

    if (!('IntersectionObserver' in window))
        return;

    // Keep sections already on screen visible.
    if (typeof window.IntersectionObserver === 'undefined')
        return;

    isVisible.value = false;

    observer = new IntersectionObserver((entries) => {
        if (entries.some((entry) => entry.isIntersecting)) {
            revealSection();
        }
    });

    observer.observe(target);
})

onUnmounted(() => {
    observer?.disconnect();
})
</script>

<template>
    <div ref="element" @focusin="revealSection">
        <div class="reveal-contents" :class="{ 'is-hidden': !isVisible }">
            <slot />
        </div>
    </div>
</template>

<style scoped>
.reveal-contents {
    opacity: 1;
    transform: translateY(0) scale(1);
    transition:
        opacity 1200ms ease,
        transform 1200ms cubic-bezier(0.22, 0.61, 0.36, 1);
}

.reveal-contents.is-hidden {
    opacity: 0;
    transform: translateY(60px) scale(0.96);
}
</style>
