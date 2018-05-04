var allCategoryBtn = document.getElementsByClassName("categoryBtn");

pageLoad();

function pageLoad() {
  for (var categoryBtn in allCategoryBtn) {
    allCategoryBtn[categoryBtn].onclick = categorySelected;
  }
}

function categorySelected() {
  setDefault(allCategoryBtn.length);
  this.id = this.id + "Click";
}

function setDefault(length) {
  for (var i = 0; i < length; i++) {
    allCategoryBtn[i].id = "item" + (i + 6);
  }
}
