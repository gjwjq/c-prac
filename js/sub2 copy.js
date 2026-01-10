//축약 변수
const $ = e => document.querySelector(e)
const $$ = e => [...document.querySelectorAll(e)]

//비디오

const video = $('video')
const controls =$('.controls')
const ctrls = $$('[class*="ctrl"]')
let isAuto = localStorage.getItem('auto') === 'true'

if(isAuto) {
  video.muted = true
  video.play()
}

const ctrl = {
ctrl01: () => {video.play()},
ctrl02: () => {video.pause()},
ctrl03: () => {video.pause(); video.currentTime = 0},
ctrl04: () => {video.currentTime -= 10},
ctrl05: () => {video.currentTime += 10},
ctrl06: () => {video.playbackRate = Math.max(0.1, video.playbackRate - 0.1)},
ctrl07: () => {video.playbackRate += 0.1},
ctrl08: () => {video.playbackRate = 1},
ctrl09: () => {
  isAuto = !isAuto
  localStorage.setItem('auto', isAuto)
  alert(`자동재생 : ${isAuto ? '켜짐' : '꺼짐'}. 다음 로드시 적용.`)
},
ctrl10: () => {
  video.loop = !video.loop
  alert(`반복 : ${video.loop ? '켜짐' : '꺼짐'}.`)
},
ctrl11: () => {
  controls.style.display = controls.style.display === 'none' ? 'flex' : 'none'
},
}

ctrls.forEach(e => {
  e.onclick = () => {
    if(ctrl[e.className]) {
      ctrl[e.className]()
    }
  }
})

//비회원주문

const dialog = $('dialog')
const userId = $('.userId')
const dragCart = $('.dragCart')
const cartCon = $('.cart')
const costNum = $('.costNum')
const category = $$('.popCategory > div')

let data = null
let cate = "건강식품'
let userName = ""
let cost = 0

function gen() {
  const text = '1246ruhjkdhfghwoirhi'
  if(userId) userId.textContent = ""
  userName = ""
  for(let i = 0; i<6;i++) {
    userName += text[Math.floor(Math.random() * text.length)]
  }
  if(userId) userId.textContent = userName
}

gen()

async function calc() {
  if(!data) data = await fetch('../data/data.json').then(e => e.json())
    cartCon.innerHTML = ""
  const list = data['product'][cate]

  Object.keys(list).forEach(key => {
    const item = list[key]

    cartCon.innerHTML += `
       <div class="item" draggable="true" data-id="${cate}-${key}">
      <div class="pro-img">
        <img src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/${cate}/${key}.PNG" alt="${cate}-${key}" draggable="false">
      </div>
      <div class="item-content">
        <div class="item-name">${item.title}</div>
        <div class="item-price"> 가격 : <span class="price">${item.price}</span></div>
      </div>
    </div>
    `
  })
  $$('.dragCart .item').forEach(e => {
    const id = e.dataset.id
    const origin = cartCon.querySelector(`.item[data-id="${id}"]`)
    if(origin) origin.style.opacity = 0.5
  })
  $$('.cartCon .item').forEach(e => {
    e.ondragstart = e2 => {
      e2.dataTransfer.setData('id', e.dataset.id)
      e2.dataTransfer.setData('html', e.outerHTML)
    }
  })
}

function calc() {
}