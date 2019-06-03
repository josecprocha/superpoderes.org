/**
 * [Configuring ESLint](https://eslint.org/docs/user-guide/configuring)
 * [Prettier - Integrating with Linters](https://prettier.io/docs/en/integrating-with-linters.html)
 *
 * eslint:recommended - rules that report common problems in js.
 * airbnb - es6, node, react.
 * prettier - turn off all rules that are unnecessary or might conflict with Prettier.
 *   typescript, babel, flowtype, react, standard, unicorn, vue.
 *
 * [Integrating Prettier + ESLint + Airbnb Style Guide in VSCode](https://blog.echobind.com/integrating-prettier-eslint-airbnb-style-guide-in-vscode-47f07b5d7d6a)
 */

module.exports = {
  extends: ['airbnb', 'eslint:recommended', 'prettier'],
  plugins: ['prettier'],
  rules: {
    'prettier/prettier': 'error',
    'max-len': [1, { code: 80, tabWidth: 2 }],
  },
};
