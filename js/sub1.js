const num = e => e.className.replace(/[^0-9]/g, "")
const all = [...document.querySelectorAll('[class*="motto"]')]

all.forEach(e => {
  e.addEventListener('mouseover', () => {
    all.forEach(e2 => {
      e2.style.backgroundImage = `url(../images/${e.className}.png)`

      const des = document.querySelector(`.des${num(e)}`)
      des.style.opacity = 1
      if (e !== e2) {
        const title = document.querySelector(`.mtitle${num(e2)}`)
        title.style.opacity = 0
      }
    })
  })
  e.addEventListener('mouseleave', () => {
    all.forEach(e2 => {
      e2.style.backgroundImage = `url(../images/${e2.className}.png)`

      const des = document.querySelector(`.des${num(e2)}`)
      des.style.opacity = 0
        const title = document.querySelector(`.mtitle${num(e2)}`)
        title.style.opacity = 1
    })
  })
})