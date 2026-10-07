<script setup lang="ts">
import { onMounted, onBeforeUnmount, ref } from 'vue';

const background = ref<HTMLDivElement | null>(null);
const animations = new Set<Animation>();
const positions = new WeakMap<HTMLElement, { x: number; y: number }>();
let stopped = false;

function random(min: number, max: number): number {
    return Math.random() * (max - min) + min;
}

function randomTransform(blob: HTMLElement): string {
    const previous = positions.get(blob);
    const travel = 25;

    // Start anywhere. After that, choose a nearby destination.
    const x = previous
        ? random(
            Math.max(0, previous.x - travel),
            Math.min(100, previous.x + travel),
        )
        : random(0, 100);

    const y = previous
        ? random(
            Math.max(0, previous.y - travel),
            Math.min(100, previous.y + travel),
        )
        : random(0, 100);

    positions.set(blob, { x, y });

    const scale = random(.3, 1);

    return `
        translate(${x}vw, ${y}vh)
        translate(-50%, -50%)
        scale(${scale}, ${scale})
    `;
}

function moveBlob(blob: HTMLElement, from: string) {
    if (stopped) return;

    const to = randomTransform(blob);

    const animation = blob.animate(
        [
            { transform: from },
            { transform: to },
        ],
        {
            duration: random(8000, 14000),
            easing: 'ease-in-out',
            fill: 'forwards',
        },
    );

    animations.add(animation);

    animation.onfinish = () => {
        // Keep the final position before removing the old animation.
        blob.style.transform = to;
        animations.delete(animation);
        animation.cancel();

        // Start another journey from that same position.
        moveBlob(blob, to);
    };
}

onMounted(() => {
    const blobs = background.value?.querySelectorAll<HTMLElement>('.blob');

    blobs?.forEach((blob) => {
        const start = randomTransform(blob);

        blob.style.transform = start;
        moveBlob(blob, start);
    });
});

onBeforeUnmount(() => {
    stopped = true;
    animations.forEach((animation) => animation.cancel());
    animations.clear();
});
</script>

<template>
    <svg
        class="filter-definitions"
        width="0"
        height="0"
        aria-hidden="true"
        focusable="false"
    >
        <defs>
            <filter
                id="background-goo"
                x="-20%"
                y="-20%"
                width="140%"
                height="140%"
                color-interpolation-filters="sRGB"
            >
                <feGaussianBlur
                    in="SourceGraphic"
                    stdDeviation="24"
                    result="blurred"
                />

                <feColorMatrix
                    in="blurred"
                    type="matrix"
                    values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 20 -8"
                />
            </filter>
        </defs>
    </svg>

    <div class="background-blobs" aria-hidden="true">
        <div class="blob-appearance">
            <div ref="background" class="blob-group">
                <div
                    v-for="blob in 4"
                    :key="blob"
                    class="blob"
                ></div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.filter-definitions {
    position: absolute;
    pointer-events: none;
}

.background-blobs {
    position: fixed;
    inset: 0;
    z-index: -1;
    overflow: hidden;
    pointer-events: none;
}

.blob-appearance {
    position: absolute;
    inset: 0;
    opacity: 0.1;
    filter: blur(75px);
}

.blob-group {
    position: absolute;
    inset: 0;
    filter: url("#background-goo");
}

.blob {
    position: absolute;
    top: 0;
    left: 0;
    width: clamp(16rem, 32vw, 32rem);
    aspect-ratio: 1;
    border-radius: 50%;
    background: #00DDEA;
}
</style>
