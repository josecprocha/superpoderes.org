/**
 * [Configuring ESLint](https://eslint.org/docs/user-guide/configuring)
 * [Prettier - Integrating with Linters](https://prettier.io/docs/en/integrating-with-linters.html)
 *
 * eslint:recommended - rules that report common problems in js.
 * airbnb - es6, node, react.
 * prettier - turn off all rules that are unnecessary or might conflict with Prettier.
 *   typescript, babel, flowtype, react, standard, unicorn, vue.
 */

module.exports = {
  extends: ['eslint:recommended', 'airbnb', 'prettier'],
};
