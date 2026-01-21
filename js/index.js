const num = $('.tableNum') 
const left = $('.leftNum')
const right = $('.rightNum')
const box = $('.slideWrap') 
let now = 1

let nowFilter = 'all'; 
let isAsc = false;     

const originals = [...box.querySelectorAll('ul')];

right.onclick = () => {
    if(now > 4) return
    if(originals)
    now++
    num.textContent = now
    box.style.transform = `translateY(${(now - 1) * -300}px)`
}

left.onclick = () => {
    if(now < 2) return
    now--
    num.textContent = now
    box.style.transform = `translateY(${(now - 1) * -300}px)`
}


    function draw() {
        const filtered = originals.filter(item => {
            if (nowFilter === 'all') return true;
            return item.getAttribute('type') === nowFilter;
        });

        filtered.sort((a, b) => {
            const dateA = new Date(a.getAttribute('date'));
            const dateB = new Date(b.getAttribute('date'));
            return isAsc ? dateA - dateB : dateB - dateA;
        });

        box.innerHTML = ''; 
        filtered.forEach(item => box.appendChild(item));
    }