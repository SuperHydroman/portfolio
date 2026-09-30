<script setup lang="ts">
import { Head } from '@inertiajs/vue3';

const name = 'Gideon van den Herik';
const githubUrl = 'https://github.com/SuperHydroMan';
const linkedinUrl = 'https://www.linkedin.com/in/gideon-van-den-herik/';
const year = new Date().getFullYear();
</script>

<template>
    <Head title="Coming soon">
        <meta
            name="description"
            content="Gideon van den Herik. Full-Stack Developer & DevOps Engineer. My new portfolio is on its way. Explore my projects on GitHub or connect on LinkedIn."
        />
        <meta name="theme-color" content="#071115" />
    </Head>

    <div
        class="coming-soon relative isolate flex min-h-svh flex-col overflow-hidden bg-primary text-heading"
    >
        <div
            aria-hidden="true"
            class="pointer-events-none absolute inset-0 -z-10 overflow-hidden"
        >
            <div class="bloom bloom-one" />
            <div class="bloom bloom-two" />
        </div>

        <a href="#main" class="skip-link">Skip to content</a>

        <header
            class="mx-auto flex w-full max-w-7xl items-center justify-between gap-6 px-6 py-7 lg:px-8"
        >
            <a
                href="/"
                :aria-label="`${name}, home`"
                class="text-2xl font-bold tracking-tight"
            >
                gideon<span class="text-accent">.</span>
            </a>

            <span
                class="font-mono text-[10px] tracking-[0.18em] text-muted sm:text-xs"
            >
                PORTFOLIO / IN PROGRESS
            </span>
        </header>

        <main
            id="main"
            class="mx-auto grid w-full max-w-7xl flex-1 content-center items-center gap-16 px-6 py-20 lg:grid-cols-[1.1fr_1fr] lg:gap-20 lg:px-8 lg:py-28"
        >
            <div class="entrance">
                <p
                    class="font-mono text-xs tracking-[0.2em] text-accent uppercase"
                >
                    // A work in progress
                </p>

                <h1
                    class="mt-7 text-5xl leading-[1.08] font-semibold tracking-tight sm:text-6xl xl:text-7xl"
                >
                    A new home<br />
                    for my work<span class="text-accent">.</span>
                </h1>

                <p class="mt-7 text-lg font-medium sm:text-xl">
                    {{ name }}
                </p>
                <p class="mt-2 text-sm leading-relaxed text-body sm:text-base">
                    Full-Stack Developer & DevOps Engineer
                </p>

                <p class="mt-7 max-w-md text-base leading-relaxed text-body">
                    I'm putting together my projects, experience, and the things
                    I've learned along the way. The new portfolio is coming soon.
                </p>

                <div class="mt-9 flex flex-wrap gap-3">
                    <a
                        :href="githubUrl"
                        class="inline-flex items-center justify-center gap-5 rounded-md border border-accent bg-accent px-5 py-3.5 text-sm font-semibold text-primary transition-colors hover:border-accent-hover hover:bg-accent-hover"
                    >
                        Explore my GitHub
                        <span aria-hidden="true">↗</span>
                    </a>
                    <a
                        :href="linkedinUrl"
                        class="inline-flex items-center justify-center gap-5 rounded-md border border-outline px-5 py-3.5 text-sm font-medium transition-colors hover:border-accent hover:text-accent"
                    >
                        Connect on LinkedIn
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <p class="mt-6 text-xs leading-relaxed text-muted">
                    You can find me there in the meantime.
                </p>
            </div>

            <!-- Decorative code illustration. The launch notice is above. -->
            <div aria-hidden="true" class="entrance terminal-entrance min-w-0">
                <div
                    class="overflow-hidden rounded-xl border border-outline/70 bg-secondary/65 shadow-xl shadow-black/10"
                >
                    <div
                        class="flex items-center gap-5 border-b border-outline/60 px-5 py-4"
                    >
                        <div class="flex gap-1.5">
                            <span class="size-2 rounded-full bg-[#bd6c70]" />
                            <span class="size-2 rounded-full bg-[#bca270]" />
                            <span class="size-2 rounded-full bg-[#6d9e87]" />
                        </div>
                        <span class="font-mono text-xs text-muted">
                            portfolio.ts
                        </span>
                    </div>

                    <div
                        class="space-y-1.5 px-5 py-8 font-mono text-[11px] leading-relaxed text-body sm:px-7 sm:py-10 sm:text-sm"
                    >
                        <p class="mb-6 text-muted">// Making room for what's next.</p>
                        <p><span class="text-accent">const</span> portfolio = {</p>
                        <p class="pl-4">
                            developer: <span class="text-heading">'Gideon'</span>,
                        </p>
                        <p class="pl-4">builtWith: [</p>
                        <p class="pl-8 text-heading">'Laravel',</p>
                        <p class="pl-8 text-heading">'Vue',</p>
                        <p class="pl-8 text-heading">'TypeScript'</p>
                        <p class="pl-4">],</p>
                        <p class="pl-4">
                            status: <span class="text-accent">'in progress'</span>
                        </p>
                        <p>};</p>
                    </div>

                    <div
                        class="flex items-center justify-between gap-4 border-t border-outline/60 px-5 py-4 font-mono text-[10px] text-muted sm:px-7"
                    >
                        <span class="flex items-center gap-2">
                            <span class="size-1.5 rounded-full bg-accent/70" />
                            Building something personal
                        </span>
                        <span>TypeScript</span>
                    </div>
                </div>

                <div
                    class="mt-5 flex items-center justify-end gap-3 font-mono text-[10px] tracking-widest text-muted"
                >
                    <span>CODE</span>
                    <span class="text-outline">/</span>
                    <span>LEARN</span>
                    <span class="text-outline">/</span>
                    <span>IMPROVE</span>
                </div>
            </div>
        </main>

        <footer class="mx-auto w-full max-w-7xl px-6 lg:px-8">
            <div
                class="flex flex-wrap items-center justify-between gap-3 border-t border-outline/50 py-6 text-xs leading-relaxed text-muted"
            >
                <p>© {{ year }} {{ name }}</p>
                <p>Built with Laravel, TypeScript & Vue.</p>
            </div>
        </footer>
    </div>
