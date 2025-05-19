$(document).ready(function () {
  function loadData(kelas) {
    let url;

    switch (kelas) {
      case "A":
        url = "nilaiA.json";
        break;
      case "B":
        url = "nilaiB.json";
        break;
      default:
        url = "nilai.json";
    }

    $.getJSON(url, function (data) {
      displayData(data.nilai);
    }).fail(function () {
      alert("Gagal memuat data. Silakan coba lagi.");
    });
  }

  function displayData(data) {
    const tableBody = $("#mahasiswaTable tbody");
    tableBody.empty();

    if (data.length === 0) {
      tableBody.append(
        '<tr><td colspan="4">Tidak ada data mahasiswa</td></tr>'
      );
      return;
    }

    $.each(data, function (index, mahasiswa) {
      const row = $("<tr>");
      row.append($("<td>").text(mahasiswa.nrp));
      row.append($("<td>").text(mahasiswa.nama));
      row.append($("<td>").text(mahasiswa.kelas));
      row.append($("<td>").text(mahasiswa.nilaiakhir));

      if (mahasiswa.kelas === "A") {
        row.css("background-color", "#FFFFCC");
      } else if (mahasiswa.kelas === "B") {
        row.css("background-color", "#CCFFAA");
      }

      tableBody.append(row);
    });
  }

  $("#searchBtn").click(function () {
    const selectedClass = $(":radio[name='kelas']:checked").val();
    loadData(selectedClass);
  });
});
