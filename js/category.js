var allCategoryBtn = document.getElementsByClassName("categoryBtn");
var currentCategory = 0;

pageLoad();

function pageLoad() {
  for (var categoryBtn in allCategoryBtn) {
    allCategoryBtn[categoryBtn].onclick = categorySelected;
  }
}

function categorySelected() {
  setDefault(allCategoryBtn.length);
  currentCategory = getNumberOfBtn(this.id);
  this.id = this.id + "Click";
}

function setDefault(length) {
  for (var i = 0; i < length; i++) {
    allCategoryBtn[i].id = "item" + (i + 6);
  }
}

function getNumberOfBtn(id) {
  return (id).replace('item', '');
}
