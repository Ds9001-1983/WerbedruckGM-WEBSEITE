import { type ClassValue, clsx } from "clsx"
import { twMerge } from "tailwind-merge"

export function cn(...inputs: ClassValue[]) {
  return twMerge(clsx(inputs))
}

export function formatDate(date: Date | string): string {
  return new Intl.DateTimeFormat('de-DE', {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
  }).format(new Date(date))
}

export function formatPhoneNumber(phone: string): string {
  // Basic German phone number formatting
  const cleaned = phone.replace(/\D/g, '');
  if (cleaned.length === 11 && cleaned.startsWith('49')) {
    return `+${cleaned.slice(0, 2)} (0) ${cleaned.slice(2, 5)} ${cleaned.slice(5, 8)}${cleaned.slice(8)}`;
  }
  return phone;
}
