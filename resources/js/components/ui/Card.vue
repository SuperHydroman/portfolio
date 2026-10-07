<script setup lang="ts">
import Button from "@/components/ui/Button.vue";

type Props = {
    type?: string;
    title: string;
    description?: string;
    labels?: object;
    url?: string;
    imageUrl?: string;
}

const props = withDefaults(defineProps<Props>(), {
    type: 'projects',
    title: '',
    description: '',
    url: '',
    imageUrl: '',
});

function slugify(str: string) {
    return str.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]+/g, '');
}
</script>

<template>
    <article :key="slugify(title)" class="flex h-full min-w-0 flex-col gap-4 rounded-lg border border-outline bg-secondary p-4 sm:p-6">
        <div v-if="imageUrl">
            <img :src="imageUrl" :alt="`${title} preview`" class="aspect-video w-full rounded-md object-cover" loading="lazy"/>
<!--            TODO: Get images from the actual projects... -->
        </div>

        <h3 v-if="title">
            {{ title }}
        </h3>

        <p v-if="description">
            {{ description }}
        </p>

        <!-- mt-auto pushes this section to the bottom of the card -->
        <div v-if="labels || url" class="mt-auto flex flex-wrap items-center justify-between gap-3 pt-2">
            <div v-if="labels" class="flex flex-wrap gap-2">
                <span v-for="label in labels" :key="label" class="rounded bg-tertiary px-2 py-1 text-sm">
                    {{ label }}
                </span>
            </div>

            <Button v-if="url" :href="url" variant="ghost" class="ml-auto">
                View on GitHub <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </Button>
        </div>
    </article>
</template>
