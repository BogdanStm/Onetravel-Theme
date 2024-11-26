export function biteShow() {
    const featuredImage = document.querySelectorAll('.featured-image');

    featuredImage.forEach(ev => {
        ev.addEventListener('mouseover', (e) => {
            e.preventDefault();
            
            const bite = document.createElement('div');

            bite.className = 'bitemark';
        
            bite.innerHTML = `
            <svg viewBox="0 0 97 70" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 69H96V1.18049C96 1.18049 78.3417 -1.71923 84.3457 15.727C84.8817 17.2846 69.251 8.49603 66.5 19.5C65.5 23.5 65.9813 31.9274 67.7471 35.6659C65.275 33.7966 55.9282 29.4644 50.7955 33.1734C45.5 37 45.5 43 46.5 48.5C43.6747 47.2541 37 40.701 31.7249 44.7961C25.6792 49.4893 27.5 62.5 27.5 62.5C27.5 62.5 19.4164 52.2538 12 53.5C4.58365 54.7462 0.999938 62.4579 1 69Z"/>
            </svg>
            `;
            ev.appendChild(bite);
        })
    })
}
