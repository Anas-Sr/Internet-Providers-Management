function menu() {
  document.body.classList.toggle("menu-shown");
}

function optionshow() {
  document.getElementById("option").style.display = "block";
  document.getElementById("active").style.display = "none";
  document.getElementById("active2").style.display = "flex";
  document.getElementById("logout").style.display = "none";
}

function optionhide() {
  document.getElementById("option").style.display = "none";
  document.getElementById("active").style.display = "flex";
  document.getElementById("active2").style.display = "none";
  document.getElementById("logout").style.display = "block";
}
//email  password  price  

// تحديد الأرقام المدخلة فقط مع التاكد من عدد الخانات الرقمية للجوال
(function setPhoneFieldPattern() {
  const phoneFields = Array.from(document.querySelectorAll(".phone-field"));
  
  phoneFields.forEach(phoneField => {
    phoneField.dataset["previousValue"] = phoneField.value;

    phoneField.addEventListener("change", e => {
      const value = e.target.value;
      if (value.match(/\d{10}/) != value) {
        e.target.value = phoneField.dataset["previousValue"];
        return;
      }
      
      phoneField.dataset["previousValue"] = e.target.value;
    });
  });
})();

function buttonClickAnchor(event) {
  event
    .currentTarget
    .querySelector('a')
    .click();
}

Array.from(
  document.querySelectorAll("button, .box")
).forEach(button => 
  button.addEventListener("click", buttonClickAnchor)
);

Array.from(
  document.querySelectorAll(".changeable-input")
).forEach(input =>
  input.addEventListener("change", _e => input.style.backgroundColor = "chartreuse")
);