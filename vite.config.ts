import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin';
import sugarcube from '@sugarcube-sh/vite' 

export default defineConfig(() => ({
  plugins: [
    sugarcube(),
    laravel({
      input: ["assets/main.ts"],
      refresh: ["site/{layouts,snippets,templates}/**/*"],
      publicDirectory: './'
    }),
  ]
}))