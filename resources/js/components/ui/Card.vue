<script setup lang="ts">
import Button from "@/components/ui/Button.vue";

type Props = {
    type?: string;
    title: string;
    description?: string;
    labels?: object;
    url?: string;
}

const props = withDefaults(defineProps<Props>(), {
    type: 'projects',
    title: '',
    description: '',
    url: '',
});

function slugify(str: string) {
    return str.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]+/g, '');
}
</script>

<template>
    <article :key="slugify(title)" class="flex flex-col rounded-lg border border-outline bg-secondary p-6 gap-4">
        <div>
            <img src="https://placehold.co/300x200/EEE/31343C" alt="Terminal introduction picture" class="w-full h-auto">
        </div>

        <span v-if="title" class="text-xl font-bold">
            {{ title }}
        </span>

        <span v-if="description" class="text-body">
            {{ description }}
        </span>

        <div v-if="labels || url" class="flex items-center justify-between">
            <span v-if="labels" v-for="label in labels" :key="label" class="rounded bg-slate-800 px-2 py-1 text-sm">
                {{ label }}
            </span>

            <Button v-if="url" :href="url" variant="ghost">
                View on GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </Button>
        </div>
    </article>
</template>
