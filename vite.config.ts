import { resolve } from 'node:path'
import process from 'node:process'
import sugarcube from '@sugarcube-sh/vite'
import laravel from 'laravel-vite-plugin'
import { defineConfig } from 'vite'

export default defineConfig(() => ({
  build: {
    outDir: resolve(process.cwd(), 'public/assets/dist'),
    assetsDir: '',
    emptyOutDir: true,
    manifest: 'manifest.json',
  },
  plugins: [
    sugarcube(),
    laravel({
      input: [resolve(process.cwd(), 'src/main.ts')],
      refresh: ['site/{layouts,snippets,templates}/**/*'],
      hotFile: '.tmp/vite.hot',
    }),
  ],
}))
