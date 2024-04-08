let coll1 = document.getElementById("collapsible1");
let coll2 = document.getElementById("collapsible2");
let content1 = document.getElementById("contentCollapsible1");
let content2 = document.getElementById("contentCollapsible2");

coll1.addEventListener("click", function () {
  toggleContent(content1);
});

coll2.addEventListener("click", function () {
  toggleContent(content2);
});

function toggleContent(content) {
  if (content.classList.contains("hidden")) {
    content.classList.remove("hidden");
  } else {
    content.classList.add("hidden");
  }
}
