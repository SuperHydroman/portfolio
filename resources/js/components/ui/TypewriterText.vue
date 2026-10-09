<script setup lang="ts">
import { computed, onMounted, onBeforeUnmount, ref } from 'vue';

const props = withDefaults(defineProps<{
    prefix?: string;
    phrases?: string[];
}>(), {
    prefix: 'I enjoy',
    phrases: () => [
        'building software.',
        'understanding systems.',
        'learning how things work.',
    ],
});

// Start with identical content on the server and in the browser.
const displayedText = ref(props.phrases[0] ?? '');

const accessibleText = computed(() =>
    props.phrases
        .map((phrase) => `${props.prefix} ${phrase}`)
        .join(' '),
);

let phraseIndex = 0;
let deleting = true;
let timer: ReturnType<typeof setTimeout> | undefined;

function schedule(delay: number) {
    timer = setTimeout(animate, delay);
}

function animate() {
    const phrase = props.phrases[phraseIndex];

    if (!phrase) return;

    if (deleting) {
        displayedText.value = displayedText.value.slice(0, -1);

        if (displayedText.value.length === 0) {
            phraseIndex = (phraseIndex + 1) % props.phrases.length;
            deleting = false;

            schedule(350);
        } else {
            schedule(40);
        }

        return;
    }

    displayedText.value = phrase.slice(
        0,
        displayedText.value.length + 1,
    );

    if (displayedText.value === phrase) {
        deleting = true;
        schedule(3000);
    } else {
        schedule(65 + Math.random() * 25);
    }
}

onMounted(() => {
    if (props.phrases.length > 1) {
        schedule(3000);
    }
});

onBeforeUnmount(() => {
    if (timer !== undefined) {
        clearTimeout(timer);
    }
});
</script>

<template>
    <p>
        <!-- Screen readers receive complete sentences. -->
        <span class="sr-only">{{ accessibleText }}</span>

        <span aria-hidden="true" class="grid min-w-0">
            <!-- Invisible phrases reserve the height needed at any width. -->
            <span v-for="(phrase, index) in phrases" :key="index" class="invisible pointer-events-none col-start-1 row-start-1 select-none">
                {{ prefix }} {{ phrase }}<span
                class="ml-0.5 inline-block h-[1em] w-px align-baseline translate-y-[0.15em]"
            ></span>
            </span>

            <!-- The animated text occupies that same grid cell. -->
            <span class="col-start-1 row-start-1">
                {{ prefix }} {{ displayedText }}
                <span class="ml-0.5 inline-block h-[1em] w-px align-baseline translate-y-[0.15em] animate-[typing-caret_1.2s_step-end_infinite] bg-accent"></span>
            </span>
        </span>
    </p>
</template>
