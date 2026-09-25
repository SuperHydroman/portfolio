import { clsx } from 'clsx';
import type { ClassValue } from 'clsx';
import { twMerge } from 'tailwind-merge';

export function cn(...inputs: ClassValue[]) {
    return twMerge(clsx(inputs));
}

export function truncate(text: string, maxLength: number = 100): string {
    return text.length > maxLength
        ? text.slice(0, maxLength).trimEnd() + '...'
        : text;
}
