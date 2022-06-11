var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('cari-btn');
var container = document.getElementById('content');
// buat object ajax
var xhr = new XMLHttpRequest();

// cek kesiapan ajax 
xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
        container.innerHTML = xhr.responseText;
    }
    // menambah event ketika keyword ditulis
    keyword.addEventListener('keyup', function () {

        // eksekusi ajax
        xhr.open('GET', 'ajax/result.php?keyword=' + keyword.value, true);
        xhr.send();

    });
}
