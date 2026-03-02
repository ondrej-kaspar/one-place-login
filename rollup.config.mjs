// import fs from 'fs';
// import path from 'path';
// import terser from '@rollup/plugin-terser';
import resolve from '@rollup/plugin-node-resolve';
// import commonjs from '@rollup/plugin-commonjs';
import css from 'rollup-plugin-import-css';
import replace from '@rollup/plugin-replace';

// const standaloneDir = 'src/js/standalone';
// const standaloneFiles = fs.readdirSync(standaloneDir).filter(file => file.endsWith('.js'));

export default [
  {
    input: 'src/js/main.js',
    output: {
      file: 'dist/js/main.js'
    },
    plugins: [
      replace({
        'process.env.NODE_ENV': JSON.stringify('production'),
        preventAssignment: true,
      }),
      resolve(),
      // commonjs(),
      css({ inject: true }),
    ],
  },
  // ...standaloneFiles.map(file => ({
  //   input: path.join(standaloneDir, file),  // Map each input file in standalone
  //   output: {
  //     file: `dist/js/standalone/${file}`,  // Preserve the same file name
  //     format: 'iife',
  //   },
  //   plugins: [terser()],
  // })),
];
