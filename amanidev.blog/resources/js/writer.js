import Typewriter from 't-writer.js';

const target = document.querySelector('.hero_text');
const writer = new Typewriter(target, {
  loop: true,
  typeColor: '#de217e',
  color: '#de217e',
  cursorColor: '#de217e',
});

writer
  .strings(
    2000,
    "código",
    "experiência",
    "vivência"
  )
  .start();
