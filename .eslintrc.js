/**
 * [Setting up ESLint on VS Code with Airbnb JavaScript Style Guide](https://travishorn.com/setting-up-eslint-on-vs-code-with-airbnb-javascript-style-guide-6eb78a535ba6)
 * [Configuring ESLint](https://eslint.org/docs/user-guide/configuring)
 * [Prettier - Integrating with Linters](https://prettier.io/docs/en/integrating-with-linters.html)
 */

module.exports = {
  extends: ['airbnb-base', 'prettier'],
  plugins: ['prettier'],
  rules: {
    'prettier/prettier': ['error']
  }
};
