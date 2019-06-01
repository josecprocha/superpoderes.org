/**
 * [Setting up ESLint on VS Code with Airbnb JavaScript Style Guide](https://blog.echobind.com/integrating-prettier-eslint-airbnb-style-guide-in-vscode-47f07b5d7d6a)
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
