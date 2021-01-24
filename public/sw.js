console.log('hola desde sw');
// const nombreCache='apv-v1';
// const archivos=[
//
//     '/',
//     './index.php',
//     '/css/app.css',
//     '/resources/views/home.blade.php',
//     '/resources/views/layouts/app.blade.php',
//     '/resources/views/Beneficiarios/lista.blade.php',
//     '/resources/views/Beneficiarios/detalle.blade.php',
//     '/resources/views/importar/import.blade.php',
//     '/resources/views/User.blade.php',
//     '/dashboard',
//     '/User',
//     '/img/1.jpg'
//
//
// ];
//
//
//
// //cuando se instala el sw
// self.addEventListener('install',e=>{
//     console.log('instalando sw');
//
//     e.waitUntil(
//         caches.open(nombreCache)
//             .then(cache=>{
//                 console.log('cachando');
//                 cache.addAll(archivos)
//             })
//     )
//
// });
//
// self.addEventListener('activate',e=>{
//     console.log('sw actibado');
//
//     console.log(e);
// });

//
// self.addEventListener('fetch',e=>{
//     console.log('fetch...',e);
//     e.respondWith(
//         caches.match(e.request)
//             .then(respuestaCache=>{
//                 return respuestaCache
//             })
//             .catch(()=>caches.match('/resources/views/dashboard.blade.php'))
//     )
//
// });
