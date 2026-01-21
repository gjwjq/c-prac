const num = $(".tableNum");
const allNum = $(".allTableNum");
const left = $(".leftNum");
const right = $(".rightNum");
const box = $(".slideWrap");
let now = 1;

let nowFilter = "all";
let isAsc = false;

const originals = [...box.querySelectorAll("ul")];

right.onclick = () => {
  const currentCount = box.querySelectorAll("ul").length;

  // 2. 갈 수 있는 최대 페이지 계산 (나누기 6하고 올림)
  // (예: 5개면 1페이지, 13개면 3페이지)
  const maxPage = Math.ceil(currentCount / 6) || 1;
  // 3. 마지막 페이지면 멈춰!
  if (now >= maxPage) return;
  now++;
  num.textContent = now;
  box.style.transform = `translateY(${(now - 1) * -300}px)`;
};

left.onclick = () => {
  if (now < 2) return;
  now--;
  num.textContent = now;
  box.style.transform = `translateY(${(now - 1) * -300}px)`;
};

function draw() {
  const filtered = originals.filter((item) => {
    if (nowFilter === "all") return true;
    return item.getAttribute("type") === nowFilter;
  });

  filtered.sort((a, b) => {
    const dateA = new Date(a.getAttribute("date"));
    const dateB = new Date(b.getAttribute("date"));
    return isAsc ? dateA - dateB : dateB - dateA;
  });

  box.innerHTML = "";
  filtered.forEach((item) => box.appendChild(item));

  const maxPage = Math.ceil(filtered.length / 6) || 1; 
  allNum.textContent = maxPage;

  box.style.transform = "translateY(0px)";
  now = 1;
  num.textContent = 1;
}
