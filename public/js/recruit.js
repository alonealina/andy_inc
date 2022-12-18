// 以下情報バー切り替えについて
let recruit1 = document.querySelector(".recruit1");
let recruit2 = document.querySelector(".recruit2");
let recruit3 = document.querySelector(".recruit3");
let recruit4 = document.querySelector(".recruit4");
let recruit5 = document.querySelector(".recruit5");
let recruit6 = document.querySelector(".recruit6");
let recruit1_detail = document.getElementById("recruit1");
let recruit2_detail = document.getElementById("recruit2");
let recruit3_detail = document.getElementById("recruit3");
let recruit4_detail = document.getElementById("recruit4");
let recruit5_detail = document.getElementById("recruit5");
let recruit6_detail = document.getElementById("recruit6");

recruit1.addEventListener("click", function () {

    recruit1_detail.hidden = false;
    recruit2_detail.hidden = true;
    recruit3_detail.hidden = true;
    recruit4_detail.hidden = true;
    recruit5_detail.hidden = true;
    recruit6_detail.hidden = true;
});

recruit2.addEventListener("click", function () {

    recruit1_detail.hidden = true;
    recruit2_detail.hidden = false;
    recruit3_detail.hidden = true;
    recruit4_detail.hidden = true;
    recruit5_detail.hidden = true;
    recruit6_detail.hidden = true;
});

recruit3.addEventListener("click", function () {

    recruit1_detail.hidden = true;
    recruit2_detail.hidden = true;
    recruit3_detail.hidden = false;
    recruit4_detail.hidden = true;
    recruit5_detail.hidden = true;
    recruit6_detail.hidden = true;
});

recruit4.addEventListener("click", function () {

    recruit1_detail.hidden = true;
    recruit2_detail.hidden = true;
    recruit3_detail.hidden = true;
    recruit4_detail.hidden = false;
    recruit5_detail.hidden = true;
    recruit6_detail.hidden = true;
});

recruit5.addEventListener("click", function () {

    recruit1_detail.hidden = true;
    recruit2_detail.hidden = true;
    recruit3_detail.hidden = true;
    recruit4_detail.hidden = true;
    recruit5_detail.hidden = false;
    recruit6_detail.hidden = true;
});

recruit6.addEventListener("click", function () {

    recruit1_detail.hidden = true;
    recruit2_detail.hidden = true;
    recruit3_detail.hidden = true;
    recruit4_detail.hidden = true;
    recruit5_detail.hidden = true;
    recruit6_detail.hidden = false;
});

