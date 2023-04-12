$(document).ready(function () {
  $("body").on("click", "#edit", async (e) =>
    update($(e.currentTarget).data("id"))
  );
  $("body").on("click", "#delete", (e) =>
    deletes($(e.currentTarget).data("id"))
  );
  $("body").on("click", "#view", (e) => view($(e.currentTarget).data("id")));

  $("#filesearch").keyup(function () {
    var value = $("#filesearch").val().toLowerCase();
    $("#linoMainTable tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });

  let sampleArray = [];
  getAllData();
  function getAllData() {
    sampleArray = [];
    $.get({
      url: "users/userssCrud.php",
      data: { getData: "getData" },
      success: function (data) {
        let newData = JSON.parse(data);
        let table = $("#linoMainTable");
        newData.forEach((roles, i) => {
          sampleArray.push(roles);
          let tableRow = $("<tr>", { id: newData.id });
          $("<td>", { class: "text-wrap", html: i + 1 }).appendTo(tableRow);
          $("<td>", { class: "text-wrap", html: roles.role_name }).appendTo(
            tableRow
          );

          // buttons action
          let tableData = $("<td>", { class: "text-wrap" });
          $("<button>", {
            class: "btn btn-success",
            "data-id": i,
            id: "view",
            html: "View",
          }).appendTo(tableData);
          $("<button>", {
            class: "btn btn-primary",
            "data-id": i,
            id: "edit",
            html: "Edit",
          }).appendTo(tableData);
          $("<button>", {
            class: "btn btn-danger",
            "data-id": roles.id,
            id: "delete",
            html: "Delete",
          }).appendTo(tableData);
          tableData.appendTo(tableRow);
          table.append(tableRow);
        });
      },
    });
  }

  $("#create-new").click(function () {
    $("#linoModalLabel").html("Add roles");
    $("#linoModal").modal("show");
    $("#method").attr("name", "addNew");
  });

  $("#btn-mul").click(function () {
    let formBodyData = $("#formBodyData").serializeArray();
    $.post({
      url: "users/userssCrud.php",
      data: formBodyData,
      success: function (data) {
        if (data) {
          $("#formBodyData").trigger("reset");
          $("#linoModal").modal("hide");
          $("#linoMainTable").empty();
          // sampleArray.empty();
          getAllData();
        }
      },
    });
  });

  function update(index) {
    $("#linoModal").modal("show");
    $("#linoModalLabel").html("Update roles");
    $("#method").attr("name", "update");
    let models = sampleArray[index];
    Object.keys(models).map((key) => {
      $(`[name='${key}']`).val(models[key]).attr("disabled", false);
    });

    $("#btn-mul").attr("id", "updateData");
    $("#updateData").attr("name", "update");
  }

  $("#updateData").click(function () {
    let formBodyData = $("#formBodyData").serializeArray();
    $.post({
      url: "users/usersCrud.php",
      data: formBodyData,
      success: function (data) {
        if (data) {
          $("#formBodyData").trigger("reset");
          $("#linoModal").modal("hide");
          $("#linoMainTable").empty();
          // sampleArray.length = 0;
          getAllData();
        }
      },
    });
  });

  function deletes(id) {
    $.post({
      url: "users/userssCrud.php",
      data: { id: id, delete: "delete" },
      success: function (data) {
        if (data) {
          $("#formBodyData").trigger("reset");
          $("#linoModal").modal("hide");
          $("#linoMainTable").empty();
          // sampleArray.length = 0;
          getAllData();
        }
      },
    });
  }

  function view(index) {
    $("#linoModal").modal("show");
    $("#linoModalLabel").html("View roles");
    let models = sampleArray[index];
    Object.keys(models).map((key) => {
      $(`[name='${key}']`).val(models[key]).attr("disabled", true);
    });
    $("#btn-mul").hide();
  }
});