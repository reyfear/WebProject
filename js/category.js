pageLoad();

function pageLoad() {
  var allCategoryBtn = document.getElementsByClassName("categoryBtn");

  for (var categoryBtn in allCategoryBtn) {
    allCategoryBtn[categoryBtn].onclick = categorySelected;
  }
}

function categorySelected() {
  this.id = this.id + "Click";
}
