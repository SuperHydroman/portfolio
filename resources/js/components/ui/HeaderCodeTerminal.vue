<script setup lang="ts">
import { computed, ref } from 'vue';
import hljs from 'highlight.js/lib/core';
import typescript from 'highlight.js/lib/languages/typescript';

hljs.registerLanguage('typescript', typescript);

hljs.registerLanguage('typescript', typescript);

const code = ref(`const developer = {
    name: 'Gideon van den herik',
    interests: [
        'Software development',
        'Infrastructure',
        'DevOps Engineer',
        'IT Admin',
        'Blender'
    ],
    alwaysLearning: true
};

// Builing software and
// understanding how it works.`);

const highlightedCode = computed(() => {
    return hljs.highlight(code.value, {
        language: 'typescript'
    }).value
});

</script>

<template>
    <div class="overflow-hidden rounded-xl border border-outline bg-secondary">
        <div class="flex items-center gap-4 border-b border-outline px-4 py-4">
            <div class="flex items-center gap-2">
                <span class="block h-2.5 w-2.5 rounded-full bg-red-500" aria-hidden="true"></span>
                <span class="block h-2.5 w-2.5 rounded-full bg-amber-500" aria-hidden="true"></span>
                <span class="block h-2.5 w-2.5 rounded-full bg-green-500" aria-hidden="true"></span>
            </div>

            <span class="font-mono text-xs text-muted">
                gideon.ts
            </span>
        </div>

        <pre class="terminal-code overflow-x-auto p-6 font-mono text-sm leading-7 text-body"><code v-html="highlightedCode" /></pre>
    </div>
</template>

<style scoped>
.terminal-code :deep(.hljs-keyword),
.terminal-code :deep(.hljs-literal) {
    color: var(--color-accent);
}

.terminal-code :deep(.hljs-string) {
    color: rgb(97 140 79);
}

.terminal-code :deep(.hljs-comment) {
    color: var(--color-muted);
    font-style: italic;
}

.terminal-code :deep(.hljs-attr) {
    color: rgb(168 135 105);
}

.terminal-code :deep(.hljs-title),
.terminal-code :deep(.hljs-number) {
    color: var(--color-heading);
}
</style>
