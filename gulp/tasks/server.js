export const server = (done) => {
   app.plugins.browsersync.init({
      proxy: 'http://shops',
      host: 'shops',
      open: 'external'
   });
}