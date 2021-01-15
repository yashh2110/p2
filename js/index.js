$(document).ready(function () {
  $("#add1").click(function () {
    $("#map2").hide();
    $("#map1").show();
    $("#add1").css("background", " #1a8cff");
    $("#add1").css("color", "#fff");
    $("#add2").css("background", "#fff");
    $("#add2").css("color", "#003366");
  });
  $("#add2").click(function () {
    $("#map1").hide();
    $("#map2").show();
    $("#add2").css("background", "#ffbb33");
    $("#add2").css("color", "#fff");
    $("#add1").css("background", "#fff");
    $("#add1").css("color", "#003366");
  });
});
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
var ml4 = {};
ml4.opacityIn = [0, 1];
ml4.scaleIn = [0.2, 1];
ml4.scaleOut = 3;
ml4.durationIn = 400;
ml4.durationOut = 300;
ml4.delay = 500;

anime.timeline({ loop: 1 })
  .add({
    targets: ".ml4 .letters-1",
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn,
  })
  .add({
    targets: ".ml4 .letters-1",
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay + 1000,
  })
  .add({
    targets: ".ml4 .letters-2",
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn,
  })
  .add({
    targets: ".ml4 .letters-2",
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay,
  })
  .add({
    targets: ".ml4 .letters-3",
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn,
  })
  .add({
    targets: ".ml4 .letters-3",
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay,
  })
  .add({
    targets: ".ml4",
    opacity: 0,
    duration: 500,
    delay: 500,
  });

var textWrapper = document.querySelector(".ml1 .letters");
textWrapper.innerHTML = textWrapper.textContent.replace( /\S/g,"<span class='letter'>$&</span>");
anime.timeline({ loop: 1 })
  .add({
    targets: ".ml1 .letter",
    scale: [0.3, 1],
    opacity: [0, 1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 600,
    delay: (el, i) => 70 * (i + 1) + 4500,
  })
  .add({
    targets: ".ml1 .line",
    scaleX: [0, 1],
    opacity: [0.5, 1],
    easing: "easeOutExpo",
    duration: 700,
    offset: "-=875",
    delay: (el, i, l) => 80 * (l - i),
  });
var textWrapper = document.querySelector(".ml11 .letters");
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime
  .timeline({ loop: 1 })
  .add({
    targets: ".ml11 .line",
    scaleY: [0, 1],
    opacity: [0.5, 1],
    easing: "easeOutExpo",
    duration: 700,
  })
  .add({
    targets: ".ml11 .line",
    translateX: [
      0,
      document.querySelector(".ml11 .letters").getBoundingClientRect().width +
        10,
    ],
    easing: "easeInOutExpo",
    duration: 800,
    delay: 100,
  })
  .add({
    targets: ".ml11 .letter",
    opacity: [0, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: "-=775",
    delay: (el, i) => 34 * (i + 1),
  })
  .add({
    targets: ".ml11",
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000,
  });
// .add({
//   targets: '.ml11.line',
//   opacity: 0,
//   duration: 1000,
//   easing: "easeOutExpo",
//   delay: 1000
// });
var textWrapper = document.querySelector(".ml14 .letters");
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g,"<span class='letter'>$&</span>");

anime.timeline({ loop: true })
  .add({
    targets: ".ml14 .line",
    scaleX: [0, 1],
    opacity: [0.5, 1],
    easing: "easeInOutExpo",
    duration: 900,
  })
  .add({
    targets: ".ml14 .letter",
    opacity: [0, 1],
    translateX: [40, 0],
    translateZ: 0,
    scaleX: [0.3, 1],
    easing: "easeOutExpo",
    duration: 800,
    offset: "-=600",
    delay: (el, i) => 150 + 25 * i,
  })
  .add({
    targets: ".ml14",
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000,
  });
