module.exports = {
  env: {
    browser: true,
    es2021: true
  },
  extends: ['standard', 'plugin:vue/vue3-essential', 'prettier'],
  parserOptions: {
    ecmaVersion: 12,
    sourceType: 'module'
  },
  plugins: ['vue'],
  rules: {
    semi: ['error', 'never'],
    'comma-dangle': ['error', 'never']
  },
  globals: {
    route: 'readonly'
  }
}
