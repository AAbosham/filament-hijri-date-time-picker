const mix = require("laravel-mix");

mix.disableNotifications();

mix.disableSuccessNotifications()

mix.options({
    terser: {
        extractComments: false,
    },
})

mix.setPublicPath("resources/dist")
mix.sourceMaps()
mix.version()

mix.js("./resources/js/hijri-date-time-picker.js", "resources/dist/js")

mix.options({
    processCssUrls: false,
});
