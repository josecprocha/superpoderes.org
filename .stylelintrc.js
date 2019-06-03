/**
 * [Stylelint.io Configuration](https://stylelint.io/user-guide/configuration/)
 *
 * [stylelint-config-standard](https://www.npmjs.com/package/stylelint-config-standard)
 *   Turns on additional rules to enforce the common stylistic conventions found within a handful
 *   of CSS styleguides, including: The Idiomatic CSS Principles, Google's CSS Style Guide,
 *   Airbnb's Styleguide, and @mdo's Code Guide.
 * [stylelint-config-recommended](https://www.npmjs.com/package/stylelint-config-recommended) turns
 *   on all the possible errors rules within stylelint.
 * [stylelint-scss](https://www.npmjs.com/package/stylelint-scss)
 * [stylelint-config-prettier](https://www.npmjs.com/package/stylelint-config-prettier)
 */

module.exports = {
  extends: [
    'stylelint-config-standard',
    'stylelint-scss',
    'stylelint-config-recommended-scss',
    'stylelint-config-prettier',
  ],
};
