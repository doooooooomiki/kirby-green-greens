import { resolve } from 'node:path'
import { defineConfig } from 'vite'
import kirby from 'vite-plugin-kirby'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig(({mode}) => ({
  root: 'src',
  base: mode === 'development' ? '/' : '/dist/',
  build: {
    outDir: resolve(process.cwd(), 'public/dist'),
    emptyOutDir: true,
    manifest: true,
    rolldownOptions: {
      input: [
        resolve(process.cwd(), 'src/index.js'), 
        resolve(process.cwd(), 'src/styles/main.css'), 
      ]
    }
  },
  plugins: [kirby(), tailwindcss(),]
}))