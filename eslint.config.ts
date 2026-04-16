import antfu from '@antfu/eslint-config'

export default antfu({
  ignores: ['**/site/plugins/*/index.js', '**/vendor/**'],
  typescript: {
    tsconfigPath: 'tsconfig.json',
  },
  formatters: {
    css: true,
  },
})
