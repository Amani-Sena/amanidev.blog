const c=document.querySelectorAll(".category-link");c.forEach(e=>{e.addEventListener("click",s=>{c.forEach(t=>t.classList.remove("selected")),e.classList.add("selected")})});
