import { resolve } from 'node:path'
import { defineConfig } from 'vite'
import kirby from 'vite-plugin-kirby'

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
      ]
    }
  },
  plugins: [kirby()]
}))