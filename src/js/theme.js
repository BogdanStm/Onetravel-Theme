// export function theme() {
//     var themeSwitch = document.getElementById('checkbox');
//     if (themeSwitch) {
//         initTheme();
    
//         themeSwitch.addEventListener('change', function (event) {
//             event.preventDefault();
//             resetTheme();
//         });
    
//         function initTheme() {
//             var darkThemeSelected = (localStorage.getItem('themeSwitch') !== null && localStorage.getItem('themeSwitch') === 'dark');
//             themeSwitch.checked = darkThemeSelected;
//             darkThemeSelected ? document.body.setAttribute('data-theme', 'dark') : document.body.removeAttribute('data-theme');
//         };
    
//         function resetTheme() {
//             if (themeSwitch.checked) {
//                 document.body.setAttribute('data-theme', 'dark');
//                 localStorage.setItem('themeSwitch', 'dark');
//             } else {
//                 document.body.removeAttribute('data-theme');
//                 localStorage.removeItem('themeSwitch');
//             }
//         };
//     }

//     const blockColumns = document.querySelectorAll('.wp-block-columns');

//     blockColumns.forEach(e => {
//         if (e) {
//             e.setAttribute('class', 'wp-block-columns container');
//         } else {
//             console.log('ERROR: not finding any columns');
//         }
//     })
// }
