const mix =require('laravel-mix')

mix.setPublicPath('assets')

mix.setResourceRoot('../')

mix.js('src/js/app.js', 'assets/js').sass('src/sass/app.scss','assets/css')
    .postCss('src/css/app.css','assets/css',[
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer')
    ])
if(mix.inProduction()){
    mix.version();
}
