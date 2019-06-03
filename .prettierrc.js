/**
 * [prettier.io Configuration](https://prettier.io/docs/en/configuration.html)
 * [prettier.io Options](https://prettier.io/docs/en/options.html)
 * [Airbnb JavaScript Style Guide](https://github.com/airbnb/javascript)
 *
 * Support: JS, JSX, Angular, Vue, Flow, TypeScript, CSS, Less, SCSS, HTML,
 * JSON, GraphQL, Markdown, GFM, MDX, YAML.
 */

module.exports = {
  printWidth: 80, // https://github.com/airbnb/javascript#strings--line-length
  tabWidth: 2, // https://github.com/airbnb/javascript#whitespace
  useTabs: false, // https://github.com/airbnb/javascript#whitespace--spaces
  semi: true, // https://github.com/airbnb/javascript#semicolons--required
  singleQuote: true, // https://github.com/airbnb/javascript#strings--quotes
  quoteProps: 'as-needed', //https://github.com/airbnb/javascript#objects--quoted-props
  trailingComma: 'all', // https://github.com/airbnb/javascript#functions--signature-invocation-indentation
  bracketSpacing: true, // https://github.com/airbnb/javascript#whitespace--in-braces
  arrowParens: 'always', // https://github.com/airbnb/javascript#arrows--one-arg-parens
  htmlWhitespaceSensitivity: 'css', // https://prettier.io/blog/2018/11/07/1.15.0.html#whitespace-sensitive-formatting
  endOfLine: 'lf', // 'crlf' on windows, 'lf' on Linux and macOS. 'auto' should be ok, but...
};
