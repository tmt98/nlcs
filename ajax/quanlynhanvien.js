// Hiển thị danh sách nhân viên
function loadDanhSachNhanVien() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ajax").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "danhsachnhanvien.php", true);
    xhttp.send();
}
// Hiển thị thêm nhân viên
function loadThemNhanVien() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ajax").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "themnhanvien.php", true);
    xhttp.send();
  }
  // Hiển thị thêm sản phẩm
function loadCapnhatnhanvien() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ajax").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "capnhatnhanvien.php", true);
    xhttp.send();
  }
  // Load sửa trong cập nhật nhân viên
function loadSuaNV(manv) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("reload").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "suanhanvien.php?manv=" + manv, true);
    xhttp.send();
  }