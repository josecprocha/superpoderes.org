/**
 * [Stylelint.io Configuration](https://stylelint.io/user-guide/configuration/)
 *
 * [stylelint-config-standard](https://www.npmjs.com/package/stylelint-config-standard)
 *   Turns on additional rules to enforce the common stylistic conventions found within a handful
 *   of CSS styleguides, including: The Idiomatic CSS Principles, Google's CSS Style Guide,
 *   Airbnb's Styleguide, and @mdo's Code Guide.
 * [stylelint-config-recommended](https://www.npmjs.com/package/stylelint-config-recommended)
 *   Turns on all the possible errors rules within stylelint.
 * [stylelint-config-prettier](https://www.npmjs.com/package/stylelint-config-prettier)
 *
 * [ntegrating with Linters](https://prettier.io/docs/en/integrating-with-linters.html)
 *
 * [stylelint-scss](https://www.npmjs.com/package/stylelint-scss)
 */

module.exports = {
  extends: [
    'stylelint-config-standard',
    'stylelint-config-recommended-scss',
    'stylelint-config-prettier',
    'stylelint-prettier/recommended',
  ],
  plugins: ['stylelint-scss', 'stylelint-prettier'],
  rules: {
    'prettier/prettier': true,
  },
};
