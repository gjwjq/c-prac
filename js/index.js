const num = $('.tableNum') 
const left = $('.leftNum')
const right = $('.rightNum')
const box = $('.slideWrap') 
let now = 1

right.onclick = () => {
    if(now > 4) return
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