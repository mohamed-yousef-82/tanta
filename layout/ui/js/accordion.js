// Create HTML Structure
// create_div=document.createElement("div")
// create_div.className="accordion";
// create_title=document.createElement("button")
// create_title.className="title";
// create_content=document.createElement("div")
// create_content.className="content";
// create_div.appendChild(create_title).innerHTML = "<span>this is the title</span>";
// create_div.appendChild(create_content).innerHTML = "<span>content</span>";
// for(r=0;r<3;r++){
// document.body.appendChild(create_div.cloneNode(true));
// }
// --- Definition Variables --- //
accordion = document.getElementsByClassName('accordion');
title = document.getElementsByClassName('accordion-title');
content = document.getElementsByClassName('accordion-content');
// --- Loop To Set Primary View --- //
for (i=0;i<accordion.length;i++){
content[i].classList.add("accordion-hide");
content[0].classList.remove("accordion-hide");
if (title[i].nextElementSibling.classList.contains("accordion-hide")==false) {
title[i].classList.add("accordion-active");
}
title[i].addEventListener('click', accordion_click);
}
// --- Function Run When Click --- //
function accordion_click(){
for (var t = 0; t < content.length; t++)
{
this.addEventListener("mouseenter", clearInterval(auto_accordion));
// --- Chick If Div Hide Or View --- //
if (this.nextElementSibling.classList.contains("accordion-hide")==true) {
content[t].classList.add("accordion-hide");
this.nextElementSibling.classList.remove("accordion-hide");
title[t].classList.remove("accordion-active");
this.classList.add("accordion-active");
} else {
content[t].classList.add("accordion-hide");
this.nextElementSibling.classList.add("accordion-hide");
title[t].classList.remove("accordion-active");
this.classList.remove("accordion-active");
}
}
}
// --- Accordion Auto Animate Function--- //
function accordionAuto(){
for (var t = 0; t < accordion.length; t++)
{
// --- Chick If Div Hide Or View --- //
if (content[t].classList.contains("accordion-hide")==false) {
if(t==accordion.length-1){
t=0;
content[accordion.length-1].classList.add("accordion-hide");
content[t].classList.remove("accordion-hide");
title[accordion.length-1].classList.remove("accordion-active");
title[t].classList.add("accordion-active");
}else{
content[t+1].classList.remove("accordion-hide");
content[t].classList.add("accordion-hide");
title[t].classList.remove("accordion-active");
title[t+1].classList.add("accordion-active");
}
break;
}
}
}
auto_accordion = setInterval(accordionAuto,5000);
