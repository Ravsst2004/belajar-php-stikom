let coll = document.getElementById("collapsible");
let content = document.getElementById("contentCollapsible");
coll.addEventListener("click", function () {
  if (content.classList.contains("hidden")) {
    content.classList.remove("hidden");
  } else {
    content.classList.add("hidden");
  }
});
