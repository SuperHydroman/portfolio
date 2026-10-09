<script setup lang="ts">
import { computed, onMounted, ref } from 'vue';

type Theme = 'light' | 'dark';

const theme = ref<Theme | null>(null);

const label = computed(() => {
    if (theme.value === null) return 'Change color theme';

    return theme.value === 'dark'
        ? 'Switch to light mode'
        : 'Switch to dark mode';
});

onMounted(() => {
    theme.value = document.documentElement.dataset.theme === 'light'
        ? 'light'
        : 'dark';
});

function toggleTheme() {
    if (theme.value === null) return;

    const next: Theme = theme.value === 'dark' ? 'light' : 'dark';

    // Apply the selected palette immediately.
    document.documentElement.dataset.theme = next;
    theme.value = next;

    // Remember the choice for one year.
    const secure = window.location.protocol === 'https:' ? '; Secure' : '';

    document.cookie =
        `portfolio-theme=${next}; Path=/; Max-Age=31536000; SameSite=Lax${secure}`;
}
</script>

<template>
    <button type="button" :aria-label="label" :title="label" :disabled="theme === null" class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full border border-outline bg-transparent text-heading transition-colors duration-200 hover:border-accent hover:bg-secondary hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent" @click="toggleTheme">
        <span class="relative block h-5 w-5" aria-hidden="true">
            <Transition enter-active-class="transition-all duration-300 ease-out"
                        enter-from-class="opacity-0 -rotate-90 scale-50" enter-to-class="opacity-100 rotate-0 scale-100"
                        leave-active-class="transition-all duration-200 ease-in"
                        leave-from-class="opacity-100 rotate-0 scale-100" leave-to-class="opacity-0 rotate-90 scale-50">
                <span v-if="theme !== null" :key="theme" class="absolute inset-0 flex items-center justify-center">
                    <i class="fa-solid" :class="theme === 'dark' ? 'fa-sun' : 'fa-moon'"></i>
                </span>
            </Transition>
        </span>
    </button>
</template>
