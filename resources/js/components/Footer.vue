<script setup lang="ts">
const currentYear = new Date().getFullYear();
</script>

<template>
    <footer class="container">
        <div class="flex flex-col items-center justify-between gap-4 border-t border-outline py-8 text-center md:flex-row md:text-left">
            <p>&copy; {{ currentYear }} Gideon van den Herik</p>
            <p>Built with Laravel, Vue & TypeScript</p>
        </div>
    </footer>
</template>