</template>

<style scoped>
.coming-soon :focus-visible {
    outline: 2px solid var(--color-accent);
    outline-offset: 5px;
}

.skip-link {
    position: absolute;
    top: 1rem;
    left: 1rem;
    z-index: 10;
    padding: 0.75rem 1rem;
    color: var(--color-primary);
    background: var(--color-accent);
    transform: translateY(-200%);
}

.skip-link:focus {
    transform: translateY(0);
}

.bloom {
    position: absolute;
    width: clamp(24rem, 50vw, 48rem);
    aspect-ratio: 1;
    border-radius: 42% 58% 65% 35% / 45% 35% 65% 55%;
    background: var(--color-accent);
    opacity: 0.045;
    filter: blur(100px);
    animation: drift 32s ease-in-out infinite alternate;
}

.bloom-one {
    top: -20%;
    right: -15%;
}

.bloom-two {
    bottom: -35%;
    left: -20%;
    opacity: 0.025;
    animation-duration: 40s;
    animation-delay: -15s;
    animation-direction: alternate-reverse;
}

.entrance {
    animation: arrive 0.7s ease-out both;
}

.terminal-entrance {
    animation-delay: 0.15s;
}

@keyframes arrive {
    from {
        opacity: 0;
        transform: translateY(16px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes drift {
    from {
        transform: translate(-4vw, 0) rotate(-8deg) scale(0.95);
        border-radius: 42% 58% 65% 35% / 45% 35% 65% 55%;
    }
    to {
        transform: translate(4vw, 12vh) rotate(12deg) scale(1.08);
        border-radius: 60% 40% 35% 65% / 55% 65% 35% 45%;
    }
}

@media (prefers-reduced-motion: reduce) {
    .bloom,
    .entrance {
        animation: none;
    }
}
</style>
