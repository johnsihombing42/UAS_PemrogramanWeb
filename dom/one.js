var items = [
  [
    "001",
    "ASUS TUF DASH F15 FX516PM",
    "17.499.000",
    "Processor : 	Intel® Core™ i5-11300H",
    "asus.png",
  ],
  [
    "002",
    "Laptop Lenovo Ideapad Slim 5",
    "15.699.000",
    "Processor : Intel Core i7-1165G7",
    "lenovo.jpg",
  ],
  [
    "003",
    "MSI GF63 Thin 10SCS",
    "14.000.000",
    "Processor : Intel® Core™ i7-10750H",
    "msi.png",
  ],
  [
    "004",
    "ACER SWIFT 3 SF314-43",
    "14.499.000",
    "Processor : AMD Ryzen™ 7 5700U",
    "acer.jpg",
  ],
  [
    "005",
    "Apple Macbook Air 13inch M1",
    "16.499.000",
    "Processor : Apple M1 Chip (CPU 8-Core, GPU 7-Core)",
    "apple.jpg",
  ],
];
function dataRow(items) {
  var has = "";
  for (var i = 0; i < items.length; i++) {
    has +=
      `      <div class="col col-lg-4 pt-2 pt-1">
    <div class="card">
      <div class="card-body">
        <img class="card-img-top" src="img/` +
      items[i][4] +
      `"height="250px" alt="Card image cap">
        <h5 class="card-title" id="itemName">` +
      items[i][1] +
      `</h5>
        <p class="card-text" id="itemDesc">` +
      items[i][3] +
      `</p>
        <p class="card-text">Rp  ` +
      items[i][2] +
      `</p>
        <a href="#" class='btn btn-primary' id='addCart' onclick='onClick()'>Tambahkan ke keranjang</a>
      </div>
    </div>
  </div>`;
  }
  return has;
}

var formItem = document.getElementById("formItem");
var searchItem = document.getElementById("keyword");
formItem.addEventListener("submit", function (e) {
  e.preventDefault();
  let bigItems = [];
  for (let i = 0; i < items.length; i++) {
    let c = 0;
    for (let j = 0; j < items[i].length; j++) {
      if (
        items[i][j]
          .toString()
          .toLowerCase()
          .indexOf(searchItem.value.toLowerCase()) != -1
      )
        c++;
    }
    if (c > 0) bigItems.push(items[i]);
  }

  document.getElementById("listBarang").innerHTML = dataRow(bigItems);
});
document.getElementById("listBarang").innerHTML = dataRow(items);

var clicks = 0;
function onClick() {
  clicks += 1;
  document.getElementById("total").innerHTML = clicks;
}
