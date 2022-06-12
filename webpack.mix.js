const mix = require("laravel-mix");

mix.disableNotifications();

mix
  .setPublicPath("./resources/dist")
  .js("./resources/js/index.js", "dist/js/hijri-date-time-picker.js")
  .options({
    processCssUrls: false,
  });
