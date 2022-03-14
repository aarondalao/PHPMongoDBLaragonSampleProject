# MongoDB / PHP / Laragon Sample Webapp

This repos' purpose is to demonstrate my knowledge and understanding 

## steps to run:

To build and the existing files to the specified name serve in the package.json  **and then** exits : 
```
npm run dev
```

To build and run the files to the specified name serve in the package.json **and** watch all incomming changes of the files to recompile again : 

```
npm run watch
```

### webstack used:

  - MongoDB
  - PHP / Composer / Symfony
  - Tailwind

### steps to setup and create a project

> 1)Download php-mongodb driver

>  Extra steps:
>  	copy-paste the 
>  		php_mongodb.dll
>  		php_mongodb.pdb
>  to
  ```
>  		C:\ProgramData\Laragon\bin\php\php-8.1.2\ext
  ```
>  then add the following code in php.ini file:
    ```
>  			extension=mongodb.so
    ```
>  	uncomment something. WILL GET THIS BACK NEXT WEE

>  	install all necessary plugins in phpstorm
>  	PARTICULARY .ignore

>  2) create a project named
>  	mongodb-and-php

>  3) create folders in the root project named:
>  	assets
>  	public
>  	src

>  4)  git init the project WITHOUT JETBRAINS CONFIG FILES (.idea) ** refer this to the photo i taken

>  extra step:
>  	create css folder inside public folder:


>  5) 
```	composer require mongodb/mongodb
	composer install
	composer update
	composer dumpautoload
```

>  6) Create new folders and add .keep files:
```
      mkdir src\js src\css src\scss src\fonts src\img
	    touch src\js\.keep src\css\.keep src\scss\.keep src\fonts\.keep src\img\.keep
	    touch src\js\app.js src\css\main.css src\scss\app.scss webpack.mix.js
```
>  7) (ADDITIONAL):
```
npm init -y
npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
npm install -D postcss-import@latest sass-loader@latest
npm install -D @tailwindcss/aspect-ratio @tailwindcss/line-clamp 
npm install -D @tailwindcss/typography @tailwindcss/forms
npm install -D tailwindcss-gradients tailwindcss-elevation
npx tailwindcss init
npm install laravel-mix --save-dev
```
>  8) edit the webpack.mix.js file and add:
```
	const mix = require('laravel-mix');
	mix.setPublicPath('public')
	mix.setResourceRoot('../');
	mix.js('src/js/app.js', 'public/js')
        	.sass('src/sass/app.scss', 'public/css')
	        .postCss('src/css/app.css', 'public/css',
                [
        	          require('postcss-import'),
                	  require('tailwindcss'),
	                  require('autoprefixer'),
                ]
        )
	if (mix.inProduction()) {
  		mix.version();
	}
```
>  9) install these npm packages:
```
	npm install @fortawesome/fontawesome-free
	npm install sass resolve-url-loader@^5.0.0 --save-dev --legacy-peer-deps
```
>  10)add these to src\css\main.css:
```
	@tailwind base;
	@tailwind components;
	@tailwind utilities;
```
>  11)and these to src/sass/app.sass:
```
	@import "~@fortawesome/fontawesome-free/scss/fontawesome";
	@import "~@fortawesome/fontawesome-free/scss/regular";
	@import "~@fortawesome/fontawesome-free/scss/brands";
	@import "~@fortawesome/fontawesome-free/scss/solid";
```
>  12 add these to vendors\tailwind\config\js:
```
	const defaultTheme = require('tailwindcss/defaultTheme')
	const colors = require('tailwindcss/colors')
```
>  *add to modules.exports = {} :
```
	purge:[
      		'./**/*.php',
		'./**/*.html',
    		'./src/**/*.php',
    		'./src/**/*.vue',
  	],
	
	*theme -> extend :
	
	fontFamily:{
        	sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      	},
	

	* add colours:
		to be provided by A.G.

	colors: {
      // Build your palette here
      transparent: 'transparent',
      current: 'currentColor',
      white: colors.white,
      black: colors.black,
      blueGray: colors.blueGray,
      coolGray: colors.coolGray,
      gray: colors.gray,
      trueGray: colors.trueGray,
      warmGray: colors.warmGray,
      red: colors.red,
      orange: colors.orange,
      amber: colors.amber,
      yellow: colors.yellow,
      lime: colors.lime,
      green: colors.green,
      emerald: colors.emerald,
      teal: colors.teal,
      cyan: colors.cyan,
      sky: colors.sky,
      blue: colors.blue,
      indigo: colors.indigo,
      violet: colors.violet,
      purple: colors.purple,
      fuchsia: colors.fuchsia,
      pink: colors.pink,
      rose: colors.rose,

      /* Alternative names for some colours */
      primary: colors.blue,
      secondary: colors.purple,
      tertiary: colors.gray,
      danger: colors.red,
      warning: colors.amber,
      info: colors.blueGray,
      success: colors.green,
    },
    linearGradientColors: theme => theme('colors'),
    radialGradientColors: theme => theme('colors'),
    conicGradientColors: theme => theme('colors'),
  },

  variants: {
    extend: {
      opacity: ['disabled'],
    },
  },

  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
    require('tailwindcss-gradients'),
    require('tailwindcss-elevation')(['responsive']),
  ],
	

NOTE: REPLACE COLORS.<"color">

	TO

	COLOR.<"color">
```
>  12) run these commands to the terminal
```
npm install
npm run dev
npm run watch
```
>  13) create this file in public folder:
```
	test.html
	 
	inside body

	header>div>p*3

	main>(h2+p*3>lorem)+(aside>p*2>lorem)
	
	footer>div*2>p*2>a[href=#]{link$}
```
> ^ thats emmet ^ 

