"use strict";

let colorpicker
let defaultColor = "#303030";

window.addEventListener("load", ChangeColor, false);

function ChangeColor() {
  colorpicker = document.querySelector("#colorpicker");
  colorpicker.value = defaultColor;
  colorpicker.addEventListener("input", OnTouch, false);
  colorpicker.select();
}

function OnTouch(event) {
  let html = document.querySelector("html");
  let footer = document.querySelector("footer");
  let title = document.getElementById("title");
  let login = document.getElementById("login_link");
  if(html){
    footer.style.backgroundColor = event.target.value;
    title.style.color = event.target.value;
    login.style.color = event.target.value;
  }
}
