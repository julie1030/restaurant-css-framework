const { resolve } = require('path')

const root = resolve(__dirname, 'src')

export default {
    base: '/restaurant-css-framework/',
    root,
    resolve: {
        alias: {
            '~bootstrap': resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
    build: {
        outDir: '../dist',
        rollupOptions: {
            input: {
                main: resolve(root, 'index.html'),
                menu: resolve(root, 'pages', 'menu.html'),
                contact: resolve(root, 'pages', 'contact.html'),
                restaurants: resolve(root, 'pages', 'restaurants.html'),
                gallerie1: resolve(root, 'pages', 'gallerie1.html'),
                gallerie2: resolve(root, 'pages', 'gallerie2.html'),
                gallerie3: resolve(root, 'pages', 'gallerie3.html')
            },
        },
    },
    server: {
        port: 8080
    }
}